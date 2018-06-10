<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{

    protected $dates = ['id'];

    protected $fillable = [
        'title', 'descripcion','imagen','director', 'releaseDate', 'rating',
    ];
}
