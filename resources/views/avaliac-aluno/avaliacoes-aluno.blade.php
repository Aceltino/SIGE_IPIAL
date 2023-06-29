@extends('layouts.main')

@section('title', 'Avaliar Aluno')
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
              <h1>Avaliação de Aluno</h1>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro10">
              <option  disabled>Curso</option>
              @foreach ($cursos as $curso)
                <option value="{{$curso}}">{{$curso}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro11">
              <option disabled >Disciplina</option>
              @if (isset($nome_disciplina))
                @foreach ($nome_disciplina as $disciplina)
                    <option value="{{$disciplina}}">{{$disciplina}}</option>
                @endforeach
              @endif
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro12">
              <option disabled >Turma</option>
              @if (isset($nome_turma))
                @foreach ($nome_turma as $turma)
                    <option value="{{$turma}}">{{$turma}}</option>
                @endforeach
              @endif
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
          <th scope="col">Nº</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">MAC</th>
          <th scope="col">NPP</th>
          <th scope="col">NPT</th>
          <th scope="col">Exame</th>
          <th scope="col">E.Recurso</th>
          <th scope="col">Avaliar</th>
          <th scope="col">Histórico</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>
        @if (!empty($aluno))
          @foreach ($aluno as $chave1 => $valor1)

            @foreach ($valor1 as $chave2 => $valor2)

                @foreach ($valor2 as $chave3 => $valor3)

                    <tr style="text-align: center;">
                        <th scope="row">{{$valor3['numero_aluno']}}</th>
                        <td>{{$valor3['nome']}}</td>
                        <td>{{$valor3['mac']}}</td>
                        <td>{{$valor3['npp']}}</td>
                        <td>{{$valor3['npt']}}</td>
                        <td>{{$valor3['exame']}}</td>
                        <td>{{$valor3['exame_recurso']}}</td>
                        <td style="text-align: center">
                        <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade{{$valor3['aluno_id']}}" >Avaliar aluno</a>
                        </td>
                        <td style="text-align: center">
                        <a href="{{route('editar.avaliacao.aluno', [$valor3['aluno_id'], $valor3['disciplina_id']])}}" class="btn linkeditar">Avaliações Aluno</a>
                        </td>
                        <td hidden>{{$valor3['curso']}}</td>
                        <td hidden>{{$valor3['nome_disciplina']}}</td>
                        <td hidden>{{$valor3['nome_turma']}}</td>
                    </tr>
                <!-- Início da Modal -->

          <!-- Fím da modal -->
                @endforeach
            @endforeach
          @endforeach

        </tbody>
    </table>
    <!-- Cola aqui o código -->
    
  @endif

  <!-- Termina a tabela -->
</main>
@endsection
