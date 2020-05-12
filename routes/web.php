<?php

use Illuminate\Support\Facades\Route;


//App Routes

Route::get('/menu', 'AppController@menu')
    ->name('menu');

Route::view('/addCliente','telas_cadastro/cadastro_clientes');
Route::post('/addCliente', 'ClienteController@addCliente');


