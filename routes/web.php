<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
Route::get('/dashboard', [PageController::class, 'index']);
Route::get('/kendaraan', [PageController::class, 'daftar']);
Route::get('/profile', [PageController::class, 'dataUser']);
Route::get('/', [PageController::class, 'login']);
Route::post('/login', [PageController::class, 'validasiLogin']);
