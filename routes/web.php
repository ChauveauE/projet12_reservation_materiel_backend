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

//API matériels
Route::post('/materiels', 'MaterielsController@store')->name('savemateriels');
Route::get('/materiels', 'MaterielsController@index')->name('materiels');
Route::put('materiels/{id}', 'MaterielsController@update')->name('updatemateriels'); 

//API écoles
Route::get('/ecoles', 'EcolesController@index')->name('ecoles'); 

//API professors
Route::post('/professors', 'ProfessorsController@store')->name('saveprofessors'); 

//API réservations
Route::get('/reservations', 'ReservationsController@index')->name('reservations'); 
Route::put('reservations/{id}', 'ReservationsController@update')->name('updatereservations');
Route::delete('reservations/{id}', 'ReservationsController@destroy')->name('deletereservations');

//API Réservations Matériels
//Route::post('/reservationsmateriels', 'ReservationsMaterielsController@store')->name('savereservationsmateriels');
Route::get('/reservationsmateriels', 'ReservationsMaterielsController@index')->name('reservationsmateriels');
//Route::delete('reservationsmateriels/{id}', 'ReservationsMaterielsController@destroy')->name('deletereservationsmateriels');

//API associations
Route::post('/associations', 'AssociationsController@store')->name('saveassociations'); 


Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/addBooking', 'AddBookingController@index')->name('addbooking');
Route::post('/addBooking', 'AddBookingController@send')->name('savebooking');