@extends('layouts.main')

@section('title', 'Assiduidade De Aluno')

@section('conteudo')
<main id="main" class="main">
    {{dd($cursos)}}
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
              <h1>Assiduidade De Aluno</h1>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro8">
              <option  disabled>Curso</option>
              @foreach ($cursos as $curso)
                <option value="{{$curso}}">{{$curso}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro9">
              <option disabled >Disciplina</option>
              @foreach ($nome_disciplina as $disciplina)
                <option value="{{$disciplina}}">{{$disciplina}}</option>
              @endforeach
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro10">
              <option disabled >Turma</option>
              @foreach ($nome_turma as $turma)
                <option value="{{$turma}}">{{$turma}}</option>
              @endforeach
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
    <table id="assidu" class="table table-striped" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Nº</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">F.Normais</th>
          <th scope="col">F.Vermelhas</th>
          <th scope="col">f.Outro</th>
          <th scope="col">Marcar Falta</th>
          <th scope="col">justificar</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>
        @if (!empty($alunos))
          @foreach ($alunos as $chave1 => $valor1)

            @foreach ($valor1 as $chave2 => $valor2)

                @foreach ($valor2 as $chave3 => $valor3)

                    <tr style="text-align: center;">
                        <th scope="row">{{$valor3['numero_aluno']}}</th>
                        <td>{{$valor3['nome']}}</td>
                        <td>{{$valor3['falta_presencial']}}</td>
                        <td>{{$valor3['falta_disciplinar']}}</td>
                        <td>{{$valor3['falta_material']}}</td>
                        <td>
                            <a class="btn botaoazul" data-bs-toggle="modal" data-bs-target="#modal_assiduidade{{$valor3['aluno_id']}}{{$valor3['disciplina_id']}}">Normal</a>
                            <a class="btn botaovermelho" data-bs-toggle="modal" data-bs-target="#modal_assiduidade{{$valor3['aluno_id']}}{{$valor3['disciplina_id']}}">Vermelha</a>
                            <a class="btn botaopreto" data-bs-toggle="modal" data-bs-target="#modal_assiduidade{{$valor3['aluno_id']}}{{$valor3['disciplina_id']}}">Outra</a>
                          </td>
                          <td style="text-align: center">
                            <a href="{{route('editar.assiduidade', [$valor3['aluno_id'], $valor3['disciplina_id']])}}" class="btn linkeditar">Justificar</a>
                          </td>

                        <td hidden>{{$valor3['curso']}}</td>
                        <td hidden>{{$valor3['nome_disciplina']}}</td>
                        <td hidden>{{$valor3['nome_turma']}}</td>
                    </tr>
                @endforeach
            @endforeach
        @endforeach
    </tbody>
  </table>
  </div>
  <!-- Termina a tabela -->
  @foreach ($alunos as $chave1 => $valor1)

  @foreach ($valor1 as $chave2 => $valor2)

      @foreach ($valor2 as $chave3 => $valor3)

    <!-- Início da Modal -->
    <form method="POST" action="{{route('marcar.falta', [$valor3['aluno_id'], $valor3['disciplina_id'], $valor3['turma_id'], $professor[$chave1]['professor_disciplina_id']])}}">
        @csrf
      <div class="modal" id="modal_assiduidade{{$valor3['aluno_id']}}{{$valor3['disciplina_id']}}" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Marcar Falta</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="alert alert-warning" role="alert">
                      <h6>Atenção: Estás a Marcar uma falta presencial ao Aluno(a) !! </h6><h6> Estás prestes a inserir uma falta no dia {{date('d/m/Y')}} ao Aluno(a) {{$valor3['nome']}}</h6>
                      <h5>Deseja Realmente Continuar?</h5>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100"  rows="5" name="conteudo"  id="area" placeholder="Descreve ou não a causa da Marcação da Falta"></textarea>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" class="btn btn-primary" name="tipo_falta" value="Presencial">Confirmar</button>
          </div>
          </div>
      </div>
      </div>
  </form>
  @endforeach
  @endforeach
@endforeach
<!-- Fím da modal -->
@endif
</main>
@endsection
