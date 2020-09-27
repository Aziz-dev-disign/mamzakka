<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployerFormeRequest;

use App\Employer;
use App\Profession;
use App\Domaine;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titre = 'La liste des employers'; 
        return view('dashboard.employer.index',['titre'=>$titre]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titre = 'Ajouter un employer'; 
        $professions = Profession::all();
        $domaines = Domaine::all();
        return view('dashboard.employer.create', compact('professions','domaines','titre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployerFormeRequest $request)
    {
        $professions = Profession::all();
        $domaines = Domaine::all();
        $imagePath = request('photo')->store('employers','public');
        $fichier = request('fichier')->store('fichier_employer','public');
        
        Employer::create([
            'domaine_id'=>$request->domaine_id,
            'profession_id'=>$request->profession_id,
            'matricule'=>$request->matricule,
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'date'=>$request->date,
            'genre'=>$request->genre,
            'contact'=>$request->contact,
            'situation_m'=>$request->situation_m,
            'adresse'=>$request->adresse,
            'fichier'=>$fichier,
            'photo'=>$imagePath,
        ]);
                
        return view('dashboard.employer.create',compact('professions','domaines'))->with('message','employer enregistrer avec succés');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function show(Employer $employer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function edit(Employer $employer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employer $employer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employer  $employer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employer $employer)
    {
        //
    }
}
