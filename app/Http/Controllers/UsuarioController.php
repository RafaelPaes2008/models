<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuarioController extends Controller
{
    public function index()
    {
        // Retorna uma lista de usuários
        return response()->json([
            ['id' => 1, 'nome' => 'Usuário 1', 'email' => 'usuario1@example.com'],
            ['id' => 2, 'nome' => 'Usuário 2', 'email' => 'usuario2@example.com'],
            ['id' => 3, 'nome' => 'Usuário 3', 'email' => 'usuario3@example.com'],
        ]);
    }

    public function show($id)
    {
        // Retorna um usuário específico
        return response()->json(['id' => $id, 'nome' => 'Usuário ' . $id, 'email' => 'usuario' . $id . '@example.com']);
    }

    public function store(Request $request)
    {
        // Cria um novo usuário
        return response()->json(['id' => 4, 'nome' => $request->nome, 'email' => $request->email]);
    }

    public function update(Request $request, $id)
    {
        // Atualiza um usuário específico
        return response()->json(['id' => $id, 'nome' => $request->nome, 'email' => $request->email]);
    }

    public function destroy($id)
    {
        // Exclui um usuário específico
        return response()->json(['mensagem' => 'Usuário excluído com sucesso!']);
   