<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    protected $fillable = [
        'title', 'descripcion', 'imagen','rating',
    ];

}
