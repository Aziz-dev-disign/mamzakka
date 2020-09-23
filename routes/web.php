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
 * Route for single pages
 */

Route::get('a-propos', function(){
    return view('vitrine.pages.apropos');
});

Route::get('contact', function(){
    return view('vitrine.pages.contact');
});

Route::get('layouts', function(){
    return view('dashboard.layouts.accueil');
});

Route::get('accueil', 'virineController@index');


Route::get('/', 'virineController@index');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {

    Route::resource('employer', 'EmployerController');
    Route::resource('article', 'ArticleController');
    Route::resource('client', 'ClientController');
    Route::resource('temoignage', 'TemoignageController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
