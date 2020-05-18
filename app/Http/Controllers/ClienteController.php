<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Cliente;

class ClienteController extends Controller
{
    function telaCadastro(){
        return view('telas_cadastro.cadastro_cliente');
    }

    function listar(){
        $data = Cliente::all();
        return view('listas.lista_clientes', ['data'=>$data]); 
    }

    public function alterarCliente($id){
        $data = Cliente::find($id);
        return view('telas_updates.altera_cliente', ['data'=>$data]);
    }

    public function adicionarCliente(Request $req)
    {
        $cliente = new Cliente;
        $cliente->nome = $req->input('nome');
        $cliente->data_nascimento = $req->input('data_nasc');
        $cliente->rg = $req->input('rg');
        $cliente->cpf = $req->input('cpf');
        $cliente->id_representante = $req->input('id_representante');
        $cliente->cep = $req->input('cep');
        $cliente->estado = $req->input('estado');
        $cliente->cidade = $req->input('cidade');
        $cliente->bairro = $req->input('bairro');
        $cliente->rua = $req->input('rua');
        $cliente->numero = $req->input('numero');
        $cliente->save();

        //$req->session()->flash('status', 'Cliente cadastrado com sucesso!');
        //return redirect('../../../resources/views/telas_cadastro/cadastro_clientes.blade.php');
    }

}
