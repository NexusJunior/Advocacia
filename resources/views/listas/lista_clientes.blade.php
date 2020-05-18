@extends('templates.principal')
@section('conteudo')
<!-- Programe aqui------------------------------------->
    <h1>Lista de clientes</h1>
<!----------------------------------------------------->
    <div class="p-3">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID do cliente</th>
            <th scope="col">Nome</th>
            <th scope="col">Data de nascimento</th>
            <th scope="col">RG</th>
            <th scope="col">CPF</th>
            <th scope="col">ID_representante</th>
            <th scope="col">Bairro</th>
            <th scope="col">Rua</th>
            <th scope="col">Número</th>
            </tr>
        </thead>
        @foreach($data as $item)
        <tbody>
            <tr>
            <th scope="row">{{$item->id}}</th>
            <td>{{$item->nome}}</td>
            <td>{{$item->data_nascimento}}</td>
            <td>{{$item->rg}}</td>
            <td>{{$item->cpf}}</td>
            <td>{{$item->id_representante}}</td>
            <td>{{$item->bairro}}</td>
            <td>{{$item->rua}}</td>
            <td>{{$item->numero}}</td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
@endsection