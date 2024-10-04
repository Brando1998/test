<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::post('api/register', [AuthController::class, 'register']);
Route::post('api/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->post('api/logout', [AuthController::class, 'logout']);


Route::get('/', function () {
    return view('welcome');
});
