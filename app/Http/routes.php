<?php
Route::get('/', 'HomeController@index')->name('home');

Route::auth();

Route::get('/home', 'UserController@index')->name('user');