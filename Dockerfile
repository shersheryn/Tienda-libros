FROM php:7.4-fpm


# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libonig-dev \
    libjpeg62-turbo-dev \
    libzip-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
# RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
# RUN docker-php-ext-install gd

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN curl -sL https://deb.nodesource.com/setup_14.x | bash -

RUN apt-get install -y nodejs

# Copy composer.lock and composer.json
COPY composer.lock composer.json /var/www/

RUN composer install --no-scripts --no-autoloader

# Add user for laravel application
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

COPY package.json package-lock.json /var/www/

RUN npm install

# Copy existing application directory contents
COPY . /var/www
RUN mv /var/www/.env.docker /var/www/.env
RUN cat /var/www/.env

RUN composer dump-autoload
# RUN composer run-script post-install-cmd

RUN npm run production

#test

# Copy existing application directory permissions
COPY --chown=www:www . /var/www

# Change current user to www
RUN mv /var/www/.env.docker /var/www/.env

USER www

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]