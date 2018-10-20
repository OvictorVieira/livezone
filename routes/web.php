<?php

Route::get('/', function () {
    return view('landing_page');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
