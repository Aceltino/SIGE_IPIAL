@extends('layouts.main')

@section('title', 'Assiduidade De Aluno')

@section('conteudo')
<main id="main" class="main">

    @if (session()->has('erro'))
    <div class="alert alert-danger">
      <i class="bi bi-exclamation-octagon me-1"></i>
        {{session('erro')}}
        <button class="botaofecharerro">
          <i class="bi bi-x"></i>
        </button>
    </div>
    @endif
    @if (session()->has('sucesso'))
    <div class="alert alert-success">
      <i class="bi bi-check-circle me-1"></i>
        {{session('sucesso')}}
        <button class="botaofechasucesso">
          <i class="bi bi-x"></i>
        </button>
    </div>
    @endif
  <div class="pagetitle">
    <div class="row">
          <div class="col">
              <h1>Assiduidade De Aluno</h1>
          </div>


          <div class="col-lg-2">
            <select class="btn-sel form-select" >
                <option value="curso" selected>curso</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" >
                <option value="disciplina" selected>disciplina</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select">
                <option value="turma" selected>turma</option>
            </select>
          </div>
    </div>

  <div class="procurar">
  <div class="proc-form d-flex align-items-center">
      <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="" class="campo-pesq">
      <button  title="Search"><i class="bi bi-search"></i></button>
  </div>
  </div>

  <div class="bortabela">
    <div class="pagetitle">
        <div class="row">
            <div class="col datatabelapeddin">
                <h4 style="text-align: center">Data: {{date('d/m/Y')}}</h3>
            </div>
        </div>
    </div>
    <!-- /  Inicio da tabela  -->
    <table id="assiduidadetab" class="table table-custom table-escuro display" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Nº</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">F.Normais</th>
          <th scope="col">F.Vermelhas</th>
          <th scope="col">f.Material</th>
          <th scope="col">Marcar Falta</th>
          <th scope="col">justificar</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>

    </tbody>
  </table>
  </div>
  <!-- Termina a tabela -->

</main>
@endsection
