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


Route::get('/', 'ComicController@index')->name('home');
Route::get('comics/{comic}', 'ComicController@show')->name('comic');

Route::get('admin-comics', 'ComicController@index')->name('admin.comics');
// Route::get('admin-comics/create', 'ComicController@create')->name('admin.comics.create');
