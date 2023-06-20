@extends('layouts.main')

@section('title', 'Editar Avaliação')

@section('conteudo')
<main id="main" class="main">
  <div class="pagetitle">
    <div class="row">
        <div class="col">
            <h1>Editar Avaliação</h1>
        </div>
    </div>
  </div>

    <div class="procurar">
        <form class="proc-form d-flex align-items-center">
            <input id="pesquisa" type="text" placeholder="Digite A Data da Avaliação que pretendes Atualizar a nota" name="" class="campo-pesq">
            <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
    </div>

    <div class="nomenumeroaluno">
        <div class="col">
            <div class="row">
                <div class="col-lg-10">
                    <div class="nomenumeroalunoinfo">
                        <h5 style="margin-left: 3px;"> <b>Nome:</b> {{$notas[0]->aluno->candidato->pessoa->nome_completo}}</h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="nofimnomenumeroaluno">
                        <h5 class="nomenumeroalunoinfo"> <b>Nº:</b> {{$notas[0]->aluno->turmas[0]->numero_aluno}}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

  <div class="bortabelaeditar">
    <div class="pagetitle">
        <div class="row">
            <div class="col">
                <div style="text-align: center;">
                    <h1 style="font-size: 24px;">Histórico de Avaliação</h1>
                </div>
            </div>
        </div>
      </div>
    <!-- /  Inicio da tabela  -->
    <table id="matricula-tab" class="table table-striped" style="margin-top: 14px; " >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Tipo de Nota</th>
          <th scope="col">Nota</th>
          <th scope="col">Editar</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($notas as $nota)
            <tr style="text-align: center;">
                <th scope="row">{{$nota->data_avaliacao}}</th>
                <td>{{$nota->tipo_prova}}</td>
                <td>{{$nota->nota_aluno}}</td>
                <td style="text-align: center">
                <a class="btn linkeditar" data-bs-toggle="modal" data-bs-target="#modal_assiduidade{{$nota['nota_id']}}">Editar Nota do Aluno</a>
                </td>
            </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <!-- Termina a tabela -->

    <!-- Início da Modal -->
    @foreach ($notas as $nota)
    <form method="POST" action="">
      <div class="modal" id="modal_assiduidade{{$nota['nota_id']}}" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog modal-xl">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Avaliar Aluno</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <div class="row">
                <div class="col-lg-10">
                    <div class="nomenumeroalunoinfo">
                        <h5 style="margin-left: 3px;"> <b>Nome:</b> {{$notas[0]->aluno->candidato->pessoa->nome_completo}}</h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="nofimnomenumeroaluno">
                        <h5 class="nomenumeroalunoinfo"> <b>Nº:</b> {{$notas[0]->aluno->turmas[0]->numero_aluno}}</h5>
                    </div>
                </div>
              </div>
            <div class="bortabelasemscroll">
              <!-- /  Inicio da tabela  -->
              <table  class="table table-striped" style="margin-top: 20px; width: 100%;" >
                <thead style="text-align: center">
                  <tr>
                    <th scope="col">Data</th>
                    <th scope="col">Tipo de Nota</th>
                    <th scope="col">Nota</th>
                    <th scope="col" hidden>curso</th>
                    <th scope="col" hidden>Disciplina</th>
                    <th scope="col" hidden>Turma</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="text-align: center;">
                    <td>{{$nota->data_avaliacao}}</td>
                    <td>{{$nota->tipo_prova}}</td>
                    <td><input class=" form-control innota" value="{{$nota->nota_aluno}}" type="text" name="" maxlength="2"></td>
                    <td hidden>Informática</td>
                    <td hidden>Desenho técnico</td>
                    <td hidden>I12BT</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
              <button type="button" class="btn botaovermelhonota" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" class="btn linkeditarnota" >Editar Nota</button>
          </div>
          </div>
      </div>
      </div>
    </form>
    @endforeach
<!-- Fím da modal -->

</main>
@endsection
