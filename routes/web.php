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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/mzd','universController@index');

//produit route
Route::get('mzd/produithome','universController@produith');
Route::get('mzd/formproduitaj','universController@formproduitaj');
Route::post('mzd',"universController@produitstore");
Route::delete('mzd/{id}',"universController@produitdestroy");
Route::get('mzd/{id}/edit','universController@produitafficheedit');
Route::post('mzd/{id}','universController@updateproduit');
//Vente route
Route::get('mzd/ventemenu','universController@ventemenu');
Route::get('mzd/venteaj','universController@venteaj');
Route::post('mzd/fiarevente/{id}','universController@ventefaire');
Route::get('mzd/ventelist','universController@ventelist');
//categorie route
Route::get('mzd/categoriehome','universController@categoriehome');
Route::get('mzd/categorieformaj','universController@categorieformaj');
Route::post('/categorieaffectajt','universController@categorieaffectajt');
Route::delete('mzd/categoriedestroy/{id}',"universController@categoriedestroy");	 			
Route::get('mzd/editcat/{id}','universController@categorieafficheedit');
Route::post('mzd/cat/{id}','universController@updatecategorie');
//societe route
Route::get('mzd/societehome','universController@societehome');
Route::get('mzd/societeajt','universController@societeajt');
Route::post('/steaffectajt','universController@steaffectajt');
Route::get('mzd/editste/{id}','universController@stemodifierform');
Route::post('mzd/updateste/{id}','universController@updateste');


Route::get('/home', 'HomeController@index')->name('home');
