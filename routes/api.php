<?php

use App\Http\Controllers\ApiControllers\BookController;
use App\Http\Controllers\ApiControllers\UserControllerAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('books', BookController::class);

Route::get('users', [UserControllerAPI::class, 'index']);
