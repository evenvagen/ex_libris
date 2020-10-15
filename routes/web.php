<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/users/create', [UserController::class, 'create']);
Route::get('/users', [UserController::class, 'index']);
Route::post('/users', [UserController::class, 'store'])->name('make.users');


Route::get('books/create', [BookController::class, 'create']);
Route::get('/books', [BookController::class, 'index']);
Route::post('/books', [BookController::class, 'store'])->name('make.books');
