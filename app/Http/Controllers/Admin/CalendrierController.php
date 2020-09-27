<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Calendrier;

class CalendrierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titre = 'Tache du jour'; 
        return view('dashboard.calendrier.index',['titre'=>$titre]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Calendrier  $calendrier
     * @return \Illuminate\Http\Response
     */
    public function show(Calendrier $calendrier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Calendrier  $calendrier
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendrier $calendrier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Calendrier  $calendrier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendrier $calendrier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Calendrier  $calendrier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendrier $calendrier)
    {
        //
    }
}
