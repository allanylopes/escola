<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunosControllers extends Controller
{
    public function index(){
        //recuperar todos os dados da tabela alunos
        $alunos = Aluno::all();
        //alunos.index = caminho da view
        //alunos => $alunos = enviamos os dados da tablea alunos para a view em forma de um array associativos
        return view('alunos.index', ['alunos' => $alunos]);
    }

    public function cadastrar(){
        return view('alunos.cadastrar');
    }
    public function inserir(Request $request){
        //validando os dados que irão vir do form
        $validateData = $request->validate([
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'turma' => 'required|string|max:50',
            'telefone' => 'required|string|max:20',
            'endereco' => 'required|string|max:255',
            'data_nascimento' => 'required|date',
        ]);
        //cria um novo registro no BD
        $aluno = Aluno::create($validateData);
        return redirect()->route('alunos.cadastrar')->with('success', 'Aluno cadastrado com sucesso.');
    }
}
