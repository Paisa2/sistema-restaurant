<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plato;
use Illuminate\Support\Facades\Redirect;

class PlatoControlers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $platos= Plato::all();
        return view('plato.index', compact('platos'))->with('platos', $platos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('plato.create');
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $platos = new Plato();
        $platos ->name = $request->get('nombre');
        $platos ->descripcion = $request->get('descripcion');
        $platos ->cantidad = $request->get('cantidad');
        $platos ->precio = $request->get('precio');

        $platos->save();   
        
        return redirect('/plato');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $plato= Plato::find($id);

        return view('plato.edit')->with('plato', $plato);
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
        // $plato = new Plato();
        // $plato->fill($request->all());
        // $plato->save();
        $plato = new Plato();
        $plato ->name = $request->get('nombre');
        $plato ->descripcion = $request->get('descripcion');
        $plato ->cantidad = $request->get('cantidad');
        $plato ->precio = $request->get('precio');

        $plato->save();   
        
        return redirect('/plato');

        // return Redirect()->route('plato.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $plato= Plato::find($id);
        $plato->delete();
        return redirect('/plato');

    }
}
