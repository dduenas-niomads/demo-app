<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ShopifyStoreController;

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('me', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);

    // Apis de Ciudad
    Route::apiResource('cities', CityController::class);

    // Apis de TIendas Shopify
    Route::apiResource('shopify-stores', ShopifyStoreController::class);
});

Route::post('shopify-authenticate-store', [ShopifyStoreController::class, 'authenticateStore']);