<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{

     public function create()
     {
      $produtos = Produtos::all();
       
      return view('carrinho.index',  compact('produtos'));
     }

     public function store(Request $request)
    {
         //dd($request->all());
     $path = $request->file("foto")->store('produtos', 'public');
        
        Produtos::create([
            'decricao' => $request->decricao,
            'precoUnitario' => $request->precoUnitario,
            'quantidade' => $request->quantidade,
            'foto' => $path
         ]);

         return redirect()->route('home');
     }

     public function destroy($id){

         Produtos::findOrFail($id)->delete();
        return redirect()->route('home');
     }

    public function edit($id){
        $produtos = Produtos::findOrFail($id);

        return view('carrinho.edit', ['produtos' => $produtos]);

     }

     public function update(Request $request){
   

         Produtos::findOrFail($request->id)->update($request->all());


        return redirect()->route('home');
     }

}
