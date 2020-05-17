<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{

    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view()
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function addCliente(Request $req)
    {
        $cliente = new Cliente;
        $cliente->nome = $req->input('nome');
        $cliente->data_nascimento = $req->input('data_nasc');
        $cliente->rg = $req->input('rg');
        $cliente->cpf = $req->input('cpf');
        $cliente->tipo_cliente = $req->input('tipo_cliente');
        $cliente->save();

        //$req->session()->flash('status', 'Cliente cadastrado com sucesso!');
        //return redirect('../../../resources/views/telas_cadastro/cadastro_clientes.blade.php');
    }

    public function alterarCliente($id){
        $data = Cliente::find($id);
        return view('telas_updates/altera_cliente', ['data'=>$data]);
    }

    public function listarCliente(Request $req)
    {
        $data = Cliente::all();
        return view('listas/lista_clientes', ['data'=>$data]);   
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
