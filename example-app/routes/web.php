<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;


    Route::get('/', [HomeController::class, 'showMainPage']);
    Route::get('cart', [CartController::class, 'showCartTable']);
    Route::get('add-to-cart/{id}', [CartController::class, 'addToCart']);
    Route::get('clear-cart', [CartController::class, 'clearCart']);
    Route::delete('remove-from-cart', [CartController::class, 'removeCartItem']);

Route::group(['namespace' => 'App\Http\Controllers'], function() {
    /**
     * Home Routes
     */
    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
    });

});


