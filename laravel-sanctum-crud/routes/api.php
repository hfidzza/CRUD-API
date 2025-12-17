<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CustomerController;

// Login
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {

    // PRODUK
    Route::post('/produk/create', [ProductController::class, 'store']);
    Route::get('/produk/read', [ProductController::class, 'index']);
    Route::put('/produk/update/{id}', [ProductController::class, 'update']);
    Route::delete('/produk/delete/{id}', [ProductController::class, 'destroy']);

    // KATEGORI
    Route::post('/kategori/create', [CategoryController::class, 'store']);
    Route::get('/kategori/read', [CategoryController::class, 'index']);
    Route::put('/kategori/update/{id}', [CategoryController::class, 'update']);
    Route::delete('/kategori/delete/{id}', [CategoryController::class, 'destroy']);

    // PELANGGAN
    Route::post('/pelanggan/create', [CustomerController::class, 'store']);
    Route::get('/pelanggan/read', [CustomerController::class, 'index']);
    Route::put('/pelanggan/update/{id}', [CustomerController::class, 'update']);
    Route::delete('/pelanggan/delete/{id}', [CustomerController::class, 'destroy']);
});