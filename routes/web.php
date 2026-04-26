<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});

Route::prefix('auth')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'store'])->name('register');

    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [LinkController::class, 'index'])->name('home');

    Route::prefix('/profile')->group(function () {
        Route::get('/', [UserController::class, 'showProfile'])->name('profile');
        Route::put('/update', [UserController::class, 'update'])->name('profile.update');
    });

    Route::prefix('/links')->group(function () {
        Route::post('/store', [LinkController::class, 'store'])->name('links.store');
        Route::put('/update/{id}', [LinkController::class, 'update'])->name('links.update');
        Route::put('/reorder', [LinkController::class, 'updatePosition'])->name('links.reorder');
        Route::delete('/delete/{id}', [LinkController::class, 'destroy'])->name('links.delete');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
