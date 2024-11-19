<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    //Nome da tabela que a model vai utilizar
    protected $table = 'alunos';

    //atributos que serão alimentado pela model
    protected $fillable = ['id', 'nome', 'sobrenome', 'turma', 'telefone', 'endereco', 'data_nascimento'];
}
