<?php

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'DashboardController@index')->name('dashboard.index');
Route::get('blogs', 'BlogController@index')->name('blogs.index');
Route::get('blogs/create', 'BlogController@create')->name('blogs.create');
Route::post('blogs', 'BlogController@store')->name('blogs.store');

Route::get('categories', 'CategoryController@index')->name('categories.index');
Route::get('categories/create', 'CategoryController@create')->name('categories.create');
Route::post('categories', 'CategoryController@store')->name('categories.store');
