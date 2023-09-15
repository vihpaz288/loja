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

      return redirect()->route('home');
   }
   public function formulario()
   {
      return view('carrinho.formulario');
   }

   public function finalizar(FinalizarFormRequest $request)
   {

      dd($request->all());
      $itensNoCarrinho = carrinho::get();

      // dd($itensNoCarrinho);

      $pedido = pedidos::create([
         'usuarioId' => auth()->user()->id,
      ]);


      // $finalizado = pedidoItem::create([
      //    'pedidoId' => $pedido->id,
      //    'valor' => $request->valor,
      //    'quantidade' => $request->quantidade,
      //    'subtotal' => $request->total,
      // ]);

      // dd($finalizado);

      // $finalizado->produtos()->attach($request->itens);



      return view('carrinho.finalizar');
   }

   public function destroy($id)
   {

      carrinho::findOrFail($id)->delete();
      return redirect()->route('carrinho.index');
   }
}
