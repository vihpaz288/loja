<?php

namespace App\Http\Controllers;

use App\Models\pedidoItens;
use App\Models\pedidos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PedidosController extends Controller
{
    public function relatorio()
    {
        $pedidos = pedidoItens::select('produtoId', DB::raw('count(*) as pedidos_total'))
            ->groupBy('produtoId')
            ->with('produtos')
            ->get();
            $dataAtual = date('d-m-Y H:i:s');
        return view('Produtos.relatorio', compact('pedidos', 'dataAtual'));
    }
}
