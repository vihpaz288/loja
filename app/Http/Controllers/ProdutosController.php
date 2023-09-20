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

   public function store(Request $request)
   {
    
      $path = $request->file("foto")->store('produtos', 'public');
      Produtos::create([
         'decricao' => $request->decricao,
         'precoUnitario' => $request->precoUnitario,
         'quantidade' => $request->quantidade,
         'foto' => $path,
      ]);

      return redirect()->route('teste');
   }

   public function destroy($id)
   {
      Produtos::findOrFail($id)->delete();
      return redirect()->route('teste');
   }

   public function edit($id)
   {
      $produtos = Produtos::findOrFail($id);

      return view('Produtos.edit', ['produtos' => $produtos]);
   }

   public function update(Request $request)
   {
      Produtos::findOrFail($request->id)->update($request->all());
      
      return redirect()->route('teste');
   }
}
