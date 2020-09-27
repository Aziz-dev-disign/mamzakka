<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Routes for single pages
 */

Route::get('a-propos', function(){
    return view('vitrine.pages.apropos');
});

Route::get('contact', function(){
    return view('vitrine.pages.contact');
});


/**
 * Routes for web site 
 */

Route::resource('/', 'vitrineController');


/**
 * Routes for web application
 */

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    Route::resource('index', 'CalendrierController');
    Route::resource('employer', 'EmployerController');
    Route::resource('article', 'ArticleController');
    Route::resource('client', 'ClientController');
    Route::resource('temoignage', 'TemoignageController');
    Route::resource('partenaire', 'PartenaireController');
    Route::resource('produit', 'ProduitController');
    Route::resource('profil', 'ProfilController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

