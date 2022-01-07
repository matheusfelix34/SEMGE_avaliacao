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

Route::get('/crud', 'CrudController@index');
Route::get('/show/{id}', 'CrudController@show');
Route::get('/create', 'CrudController@create');
Route::post('/store', 'CrudController@store');
Route::get('/edit/{id}', 'CrudController@edit');
Route::put('/update/{id}', 'CrudController@update');
Route::delete('/destroy/{id}', 'CrudController@destroy');