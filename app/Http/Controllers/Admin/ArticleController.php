<?php


namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\ArticleFormRequest;
use App\Article;
use App\Categorie;
use App\Statu;
use App\Partenaire;
use App\Type;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titre = 'La liste des article'; 
        return view('dashboard.article.index',['titre'=>$titre]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titre = 'Ajouter un article'; 
        $categories      = Categorie::all();
        $status          = Statu::all();
        $types           = Type::all();
        $partenaires     = Partenaire::all();   
        return view('dashboard.article.create', compact('categories','status','types','partenaires','titre'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleFormRequest $request)
    {
        $categories      = Categorie::all();
        $status          = Statu::all();
        $types           = Type::all();
        $partenaires     = Partenaire::all();   
        $imagePath = request('photo')->store('article','public');

        Article::create([
                'categorie_id'   =>$request->categorie_id,
                'type_id'        =>$request->type_id,
                'statu_id'       =>$request->statu_id,
                'partenaire_id'  =>$request->partenaire_id,
                'numero_article' =>$request->numero_article,
                'nom'            =>$request->nom,
                'slug'           =>$request->slug,
                'description'    =>$request->description,
                'localisation'   =>$request->localisation,
                'superficie'     =>$request->superficie,
                'image'          =>$imagePath,
                'date'           =>$request->date,
        ]);
        return view('dashboard.article.create', compact('categories','status','types','partenaires'))->with('message','L\'article a éré enregistrer avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }
}
