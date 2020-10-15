<?php

use App\Http\Controllers\ApiControllers\BookControllerAPI;
use App\Http\Controllers\ApiControllers\UserControllerAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('books', BookControllerAPI::class);

Route::get('users', [UserControllerAPI::class, 'index']);

Route::get('users/{id}', [UserControllerAPI::class, 'show']);

