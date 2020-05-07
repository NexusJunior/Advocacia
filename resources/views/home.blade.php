@extends('templates.principal')

@section('conteudo')
<div class="container">
    <div class="row justify-content-center mt-5 p-5">
       
                

                
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <div class="alert alert-success" role="alert">
                        Bem Vindo! {{Auth::user()->name}}
                        </div>
                
                
        
    </div>
</div>
@endsection
