<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::get('blogs', 'BlogController@index')->name('blogs.index');
Route::get('blogs/create', 'BlogController@create')->name('blogs.create');
