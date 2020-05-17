<!DOCTYPE html>
<html lang="en">
<head>

    <title>Template</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/cabecalho.css')}}" type="text/css">    
    <link rel="stylesheet" href="{{asset('css/fontello.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">


</head>
<body>

<div class= "container-fluid bg-dark">
	<div class= "d-flex justify-content-center bg-dark">

		<div class= "dropdown">

			<button class= "btn btn-secondary" type="button" data-toggle="dropdown">
                <div class="d-flex">                
                    <span class="d-none d-sm-block ">Aplicaçao&nbsp;</span>
                    <i class="icon-snowflake-o"></i>
                </div> 
			</button>
							
			<div class= "dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class= "dropdown-item" href="#"> 
					<i class="icon-home"></i>
					Menu								
				</a>

				<div class= "dropdown-divider"></div>

				<a class= "dropdown-item" href="#"> 
					<i class="icon-logout"></i>
					Configuraçoes							
				</a>

				<div class= "dropdown-divider"></div>

				<a class= "dropdown-item" href="{{route('logout')}}"> 
					<i class="icon-logout"></i>
					Logout								
				</a>
			</div>

		</div>
					
		<div class= "dropdown">

            <button class="btn btn-secondary" type="button" data-toggle="dropdown">
                <div class="d-flex">                
                    <span class="d-none d-sm-block ">Cadastros&nbsp;</span>
                    <i class="icon-pencil"></i>
                </div> 
            </button>
							
			<div class= "dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class= "dropdown-item" href="{{route('cliente_cadastro')}}"> 
					<i class="icon-user-circle-o"></i>	
					Clientes														
				</a>

				<div class= "dropdown-divider"></div>

				<a class= "dropdown-item" href="{{route('processo_cadastro')}}"> 
					<i class="icon-tags"></i>
					Processos								
				</a>					
			</div>

		</div>
					
		<div class="dropdown">

            <button class="btn btn-secondary" type="button" data-toggle="dropdown">
                <div class="d-flex">                
                    <span class="d-none d-sm-block ">&nbsp;&nbsp;Listas&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    <i class="icon-table"></i>
                </div> 			
			</button>

			<div class= "dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class= "dropdown-item" href="{{route('cliente_listar')}}"> 
					<i class="icon-user-circle-o"></i>	
					Clientes														
				</a>

				<div class= "dropdown-divider"></div>

				<a class= "dropdown-item" href="{{route('processos_listar')}}"> 
					<i class="icon-tags"></i>
					Produtos								
				</a>
			</div>

		</div>	
				
		<div class="dropdown">

            <button class="btn btn-secondary" type="button" data-toggle="dropdown">
                <div class="d-flex">                
                    <span class="d-none d-sm-block ">Dashboard&nbsp;</span>
                    <i class="icon-database"></i>
                </div> 
            </button>

			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class= "dropdown-item view_data" href="{{route('dashboard')}}">
					<i class="icon-chart-line"></i>
					Indicadores
				</a>
			</div>

		</div>

	</div>
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
    
</div>


<script src           = "https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src           = "https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src           = "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


    
</body>
</html>