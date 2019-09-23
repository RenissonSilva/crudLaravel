@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('visualizar.produto') }}">Produtos</a></li>
                        <li class="breadcrumb-item active">Editar</li>
                    </ol>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ route('atualizar.produto', $produto->id) }}" method="POST">
                        {{ csrf_field() }} 
                        <div class="form-group">
                        <label for="nome">Nome:</label>  
                        <input class="form-control" name="nome" value="{{ $produto->nome }}" type="text" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="endereco">Descrição:</label>  
                        <input class="form-control" name="descricao" type="text" value="{{ $produto->descricao }}" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="nome">Preço:</label>  
                        <input class="form-control" name="preco" value="{{ $produto->preco }}" type="number" readonly>
                    </div> 
                    <div class="form-group">
                        <label for="nome">Garantia:</label>  
                        <input class="form-control" name="garantia" value="{{ $produto->garantia }}" type="number" readonly>
                    </div>  
                    <div class="form-group">
                        <label for="nome">Avaliação:</label>  
                        <input class="form-control" name="avaliacao" value="{{ $produto->avaliacao }}" type="number" readonly>
                    </div>   

                        
                        <button type="submit" class="btn btn-success">Editar</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
