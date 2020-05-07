<?php

use Illuminate\Support\Facades\Route;


//App Login / Logout Routes------------------------------

Auth::routes();

Route::get('/logout', 'AppController@logout')
	->name('logout');

//-------------------------------------------------------
//Apicaçao Routes----------------------------------------
Route::middleware(['auth'])->group(function(){

    //Demais Rotas devem ficar aqui dentro---------------

    Route::get('/home', 'HomeController@home')
    ->name('home');









});
//-------------------------------------------------------


