<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\carrinho;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function lista()
    {
        $itens = carrinho::with('produtos')->where('usuarioID', auth()->user()->id)->get();
        $valorTotal = [];
       foreach($itens as $iten){
            $valor = ($iten->produtos->precoUnitario) * ($iten->quantidade);
            array_push($valorTotal, $valor);
       }
       $total = array_sum($valorTotal);
        return view('carrinho.index', compact('itens', 'total'));
    }

    public function store(Request $request)
     {
    //      //dd($request->all());
     //$path = $request->file("foto")->store('produtos', 'public');
        
        carrinho::create([
            'produtoID' => $request->id,
            'usuarioID' => auth()->user()->id,
            'quantidade' => $request->quantidade,
         //'foto' => $path
          ]);

         return redirect()->route('carrinho.index');
     }
     public function formulario()
     {
        return view('carrinho.formulario');
     }

     public function finalizar()
     {
        return view('carrinho.finalizar');
     }

   public function destroy($id){

      carrinho::findOrFail($id)->delete();
       return redirect()->route('carrinho.index');
  }


}
