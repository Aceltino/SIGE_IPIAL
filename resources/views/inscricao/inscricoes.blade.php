@extends('layouts.APIinscricao')

@section('title', 'Alunos inscritos')


@section('conteudo')
<main id="main" class="main">
  <div id="conteudo">
    @if(session()->has('ErroCandidato'))
    <div class="alert alert-danger no-print">
    {{session('ErroCandidato')}}
    <button class="botaofecharerro">
      <i class="bi bi-x"></i>
    </button>
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

  <div class="row" id="conteudo">
    <div class="col no-print">
      <h1 class="no-print">Inscritos</h1>
    </div>
    <div class="col-lg-2 no-print">
      <select class="btn-sel form-select no-print" id="filtro5">
        <option class="no-print" selected disabled>Curso</option>
        <option class="no-print">Todos</option>
        @foreach($cursos as $curso)
        <option class="no-print" value="{{$curso['nome_curso']}}">{{$curso['nome_curso']}}</option>
        @endforeach

      </select>
  </div>
  </div>

  <div class="procurar" id="conteudo">
    <div class="proc-form d-flex align-items-center no-print">
      <input id="pesquisa" type="text" placeholder="Digite o código da inscrição ou o número do B.I do Candidato" name="" class="campo-pesq no-print">
      <button class="no-print"><i class="bi bi-search no-print"></i></button>
    </div>
  </div>
  <div id="conteudo" style="display: flex; justify-content: flex-end; align-items: center;">
    <div class="no-print">
      <button class="btn-imprimir no-print" id="Imprimir">Imprimir</button>
    </div>
    <!-- / Adicionar a condição se a data atual for menor a da final de matricula aparece o botão -->

    <!-- / Adicionar a condição se a data atual for menor a da final de matricula aparece o botão fin do coment+ario -->

  </div>
  <!-- /  Inicio da tabela de inscritos -->
  <div style="margin-top: 10px;" id="conteudo" >
    <a href="{{ route('admitir-inscritos') }}" class="btn btn-success no-print" style="  text-align: center">Ativar Admitido</a>
  </div>
  <table class="table table-custom table-escuro display" style="margin-top: 10px; text-align: center;"  id="inscricao">
    <thead id="conteudo">
      <tr style=" text-align: center;">
        <th scope="col">Número do BI</th>
        <th scope="col">Nome do Candidato</th>
        <th scope="col">Média</th>
        <th scope="col">Idade</th>
        <th scope="col">Curso</th>
        <th scope="col">Situação</th>
        <th class="no-print" scope="col">Matricular</th>
        <th class="no-print" scope="col">Ações</th>
      </tr>
    </thead>
    <tbody id="conteudo">
    </tbody>
  </table>

  <!-- Termina a tabela de inscritos -->


  <!--Inicio da modal ver inscrito-->


  <!--  / Termina a modal ver inscrito-->

</main>
@endsection
