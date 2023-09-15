<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutosFormRequest;
use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{

     public function create()
     {
        return view('Produtos.create');
     }

     public function store(ProdutosFormRequest $request)
    {
      
         //dd($request->all());
     $path = $request->file("foto1")->store('produtos', 'public');
     $path2 = $request->file("foto2")->store('produtos', 'public');
     $path3 = $request->file("foto3")->store('produtos', 'public');

        
        Produtos::create([
            'decricao' => $request->decricao,
            'precoUnitario' => $request->precoUnitario,
            'quantidade' => $request->quantidade,
            'foto1' => $path,
            'foto2' => $path2,
            'foto3' => $path3,

         ]);

         return redirect()->route('home');
     }

     public function destroy($id){

         Produtos::findOrFail($id)->delete();
        return redirect()->route('home');
     }

    public function edit($id){
        $produtos = Produtos::findOrFail($id);

        return view('Produtos.edit', ['produtos' => $produtos]);

     }

     public function update(Request $request){
   

         Produtos::findOrFail($request->id)->update($request->all());


        return redirect()->route('home');
     }

}
