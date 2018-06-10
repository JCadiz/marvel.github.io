<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Prueba;

class PruebaController extends Controller
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
        $pruebas = Prueba::paginate(6);
        return view('admin.prueba.index', compact('pruebas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prueba = new Prueba();
        return view('admin.prueba.create', compact('prueba'));
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
            'producto' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'precio' => 'required'
        ]);

        Prueba::create([
            'producto' => $request->input('producto'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
            'precio' => $request->input('precio')
        ]);

        //return redirect('/users');
        return redirect()->route('prueba2')->with('success', 'Item Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prueba = Prueba::find($id);
        return view('admin.prueba.show', compact('prueba'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prueba = Prueba::find($id);
        return view('admin.prueba.edit', compact('prueba'));
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
            'producto' => 'required',
            'descripcion' => 'required',
            'imagen' => 'required',
            'precio' => 'required'
        ]);

        $prueba = Prueba::find($id);

        $prueba->update([
            'producto' => $request->input('producto'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
            'precio' => $request->input('precio')
        ]);

        //return redirect('/users');
        return redirect()->route('prueba2')->with('success', 'Item Modify');
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
            Prueba::destroy($id);
        } catch (Exception $e) {
            return redirect()->route('prueba2')->with('warning', 'Can be delete a Item ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('prueba2')->with('success', 'Item Delete');
    }
}
