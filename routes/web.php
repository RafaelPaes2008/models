<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;

// Rotas para Produtos
Route::get('/produtos', 'ProdutoController@index');
Route::get('/produtos/{id}', 'ProdutoController@show');
Route::post('/produtos', 'ProdutoController@store');
Route::put('/produtos/{id}', 'ProdutoController@update');
Route::delete('/produtos/{id}', 'ProdutoController@destroy');

// Rotas para Usuários
Route::get('/usuarios', 'UsuarioController@index');
Route::get('/usuarios/{id}', 'UsuarioController@show');
Route::post('/usuarios', 'UsuarioController@store');
Route::put('/usuarios/{id}', 'UsuarioController@update');
Route::delete('/usuarios/{id}', 'UsuarioController@destroy');

// Rotas para Pedidos
Route::get('/pedidos', 'PedidoController@index');
Route::get('/pedidos/{id}', 'PedidoController@show');
Route::post('/pedidos', 'PedidoController@store');
Route::put('/pedidos/{id}', 'PedidoController@update');
Route::delete('/pedidos/{id}', 'PedidoController@destroy');