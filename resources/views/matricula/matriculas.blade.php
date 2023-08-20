@extends('layouts.APImatricula')

@section('title', 'Alunos Matriculados')

@section('conteudo')

<main id="main" class="main">

  <div id="conteudo">

    @if(session()->has('ErroMatricula'))
    <div class="alert alert-danger no-print">
    {{session('ErroMatricula')}}
    <button class="botaofecharerro">
      <i class="bi bi-x"></i>
    </button>
    </div>
    @endif

    @if(session()->has('success'))
    <div class="alert alert-success no-print">
    {{session('success')}}
    </div>
    @endif

    @if(session()->has('Sucesso'))
    <div class="alert alert-success no-print">
    {{session('Sucesso')}}
    <button class="botaofechasucesso">
      <i class="bi bi-x"></i>
    </button>
    </div>
    @endif
  </div>

  <div class="row"id="conteudo">
    <div class="col no-print">
      <h1 class="no-print">Matriculas</h1>
    </div>

      <div class="col-lg-2 no-print">
        <select class="btn-sel form-select no-print" id="filtro5">
          <option class="no-print" selected disabled>Estado</option>
          <option class="no-print" value="Todos">Todos</option>
          <option class="no-print" >Em curso</option>
          <option class="no-print" >RPF</option>
          <option class="no-print" >Anulou a Matricula</option>
          <option class="no-print" >Não Transita</option>
        </select>
      </div>

      <div class="col-lg-2 no-print">
        <select class="btn-sel form-select no-print" id="filtro3">
          <option class="no-print" selected disabled>Turma</option>
          <option class="no-print">Todos</option>
          @foreach($turmas as $turma)
          <option class="no-print" value="{{$turma['nome_turma']}}">{{$turma['nome_turma']}}</option>
          @endforeach
        </select>
      </div>

      <div class="col-lg-2 no-print">
        <select class="btn-sel form-select no-print" id="filtro">
          <option class="no-print" selected disabled>Curso</option>
          <option  class="no-print" value="Todos">Todos</option>
          @foreach($cursos as $curso)
          <option class="no-print" value="{{$curso['nome_curso']}}">{{$curso['nome_curso']}}</option>
          @endforeach

        </select>
    </div>
  </div>

  <div class="procurar" id="conteudo">
    <form class="proc-form d-flex align-items-center no-print">
      <input id="pesquisa" placeholder='Digite o numéro de processo' type="text" name="" class="campo-pesq no-print">
      <button type="submit" title="procurar" class="no-print"><i class="bi bi-search no-print"></i></button>
    </form>
  </div>

  <div id="conteudo" style="display: flex; justify-content: flex-end; align-items: center;">
    <button class="btn-imprimir no-print" id="ImprimirMatricula">Imprimir <i class="bi bi-file-earmark-pdf-fill no-print"></i></button>
  </div>
  <div id="conteudo">
    <a href="{{ route('matricula-validarTurma') }}" class="btn btn-success no-print">Distribuir turma</a>
  </div>

  <!-- /  Inicio da tabela de inscritos -->
  <table class="table table-custom table-escuro" id="matriculas">
    <thead>
      <tr style=" text-align: center;" id="conteudo">
          <th scope="col">Nº Processo</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">Turma</th>
          <th scope="col">Idade</th>
          <th class="no-print" scope="col">Estado</th>
          <th scope="col">Curso</th>
          <th class="no-print" scope="col">Ações</th>
          <th class="no-print" scope="col"></th>
      </tr>
    </thead>
    <tbody style=" text-align: center;"  id="conteudo">

    </tbody>
  </table>
  <!-- Termina a tabela de matriculas -->

</main>
@endsection
