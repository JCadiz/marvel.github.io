<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Personajes;

class PersonajesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personajes = Personajes::paginate(6);
        return view('admin.personajes.index', compact('personajes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personaje = new Personajes();
        return view('admin.personajes.create', compact('personaje'));
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
            'nombre' => 'required',
            'details' => 'required',
            'imagen' => 'required',
            'actor' => 'required'
        ]);

        Personajes::create([
            'nombre' => $request->input('nombre'),
            'details' => $request->input('details'),
            'imagen' => $request->input('imagen'),
            'actor' => $request->input('actor')
        ]);

        //return redirect('/users');
        return redirect()->route('personajes2')->with('success', 'Charcater Create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $personaje = Personajes::find($id);
        return view('admin.personajes.show', compact('personaje'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $personaje = Personajes::find($id);
        return view('admin.personajes.edit', compact('personaje'));
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
            'nombre' => 'required',
            'details' => 'required',
            'imagen' => 'required',
            'actor' => 'required'
        ]);

        $personaje = Personajes::find($id);

        $personaje->update([
            'nombre' => $request->input('nombre'),
            'details' => $request->input('details'),
            'imagen' => $request->input('imagen'),
            'actor' => $request->input('actor')
        ]);

        //return redirect('/users');
        return redirect()->route('personajes2')->with('success', 'Character Modify');
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
            Personajes::destroy($id);
        } catch (Exception $e) {
            return redirect()->route('personajes2')->with('warning', 'Can be delete a Character ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('personajes2')->with('success', 'Character Delete');

    }
}
