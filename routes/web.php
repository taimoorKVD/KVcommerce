<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::group( ['middleware' => ['auth'] ], function() {
        
        // *** DASHBOARD ROUTES***
        Route::resource('/dashboard', Admin\DashboardController::class);

        // *** PRODUCTS ROUTES***
        Route::resource('/products', Admin\ProductController::class);
    });
});

require __DIR__.'/auth.php';