<?php

use App\Http\Controllers\Admin\SupportController;
use Illuminate\Support\Facades\Route;

// Get routes
Route::get('/', function () {
    return view('welcome');
});
Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');

// Post routes
Route::post('/supports', [SupportController::class, 'store'])->name('supports.store');

// Put routes

// Delete routes
