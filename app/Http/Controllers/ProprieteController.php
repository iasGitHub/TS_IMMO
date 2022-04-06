<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Quartier;
use App\Models\Propriete;
use App\Models\Proprietaire;
use Illuminate\Http\Request;
use App\Http\Requests\StoreProprieteRequest;
use App\Http\Requests\UpdateProprieteRequest;
use Illuminate\Support\Facades\Storage;

class ProprieteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proprietes = Propriete::orderBy("libelle", "asc")->paginate(2);
        return view("propriete.index", compact("proprietes"));
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
        $propriete->libelle = $request->input('libelle');
        $propriete->superficie = $request->input('superficie');
        $propriete->description = $request->input('description');
        $propriete->disponibilite = $request->input('disponibilite');
        $propriete->quartier_id = $request->input('quartier_id');
        $propriete->proprietaire_id = $request->input('proprietaire_id');
        if($request->hasfile('photo'))
        {
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.'.$extension;
            $file->move('storage/images/', $filename);
            $propriete->photo = $filename;
        }
        $propriete->save();
        return back()->with("success", "Propriété enregistrée avec succès !");
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
        $quartiers = Quartier::all();
        $proprietaires = Proprietaire::all();
        return view('propriete.edit', compact('propriete',"quartiers", "proprietaires"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProprieteRequest  $request
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propriete $propriete)
    {
        $request->validate([
            "libelle" => "required",
            "superficie" => "required",
            "description" => "required",
            "photo" => "required",
            "disponibilite" => "required",
            "quartier_id" => "required",
            "proprietaire_id" => "required",
          ]);
  
          $propriete->update([
                "libelle" => $request->libelle,
                "superficie" => $request->superficie,
                "description" => $request->description,
                "photo" => $request->photo,
                "disponibilite" => $request->disponibilite,
                "quartier_id" => $request->quartier_id,
                "proprietaire_id" => $request->proprietaire_id,
          ]);
          return back()->with("success", "Infos de la propriété mis à jour avec succès !");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propriete  $propriete
     * @return \Illuminate\Http\Response
     */
    // public function destroy(Propriete $propriete)
    // {
    //     //
    // }

    public function delete (Propriete $propriete)
    {
        $propriete->delete();
        return back()->with("successDelete", "La propriété a été supprimé avec succès !");
    }
}
