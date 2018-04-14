<?php

use Illuminate\Http\Request;
use App\Materiels;
use App\Ecoles;
use App\Reservations;
use App\Associations;
use App\ReservationsMateriels;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API matériels
Route::post('/materiels', 'MaterielsController@store');
Route::get('/materiels', function (Request $request) {
    return Materiels::all();
});
Route::put('materiels/{id}', 'MaterielsController@update'); 

//API écoles
Route::get('/ecoles', function (Request $request) {
    return Ecoles::all();
}); 

//API professors
Route::post('/professors', 'ProfessorsController@store'); 

//API réservations
Route::get('/reservations', function (Request $request) {
    return Reservations::all();
}); 
Route::put('reservations/{id}', 'ReservationsController@update');
Route::delete('reservations/{id}', 'ReservationsController@destroy');

//API Réservations Matériels
//Route::post('/reservationsmateriels', 'ReservationsMaterielsController@store');
Route::get('/reservationsmateriels', function (Request $request) {
    return ReservationsMateriels::all();
});
//Route::delete('reservationsmateriels/{id}', 'ReservationsMaterielsController@destroy');

//API associations
Route::post('/associations', 'AssociationsController@store'); 



