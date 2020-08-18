<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|


Route::namespace('User')
    ->middleware(['api', 'return-json']) // Use our JSON Middleware
    ->group(function () {
        Route::get('user/profile', 'UserController@profile');
        Route::get('user/calls', 'UserController@calls');
    );


*/


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', 'Api\ShopController@list');

Route::prefix('cart')->group( function() {
    Route::post('/', 'Api\CartController@post')->name('post.cart');
    Route::post('/add-to-cart', 'Api\CartController@addToCart');
    Route::get('/', 'Api\CartController@index');
});

Route::prefix('checkout')->middleware(['api', 'return-json'])->group( function() {
    Route::post('/', 'Api\CheckoutController@sendPayment')->name('post.checkout');
    Route::post('/success', 'Api\CheckoutController@success')->name('checkout.success');
    Route::get('/success', function () {
        return view('shop.order-success');
    });
});

Route::get('/orders', 'Api\OrderController@list')->name('orders')->middleware(['api', 'return-json']);
Route::get('/order/{id}', 'Api\OrderController@getOrder')->name('order')->middleware(['api', 'return-json']);
Route::put('/order/status', 'Api\OrderController@changeOrderStatus')->name('change.order.status')->middleware(['api', 'return-json']);

Route::prefix('shop')->group( function() {
    Route::get('/', 'Api\ShopController@list')->name('shop');
    Route::get('/category/{id}', 'Api\ShopController@get_child_catalogs');
    Route::get('/{id}', 'Api\ShopController@get_product')->name('product');
});

Route::post('search', 'Api\SearchController@search')->name('search');

Route::post('filter', 'Api\PropertyController@filter');

Auth::routes();


Route::prefix('admin')->group( function() {
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/logout', 'Auth\AdminLoginController@adminLogout')->name('admin.logout');

    //Admin password reset
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

    //Admin categories management
    Route::get('/categories', 'AdminCategoriesController@list')->name('admin.categories');
    Route::delete('/categories/{id}', 'AdminCategoriesController@delete');
    Route::get('/add-category', 'AdminCategoriesController@showEditForm')->name('add-category');
    Route::get('/edit-category/{id}', 'AdminCategoriesController@showEditForm');
    Route::post('/categories', 'AdminCategoriesController@update');

    //Admin products management
    Route::get('/products', 'AdminProductsController@list')->name('admin.products');
    Route::delete('/products', 'AdminProductsController@delete')->name('product.delete');
    Route::get('/add-product', 'AdminProductsController@showEditForm')->name('add-product');
    Route::get('/edit-product/{id}', 'AdminProductsController@showEditForm');
    Route::post('/products', 'AdminProductsController@update');
    Route::get('/products/category/{id}', 'AdminProductsController@categoryFilter');

    //Admin add and remove products properties
    Route::delete('/product/{product_id}/property', 'AdminProductsController@deleteProperty');
    Route::get('/product/{product_id}/properties', 'AdminProductsController@getProperties');

    Route::get('/products/property-types', 'AdminPropertiesController@getProperties');
    Route::get('/products/property/{id}/values', 'AdminPropertiesController@getPropertyValues');
    Route::post('/product/property-type', 'AdminPropertiesController@addPropertyToProduct');
    Route::post('/properties', 'AdminPropertiesController@createProperty');

    Route::get('/users', 'AdminUsersController@list')->name('admin.users');
    Route::get('/edit-user/{id}', 'AdminUsersController@showEditForm');
    Route::put('/user', 'AdminUsersController@update')->name('user.update');
    Route::post('/users', 'AdminUsersController@search')->name('users.search');
    Route::put('/users/', 'AdminUsersController@deleteCart')->name('cart.delete');

    Route::get('/orders', 'AdminOrdersController@list')->name('admin.orders');
    Route::get('/show-order/{id}', 'AdminOrdersController@showEditForm');
    Route::put('/order', 'AdminOrdersController@update')->name('order.update');
    Route::post('/orders', 'AdminOrdersController@search')->name('order.search');

    Route::get('/shipping-methods', 'AdminShippingMethodsController@list')->name('admin.shipping-methods');
    Route::put('/shipping-method', 'AdminShippingMethodsController@changeStatus');
});


Route::get('/test', 'Api\TestController@test');
