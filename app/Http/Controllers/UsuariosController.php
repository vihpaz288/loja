<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\User;
use App\Models\Usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
{


    public function index()
    {

        $search = request('search');

        if ($search){
            $produtos = Produtos::where([
                ['decricao', 'like', '%'.$search.'%']
            ])->get();
            
        }else{
            $produtos = Produtos::all();

        }
    
        return view('home', compact('produtos'));
    }

    public function home()
    {
        $produtos = Produtos::all();
       
        return view('home',  compact('produtos'));
    }

    public function create()
     {
        return view('create');
     }

     public function store(Request $request)
    {
         //dd($request->all());
        $senha = Hash::make($request->senha);

        User::create([
            'name' => $request->nome,
            'email' => $request->email,
            'permissaoID' => $request->permissaoID,
            'password' => $senha,
         ]);

         return to_route('login.create');
     }

     public function formulario(){
        return view ('Cliente.formulario');
     }


}
   

