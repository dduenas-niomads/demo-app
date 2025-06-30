<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreShopifyStoreRequest;
use App\Http\Requests\UpdateShopifyStoreRequest;
use App\Models\ShopifyStore;

class ShopifyStoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreShopifyStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ShopifyStore $shopifyStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ShopifyStore $shopifyStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopifyStoreRequest $request, ShopifyStore $shopifyStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ShopifyStore $shopifyStore)
    {
        //
    }

    /**
     * Validate store access.
     */
    public function authenticateStore(StoreShopifyStoreRequest $request)
    {
        //
        $params = $request->all();
        $params['access-token'] = $request->header('access-token');

        if (!isset($params['access-token'])) {
            \Log::error('AuthenticateStore_LOG: No hay access-token');
        }

        if (!isset($params['shop_url'])) {
            \Log::error('AuthenticateStore_LOG: No hay shop_url');
        }
        
        return response()->json([
            "transaction" => "valid"
        ], 200);
    }
}
