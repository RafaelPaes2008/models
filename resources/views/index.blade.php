@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Produtos</div>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>Preço</th>
                                    <th>Criado em</th>
                                    <th>Atualizado em</th>
                                    <th>Ações</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($produtos as $produto)
                                    <tr>
                                        <td>{{ $produto->nome }}</td>
                                        <td>{{ $produto->preco }}</td>
                                        <td>{{ $produto->created_at }}</td>
                                        <td>{{ $produto->updated_at }}</td>
                                        <td>
                                            <a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-sm btn-primary">Ver</a>
                                            <a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-sm btn-secondary">Editar</a>
                                            <form action="{{ route('produtos.destroy', $produto->id) }}" method="POST" style="display: inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection