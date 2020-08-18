#!/usr/bin/env bash
set -e 
git pull origin master
docker-compose build --force-rm
docker-compose up -d 
sleep 5

while ! nc -z localhost 9001; do   
  sleep 1 # wait for 1 second
  echo "Waiting App to launch on 9001..."
done

echo "App launched"


while ! nc -z localhost 3307; do   
  sleep 1 # wait for 1 second
  echo "Waiting DB to launch on 3307..."
done

echo "DB launched"
docker-compose exec app php artisan migrate