<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class,'login']);

# orders
Route::post('/orders', [OrderController::class,'store']);
Route::get('/orders', [OrderController::class,'index']);
Route::get('/orders/{id}', [OrderController::class,'show']);

# products
Route::get('/products', [ProductController::class,'index']);

# review
Route::post('/reviews', [ReviewController::class,'store']);
Route::get('/reviews', [ReviewController::class,'index']);