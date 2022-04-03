<?php

namespace App\Http\Controllers;

use App\Models\Quartier;
use App\Models\Propriete;
use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProprieteRequest;
use App\Http\Requests\UpdateProprieteRequest;

class ProprieteController extends Controller
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
        $quartiers = Quartier::all();
        $proprietaires = Proprietaire::all();
        return view('propriete.create',[
            'proprietaires' => $proprietaires,
            'quartiers' => $quartiers
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProprieteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $propriete = new Propriete;
        $propriete->libelle = $request->libelle;
        $propriete->superficie = $request->superficie;
        $propriete->photo = $request->photo;
        $propriete->description = $request->description;
        $propriete->disponibilite = $request->disponibilite;
        $propriete->proprietaire_id = $request->proprietaire_id;
        $propriete->quartier_id = $request->quartier_id;
        $propriete->save();

        return view('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function show(Propriete $propriete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function edit(Propriete $propriete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProprieteRequest  $request
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProprieteRequest $request, Propriete $propriete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propriete $propriete)
    {
        //
    }
}
