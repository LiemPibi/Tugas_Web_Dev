<?php

use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return 'Home page is working!';
// });

Route::prefix('products')->controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('products');
    Route::get('/create', 'create')->name('products.create');
    Route::get('/edit/{id}', 'edit')->name('products.edit');
    Route::post('/store', 'store')->name('products.store');
    Route::post('/update/{id}', 'update')->name('products.update');
    Route::get('/show/{id}', 'show')->name('products.show');
});

