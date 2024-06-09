<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUsuerController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index']);
Route::get('/register', [RegisteredUsuerController::class, 'create']);
Route::post('/register', [RegisteredUsuerController::class, 'store']);
Route::get('/login', [SessionController::class, 'login'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::delete('/logout', [SessionController::class, 'logout']);
