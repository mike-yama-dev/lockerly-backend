<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;

// Grouping routes with a prefix (e.g., api/v1/)
Route::prefix('v1')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
});