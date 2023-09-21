<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PedidoItemController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use App\Models\pedidoItem;
use Illuminate\Support\Facades\Route;

Route::prefix('Produtos')->group(function () {
    Route::get('/create', [ProdutosController::class, 'create'])->name('Produtos.create');
    Route::post('/store', [ProdutosController::class, 'store'])->name('produtos.store');
    Route::get('/edit/{id}', [ProdutosController::class, 'edit'])->name('Produtos.edit');
    Route::put('/update/{id}', [ProdutosController::class, 'update'])->name('Produtos.update');
    Route::delete('/{id}', [ProdutosController::class, 'destroy'])->name('produto.delete');
});

Route::get('/home', [UsuariosController::class, 'home'])->name('home');
Route::get('/create', [UsuariosController::class, 'create'])->name('create');
Route::post('/store', [UsuariosController::class, 'store'])->name('user.store');
Route::get('/cliente/formulario', [UsuariosController::class, 'formulario'])->name('cliente.formulario');

Route::get('/login', [LoginController::class, 'login'])->name('login.create');
Route::post('/login', [LoginController::class, 'autenticacao'])->name('login');
Route::get('/sair', [LoginController::class, 'sair'])->name('sair');

Route::get('/carrinho/index', [CarrinhoController::class, 'lista'])->name('carrinho.index');
Route::post('/carrinho/store', [CarrinhoController::class, 'store'])->name('carrinho.store');
Route::get('/carrinho/formulario', [CarrinhoController::class, 'formulario'])->name('carrinho.formulario');
Route::post('/carrinho/finalizar', [CarrinhoController::class, 'finalizar'])->name('carrinho.finalizar');
Route::delete('/carrinho/{id}', [CarrinhoController::class, 'destroy'])->name('carrinho.destroy');

Route::get('/teste', [UsuariosController::class, 'teste'])->name('teste');
Route::get('/relatorio', [PedidosController::class, 'relatorio'])->name('relatorio');




