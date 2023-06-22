@extends('layouts.main')

@section('title', 'Alunos Matriculados')

@section('conteudo')

<main id="main" class="main">

    @if(session()->has('ErroMatricula'))
    <div class="alert alert-danger">
    {{session('ErroMatricula')}}
    </div>
    @endif

    @if(session()->has('Sucesso'))
    <div class="alert alert-success">
    {{session('Sucesso')}}
    </div>
    @endif
    

  <div class="row">
    <div class="col">
      <h2>Matriculas</h2>
    </div>

      <div class="col-lg-2">
        <select class="btn-sel form-select">
          <option selected>Estado</option>
        </select>
      </div>

      <div class="col-lg-2">
        <select class="btn-sel form-select">
          <option selected>Turma</option>
        </select>
      </div>

      <div class="col-lg-2">
        <select class="btn-sel form-select">
          <option selected>Curso</option>
        </select>
      </div>


  </div>

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" placeholder='Digite o numéro de processo' type="text" name="" class="campo-pesq">
      <button type="submit" title="procurar"><i class="bi bi-search"></i></button>
    </form>
  </div>

  <div style="display: flex; justify-content: flex-end; align-items: center;">
    <button class="btn-imprimir">Imprimir <i class="bi bi-file-earmark-pdf-fill"></i></button>
  </div>
  <div >
    <a href="{{ route('matricula-validarTurma') }}" class="btn btn-success">Distribuir turma</a>
  </div>

  <!-- /  Inicio da tabela de inscritos -->
  <table class="table table-striped table-custom" id="matriculas">
    <thead>
      <tr style=" text-align: center;">
          <th scope="col">Nº Processo</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">Turma</th>
          <th scope="col">Idade</th>
          <th scope="col">Estado</th>
          <th scope="col">Curso</th>
          <th scope="col">Ações</th>
          <th scope="col"></th>
      </tr>
    </thead>
    <tbody style=" text-align: center;">

    </tbody>
  </table>
  <!-- Termina a tabela de matriculas -->

</main>
@endsection
