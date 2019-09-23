@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="card">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('visualizar.produto') }}">Produtos</a></li>
                        <li class="breadcrumb-item active">Adicionar</li>
                    </ol>

                <div class="card-body">
                    <form action="{{ route('salvar.produto') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="nome">Nome:</label>  
                            <input type="text" name="nome" class="form-control" placeholder="notebook topzera" required/>
                        </div>  
                        <div class="form-group">
                            <label for="endereco">Descrição:</label>  
                            <input type="text" name="descricao" class="form-control" placeholder="Uool que produto massa" required/> 
                        </div>  
                        <div class="form-group">
                            <label for="nome">Preço:</label>  
                            <input type="number" name="preco" class="form-control" placeholder="31" required/>
                        </div> 
                        <div class="form-group">
                            <label for="nome">Garantia:</label>  
                            <input type="number" name="garantia" class="form-control" placeholder="12" required/>
                        </div> 
                        <div class="form-group">
                            <label for="nome">Avaliação:</label>  
                            <input type="number" name="avaliacao" class="form-control" placeholder="4.2" required/>
                        </div> 
                        <button type="submit" class="btn btn-success">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
