@extends('layouts.main')

@section('title', 'Editar Avaliação')

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
            <h1>Editar Avaliação</h1>
        </div>
    </div>
  </div>

    <div class="procurar">
        <div class="proc-form d-flex align-items-center">
            <input id="pesquisa" type="text" placeholder="Digite A Data da Avaliação que pretendes Atualizar a nota" name="" class="campo-pesq">
            <button><i class="bi bi-search"></i></button>
        </div>
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
    <table id="matricula-tab" class="table table-custom table-escuro" style="margin-top: 14px; " >
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
                <th scope="row">{{date('d/m/Y', strtotime($nota->created_at))}}</th>
                <td>{{$nota->tipo_prova}}</td>
                @if (number_format($nota->nota_aluno, 1, ".")<10)
                <td style="color: rgb(190, 14, 14)">{{number_format($nota->nota_aluno, 1, ".")}}</td>
                @else
                <td style="color: rgb(7, 7, 129)">{{number_format($nota->nota_aluno, 1, ".")}}</td>
                @endif
                <td style="text-align: center">
                  <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#Descricaonota{{$nota['nota_id']}}"></i>
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
    <form method="POST" action="{{route('update.nota.aluno', $nota['nota_id'])}}">
        @csrf
        @method('put')
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
              <table  class="table table-custom table-escuro" style="margin-top: 20px; width: 100%;" >
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
                    <td>{{date('d-m-Y', strtotime($nota->created_at))}}</td>
                    <td>{{$nota->tipo_prova}}</td>
                    <td><input class=" form-control innota" id="notaimput" value="{{$nota->nota_aluno}}" type="text" name="nota_aluno" maxlength="2"></td>
                    <td hidden>Informática</td>
                    <td hidden>Desenho técnico</td>
                    <td hidden>I12BT</td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="row" style="margin-top: 5px;">
              <div class="col">
                  <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none"  class="w-100"  rows="8" name="conteudo" id="area" placeholder="Dê uma Breve descrição sobre a Nota Adicionada(Opcional)">{{$nota->descricao_nota}}</textarea>
              </div>
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
<!-- Modal para visualizar a Descrição no Comunicado -->
@foreach ($notas as $nota)
    <div class="modal fade" id="Descricaonota{{$nota['nota_id']}}" tabindex="-1" data-bs-backdrop="false">
      <div class="modal-dialog modal-xl">
        <div class="modal-content">

          <div class="provisorio">
            <div class="card-icon-modal rounded-circle d-flex align-items-center justify-content-flex-end">

              <i class="bi bi-x-lg" data-bs-toggle="modal" aria-label="Close" data-bs-dismiss="modal"></i>
            </div>
          </div>

          <div class="cabecalho-modal">
            <div class="row">
              <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                <h1>Descrição Da Nota</h1>
              </div>
            </div>
          </div>

          <div class="corpo-modal">
            <div class="form-inativo">

                  <div class="row">
                      <div class="col">
                          <textarea class="form-control" style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100 "  rows="13" name="conteudo"  id="area" placeholder="Não foi inserido nenhuma descrição" readonly disabled>{{$nota->descricao_nota}}</textarea>
                      </div>
                  </div>


                    <div class="footer-modal" style="text-align: center;">

                      <div class="jnt">
                          <a class="btn" data-bs-toggle="modal" aria-label="Close" data-bs-dismiss="modal" style="background-color: #070b17; color: #fff;">Retroceder</a>

                          <a class="btn" data-bs-toggle="modal" data-bs-target="#modal_assiduidade{{$nota['nota_id']}}" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                      </div>
                    </div>

            </div>
          </div>

        </div>
      </div>
    </div>
@endforeach
</main>
@endsection
