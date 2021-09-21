<?php

use App\Http\Controllers\Website;

Route::prefix('website')->group(function () {
    Route::name('website.')->group(function() {
        Route::resource('/home', Website\HomeController::class);
        Route::resource('/products', Website\ProductController::class);
        Route::resource('/cart', Website\ShoppingController::class);
        Route::get('/cart/delete/{id}', 'App\Http\Controllers\Website\ShoppingController@destroy')->name('cart.delete');
        Route::get('/cart/decrement/{id}/{qty}', 'App\Http\Controllers\Website\ShoppingController@cart_decrement')->name('cart.decr');
        Route::get('/cart/increment/{id}/{qty}', 'App\Http\Controllers\Website\ShoppingController@cart_increment')->name('cart.incr');
        Route::get('/checkout', 'App\Http\Controllers\Website\CheckoutController@index')->name('checkout.index');
        Route::post('/checkout', 'App\Http\Controllers\Website\CheckoutController@store')->name('checkout.store');
    });
});
