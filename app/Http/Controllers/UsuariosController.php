<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserFormRequest;
use App\Models\carrinho;
use App\Models\Produtos;
use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{


    public function home()
    {
        if (auth()->check()) {
            $itens = carrinho::with('produtos')->where('usuarioID', auth()->user()->id)->get();
        } else {
            $itens = 0;
        }
        $search = request('search');

        if ($search) {
            $produtos = Produtos::where([
                ['decricao', 'like', '%' . $search . '%']
            ])->get();
        } else {
            $produtos = Produtos::all();
        }

        return view('home', compact('produtos', 'itens'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(UserFormRequest $request)
    {
        //dd($request->all())


        $senha = Hash::make($request->password);
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'permissaoID' => $request->permissaoID,
            'password' => $senha,
        ]);


        return to_route('login.create');
    }

    public function formulario()
    {
        return view('Cliente.formulario');
    }
}
