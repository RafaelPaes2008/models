@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Criar Produto</div>

                    <div class="card-body">
                        <form action="{{ route('produtos.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" id="nome" name="nome" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="preco">Preço</label>
                                <input type="number" id="preco" name="preco" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary">Criar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection