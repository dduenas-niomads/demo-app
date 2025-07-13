<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreCountryRequest;
use App\Http\Requests\UpdateCountryRequest;
use App\Models\Country;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return response()->json(Country::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCountryRequest $request)
    {
        $country = Country::create([
            'name' => $request->name,
            'code' => $request->code,
            'iso_code' => $request->iso_code,
            'flag' => $request->flag,
            'description' => $request->description,
            'population' => $request->population
        ]);
        return response()->json($country, 202);
    }

    /**
     * Display the specified resource.
     */
    public function show(Country $country)
    {
        $country->load('cities');
        return $country;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCountryRequest $request, Country $country)
    {
        $country->update([
            'name' => $request->name,
            'code' => $request->code,
            'iso_code' => $request->iso_code,
            'flag' => $request->flag,
            'description' => $request->description,
            'population' => $request->population
        ]);
        return response()->json($country, 202);  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Country $country)
    {
        $country->delete();
        return response()->json(null,204);
    }
}
