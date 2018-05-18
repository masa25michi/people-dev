<?php
Route::get('/', 'HomeController@index')->name('home');

Route::auth();

Route::get('/dashboard', 'UserController@dashboard')->name('user');