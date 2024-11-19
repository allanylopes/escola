<?php

use App\Http\Controllers\AlunosControllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('alunos.listar');
})->name('site.home');

//rota para listar os alunos
Route::get('/alunos', [AlunosControllers::class, 'index'])->name('alunos.listar');

//rota para mostrar o form de cadastro
Route::get('/alunos/cadastrar', [AlunosControllers::class, 'cadastrar'])->name('alunos.cadastrar');

//rota para inseror o aluno no BD
Route::post('/alunos/cadastrar', [AlunosControllers::class, 'inserir'])->name('alunos.inserir');
