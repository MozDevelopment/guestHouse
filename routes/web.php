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

//Simple Routes
// Route::get('/', 'ContentsController@home');
//
// Route::get('/clients', 'ClientController@index');
// Route::get('/clients/new', 'ClientController@newClient');
// Route::post('/clients/new', 'ClientController@create');
//
// Route::get('/clients/{client_id}', 'ClientController@show');
// Route::post('/clients/{client_id}', 'ClientController@modify');
//
// Route::get('/reservations/{client_id}','RoomsController@checkAvailableRooms');
// Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms');
//
// Route::get('/book/room/{client_id}/{room}/{date_in/{date_out}}', 'ReservationController@bookRoom');

// Route::get('/home', 'ClientController@di');

//Named Routes

Route::get('/', 'ContentsController@home')->name('home');

Route::get('/clients', 'ClientController@index')->name('clients');
Route::get('/clients/new', 'ClientController@newClient')->name('new_client');

Route::post('/clients/new', 'ClientController@create')->name('create_client');
Route::get('/clients/{client_id}', 'ClientController@show')->name('show_client');
Route::post('/clients/{client_id}', 'ClientController@modify')->name('update_client');

Route::get('/reservations/{client_id}','RoomsController@checkAvailableRooms')->name('check_room');
Route::post('/reservations/{client_id}', 'RoomsController@checkAvailableRooms')->name('check-room');

Route::get('/book/room/{client_id}/{room}/{date_in/{date_out}}', 'ReservationController@bookRoom')->name('book_room');
