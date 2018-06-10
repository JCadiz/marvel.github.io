<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Exception;
use App\Series;

class SeriesController extends Controller
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
        $series = Series::paginate(6);
        return view('admin.series.index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $serie = new Series();
        return view('admin.series.create', compact('serie'));
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
            'rating' => 'required'
        ]);

        Series::create([
            'title' => $request->input('title'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
            'rating' => $request->input('rating')
        ]);

        //return redirect('/users');
        return redirect()->route('series2')->with('success', 'Serie Create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serie = Series::find($id);
        return view('admin.series.show', compact('series'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $serie = Series::find($id);
        return view('admin.series.edit', compact('serie'));
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
            'rating' => 'required'
        ]);

        $serie = Series::find($id);

        $serie->update([
            'title' => $request->input('title'),
            'descripcion' => $request->input('descripcion'),
            'imagen' => $request->input('imagen'),
            'rating' => $request->input('rating')
        ]);

        //return redirect('/users');
        return redirect()->route('series2')->with('success', 'Series Modify');
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
            Series::destroy($id);
        } catch (Exception $e) {
            return redirect()->route('series2')->with('warning', 'Can be delete a serie ' . $id);
        }
        //$user =  User::find($id);
        //$user->delete();
        return redirect()->route('series2')->with('success', 'Serie Delete');
    }
}
