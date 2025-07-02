<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShopifyStore extends Model
{
    /** @use HasFactory<\Database\Factories\ShopifyStoreFactory> */
    use HasFactory;
    
    protected $fillable = ['name', 'shop_url', 'access_token', 'renewal_date', 'license_frozen'];
}
