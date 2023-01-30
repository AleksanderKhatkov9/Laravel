<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', "App\Http\Controllers\MapController@index");
Route::get('/map', "App\Http\Controllers\MapController@runMap");
Route::post('/map/save', "App\Http\Controllers\MapController@create");
Route::get('/edit/{id}', "App\Http\Controllers\MapController@edit")->name('post');


Route::post('/map/update', "App\Http\Controllers\UserController@update");
Route::post('/map/delete', "App\Http\Controllers\UserController@destroy");


Route::get('/get', "App\Http\Controllers\MapController@getMap")->name('list');




