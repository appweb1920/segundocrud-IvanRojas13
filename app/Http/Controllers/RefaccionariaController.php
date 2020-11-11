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
        return view('refaccionaria/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return view('refaccionaria/crea');
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
        //
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
        //
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
