<?php

namespace App\Http\Controllers;

use App\Http\Requests\FinalizarFormRequest;
use App\Models\Produtos;
use App\Models\carrinho;
use App\Models\pedidoItem;
use App\Models\pedidos;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
   public function lista()
   {
      $itens = carrinho::with('produtos')->where('usuarioID', auth()->user()->id)->get();
      $valorTotal = [];
      foreach ($itens as $iten) {
         $valor = ($iten->produtos->precoUnitario) * ($iten->quantidade);
         array_push($valorTotal, $valor);
      }
      $total = array_sum($valorTotal);
      return view('carrinho.index', compact('itens', 'total'));
   }

   public function store(Request $request)
   {
      carrinho::create([
         'produtoID' => $request->id,
         'usuarioID' => auth()->user()->id,
         'quantidade' => $request->quantidade,
      ]);

      return redirect()->route('teste');
   }

   public function formulario()
   {
      return view('carrinho.formulario');
   }

   public function finalizar(FinalizarFormRequest $request)
   {
      $carrinhos = carrinho::where('usuarioID', auth()->user()->id)->get();
      $pedido = pedidos::create([
         'usuarioId' => auth()->user()->id,
      ]);
      foreach ($carrinhos as $carrinho) {
         carrinho::findOrFail($carrinho->id)->delete();
      }
      $pedido->produtos()->attach($request->produtos);

      return view('carrinho.finalizar');
   }

   public function destroy($id)
   {
      carrinho::findOrFail($id)->delete();
      return redirect()->route('carrinho.index');
   }
}
