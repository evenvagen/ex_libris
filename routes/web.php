<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users', [UserController::class, 'index']);

Route::post('users', [UserController::class, 'store'])->name('make.users');
