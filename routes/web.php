<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'dashboard');

Route::resource('users', UserController::class)->only(['index', 'store', 'create']);

Route::resource('books', BookController::class)->only(['index', 'store', 'create']);

Route::resource('ratings', RatingController::class)->only(['create', 'store']);
