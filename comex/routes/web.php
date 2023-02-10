<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserCreateController;
use App\Http\Middleware\Autenticador;
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

    Route::get('/categorias/criar', 'Create')->name('categorias.create')->middleware(Autenticador::class);
    
    Route::post('/categorias/salvar', 'Store')->name('categorias.store')->middleware(Autenticador::class);

    Route::delete('/categorias/delete/{id}', 'Destroy')->name('categorias.destroy')->middleware(Autenticador::class);
});


Route::get('/login', [LoginController::class,'Index'])->name('login');
Route::post('/login', [LoginController::class,'Store'])->name('autentica');
Route::get('/logout', [LoginController::class,'Destroy'])->name('logout');


Route::get('login/user/create', [UserCreateController::class,'Index'])->name('user.create');
Route::post('login/user/create', [UserCreateController::class,'Store'])->name('user.store');