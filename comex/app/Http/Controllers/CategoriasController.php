<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function Index(Request $request){
         $categorias = new Categoria();

         $cat = $categorias->query()->orderBy('nome', 'asc')->get();

         $messageSuccess = $request->session()->get('messageSuccess');

         return view('categorias.index') 
                -> with('categorias',$cat)
                ->with('messageSuccess', $messageSuccess);
    }

    public function Create(){
        return view('categorias.create');
    }

    public function Store(Request $request){
        $nome = $request->nome;

        $validatedData = $request->validate([
          'nome' => ['required', 'min:3']
        ]);

        Categoria::create(['nome'=>$validatedData]);
        $request->session()->flash('messageSuccess', 'Registrado com sucesso!');
        

        return to_route('categorias.index');
    }
}


