<?php

Auth::routes(['register' => false]);

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/sign-up', 'PageController@signUp')->name('signUp');
Route::get('/sign-up-success', 'PageController@signUpSuccess')->name('signUpSuccess');

Route::post('/models', 'MannequinController@store');

Route::get('/model/{id}/{name}', 'PageController@portfolio')->name('model');

Route::get('{category}', 'PageController@models');
Route::get('{category}/{gender}', 'PageController@models');
