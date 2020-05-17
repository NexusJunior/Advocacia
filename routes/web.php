<?php

use Illuminate\Support\Facades\Route;


//App Routes

Route::get('/menu', 'AppController@menu')
    ->name('menu');
Route::get('/list', 'ClienteController@listarCliente');
Route::get('/altera/{id}','ClienteController@alterarCliente');

Route::view('/addCliente','telas_cadastro/cadastro_clientes');
Route::post('/addCliente', 'ClienteController@addCliente');



