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

Route::get('/', 'App\Http\Controllers\TodolistFormController@index');
Route::get('/create-page', 'App\Http\Controllers\TodolistFormController@createPage');
Route::post('/create', 'App\Http\Controllers\TodolistFormController@create');
Route::get('/edit-page/{id}', 'App\Http\Controllers\TodolistFormController@editPage');
Route::post('/edit', 'App\Http\Controllers\TodolistFormController@edit');
Route::get('/delete-page/{id}', 'App\Http\Controllers\TodolistFormController@deletePage');
Route::post('/delete/{id}', 'App\Http\Controllers\TodolistFormController@delete');
