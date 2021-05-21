<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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


Route::get('/contacts',  'App\Http\Controllers\ContactController@index');
Route::get('/contacts/{id}',  'App\Http\Controllers\ContactController@getOne');

Route::post('/contacts', 'App\Http\Controllers\ContactController@store');
Route::post('/contacts/{id}', 'App\Http\Controllers\ContactController@update');

Route::delete('/contacts/{id}', 'App\Http\Controllers\ContactController@delete');