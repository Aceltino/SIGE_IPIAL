@extends('layouts.main')

@section('title', 'Avaliar Aluno')
@section('conteudo')
<main id="main" class="main">
    @if (session()->has('erro'))
    <div class="alert alert-danger">
        {{session('erro')}}
    </div>
    @endif
    @if (session()->has('sucesso'))
    <div class="alert alert-success">
        {{session('sucesso')}}
    </div>
    @endif
  <div class="pagetitle">
    <div class="row">
          <div class="col">
              <h1>Avaliação de Aluno</h1>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro10">
              <option  disabled>Curso</option>
              <option value="Tecnico de Informática">Informática</option>
              <option value="Instalaçoes electricas">Técnico de Energia e Instalações Electricas</option>
              <option value="construção civil">construção civil</option>
              <option value="Electronica e Telecomunicação">Electronica e Telecomunicação</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro11">
              <option disabled >Disciplina</option>
              <option value="MATEMÁTICA">MATEMÁTICA</option>
              <option value="Programação">Técnicas de Linguagem de Programação</option>
              <option value="Língua Portuguêsa">Língua Portuguêsa</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro12">
              <option disabled >Turma</option>
              <option value="I10AM" selected>I10AM</option>
              <option value="I10BM">I10BM</option>
              <option value="IE10BM">IE10BM</option>
              <option value="CT10AM">CT10AM</option>
            </select>
          </div>
    </div>

    <div class="procurar">
    <form class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="" class="campo-pesq">
        <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
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
    <table id="tabela" class="table table-striped" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Nº</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">MAC</th>
          <th scope="col">NPP</th>
          <th scope="col">NPT</th>
          <th scope="col">Exame</th>
          <th scope="col">E.Recurso</th>
          <th scope="col">Avaliar</th>
          <th scope="col">Ediatr avaliação</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>
        @if (!empty($aluno))
          @for ($i = 0; $i < count($aluno); $i++)
            @for ($j = 0; $j < count($aluno[$i]); $j++)
                <tr style="text-align: center;">
                    <th scope="row">{{$aluno[$i][$j]['numero_aluno']}}</th>
                    <td>{{$aluno[$i][$j]['nome']}}</td>
                    <td>{{$aluno[$i][$j]['mac']}}</td>
                    <td>{{$aluno[$i][$j]['npp']}}</td>
                    <td>{{$aluno[$i][$j]['npt']}}</td>
                    <td>{{$aluno[$i][$j]['exame']}}</td>
                    <td>{{$aluno[$i][$j]['exame_recurso']}}</td>
                    <td style="text-align: center">
                    <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade{{$aluno[$i][$j]['aluno_id']}}" >Avaliar aluno</a>
                    </td>
                    <td style="text-align: center">
                    <a href="{{route('editar.avaliacao.aluno', [$aluno[$i][$j]['aluno_id'], $aluno[$i][$j]['disciplina_id']])}}" class="btn linkeditar">Editar Avaliação</a>
                    </td>
                    <td hidden>{{$aluno[$i][$j]['curso']}}</td>
                    <td hidden>{{$aluno[$i][$j]['nome_disciplina']}}</td>
                    <td hidden>{{$aluno[$i][$j]['nome_turma']}}</td>
                </tr>
                             <!-- Início da Modal -->

          <!-- Fím da modal -->

            @endfor
          @endfor

        </tbody>
    </table>
    @for ($i = 0; $i < count($aluno); $i++)
            @for ($j = 0; $j < count($aluno[$i]); $j++)
    <form method="POST" action="{{route('avaliar.aluno', $aluno[$i][$j]['disciplina_id'])}}">
        @csrf
      <div class="modal" id="modal_assiduidade{{$aluno[$i][$j]['aluno_id']}}" tabindex="-1" data-bs-backdrop="false" >
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
                        <h5 style="margin-left: 3px;"> <b>Nome:</b> {{$aluno[$i][$j]['nome']}}</h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="nofimnomenumeroaluno">
                        <h5 class="nomenumeroalunoinfo"> <b>Nº:</b>{{$aluno[$i][$j]['numero_aluno']}}</h5>
                    </div>
                </div>
              </div>
            <div class="bortabelasemscroll">
              <!-- /  Inicio da tabela  -->
              <table class="table table-striped" style="margin-top: 20px; width: 100%;" >
                <thead style="text-align: center">
                  <tr>
                    <th scope="col">AC</th>
                    <th scope="col">NPP</th>
                    <th scope="col">NPT</th>
                    <th scope="col">Exame</th>
                    <th scope="col">E.Recurso</th>

                  </tr>
                </thead>
                <tbody>

                    <td><input class=" form-control innota" type="text" name="ac" maxlength="2"></td>
                    <td><input class=" form-control innota " type="text" name="npp" maxlength="2"></td>
                    <td><input class=" form-control innota" type="text" name="npt" maxlength="2"></td>
                    <td><input class=" form-control innota" type="text" name="exame" maxlength="2"></td>
                    <td><input class=" form-control innota" type="text" name="exame_recurso" maxlength="2"></td>
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
          <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
              <button type="button" class="btn botaovermelhonota" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" name="aluno_id" class="btn botaoazulnota" value="{{$aluno[$i][$j]['aluno_id']}}" >Avaliar Aluno</button>
          </div>
          </div>
      </div>
      </div>
    </form>
    @endfor
    @endfor
  </div>
  @endif
  <!-- Termina a tabela -->



</main>
@endsection
