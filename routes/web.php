<?php

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

//Route::get('/', function () {
 //  return view('welcome');
  //  echo "page accueil" ;

//})->name('welcome');





Route::get('/', 'ContactController@index')->name('home') ;


Route::get('/contact', 'ContactController@getContact')->name('getContact') ;

Route::post('/contact', 'ContactController@postContact')->name('postContact') ;


Route::get('/master', function() {

    return view('master');
});


Route::get('/index', 'PageController@index')->name('index');


Route::get('/ajouter_livre', 'PageController@getAjouterLivre')->name('ajouterLivre');


Route::get('/livres', 'PageController@getLivres')->name('getLivres') ;

Route::post('/livres', 'PageController@postLivres')->name('postLivres');


Route::get('afficher_livre/{id}', 'PageController@getAfficherLivre')->where('id', '[0-9]+')->name('afficherLivre');


Route::get('supprimer_livre/{id}', 'PageController@getSupprimerLivre')->name('getSupprimerLivre');


Route::get('modifier_livre/{id}', 'PageController@getModifierLivre')->name('getModifierLivre') ;

Route::post('modifier_livre/{id}', 'PageController@postModifierLivre')->name('postModifierLivre');

Route::get('afficher_par_category/{id}', 'PageController@getCategory')->name('getCategory');
