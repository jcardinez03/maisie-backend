<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class,'login']);

# orders
Route::post('/orders', [OrderController::class,'store']);
Route::get('/orders', [OrderController::class,'index']);
Route::get('/orders/{id}', [OrderController::class,'show']);

# products
Route::get('/products', [ProductController::class,'index']);
