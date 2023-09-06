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
       
        return view('carrinho.index', compact('itens'));
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

    //  public function destroy($id){

    //      Produtos::findOrFail($id)->delete();
    //     return redirect()->route('carrinho.create');
    //  }

    // public function edit($id){
    //     $produtos = Produtos::findOrFail($id);

    //     return view('carrinho.edit', ['produtos' => $produtos]);

    //  }

    //  public function update(Request $request){
   

    //      Produtos::findOrFail($request->id)->update($request->all());


    //     return redirect()->route('carrinho.create');
    //  }

}
