<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login');
    }

    public function autenticacao(Request $request){
        if(auth()->attempt(['email'=>$request->email, 'password'=>$request->senha])){
            return redirect()->route('home');
        }
       
    }

    public function sair(){
        Auth::logout();

        return redirect()->route('home');
    }
}
