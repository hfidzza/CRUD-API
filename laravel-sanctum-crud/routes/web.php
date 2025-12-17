<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\AuthController;
use App\Http\Controllers\Web\ProductWebController;
use App\Http\Controllers\Web\CategoryWebController;
use App\Http\Controllers\Web\CustomerWebController;

// Redirect root ke login
Route::get('/', function () {
    return redirect('/login');
});

// FORM LOGIN WEB
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// ROUTE YANG MEMBUTUHKAN LOGIN
Route::middleware('auth')->group(function () {

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    });

    Route::post('/logout', [AuthController::class, 'logout']);

    // CRUD Produk
    Route::get('/produk', [ProductWebController::class, 'index']);
    Route::get('/produk/create', [ProductWebController::class, 'create']);
    Route::post('/produk', [ProductWebController::class, 'store']);
    Route::get('/produk/edit/{id}', [ProductWebController::class, 'edit']);
    Route::post('/produk/update/{id}', [ProductWebController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProductWebController::class, 'destroy']);

    // CRUD Kategori
    Route::get('/kategori', [CategoryWebController::class, 'index']);
    Route::get('/kategori/create', [CategoryWebController::class, 'create']);
    Route::post('/kategori', [CategoryWebController::class, 'store']);
    Route::get('/kategori/edit/{id}', [CategoryWebController::class, 'edit']);
    Route::post('/kategori/update/{id}', [CategoryWebController::class, 'update']);
    Route::get('/kategori/delete/{id}', [CategoryWebController::class, 'destroy']);

    // CRUD Pelanggan
    Route::get('/pelanggan', [CustomerWebController::class, 'index']);
    Route::get('/pelanggan/create', [CustomerWebController::class, 'create']);
    Route::post('/pelanggan', [CustomerWebController::class, 'store']);
    Route::get('/pelanggan/edit/{id}', [CustomerWebController::class, 'edit']);
    Route::post('/pelanggan/update/{id}', [CustomerWebController::class, 'update']);
    Route::get('/pelanggan/delete/{id}', [CustomerWebController::class, 'destroy']);
});
