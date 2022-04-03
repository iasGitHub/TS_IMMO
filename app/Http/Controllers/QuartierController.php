<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProprietaireRequest;
use App\Http\Requests\UpdateProprietaireRequest;
use Illuminate\Http\Request;
use App\Models\Quartier;

class QuartierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreQuartierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quartier = new Quartier;
        $quartier->libelle = $request->libelle;
        $quartier->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function show(Quartier $quartier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function edit(Quartier $quartier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuartierRequest  $request
     * @param  \App\Models\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuartierRequest $request, Quartier $quartier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quartier $quartier)
    {
        //
    }
}
