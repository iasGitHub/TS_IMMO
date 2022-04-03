<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProprietaireRequest;
use App\Http\Requests\UpdateProprietaireRequest;
use Illuminate\Http\Request;
use App\Models\Proprietaire;

class ProprietaireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietaires = Proprietaire::orderBy("nom", "asc")->paginate(2);
        return view("proprietaire.index", compact("proprietaires"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proprietaire.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProprietaireRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          "nom" => "required",
          "prenom" => "required",
          "adresse" => "required",
          "email" => "required",
          "telephone" => "required",
          "civilite" => "required",
          "cni" => "required",
          "sexe" => "required",
          "dateNaissance" => "required",
          "lieuNaissance" => "required",
        ]);

        Proprietaire::create($request->all());
        return back()->with("success", "Propriétaire crée avec succès !");
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function show(Proprietaire $proprietaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proprietaire = Proprietaire::findOrFail($id);
        return view('edit', compact('proprietaire'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProprietaireRequest  $request
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proprietaire  $proprietaire
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    // {
    //     $proprietaire = Proprietaire::findOrFail($id);
    //     $proprietaire->delete();
    //     return redirect('/proprietaire')->with('success', 'Proprietaire Data is successfully deleted');
    // }

    public function delete (Proprietaire $proprietaire)
    {
        $proprietaire->delete();
        return back()>with("successDelete", "Propriétaire supprimé avec succès !");
    }
    
}

        // $proprietaire = new Proprietaire;
        // $proprietaire->nom = $request->nom;
        // $proprietaire->prenom = $request->prenom;
        // $proprietaire->adresse = $request->adresse;
        // $proprietaire->email = $request->email;
        // $proprietaire->telephone = $request->telephone;
        // $proprietaire->civilite = $request->civilite;
        // $proprietaire->cni = $request->cni;
        // $proprietaire->sexe = $request->sexe;
        // $proprietaire->dateNaissance = $request->dateNaissance;
        // $proprietaire->lieuNaissance = $request->lieuNaissance;
        // $proprietaire->save();

        // return view('home');