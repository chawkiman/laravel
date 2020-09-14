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


Route::get('/', 'ListController@index');
Route::get('/list', 'ListController@index')->name('list');
Route::get('/list/create', 'ListController@create');
Route::post('/list/create', 'ListController@store');
Route::post('/list', 'ListController@filter');
Route::delete('/list/{id}', 'ListController@destroy');
Route::get('/list/edit/{id}', 'ListController@edit');
Route::post('/list/edit/{id}', 'ListController@saveEdit');
