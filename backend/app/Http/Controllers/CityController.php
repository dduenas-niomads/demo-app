<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;

class CityController extends Controller
{
    public function index()
    {
        return City::all();
    }

    public function store(StoreCityRequest $request)
    {
        return City::create($request->all());
    }

    public function show(City $city)
    {
        return $city;
    }

    public function update(UpdateCityRequest $request, City $city)
    {
        $city->update($request->all());
        return $city;
    }

    public function destroy(City $city)
    {
        $city->delete();
        return response()->json(null, 204);
    }
}
