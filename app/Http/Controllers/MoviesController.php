<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Movies;

class MoviesController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movies::paginate(6);
        return view('admin.movies.index', compact('movies'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $movie = new Movies();
        return view('admin.movies.create', compact('movie'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'director' => 'required',
            'releaseDate' => 'required',
            'rating' => 'required'

        ]);

        Movies::create([
            'title' => $request->input('title'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
            'director' => $request->input('director'),
            'releaseDate' => $request->input('releaseDate'),
            'rating' => $request->input('rating')
        ]);

        //return redirect('/users');
        return redirect()->route('movies2')->with('success', 'Movie Create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie =  Movies::find($id);
        return view('admin.movies.show', compact('movie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie =  Movies::find($id);
        return view('admin.movies.edit', compact('movie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'director' => 'required',
            'releaseDate' => 'required',
            'rating' => 'required'

        ]);

        $movie =  Movies::find($id);

         $movie->update([
            'title' => $request->input('title'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
            'director' => $request->input('director'),
            'releaseDate' => $request->input('releaseDate'),
            'rating' => $request->input('rating')
        ]);

         return redirect()->route('movies2')->with('success', 'Movie Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         try {
            Movies::destroy($id);
        }catch(Exception $e){
            return redirect()->route('movies2')->with('warning', 'Can be delete a movie ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('movies2')->with('success', 'Movie Delete');
    }
}
