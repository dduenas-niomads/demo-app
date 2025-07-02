<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the clients.
     * GET /api/clients
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        // Retorna todos los clientes, opcionalmente cargando la ciudad relacionada
        return Client::with('city')->get();
    }

    /**
     * Store a newly created client in storage.
     * POST /api/clients
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \App\Models\Client
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|unique:clients,email', // Email único y opcional
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:255',
            'city_id' => 'nullable|exists:cities,id', // city_id debe existir en la tabla cities
        ]);

        return Client::create($request->all());
    }

    /**
     * Display the specified client.
     * GET /api/clients/{client}
     *
     * @param  \App\Models\Client  $client
     * @return \App\Models\Client
     */
    public function show(Client $client)
    {
        // Retorna un cliente específico, cargando la ciudad relacionada
        return $client->load('city');
    }

    /**
     * Update the specified client in storage.
     * PUT/PATCH /api/clients/{client}
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \App\Models\Client
     */
    public function update(Request $request, Client $client)
    {
        $request->validate([
            'name' => 'sometimes|required|string|max:255',
            'email' => 'nullable|email|unique:clients,email,' . $client->id, // Email único, ignorando el propio cliente
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:255',
            'city_id' => 'nullable|exists:cities,id',
        ]);

        $client->update($request->all());
        return $client->load('city');
    }

    /**
     * Remove the specified client from storage.
     * DELETE /api/clients/{client}
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return response()->json(null, 204); // 204 No Content
    }
}

