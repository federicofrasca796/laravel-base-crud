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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', 'ComicController@index')->name('comics');
Route::get('comic/{comic}', 'ComicController@show')->name('comic');

Route::get('admin-comics', 'Admin\ComicController@index')->name('admin.comics');
Route::get('admin-comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('admin-comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('admin-comic/{comic}', 'Admin\ComicController@show')->name('comics.admin.show');
// Route::get('admin-comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comics.edit');