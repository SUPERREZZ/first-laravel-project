<?php
//routes

use App\Http\Controllers\authController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/login', [authController::class, 'index'])->name('login');
Route::post('/login', [authController::class, 'login']);
Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/category', [CategoryController::class, 'index'])->name('category.index');

    Route::get('/category/create', [CategoryController::class, 'create']);

    Route::get('/category/edit{category}', [CategoryController::class, 'edit'])->name('category.edit');

    Route::post('/category', [CategoryController::class, 'store'])->name('category.store');

    Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');

    Route::get('/products', function () {
        return view('product.index');
    });

    Route::get('/products/create', function () {
        return view('product.create');
    });

    Route::get('/products/edit', function () {
        return view('product.edit');
    });
    Route::get('/users', function () {
        return view('users.index');
    });

    Route::get('/users/create', function () {
        return view('users.create');
    });

    Route::get('/users/edit', function () {
        return view('users.edit');
    });
});