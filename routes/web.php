<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\LogMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/{test}', [TestController::class, 'index'])->name('test')->whereNumber('test');
Route::get('/{test}/product/{product}', [ProductController::class, 'index'])->name('product')->whereNumber(['test', 'product']);

Route::middleware('guest')->group(function () {
    Route::resource('/register', RegisterController::class)->only(['index', 'store']);
    Route::resource('/login', LoginController::class)->only(['index', 'store']);
});

Route::middleware('auth')->prefix('user')->as('user.')->group(function () {
    Route::get('/', [UserController::class, 'index'])->name('index');
    Route::get('/edit', [UserController::class, 'edit'])->name('edit');
    Route::put('/', [UserController::class, 'update'])->name('update');

    Route::resource('/tests', TestsController::class)->except('update', 'destroy');

    Route::put('/tests/{test}', [TestController::class, 'update'])->name('test.update');
    Route::delete('/tests/{test}', [TestController::class, 'destroy'])->name('test.destroy');
    Route::resource('/tests/{test}', TestController::class)->only([
        'create', 'store',
    ]);

    Route::resource('/tests/{test}/product/{product}', ProductController::class)->only([
        'index', 'create', 'store',
    ]);
    Route::put('/tests/{test}/product/{product}', [ProductController::class, 'update'])->name('test.product.update');
    Route::get('/tests/{test}/product/{product}/edit', [ProductController::class, 'edit'])->name('test.product.edit');
    Route::delete('/tests/{test}/product/{product}', [ProductController::class, 'destroy'])->name('test.product.destroy');
});
