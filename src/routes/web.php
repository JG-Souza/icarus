<?php

use Jgsouza\Icarus\Http\Controllers\Web\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm']);
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');
    Route::get('/dashboard', [AuthController::class, 'index'])
    ->middleware('auth');
});