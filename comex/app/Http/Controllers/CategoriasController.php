<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function Index(Request $request)
    {
        $categorias = new Categoria();

        $cat = $categorias->query()->orderBy('nome', 'asc')->get();

        $messageSuccess = $request->session()->get('messageSuccess');
        $messageError = $request->session()->get('messageError');

        return view('categorias.index')
            ->with('categorias', $cat)
            ->with('messageSuccess', $messageSuccess)
            ->with('messageError',$messageError);
            
    }

    public function Create()
    {
        return view('categorias.create');
    }

    public function Store(Request $request)
    {
        $nome = $request->nome;

        $validatedData = $request->validate([
            'nome' => ['required', 'min:3']
        ]);

        Categoria::create($validatedData);
        $request->session()->flash('messageSuccess', 'Registrado com sucesso!');


        return to_route('categorias.index');
    }

    // public function Destroy(Categoria $categoria, Request $request)
    // {
        
    //         $categoria->delete();
    //         $request->session()->flash('messageSuccess', 'Categoria {{$categoria->nome}} deletado!');
        
    //     // return to_route('categorias.index');
    // }

    public function Destroy(Request $request)
    {
        
            $categoria=$request->id;

            Categoria::destroy($categoria);

            $request->session()->flash('messageSuccess', "Categoria deletada!");
        
        return to_route('categorias.index');
    }
}
