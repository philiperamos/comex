<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function Index(Request $request){
         $categorias = new Categoria();

         $cat = $categorias->all();

         return view('categorias.index') -> with('categorias',$cat);
    }

    public function Create(){
        return view('categorias.create');
    }

    public function Store(Request $request){
        $nome = $request->input('nome');

        $categorias = new Categoria();

        $categorias->nome = $nome;
        $categorias->save();

        return redirect('/categorias');
    }
}


