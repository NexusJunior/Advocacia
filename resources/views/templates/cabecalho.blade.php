@extends('template')
@section('cabecalho')

<nav class= "navbar-expand-lg navbar navbar-dark bg-dark w-100">

			  <button class= "navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" arina-label="Toggle navigation">
			  <i class="icon-down-open"></i>
			  </button>

				<div class= "collapse navbar-collapse" id="navbarNav">

					<ul class= "navbar-nav">
					
                        <li class= "nav-item">
                        <div class= "dropdown">

                                <button class= "btn btn-secondary" type="button" data-toggle="dropdown">
                                    Aplicaçao
                                    <i class="icon-snowflake-o"></i>
                                </button>
                                
                                <div class= "dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class= "dropdown-item" href="#"> 
                                    <i class="icon-home"></i>
                                    Menu								
                                    </a>
                                    <div class= "dropdown-divider"></div>
                                    <a class= "dropdown-item" href="#"> 
                                    <i class="icon-logout"></i>
                                    Logout								
                                    </a>
                                    <div class= "dropdown-divider"></div>
                                    <a class= "dropdown-item" href="#"> 
                                    <i class="icon-cog-alt"></i>
                                    Configuraçoes								
                                    </a>
                                    
                                </div>

                        </div>
                        </li>

                        <li class= "nav-item">
                        <div class= "dropdown">

                                <button class= "btn btn-secondary" type="button" data-toggle="dropdown">
                                    Cadastros
                                    <i class="icon-pencil"></i>
                                </button>
                                
                                <div class= "dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class= "dropdown-item" href="#"> 
                                    <i class="icon-user-circle-o"></i>	
                                    Clientes														
                                    </a>
                                    <div class= "dropdown-divider"></div>
                                    <a class= "dropdown-item" href="#"> 
                                    <i class="icon-tags"></i>
                                    Processos								
                                    </a>								
                                </div>

                        </div>
                        </li>
					
					</ul>
				</div>
			</nav>

@endsection