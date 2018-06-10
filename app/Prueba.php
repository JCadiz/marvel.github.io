<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prueba extends Model
{
    protected $fillable = [
        'producto', 'descripcion', 'imagen', 'precio',
    ];
}
