<?php

use Illuminate\Support\Facades\Route;


//App Routes

Route::get('/menu', 'AppController@menu')
    ->name('menu');


