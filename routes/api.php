<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'auth:api'], function()
{
    Route::get('/infoTilang/pelanggaranSaya', 'PelanggaranController@show');
    Route::get('/me', 'UserController@me');


});
Route::post('/coba', 'CobaController@store');
Route::get('/coba', 'CobaController@index');
Route::get('/coba/find/{id}');

Route::post('/infoTilang/create/', 'PelanggaranController@create');
Route::get('/infoTilang','PelanggaranController@index');
Route::post('/register', 'Auth\RegisterController@create');
Route::post('/login', 'Auth\LoginController@login');

Route::get('/users','UserController@index');
