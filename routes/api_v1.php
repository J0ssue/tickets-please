<?php

use App\Http\Controllers\Api\V1\TicketsController;
use App\Http\Controllers\Api\V1\UsersController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->apiResource('tickets', TicketsController::class);
Route::middleware('auth:sanctum')->apiResource('users', UsersController::class);
