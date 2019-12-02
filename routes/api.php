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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/coba', 'CobaController@store');
Route::get('/coba', 'CobaController@index');
Route::get('/coba/find/{id}');

Route::post('/infoTilang/create/', 'PelanggaranController@create');
Route::get('/infoTilang','PelanggaranController@index');
Route::get('/infoTilang/pelanggaranSaya', 'PelanggaranController@show')->middleware('auth.basic');
Route::post('/register', 'Auth\RegisterController@create');