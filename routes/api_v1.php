<?php

use App\Http\Controllers\Api\V1\TicketsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->apiResource('tickets', TicketsController::class);
