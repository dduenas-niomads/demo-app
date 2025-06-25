<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Models\City;

Route::get('/', function () {
    return view('welcome');
});

// formulario de creación
Route::get('/cities/new', function () {
    return view('cities-create');
})->name('cities-create');

// formulario de actualización
Route::get('/cities/{id}/edit', function ($id) {
    $city = City::find($id);
    if (!is_null($city)) {
        // si existe, retorna el formulario de editar
        return view('cities-edit', compact('city'));
    } else {
        // si la ciudad no existe, retorna el formulario de creación
        return "El ID ingresado no existe. (" . $id . ")";
    }
});

// Eliminar ciudad de forma directa
Route::get('/cities-delete/{id}', function ($id) {
    $city = City::find($id);
    if (!is_null($city)) {
        // si existe, eliminar
        $city->delete();

        // retornar el listado de ciudades
        return redirect('cities');
    } else {
        // si la ciudad no existe, retorna el formulario de creación
        return "El ID ingresado no existe. (" . $id . ")";
    }
});

// Apis de Ciudad
Route::apiResource('cities', CityController::class);