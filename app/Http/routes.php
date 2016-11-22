<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'PagesController@home');




// Contact
Route::get('/contacts/', 'ContactsController@index');
Route::get('/contacts/create', 'ContactsController@create');
Route::post('/contacts/create', 'ContactsController@store');


// User
//Route::get('/user', 'UserController@index');


// RoturesPaper
Route::get('/rotures', 'RoturesPaperController@index');
Route::get('/rotures/create', 'RoturesPaperController@create');
Route::post('/rotures/create', 'RoturesPaperController@store');


/**
// Customers
Route::get('/customers', 'CustomersController@index');
Route::get('/customers/create', 'CustomersController@create');
Route::post('/customers/create', 'CustomersController@store');
Route::get('/customers/{slug?}', 'CustomersController@show');
Route::get('/customers/{slug?}/edit', 'CustomersController@edit');
Route::post('/customers/{slug?}/edit','CustomersController@update');
Route::get('/customers/{slug?}/delete','CustomersController@destroy');
**/

