@extends('layouts.main')

@section('title', 'Alunos inscritos')


@section('conteudo')
<main id="main" class="main">
  @if(session()->has('ErroCandidato'))
  <div class="alert alert-danger">
  {{session('ErroCandidato')}}
  </div>
@endif

@if(session()->has('Sucesso'))
<div class="alert alert-success">
{{session('Sucesso')}}
</div>
@endif

  <div class="row">
    <div class="col">
      <h2>Inscritos</h2>
    </div>
    <div class="col-lg-2">
      <select class="btn-sel form-select" id="filtro5">
        <option selected disabled>Curso</option>
        @foreach($cursos as $curso)
        <option value="{{$curso['nome_curso']}}">{{$curso['nome_curso']}}</option>
        @endforeach

      </select>
  </div>

    <div class="col-lg-2">
      <select class="btn-sel form-select" id="filtro">
        <option selected disabled>Situação</option>
        <option>A/Admitido</option>
        <option>N/Admitido</option>
      </select>
    </div>
  </div>

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" type="text" placeholder="Digite o código da inscrição ou o número do B.I do Candidato" name="" class="campo-pesq">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div>
  <div style="display: flex; justify-content: flex-end; align-items: center;">
    <div >
      <button class="btn-imprimir">Imprimir<i class="bi bi-file-earmark-pdf"></i></button>
    </div>
    <!-- / Adicionar a condição se a data atual for menor a da final de matricula aparece o botão -->
    <div >
      <a href="{{ route('admitir-inscritos') }}" class="bth btnadmitir">Ativar Admitido</a>
    </div>
    <!-- / Adicionar a condição se a data atual for menor a da final de matricula aparece o botão fin do coment+ario -->

  </div>
  <!-- /  Inicio da tabela de inscritos -->

  <table class="table table-striped display" style="margin-top: 10px; text-align: center;" id="Inscricoes">
    <thead>
      <tr style=" text-align: center;">
        <th scope="col">Número do BI</th>
        <th scope="col">Nome do Candidato</th>
        <th scope="col">Média</th>
        <th scope="col">Idade</th>
        <th scope="col">Curso</th>
        <th scope="col">Situação</th>
        <th scope="col">Matricular</th>
        <th scope="col">Ações</th>
      </tr>
    </thead> 
    <tbody>
    </tbody>
  </table>

  <!-- Termina a tabela de inscritos -->


  <!--Inicio da modal ver inscrito-->
 

  <!--  / Termina a modal ver inscrito-->

</main>
@endsection
