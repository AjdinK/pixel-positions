<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;

Route::get("/", [JobController::class, 'index']);
Route::get('/register', [RegisteredUsuerController::class, 'create']);
Route::post('/register', [RegisteredUsuerController, 'store']);
Route::get('/login', [SessionController, 'login'])->name('login');
Route::post('/login', [SessionController, 'store']);
Route::delete('/logout', [SessionController, 'logout']);
