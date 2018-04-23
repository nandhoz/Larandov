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



Route::resource('user','UserController');

/* 
Route::get('/', function () {
    return view ('welcome');

});

Route::get('/usuarios','UserController@index');

//Route::get('/usuarios/{id}', 'UserController@show')->where('id','[0-9]+');

Route::get('/usuarios/{id}', 'UserController@show');

Route::get('/usuarios/nuevo', 'UserController@create');

Route::get('/ingreso/{name}/{nickname?}','WelcomeController@velidate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');*/
