<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'index']);
Route::post('/add-product', [ProductController::class, 'store']);
Route::get('/product-images/{id}', [ProductController::class, 'images'])->name('product.images');