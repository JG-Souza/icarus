<?php

use Illuminate\Support\Facades\Route;
use Jgsouza\Icarus\Http\Controllers\LoginController;

Route::get('login', [LoginController::class, 'create'])
->name('login');

Route::post('login', [LoginController::class, 'store'])
->name('login.post');