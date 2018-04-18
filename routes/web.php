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
// Route::get('/connexions', function () {
//     return view('connexions');
// });

Auth::routes();

//API matériels
Route::get('/materiels', 'MaterielsController@index')->name('materiels');
Route::post('/materiels', 'MaterielsController@store')->name('savemateriels'); 

//API nombre de produit réceptionné 
Route::get('/nbproduitreceptionne', 'NbProduitReceptionneController@index')->name('nbproduitreceptionne');

//API réception commande
Route::get('/receptioncde', 'ReceptioncdeController@index')->name('receptioncde');

//API home
Route::get('/home', 'HomeController@index')->name('home');

//API création compte
Route::get('/createaccount', 'CreateAccountController@index')->name('createaccount');
Route::post('/createaccount', 'CreateAccountController@store')->name('createaccount.store');

//API réservations
Route::get('/reservations', 'ReservationsController@index')->name('reservations');
Route::post('/reservations', 'ReservationsController@store')->name('savereservations'); 
Route::delete('reservations/{id}', 'ReservationsController@destroy')->name('deletereservations');

//API prévue pour évolution

//API écoles
//Route::get('/ecoles', 'EcolesController@index')->name('ecoles'); 

//API associations
//Route::post('/associations', 'AssociationsController@store')->name('saveassociations'); 

