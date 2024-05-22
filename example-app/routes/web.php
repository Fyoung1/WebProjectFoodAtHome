<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\FavoritesController;
use App\Http\Controllers\UserController;


    Route::get('/', [HomeController::class, 'showMainPage']);
    Route::get('/MilkProductPage', [HomeController::class, 'showMilkProduct']);
    Route::get('/VegetablesProductPage', [HomeController::class, 'showVegetablesProduct']);
    Route::get('/FruitsandBerriesProductPage', [HomeController::class, 'showFruitsandBerriesProduct']);
    Route::get('/MeatAndBirdsProductPage', [HomeController::class, 'showMeatAndBirdsProduct']);
    Route::get('/CandyProductPage', [HomeController::class, 'showCandyProduct']);
    Route::get('/FishProductPage', [HomeController::class, 'showFishProduct']);
    Route::get('/FreezingProductPage', [HomeController::class, 'showFreezingProduct']);
    Route::get('/WaterAndDrinksProductPage', [HomeController::class, 'showWaterAndDrinksProduct']);
    Route::get('/SausagesProductPage', [HomeController::class, 'showSausagesProduct']);
    Route::get('/BreadProductPage', [HomeController::class, 'showBreadProduct']);
    Route::get('/CheeseProductPage', [HomeController::class, 'showCheeseProduct']);
    Route::get('/PastaAndCerealsProductPage', [HomeController::class, 'showPastaAndCerealsProduct']);
    Route::get('cart', [CartController::class, 'showCartTable']);
    Route::get('add-to-cart/{id}', [CartController::class, 'addToCart']);
    Route::get('clear-cart', [CartController::class, 'clearCart']);
    Route::get('checkout', [CartController::class, 'checkout']);
    Route::get('add-to-base-order-guest', [OrderController::class, 'addToBaseOrderGuest']);
    Route::get('add-to-base-order-auth', [OrderController::class, 'addToBaseOrderAuth']);
    Route::get('add-favorites/{id}', [FavoritesController::class, 'addFavorites']);
    Route::get('/favorites', [FavoritesController::class, 'showFavorites']);
    Route::get('/user-data', [UserController::class, 'showFavorites']);
    Route::get('/order-history', [OrderController::class, 'showOrderHistory']);
    Route::get('order-history/{id}', [OrderController::class, 'showOrderHistoryID']);
    Route::get('/user-data-person', [UserController::class, 'showUsersData']);






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


