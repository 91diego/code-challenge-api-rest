<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::group(['middleware' => ['jwt.verify']], function() {
    Route::get('me', [UserController::class, 'getUserClaims'])->name('me');
    Route::post('get-links', [LinksController::class, 'extractHtml'])->name('get-links');
});
