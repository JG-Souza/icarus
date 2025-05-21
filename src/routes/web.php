<?php

use Jgsouza\Icarus\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginGet'])
->name('login.get');