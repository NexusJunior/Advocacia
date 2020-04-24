<!DOCTYPE html>
<html lang="en">
<head>

    <title>Template</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link rel="stylesheet" href="{{asset('css/template.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min')}}" type="text/css">


</head>
<body>

<div class= "container-fluid">
    <div class= "row" id="cabecalho">
        @yield('cabecalho')
    </div>

    <div class = "row" id="conteudo">
			<div class = "col-md-1">
				<!-- coluna vazia esquerda -->
			</div>
			<div id="conteudo" class = "col-md-10 mt-1">
				@yield('conteudo')
			</div>
			<div class = "col-md-1">
				<!-- coluna vazia direita -->
			</div>
    </div>

    <div class= "row" id="rodape">
        @yield('rodape')
    </div>
    
</div>

    
</body>
</html>