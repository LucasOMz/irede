<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/teste', function () {
    return "TEST1";
});

Route::get('/lista-usuarios', function () {
    $usuarios = User::all(); ##variável listar todos os usuários da tabela User.

   ## dd($usuarios); ##para verificar se a informação está sendo puxada.

    return view('listaUsuarios', compact('usuarios'));  #entre aspas simples, puxando da listaUsuarios.blade.php em views. //compact serve para puxar a informação
})->name('lista-usuarios');