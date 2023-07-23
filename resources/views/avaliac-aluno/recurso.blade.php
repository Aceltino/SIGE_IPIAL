@extends('layouts.main')

@section('title', 'Recurso-Aluno')
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
              <h1>Recurso</h1>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" >
              <option  selected>Curso</option>
                @for ($i = 0; $i < count($dados); $i++)
                    @for ($j = 0; $j < count($dados[$i]); $j++)
                        <option value="{{$dados[$i][$j]['nome_curso']}}">{{$dados[$i][$j]['nome_curso']}}</option>
                    @endfor
                @endfor
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" >
              <option selected>Disciplina</option>
              @for ($i = 0; $i < count($dados); $i++)
                    @for ($j = 0; $j < count($dados[$i]); $j++)
                        <option value="{{$dados[$i][$j]['nome_disciplina']}}">{{$dados[$i][$j]['nome_disciplina']}}</option>
                    @endfor
                @endfor
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" >
              <option disabled  selected>Turma</option>
              @for ($i = 0; $i < count($dados); $i++)
                    @for ($j = 0; $j < count($dados[$i]); $j++)
                        <option value="{{$dados[$i][$j]['nome_turma']}}">{{$dados[$i][$j]['nome_turma']}}</option>
                    @endfor
                @endfor
            </select>
          </div>
    </div>
    <form action="{{route('recurso')}}">
        @csrf
    <div class="procurar">
    <div class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="busca" class="campo-pesq">
        <button type="submit"  title="Search"><i class="bi bi-search"></i></button>
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
    <form action="{{route('avaliar.aluno')}}" method="POST">
        @csrf
    <div class="form-group" style="display: flex; justify-content: end; margin-top: 4px;">
        <button class="btn botaoazul" name="tipo_prova" value="Recurso" type="submit" style="margin-right: 3px;">Avaliar Aluno(s)</button>
      </div>
    <!-- /  Inicio da tabela  -->
    <table  class="table table-custom table-escuro display" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Nº do Processo</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">Nota</th>
          <th scope="col">Ano Lectivo</th>
          <th scope="col">Nota</th>
          <th scope="col">Histórico</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>
        @for ($i = 0; $i < count($dados); $i++)
        @for ($j = 0; $j < count($dados[$i]); $j++)
        <tr style="text-align: center;">
            <th scope="row">{{$dados[$i][$j]['aluno_id']}}</th>
            <td>{{$dados[$i][$j]['nome_completo']}}</td>
            <td></td>
            <td>{{$dados[$i][$j]['ano_lectivo']}}</td>
            <td style="text-align: center">
                <input class="form-control innota"  type="text" name="nota_aluno[]" maxlength="4" id="notaimput">
                <input class="form-control innota"  type="text" name="aluno_id[]" value="{{$dados[$i][$j]['aluno_id']}}" maxlength="4" id="notaimput" hidden>
                <input class="form-control innota"  type="text" name="disciplina_id[]" value="{{$dados[$i][$j]['disciplina_id']}}" maxlength="4" id="notaimput" hidden>

                </td>
            <td style="text-align: center">
            <a href="{{route('historico.recurso', $dados[$i][$j]['aluno_id'])}}" class="btn linkeditar">Recursos</a>
            </td>
            <td hidden>{{$dados[$i][$j]['nome_curso']}}</td>
            <td hidden>{{$dados[$i][$j]['disciplina_id']}}</td>
            <td hidden>{{$dados[$i][$j]['nome_turma']}}</td>
        </tr>
        @endfor
        @endfor
                <!-- Início da Modal -->

          <!-- Fím da modal -->

        </tbody>
    </table>
</form>
    <!-- Cola aqui o código -->

    @for ($i = 0; $i < count($dados); $i++)
    @for ($j = 0; $j < count($dados[$i]); $j++)
    <form method="POST" action="{{route('avaliacao.aluno')}}">
        @csrf
      <div class="modal" id="modal_assiduidade{{$dados[$i][$j]['aluno_id']}}" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog modal-xl">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Recurso-Aluno</h5>
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
                    <th scope="col" hidden>Disciplina</th>
                    <th scope="col" hidden>Aluno</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td><input class="form-control innota" type="text" name="npp" maxlength="5" id="notaimput"></td>
                    <td hidden><input class="form-control innota" type="text" name="npp" maxlength="5" id="notaimput"></td>
                    <td hidden><input class="form-control innota" type="text" name="npp" maxlength="5" id="notaimput"></td>

                  </tr>
                </tbody>
              </table>

            </div>
          </div>
          <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
              <button type="button" class="btn botaovermelhonota" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" name="tipo_prova" value="Recurso" class="btn botaoazulnota" value="" >Realizar Recurso</button>
          </div>
          </div>
      </div>
      </div>
    </form>
    @endfor
    @endfor
    </div>

  <!-- Termina a tabela -->
</main>
@endsection
