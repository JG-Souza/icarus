<?php

use Jgsouza\Icarus\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])
    ->name('login.form');
    Route::post('/login', [AuthController::class, 'login'])
    ->name('login');
    Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');
    Route::get('/dashboard', [AuthController::class, 'index'])
    ->middleware('auth')
    ->name('dashboard');
});