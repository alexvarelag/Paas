<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;

Route::get('/',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'validateUser']);

Route::get('/logout',[LogoutController::class, 'index']);

Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store']);