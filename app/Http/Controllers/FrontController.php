<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Exception;
use App\Movies;
use App\Series;
use App\Personajes;
use App\Tienda;
use App\Prueba;

class FrontController extends Controller
{
    public function home(){

        return view('web.index');
    }

    public function movies(){
        $movies = Movies::orderBy('id','ASC')->paginate(6);
        return view('web.movies', compact('movies'));
    }

    public function series(){
        $series = Series::orderBy('id', 'ASC')->paginate(6);
        return view('web.series', compact('series'));
    }

    public function personajes(){
        $personajes = Personajes::orderBy('id', 'ASC')->paginate(6);
        return view('web.personajes', compact('personajes'));
    }

    public function tienda(){
        $tienda = Tienda::paginate(6);
        return view('web.tienda' , compact('tienda'));
    }

    public function prueba(){
        $test = Prueba::orderBy('id', 'ASC')->paginate(6);
        return view('web.pruebas', compact('test'));
    }
}
