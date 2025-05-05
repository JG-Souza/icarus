<?php

use Illuminate\Support\Facades\Route;
use Jgsouza\Icarus\Http\Controllers\LoginController;

Route::get('login', [LoginController::class, 'loginGet'])
->name('login.get');

Route::post('login', [LoginController::class, 'loginPost'])
->name('login.post');