<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <title>Lista de clientes</title>
</head>
<body>
    <div class="p-3">
        <table class="table">
        <thead>
            <tr>
            <th scope="col">ID do cliente</th>
            <th scope="col">Nome</th>
            <th scope="col">Data de nascimento</th>
            <th scope="col">RG</th>
            <th scope="col">CPF</th>
            <th scope="col">Tipo_cliente</th>
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
            <td>{{$item->tipo_cliente}}</td>
            </tr>
        </tbody>
        @endforeach
        </table>
    </div>
</body>

</html>