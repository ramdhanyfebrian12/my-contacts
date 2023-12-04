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

Route::get('/', 'ContactController@index');
Route::get('/contact/create', 'ContactController@create');
Route::post('/contact', 'ContactController@store');
Route::get('/contact/{id}/edit','ContactController@edit');
Route::patch('/contact/{id}','ContactController@update');
Route::delete('/contact/{id}','ContactController@destroy');
