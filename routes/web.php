<?php

use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProdutosController;
use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

Route::prefix('vendedor')->group(function () {
    Route::get('/create', [ProdutosController:: class, 'create'])->name('produto.create');
    Route::post('/store', [ProdutosController:: class, 'store'])->name('produto.store');
    Route::get('/edit/{id}', [ProdutosController:: class, 'edit'])->name('produto.edit');
    Route::put('/update/{id}', [ProdutosController:: class, 'update'])->name('produto.update');
    Route::delete('/{id}', [ProdutosController:: class, 'destroy'])->name('produto.delete'); 
});

Route::get('/home', [UsuariosController:: class, 'home'])->name('home');
Route::get('/create', [UsuariosController:: class, 'create'])->name('create');
Route::post('/store', [UsuariosController:: class, 'store'])->name('store');
Route::get('/cliente/formulario', [UsuariosController::class, 'formulario'])->name('cliente.formulario');

Route::get('/login', [LoginController::class, 'login'])->name('login.create');
Route::post('/login', [LoginController::class, 'autenticacao'])->name('login');
Route::get('/sair', [LoginController::class, 'sair'])->name('sair');

Route::get('/carrinho/index', [CarrinhoController::class, 'lista'])->name('carrinho.index');
Route::post('/carrinho/store', [CarrinhoController:: class, 'store'])->name('carrinho.store');
Route::get('/carrinho/formulario', [CarrinhoController::class, 'formulario'])->name('carrinho.formulario');
Route::get('/carrinho/finalizar', [CarrinhoController::class, 'finalizar'])->name('carrinho.finalizar');
Route::delete('/carrinho/{id}', [CarrinhoController:: class, 'destroy'])->name('carrinho.destroy'); 

