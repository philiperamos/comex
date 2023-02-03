<?php

use App\Http\Controllers\CategoriasController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::controller(CategoriasController::class)->group(function(){
    Route::get('/categorias', 'Index')->name('categorias.index');

    Route::get('/categorias/criar', 'Create')->name('categorias.create');
    
    Route::post('/categorias/salvar', 'Store')->name('categorias.store');
});