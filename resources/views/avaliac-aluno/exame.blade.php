@extends('layouts.main')

@section('title', 'Exames-Aluno')
@section('conteudo')
<main id="main" class="main">
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
              <h1>Exames Especiais</h1>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro10">
              <option  disabled>Curso</option>
              @if (count($dados) > 0)
                <option value="{{$dados[0]->alunos->anoTurma[count($dados[0]->alunos->anoTurma) -1]->turma->curso->nome_curso}}">{{$dados[0]->alunos->anoTurma[count($dados[0]->alunos->anoTurma) -1]->turma->curso->nome_curso}}</option>
              @endif
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro11">
              <option disabled >Disciplina</option>
                @for ($i = 0; $i < count($disciplinas); $i++)
                    <option value="">{{$disciplinas[$i]->nome_disciplina}}</option>
                @endfor
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro12">
              <option disabled >Turma</option>
                @if (count($dados) > 0)
                    <option value="{{$dados[0]->alunos->anoTurma[count($dados[0]->alunos->anoTurma) -1]->turma->nome_turma}}">{{$dados[0]->alunos->anoTurma[count($dados[0]->alunos->anoTurma) -1]->turma->nome_turma}}</option>
                @endif
            </select>
          </div>
    </div>
    <form action="{{route('exame.especial')}}">
        @csrf
    <div class="procurar">
    <div class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="busca" class="campo-pesq">
        <button  title="Search"><i class="bi bi-search"></i></button>
    </div>
    </div>
    </form>
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
    <table id="avaliaca" class="table table-custom table-escuro display" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Nº do Processo</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">Nota</th>
          <th scope="col">ANO</th>
          <th scope="col">Examinar</th>
          <th scope="col">Histórico</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>

        @for ($i = 0; $i < count($disciplinas); $i++)
        <tr style="text-align: center;">
            <th scope="row">{{$dados[0]->aluno_id}}</th>
            <td>{{$dados[0]->alunos->candidato->pessoa->nome_completo}}</td>
            <td></td>
            <td>{{$dados[0]->ano_lectivos->ano_lectivo}}</td>
            <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" value="{{$disciplinas[$i]->disciplina_id}}" data-bs-target="#modal_assiduidade" >Realizar Exame</a>
            </td>
            <td style="text-align: center">
            <a href="{{route('historico.exame.especial', $dados[0]->aluno_id)}}" class="btn linkeditar">Exames do Aluno</a>
            </td>
            <td hidden>{{$dados[0]->alunos->anoTurma[count($dados[0]->alunos->anoTurma) -1]->turma->curso->nome_curso}}</td>
            <td hidden>{{$disciplinas[$i]->nome_disciplina}}</td>
            <td hidden>{{$dados[0]->alunos->anoTurma[count($dados[0]->alunos->anoTurma) -1]->turma->nome_turma}}</td>
        </tr>
        @endfor
                <!-- Início da Modal -->

          <!-- Fím da modal -->

        </tbody>
    </table>
    <!-- Cola aqui o código -->


    <form method="POST" action="">
        @csrf
      <div class="modal" id="modal_assiduidade" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog modal-xl">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Exame-Aluno</h5>
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
                    <th scope="col">Exame Nota</th>

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
              <button type="subimit" name="aluno_id" class="btn botaoazulnota" value="" >Realizar Exame</button>
          </div>
          </div>
      </div>
      </div>
    </form>
    </div>

  <!-- Termina a tabela -->
</main>
@endsection
