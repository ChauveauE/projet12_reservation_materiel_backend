<?php

use Illuminate\Http\Request;
use App\Materiels;
use App\Ecoles;
use App\Reservations;
use App\Associations;

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


Route::get('/materiels', function (Request $request) {
    return Materiels::all();
});
Route::put('materiels/{id}', 'MaterielsController@update'); 

Route::get('/ecoles', function (Request $request) {
    return Ecoles::all();
}); 

Route::post('/professors', 'ProfessorsController@store'); 

Route::get('/reservations', function (Request $request) {
    return Reservations::all();
});  //affichage ok, modifier affichage clé étrangère
Route::put('reservations/{id}', 'ReservationsController@update');
Route::delete('reservations/{id}', 'ReservationsController@destroy');
Route::post('/associations', 'AssociationsController@store'); 



