@extends('layouts.base')

@section('title', 'Alunos')
    
@section('content')
    <div class="container">
        <h1>Relação de Alunos</h1>

        <table class="table mt-5">
            <thead>
              <tr>
                <th scope="col">Matricula</th>
                <th scope="col">Nome</th>
                <th scope="col">Sobrenome</th>
                <th scope="col">Turma</th>
                <th scope="col">Telefone</th>
                <th scope="col">Endereço</th>
                <th scope="col">Idade</th>
                <th colspan="2" scope="col">Ação</th>
              </tr>
            </thead>
            <tbody>
              @foreach($alunos as $alu)
              <tr>
                <th scope="row">{{$alu->id}}</th>
                <td>{{$alu->nome}}</td>
                <td>{{$alu->sobrenome}}</td>
                <td>{{$alu->turma}}</td>
                <td>{{$alu->telefone}}</td>
                <td>{{$alu->endereco}}</td>
                <td>{{ \Carbon\Carbon::parse($alu->data_nascimento)->age}}</td>
                <td><a href=""><i class="fas fa-pencil-alt"></i></a></td>
                <td><a href=""><i class="fas text-danger fa-trash"></i></a></td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection