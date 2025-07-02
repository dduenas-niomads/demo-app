<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cursos-online extends Model
{
    /** @use HasFactory<\Database\Factories\CursosOnlineFactory> */
    use HasFactory;
    //creado por Jorge Gimenez
    protected $table = 'curso';

    protected $fillable = ['name', 'description', 'url'];
}
