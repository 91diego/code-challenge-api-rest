<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login']);

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('me', [UserController::class, 'getUserClaims']);
    Route::post('get-links', [LinksController::class, 'extractHtml']);
});
