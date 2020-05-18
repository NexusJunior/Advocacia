@extends('templates.principal')
@section('conteudo')
<!-- Programe aqui------------------------------------->
<div class= 'col-sm-6'>

<h1>Tela de cadastro do cliente</h1>
<form method="post" action="{{ route('cliente_add') }}">
@csrf    

    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" name= "nome" placeholder="Digite seu nome" required>   
    </div>

    <div class="form-group">
        <label for="data_nasc">Data de nascimento</label>
        <input type="text" class="form-control" name="data_nasc" placeholder="Digite a sua data de nascimento: " required>
    </div>

    <div class="form-group">
        <label for="rg">RG</label>
        <input type="text" class="form-control" name="rg" placeholder="Digite o seu RG: " required>
    </div>

    <div class="form-group">
        <label for="cpf">CPF</label>
        <input type="text" class="form-control" name="cpf" placeholder="Digite o seu CPF: " required>
    </div>

    <div class="form-group">
        <label for="cpf">ID representante</label>
        <input type="text" class="form-control" name="id_representante" placeholder="Digite o id" required>
    </div>

    <div class="form-group">
        <label for="tipo_cliente">CEP</label>
        <input type="number" class="form-control" name="cep" placeholder="Digite o seu cep: " required>
    </div>

    <div class="form-group">
        <label for="tipo_cliente">Estado</label>
        <input type="text" class="form-control" name="estado" placeholder="Digite o seu estado: " required>
    </div>

    <div class="form-group">
        <label for="tipo_cliente">Cidade</label>
        <input type="text" class="form-control" name="cidade" placeholder="Digite a sua cidade: " required>
    </div>

    <div class="form-group">
        <label for="tipo_cliente">Bairro</label>
        <input type="text" class="form-control" name="bairro" placeholder="Digite o seu bairro: " required>
    </div>

    <div class="form-group">
        <label for="tipo_cliente">Rua</label>
        <input type="text" class="form-control" name="rua" placeholder="Digite a sua rua: " required>
    </div>

    <div class="form-group">
        <label for="tipo_cliente">Número</label>
        <input type="number" class="form-control" name="numero" placeholder="Digite o seu número: " required>
    </div>


    <button type="submit" class="btn btn-primary">Cadastrar cliente</button>
</form>
</div>
@endsection