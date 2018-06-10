<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personajes extends Model
{
    protected $fillable = [
        'nombre', 'details','imagen','actor'
    ];

}
