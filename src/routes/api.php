<?php

use Jgsouza\Icarus\Http\Controllers\Api\AuthApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->middleware('api')->group(function () {
    Route::post('/login', [AuthApiController::class, 'login']);
    Route::post('/logout', [AuthApiController::class, 'logout'])
    ->middleware('auth:api');
});