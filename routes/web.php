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
    return view('index');
});
//departement
Route::get('dep/create','DepartementController@create');
Route::post('dep/store','DepartementController@store');
Route::get('dep/all','DepartementController@index');
Route::get('dep/{dep}/edit','DepartementController@edit');
Route::post('dep/{dep1}/dep/{dep}','DepartementController@update');
Route::get('dep/{dep}/delete','DepartementController@delete');
//reunion
Route::get('reu/all','ReunionController@index');
Route::get('reu/create','ReunionController@create');
Route::post('reu/store','ReunionController@store');
Route::get('reu/{reu}/edit','ReunionController@edit');
Route::post('reu/{reu1}/reu/{reu}','ReunionController@update');
Route::get('reu/{reu}/delete','ReunionController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//ROLE
Route::get('ROLE/all','ROLEController@index');
Route::get('ROLE/create','ROLEController@create');
Route::post('ROLE/store','ROLEController@store');
Route::get('ROLE/{role}/edit','ROLECOntroller@edit');
Route::post('ROLE/{ROLE1}/ROLE/{ROLE}','ROLEController@update');
ROute::get('ROLE/{ROLE}/delete','ROLEController@delete');
