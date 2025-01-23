<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
    CardController,
    CategoryController,
    ProductController,
    RarityController,
    SetController,
    SeriesController,
    UserController,
    UserCollectionController,
    UserWishlistController
};

// Grouping routes with a prefix (e.g., api/v1/)
Route::prefix('public')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
});

// Grouping routes with a prefix (e.g., api/v1/)
Route::prefix('private')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
});

// Grouping routes with a prefix (e.g., api/v1/)
Route::prefix('api')->group(function () {
    Route::get('/users', [UserController::class, 'index']);
});