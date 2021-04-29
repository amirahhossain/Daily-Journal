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

Route::get('/', 'App\http\Controllers\TodolistController@showAllData');

Route::get('delete/{id}', 'App\http\Controllers\TodolistController@delete');

Route::get('create', 'App\http\Controllers\TodolistController@create');

Route::get('todo_submit', 'App\http\Controllers\TodolistController@todo_submit');

Route::get('edit/{id}', 'App\http\Controllers\TodolistController@edit');

Route::get('edit_submit/(id)', 'App\http\Controllers\TodolistController@edit_submit');




