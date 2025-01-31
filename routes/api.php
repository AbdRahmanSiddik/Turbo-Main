<?php

use App\Http\Controllers\api\RoleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersManagement;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
