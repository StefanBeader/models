<?php

Auth::routes(['register' => false]);

Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/sign-up', 'PageController@signUp')->name('signUp');