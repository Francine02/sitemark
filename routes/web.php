<?php

use App\Http\Controllers\AuthController;
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
    Route::get('/home', function () {
        return view('pages.home.index');
    })->name('home');

    Route::prefix('/profile')->group(function () {
        Route::get('/', [UserController::class, 'showProfile'])->name('profile');
        Route::put('/update', [UserController::class, 'update'])->name('profile.update');
    });

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
