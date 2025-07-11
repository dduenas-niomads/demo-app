<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCityRequest;
use App\Http\Requests\UpdateCityRequest;

class CityController extends Controller
{
    public function index(Request $request)
    {
        $params = $request->all();
        $citiesList = City::with('country:id,name,flag');

        if (isset($params['country_id'])) {
            $citiesList = $citiesList->where('country_id', $params['country_id']);
        }

        return $citiesList->get();
    }

    public function store(StoreCityRequest $request)
    {
        return City::create($request->validated());
    }

    public function show(City $city)
    {
        // Carga el país relacionado con la ciudad
        $city->load('country:id,name,flag');
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
