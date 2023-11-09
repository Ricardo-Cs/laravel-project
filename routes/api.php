<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\ReplySupportApiController;
use App\Http\Controllers\Api\SupportApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'auth']);
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::get('/me', [AuthController::class, 'me'])->middleware('auth:sanctum');

Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/replies/{support_id}', [ReplySupportApiController::class, 'getRepliesFromSupport']);
    Route::post('/replies', [ReplySupportApiController::class, 'createNewReply']);
    Route::delete('/replies/{id}', [ReplySupportApiController::class, 'deleteReply']);
    Route::apiResource('/supports', SupportApiController::class);
});
