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

Route::get('/', ['uses' => 'HomeController@index', 'as' => 'index']);
Route::post('/','HomeController@store');
Route::post('pages/{id}/edit','HomeController@update');
Route::get('pages/{id}/edit', ['uses' => 'HomeController@edit', 'as' => 'message.edit' ])->where(['id' => '[0-9]+']);
Route::get('pages/{id}/delete', ['uses' => 'HomeController@delete', 'as' => 'message.delete' ])->where(['id' => '[0-9]+']);




