<?php

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostsController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
