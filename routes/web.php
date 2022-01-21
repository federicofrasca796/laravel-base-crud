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

// ADMIN Dashboard
Route::view('admin', 'admin.dashboard')->name('admin.dashboard');

//CHARACTERS
Route::view('characters', 'characters')->name('characters');

//COMICS
Route::get('/comics', 'ComicController@index')->name('comics');
Route::get('comic/{comic}', 'ComicController@show')->name('comic');
//admin-comics
Route::get('admin-comics', 'Admin\ComicController@index')->name('admin.comics');
Route::get('admin-comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('admin-comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('admin-comic/{comic}', 'Admin\ComicController@show')->name('admin.show');
Route::get('admin-comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.edit');
Route::put('admin-comics/{comic}', 'Admin\ComicController@update')->name('admin.update');
Route::delete('admin-comics/{comic}', 'Admin\ComicController@destroy')->name('admin.destroy');

//TV
Route::view('tv', 'tv')->name('tv');
//MOVIES
Route::view('movies', 'movies')->name('movies');

//GAMES
Route::get('/games', function () {
    return view('games.index');
})->name('games');

//Games - admin
Route::get('admin/games', 'Admin\GameController@index')->name('admin.games.index');
Route::get('admin/games/create', 'Admin\GameController@create')->name('admin.games.create');
Route::post('admin/games', 'Admin\GameController@store')->name('admin.games.store');
Route::get('admin/games/{game}', 'Admin\GameController@show')->name('admin.games.show');
Route::get('admin/games/{game}/edit', 'Admin\GameController@edit')->name('admin.games.edit');
Route::put('admin/games/{game}', 'Admin\GameController@update')->name('admin.games.update');
Route::delete('admin/games/{game}', 'Admin\GameController@destroy')->name('admin.games.delete');

//collectibles
Route::view('collectibles', 'collectibles')->name('collectibles');

//videos
Route::view('videos', 'videos')->name('videos');

//fans
Route::view('fans', 'fans')->name('fans');

//news
Route::view('news', 'news')->name('news');

//shop
Route::view('shop', 'shop')->name('shop');