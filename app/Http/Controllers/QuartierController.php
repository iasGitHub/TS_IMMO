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
        $quartiers = Quartier::orderBy("libelle", "asc")->paginate(2);
        return view("quartier.index", compact("quartiers"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quartier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuartierRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            "libelle" => "required",
          ]);
  
          Quartier::create($request->all());
          return view('home')->with("success", "Quartier crée avec succès !");
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
        return view('quartier.edit', compact('quartier'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuartierRequest  $request
     * @param  \App\Models\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quartier $quartier)
    {
        $request->validate([
            "libelle" => "required",
        ]);
  
        $quartier->update([
            "libelle" => $request->libelle,
        ]);
        return back()->with("success", "Nom quartier mis à jour avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quartier  $quartier
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Quartier $quartier)
    // {
    //     //
    // }
    public function delete (Quartier $quartier)
    {
        $quartier->delete();
        return back()->with("successDelete", "Le quartier '$libelle' a été supprimé avec succès !");
    }
}
