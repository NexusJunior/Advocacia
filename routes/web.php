<?php

use Illuminate\Support\Facades\Route;


//App Login / Logout Routes------------------------------

Auth::routes();

Route::get('/logout', 'AppController@logout')
	->name('logout');

//-------------------------------------------------------
//Apicaçao Routes----------------------------------------
Route::middleware(['auth'])->group(function(){
    Route::get('/menu', 'AppController@menu')
    ->name('menu');

    Route::get('/home', 'HomeController@index')
    ->name('home');

});
//-------------------------------------------------------


