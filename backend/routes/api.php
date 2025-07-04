<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\ShopifyStoreController;
use App\Http\Controllers\RecipeController; // Mantener si no lo has borrado, o eliminar
use App\Http\Controllers\ClientController; // ¡Nueva importación!
use App\Http\Controllers\InvoiceController; // ¡Nueva importación!

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:api')->group(function () {
    Route::get('me', [AuthController::class, 'me']);
    Route::post('logout', [AuthController::class, 'logout']);

    // Apis de Ciudad
    Route::apiResource('cities', CityController::class);

    // Apis de Clientes
    Route::apiResource('clients', ClientController::class); // ¡Nuevas rutas!

    // Apis de Facturas
    Route::apiResource('invoices', InvoiceController::class); // ¡Nuevas rutas!

    // Apis de Tiendas Shopify
    Route::apiResource('shopify-stores', ShopifyStoreController::class);

    // Api de Ejemplo para las práctivas
    Route::apiResource('concepts', ConceptController::class);

    // Api de Ejemplo para paises
    Route::apiResource('countries', CountryController::class);
});

// Ruta corregida para autenticar tienda Shopify (si la necesitas fuera de la autenticación)
Route::post('shopify-authenticate-store', [ShopifyStoreController::class, 'authenticateStore']);
