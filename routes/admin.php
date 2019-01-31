<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::get('blogs', 'BlogController@index')->name('blogs.index');
