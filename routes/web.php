<?php

use Illuminate\Support\Facades\Route;


//App Routes

Route::get('/menu', 'AppController@menu')
    ->name('menu');

Route::view('/','templates.rodape');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
