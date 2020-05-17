
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link href="/css/bootstrap.min.css" rel="stylesheet"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição do cliente</title>
</head>
<body>
    
    
    <div class= 'col-sm-6'>

    <h1>Tela de edição do cliente</h1>
    <form method="post" action="">
    @csrf    

        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name= "nome" value="{{$data->nome}}" placeholder="Digite seu nome" required>   
        </div>

        <div class="form-group">
            <label for="data_nasc">Data de nascimento</label>
            <input type="text" class="form-control" name="data_nasc" value="{{$data->data_nascimento}}" placeholder="Digite a sua data de nascimento: " required>
        </div>

        <div class="form-group">
            <label for="rg">RG</label>
            <input type="text" class="form-control" name="rg" value="{{$data->rg}}" placeholder="Digite o seu RG: " required>
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" value="{{$data->cpf}}" placeholder="Digite o seu CPF: " required>
        </div>
 
        <div class="form-group">
            <label for="tipo_cliente">Tipo de cliente</label>
            <input type="text" class="form-control" name="tipo_cliente" value="{{$data->tipo_cliente}}" placeholder="Digite o seu tipo de cliente: " required>
        </div>
 

        <button type="submit" class="btn btn-primary">Editar cliente</button>
    </form>
    </div>
</body>
</html>