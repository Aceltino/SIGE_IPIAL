@extends('layouts.main')

@section('title', 'Histórico Recurso')
@section('conteudo')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
          <div class="col">
              <h1>Histórico Recurso</h1>
          </div>
    </div>

    <div class="procurar">
    <div class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="" class="campo-pesq">
        <button  title="Search"><i class="bi bi-search"></i></button>
    </div>
    </div>

    <div class="nomenumeroaluno">
        <div class="col">
            <div class="row">
                <div class="col-lg-10">
                    <div class="nomenumeroalunoinfo">
                        <h5 style="margin-left: 3px;"> <b>Nome: {{$dados[0]->aluno->candidato->pessoa->nome_completo}}</b></h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="nofimnomenumeroaluno">
                        <h5 class="nomenumeroalunoinfo"> <b>Nº: {{$dados[0]->aluno->turmaAno[count($dados[0]->aluno->turmaAno) - 1]->numero_aluno}}</b></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="bortabela">
    <div class="pagetitle">
        <div class="row">
            <div class="col" style="padding-left: 25px; padding-top: 15px;">
                <h4 style="text-align: center">Data: {{date('d/m/Y')}}</h3>
            </div>
        </div>
    </div>
    <!-- /  Inicio da tabela  -->
    <table id="avaliacaotab" class="table table-striped" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Disciplina</th>
          <th scope="col">Nota</th>
          <th scope="col">Ediar Nota</th>
        </tr>
      </thead>
      <tbody>

        <tr style="text-align: center;">
            <td>{{date('d/m/Y', strtotime($dados[0]->created_at))}}</td>
            <td>{{$dados[0]->disciplina->nome_disciplina}}</td>
            <td>{{$dados[0]->nota_aluno}}</td>
            <td style="text-align: center">
            <a class="btn linkeditar" data-bs-toggle="modal" data-bs-target="#modal_assiduidade">Editar Nota</a>
            </td>
        </tr>

        </tbody>
    </table>
    <form method="POST" action="">
        @csrf
        @method('put')
      <div class="modal" id="modal_assiduidade" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog modal-xl">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Editar Recurso Aluno</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <div class="row">
                <div class="col-lg-10">
                    <div class="nomenumeroalunoinfo">
                        <h5 style="margin-left: 3px;"> <b>Nome:</b></h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="nofimnomenumeroaluno">
                        <h5 class="nomenumeroalunoinfo"> <b>Nº:</b></h5>
                    </div>
                </div>
              </div>
            <div class="bortabelasemscroll">
              <!-- /  Inicio da tabela  -->
              <table class="table table-custom table-escuro display" style="margin-top: 20px; width: 100%;" >
                <thead style="text-align: center">
                  <tr>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Recurso Nota</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td><input class="form-control innota" type="text" name="npp" maxlength="5" id="notaimput"></td>

                  </tr>
                </tbody>
              </table>

            </div>
          </div>
          <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
              <button type="button" class="btn botaovermelhonota" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" name="aluno_id" class="btn botaoazulnota" value="" >Confirmar Recurso</button>
          </div>
          </div>
      </div>
      </div>
    </form>
    </div>

  <!-- Termina a tabela -->
</main>
@endsection
