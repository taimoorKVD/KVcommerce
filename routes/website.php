<?php

use App\Http\Controllers\Website;

Route::prefix('website')->group(function () {
    Route::resource('/home', Website\HomeController::class);
    Route::resource('/products', Website\ProductController::class);
    Route::resource('/cart', Website\ShoppingController::class);
});
