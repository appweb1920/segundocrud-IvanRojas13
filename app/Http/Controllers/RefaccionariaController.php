<?php

namespace App\Http\Controllers;

use App\Refaccionaria;
use Illuminate\Http\Request;

class RefaccionariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $refaccionaria = Refaccionaria::all();
        //return view('refaccionaria/index');
        return view('refaccionaria.index', compact('refaccionaria'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('refaccionaria.crea');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $guardaDato = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'numPiezas' => 'required|numeric',
            'costoPieza' => 'required|numeric',
        ]);
        $refaccionaria = Refaccionaria::create($guardaDato);
        return redirect('/refaccionarias')->with('Completado', 'Guardado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Refaccionaria  $refaccionaria
     * @return \Illuminate\Http\Response
     */
    public function show(Refaccionaria $refaccionaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Refaccionaria  $refaccionaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Refaccionaria $refaccionaria)
    {
        $refaccionaria = Refaccionaria::findorfail($id);
        return view('edit', compact('refaccionaria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Refaccionaria  $refaccionaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Refaccionaria $refaccionaria)
    {
        $guardaDato = $request->validate([
            'nombre' => 'required|max:255',
            'descripcion' => 'required|max:255',
            'numPiezas' => 'required|numeric',
            'costoPieza' => 'required|numeric',
        ]);
        $refaccionaria = Refaccionaria::create($guardaDato);
        return redirect('/refaccionarias')->with('Completado', 'Guardado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Refaccionaria  $refaccionaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Refaccionaria $refaccionaria)
    {
        //
    }
}
