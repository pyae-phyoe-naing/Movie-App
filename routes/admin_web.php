<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->as('admin.')->namespace('Backend')->group(function(){

    Route::get('/',"PageController@index")->name('home');

    Route::get('/category',"CategoryController@index")->name('category');
    Route::get('/create/category',"CategoryController@create")->name('create-category');
    Route::post('/create/category',"CategoryController@store")->name('store-category');
    Route::get('/edit/category/{id}',"CategoryController@edit")->name('edit-category');
    Route::post('/edit/category/{id}',"CategoryController@update")->name('update-category');

    Route::resource('/genre',GenreController::class);

    Route::get('/movie-serie',"MovieAndSerieController@index")->name('movie-serie');
    Route::get('/create/movie-serie',"MovieAndSerieController@create")->name('create-movie-serie');

});
