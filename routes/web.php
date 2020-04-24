<?php

use Illuminate\Support\Facades\Route;

//App routes

Route::get('/menu', 'AppController@menu')
	->name('menu');

