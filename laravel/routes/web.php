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

Route::get('/', 'HomeController@index');

Route::get('/registrasi', 'AuthController@register');

Route::get('/login', 'AuthController@login');
//Route::post('/welcome', 'AuthController@submit');

route::get('/table', function(){
    return view('table.table');
});

route::get('/data-table', function(){
    return view('table.data-table');
});

//CRUD CAST
route::get('/cast', 'CastController@index');

route::get('/cast/create', 'CastController@create');

Route::post('/cast', 'CastController@store');

route::get('/cast/{cast_id}', 'CastController@show');

route::get('/cast/{cast_id}/edit', 'CastController@edit');

Route::put('/cast/{cast_id}', 'CastController@update');

Route::delete('/cast/{cast_id}', 'CastController@destroy');