<?php

use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FunFactController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login', [ApiController::class, 'login']);
Route::post('/register', [ApiController::class, 'register']);

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/fun-fact', [FunFactController::class, 'show']);
    Route::get('/user', [ApiController::class, 'user']);
    Route::post('/logout', [ApiController::class, 'logout']);
});

// Admin routes
Route::middleware(['auth:sanctum', 'admin'])->group(function () {
    Route::get('/users', [AdminController::class, 'index']);
    Route::put('/users/{id}', [AdminController::class, 'update']);
    Route::delete('/users/{id}', [AdminController::class, 'destroy']);
});
