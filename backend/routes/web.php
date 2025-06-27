<?php

use Illuminate\Support\Facades\Route;
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