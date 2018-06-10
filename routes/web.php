<?php

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
Route::get('/','FrontController@home')->name('home');
Route::get('/movies', 'FrontController@movies')->name('movies');
Route::get('/personajes', 'FrontController@personajes')->name('personajes');
Route::get('/series', 'FrontController@series')->name('series');
Route::get('/prueba', 'FrontController@prueba')->name('prueba');



Auth::routes();
Route::prefix('admin')->group(function () {
    Route::get('/home', 'HomeController@index')->name('admin.home');

    Route::resource('prueba', 'PruebaController')->names([
        'index' => 'prueba2',
        'create' => 'prueba.create',
        'store' => 'prueba.store',
        'show' => 'prueba.show',
        'edit' => 'prueba.edit',
        'update' => 'prueba.update',
        'destroy' => 'prueba.destroy'
    ]);


    Route::resource('personajes', 'PersonajesController')->names([
        'index' => 'personajes2',
        'create' => 'personajes.create',
        'store' => 'personajes.store',
        'show' => 'personajes.show',
        'edit' => 'personajes.edit',
        'update' => 'personajes.update',
        'destroy' => 'personajes.destroy'
    ]);

    Route::resource('movies', 'MoviesController')->names([
        'index' => 'movies2',
        'create' => 'movies.create',
        'store' => 'movies.store',
        'show' => 'movies.show',
        'edit' => 'movies.edit',
        'update' => 'movies.update',
        'destroy' => 'movies.destroy'
    ]);

    Route::resource('series', 'SeriesController')->names([
        'index' => 'series2',
        'create' => 'series.create',
        'store' => 'series.store',
        'show' => 'series.show',
        'edit' => 'series.edit',
        'update' => 'series.update',
        'destroy' => 'series.destroy'
    ]);
});
