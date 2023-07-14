@extends('layouts.main')

@section('title', 'Avaliar Aluno')
@section('conteudo')
<main id="main" class="main">

    <!--coloca aqui as mensagem de erro -->

   @if (session()->has('erro'))
    <div class="alert alert-danger">
        {{session('erro')}}
        <button class="botaofecharerro">
          <i class="bi bi-x"></i>
        </button>
    </div>
    @endif
    @if (session()->has('sucesso'))
    <div class="alert alert-success">
        {{session('sucesso')}}
        <button class="botaofechasucesso">
          <i class="bi bi-x"></i>
        </button>
    </div>
    @endif

  <div class="pagetitle">
    <div class="row">
          <div class="col">
              <h1>Avaliação de Aluno</h1>
          </div>


          <div class="col-lg-2">
            <select class="btn-sel form-select" id="">
                    <option value="" selected>Curso</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="">
                    <option value="" selected>Disciplina</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="">
                    <option value="" selected>turma</option>
            </select>
          </div>
    </div>

    <div class="procurar">
    <div class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="" class="campo-pesq">
        <button  title="Search"><i class="bi bi-search"></i></button>
    </div>
    </div>
  </div>
  <div class="bortabela" style="box-shadow: 0 5px 15px 0 rgba(82, 63, 105, 0.2); border: 1px solid white; border-radius: 3px; padding: 2px;">
    <div class="pagetitle">
        <div class="row">
            <div class="col" style="padding-left: 25px; padding-top: 15px;">
                <h4 style="text-align: center">Data: {{date('d/m/Y')}}</h3>
            </div>
        </div>
    </div>
    <!-- /  Inicio da tabela  -->
    <table id="avaliacaotab" class="table table-custom table-escuro display" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Nº</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">MAC</th>
          <th scope="col">NPP</th>
          <th scope="col">NPT</th>
          <th scope="col">Exame</th>
          <th scope="col">Avaliar</th>
          <th scope="col">Histórico</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</main>
@endsection
