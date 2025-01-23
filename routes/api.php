<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// Grouping routes with a prefix (e.g., api/v1/)
Route::prefix('public')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
});