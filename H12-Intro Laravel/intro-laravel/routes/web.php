<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pendaftaranController;
use App\Http\Controllers\AuthController;


Route::get('/', [HomeController::class,'home']);
Route::get('/daftar', [pendaftaranController::class,'daftar']);
Route::post('/welcome', [AuthController::class,'auth']);