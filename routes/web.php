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


Route::get('/za', function () {
    return view('za');
});

Route::get('/admin', function () {
    return view('admin');
});

Route::get('admin/pharmaciens/create','PharmacienController@create');
Route::get('admin/pharmaciens','PharmacienController@index');
Route::post('admin/pharmaciens','PharmacienController@store');
Route::delete('admin/pharmaciens/{id}','PharmacienController@destroy');
Route::put('admin/pharmaciens/{id}','PharmacienController@update');
Route::get('admin/pharmaciens/{id}/edit','PharmacienController@edit');
Route::get('admin/pharmaciens/{id}/show','PharmacienController@show');

Route::get('admin/fournisseurs/create','FournisseurController@create');
Route::get('admin/fournisseurs','FournisseurController@index');
Route::post('admin/fournisseurs','FournisseurController@store');
Route::delete('admin/fournisseurs/{id}','FournisseurController@destroy');
Route::put('admin/fournisseurs/{id}','FournisseurController@update');
Route::get('admin/fournisseurs/{id}/edit','FournisseurController@edit');
Route::get('admin/fournisseurs/{id}/show','FournisseurController@show');

Route::get('admin/medicaments/create','MedicamentController@create');
Route::get('admin/medicaments','MedicamentController@index');
Route::post('admin/medicaments','MedicamentController@store');
Route::delete('admin/medicaments/{id}','MedicamentController@destroy');
Route::put('admin/medicaments/{id}','MedicamentController@update');
Route::get('admin/medicaments/{id}/edit','MedicamentController@edit');
Route::get('admin/medicaments/{id}/show','MedicamentController@show');


Route::get('admin/lots/create','LotController@create');
Route::get('admin/lots','LotController@index');
Route::post('admin/lots','LotController@store');
Route::delete('admin/lots/{id}','LotController@destroy');
Route::put('admin/lots/{id}','LotController@update');
Route::get('admin/lots/{id}/edit','LotController@edit');
Route::get('admin/lots/{id}/show','LotController@show');



Route::get('admin/achats/create','AchatController@create');
Route::get('admin/achats','AchatController@index');
Route::post('admin/achats','AchatController@store');
Route::delete('admin/achats/{id}','AchatController@destroy');
Route::put('admin/achats/{id}','AchatController@update');
Route::get('admin/achats/{id}/edit','AchatController@edit');
Route::get('admin/achats/{id}/show','AchatController@show');



Route::post('inscription','InscriptionController@store')->name('inscription');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


