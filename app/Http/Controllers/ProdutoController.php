<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    public function index()
    {
        // Retorna uma lista de produtos
        return response()->json([
            ['id' => 1, 'nome' => 'Produto 1', 'preco' => 10.99],
            ['id' => 2, 'nome' => 'Produto 2', 'preco' => 9.99],
            ['id' => 3, 'nome' => 'Produto 3', 'preco' => 12.99],
        ]);
    }

    public function show($id)
    {
        // Retorna um produto específico
        return response()->json(['id' => $id, 'nome' => 'Produto ' . $id, 'preco' => 10.99]);
    }

    public function store(Request $request)
    {
        // Cria um novo produto
        return response()->json(['id' => 4, 'nome' => $request->nome, 'preco' => $request->preco]);
    }

    public function update(Request $request, $id)
    {
        // Atualiza um produto específico
        return response()->json(['id' => $id, 'nome' => $request->nome, 'preco' => $request->preco]);
    }

    public function destroy($id)
    {
        // Exclui um produto específico
        return response()->json(['mensagem' => 'Produto excluído com sucesso!']);
    }
}