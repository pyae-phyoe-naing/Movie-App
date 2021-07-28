<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth')->prefix('admin')->namespace('Backend')->group(function(){

    Route::get('/',"PageController@index")->name('admin.home');

    Route::get('/category',"CategoryController@index")->name('admin.category');
    Route::get('/create/category',"CategoryController@create")->name('admin.create-category');
    Route::post('/create/category',"CategoryController@store")->name('admin.store-category');
    Route::get('/edit/category/{id}',"CategoryController@edit")->name('admin.edit-category');
    Route::post('/edit/category/{id}',"CategoryController@update")->name('admin.update-category');

    
    Route::get('/movie-serie',"MovieAndSerieController@index")->name('admin.movie-serie');
    Route::get('/create/movie-serie',"MovieAndSerieController@create")->name('admin.create-movie-serie');

});
