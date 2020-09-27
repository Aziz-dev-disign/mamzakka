<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\PartenaireFormRequest;
use Illuminate\Http\Request;

use App\Partenaire;

class PartenaireController extends Controller
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
        $titre = 'Ajouter un partenaire';
        return view('dashboard.partenaire.create',compact('titre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartenaireFormRequest $request)
    {        
        $fichier_cnib    = request('fichier_cnib')->store('fichier_cnib','public');
        $fichier_article = request('fichier_article')->store('fichier_article','public');

        Partenaire::create([
                'nom'=>$request->nom,
                'prenom'=>$request->prenom,
                'contact'=>$request->contact,
                'numero_cnib'=>$request->numero_cnib,
                'delivre_le'=>$request->delivre_le,
                'numero'=>$request->numero,
                'adresse'=>$request->adresse,
                'prestation'=>$request->prestation,
                'fichier_cnib'=>$request->$fichier_cnib,
                'fichier_article'=>$request->$fichier_article,
        ]);
        return view('dashboard.partenaire.create')->with('message','Le partenaire a été enregistrer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function show(Partenaire $partenaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function edit(Partenaire $partenaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partenaire $partenaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partenaire  $partenaire
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partenaire $partenaire)
    {
        //
    }
}
