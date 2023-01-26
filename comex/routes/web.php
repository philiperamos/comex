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

Route::get('/categorias', [CategoriasController::class,'Index']);

Route::get('/categorias/criar', [CategoriasController::class,'Create']);

Route::post('/categorias/salvar', [CategoriasController::class,'Store']);

