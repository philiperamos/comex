<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function Index(Request $request){
         $categorias = ['CELULARES','INFORMÁTICA', 'MÓVEIS', 'AUTOMOTIVA', 'LIVROS', 'BELEZA', 'ESPORTE', 'LUXO'];

         return view('categorias.index') -> with('categorias',$categorias);
    }
}
