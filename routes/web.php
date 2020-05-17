<?php

use Illuminate\Support\Facades\Route;


//App Login / Logout Routes------------------------------

Auth::routes();

//-------------------------------------------------------
//Apicaçao Routes----------------------------------------
Route::middleware(['auth'])->group(function(){

    //Demais Rotas devem ficar aqui dentro---------------

    Route::get('/dashboard', 'AppController@dashboard')
	->name('dashboard');

    Route::get('/logout', 'AppController@logout')
	->name('logout');

    Route::get('/home', 'HomeController@home')
    ->name('home');

    //Clientes................................................................................

	Route::get('/cliente/cadastro', 'ClienteController@telaCadastro')
	->name('cliente_cadastro');

	Route::get('/cliente/alterar/{id}', 'ClienteController@telaAlteracao')
	->name('cliente_update');

	Route::post('/cliente/adicionar', 'ClienteController@adicionar')
	->name('cliente_add');

	Route::post('/cliente/alterar/{id}', 'ClienteController@alterar')
	->name('cliente_alterar');

	Route::get('/cliente/excluir/{id}', 'ClienteController@excluir')
	->name('cliente_delete');

	Route::get('/cliente/listar', 'ClienteController@listar')
	->name('cliente_listar');

	//Produtos................................................................................

	Route::get('/processo/cadastro', 'processoController@telaCadastro')
	->name('processo_cadastro');

	Route::get('/processo/alterar/{id}', 'processoController@telaAlteracao')
	->name('processo_update');

	Route::post('/processo/adicionar', 'processoController@adicionar')
	->name('processo_add');

	Route::post('/processo/alterar/{id}', 'processoController@alterar')
	->name('processo_alterar');

	Route::get('/processo/excluir/{id}', 'processoController@excluir')
	->name('processo_delete');

	//Clientes..................................................................................
	Route::get('/cliente/listar', 'ClienteController@listar')
	->name('cliente_listar');

	//Produtos................................................................................
	Route::get('/processos/listar', 'ProcessoController@listar')
	->name('processos_listar');

});



