@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Produto {{ $produto->nome }}</div>

                    <div class="card-body">
                        <p>Nome: {{ $produto->nome }}</p>
                        <p>Preço: {{ $produto->preco }}</p>
                        <p>Criado em: {{ $produto->created_at }}</p>
                        <p>Atualizado em: {{ $produto->updated_at }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection