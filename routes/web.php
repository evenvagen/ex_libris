<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('user.create');
});


Route::get('/users', [UserController::class, 'index']);
