<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConceptRequest;
use App\Http\Requests\UpdateConceptRequest;
use App\Models\Concept;

class ConceptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Concept::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return response()->json([
            "message" => "create"
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreConceptRequest $request)
    {
        //
        return Concept::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Concept $concept)
    {
        //
        return $concept;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concept $concept)
    {
        //

        return response()->json([
            "message" => "edit"
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConceptRequest $request, Concept $concept)
    {
        //

        return response()->json([
            "message" => "update"
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concept $concept)
    {
        //

        return response()->json([
            "message" => "destroy"
        ], 200);
    }
}
