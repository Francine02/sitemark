<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function () {
    Route::get('/register', [UserController::class, 'showRegisterForm'])->name('register');
    Route::get('/register', [UserController::class, 'store'])->name('register');

    Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
    Route::get('/login', [UserController::class, 'login'])->name('login');
});
