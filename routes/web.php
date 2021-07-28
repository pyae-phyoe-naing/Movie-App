<?php

use Illuminate\Support\Facades\Route;


Route::get('/admin/login',"Auth\LoginController@showLoginForm")->name('admin.login');
Route::post('/admin/login',"Auth\LoginController@login");
Route::post('/logout',"Auth\LoginController@logout");

