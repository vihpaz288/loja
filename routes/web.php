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
    Route::delete('/{id}', [ProdutosController:: class, 'destroy']); 
});
//Route::get('/vendedor/index', [ProdutosController:: class, 'index'])->name('vendedor.index');


//Route::get('/cliente/index', [UsuariosController:: class, 'index'])->name('cliente.index');
Route::get('/home', [UsuariosController:: class, 'home'])->name('home');
Route::get('/create', [UsuariosController:: class, 'create'])->name('create');
Route::post('/store', [UsuariosController:: class, 'store'])->name('store');
Route::get('/cliente/formulario', [UsuariosController::class, 'formulario'])->name('cliente.formulario');

Route::get('/login', [LoginController::class, 'login'])->name('login.create');
Route::post('/login', [LoginController::class, 'autenticacao'])->name('login');
Route::get('/sair', [LoginController::class, 'sair'])->name('sair');
