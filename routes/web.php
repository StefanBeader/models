<?php

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@index');

    //models
    Route::get('/models/create', 'MannequinController@create');
    Route::get('/models', 'MannequinController@index');
    Route::post('/addModel', 'MannequinController@addModel');
    Route::get('/models/{mannequin}', 'MannequinController@show');
    Route::put('/models/{id}', 'MannequinController@update');
    Route::get('/models/{mannequin}/edit', 'MannequinController@edit');

    //photos
    Route::get('/photos/destroy/{photo}', 'PhotoController@destroy');
    Route::get('/photos/setPrimary/{photo}', 'PhotoController@setPrimary');
});


Route::get('/', 'PageController@home')->name('home');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/sign-up', 'PageController@signUp')->name('signUp');
Route::get('/privacy-policy', 'PageController@privacyPolicy')->name('privacyPolicy');
Route::get('/sign-up-success', 'PageController@signUpSuccess')->name('signUpSuccess');

Route::post('/models', 'MannequinController@store');
Route::post('/message', 'MessageController@store');

Route::get('/model/{id}/{name}', 'PageController@portfolio')->name('model');

Route::get('{category}', 'PageController@models');
Route::get('{category}/{gender}', 'PageController@models');
