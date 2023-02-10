<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Filesystem\Cloud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function Index(){
        return view('login.index');
    }

    public function Store(Request $request){
        if(!Auth::attempt($request->only(['email','password']))){
            return redirect()->back()->withErrors('Usuário ou senha inválidos');
        }
        else{
            return to_route('categorias.index');
        }

    }

    public function Destroy(Request $request){
        Auth::logout();
        return to_route('login');
    }
}
