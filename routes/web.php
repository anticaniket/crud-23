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
Route::post('/save','UserController@save');
Route::get('/read','UserController@read');
Route::get('/edit/{id}','UserController@edit');
Route::post('/update/{id}','UserController@update');
