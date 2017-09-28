<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix'=>'admin', 'middleware'=>['auth', 'role:admin']], function () {
	Route::resource('models', 'ModellsController');
	Route::resource('mobils', 'MobilsController');
	Route::resource('potos', 'PotosController');
	Route::resource('leaders', 'LeadersController');
	Route::resource('perusahaans', 'PerusahaansController');
	// Route::resource('testingadmin', 'TestingsController');
	Route::resource('mesin', 'MesinsController');
	Route::resource('dimensis', 'DimensisController');
	Route::resource('transmisis', 'TransmisisController');
	Route::resource('skemudis', 'SkemudisController');
});

Route::resource('show','GuestsController');
Route::resource('guest', 'GuestsController');
Route::resource('testing', 'GuestsController@testing');
Route::resource('about', 'GuestsController@about');
Route::resource('service', 'GuestsController@services');
Route::get('/model/{id}', array('as' => 'showperkategori', 'uses' =>'GuestsController@showperkategori'));