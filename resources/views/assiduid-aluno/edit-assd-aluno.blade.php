@extends('layouts.main')

@section('title', 'Editar Assiduidade')

@section('conteudo')
<main id="main" class="main">
    <div>
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
    </div>
  <div class="pagetitle">
    <div class="row">
        <div class="col">
            <h1>Editar Assiduidade</h1>
        </div>
    </div>
  </div>

    <div class="procurar">
        <div class="proc-form d-flex align-items-center">
            <input id="pesquisa" type="text" placeholder="Digite A Data da falta que pretendes justificar" name="" class="campo-pesq">
            <button  title="Search"><i class="bi bi-search"></i></button>
        </div>
    </div>

    <div class="nomenumeroaluno">
        <div class="col">
            <div class="row">
                <div class="col-lg-10">
                    <div class="nomenumeroalunoinfo">
                        <h5 style="margin-left: 3px;"> <b>Nome:</b>  {{$assiduidade[0]->aluno->candidato->pessoa->nome_completo}}</h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="nofimnomenumeroaluno">
                        <h5 class="nomenumeroalunoinfo"> <b>Nº:</b> {{$assiduidade[0]->aluno->turmas[0]->numero_aluno}}</h5>
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
                    <h1 style="font-size: 24px;">Histórico de Assiduidade</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- /  Inicio da tabela  -->
    <table id="matricula-tab" class="table table-custom table-escuro display" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Data</th>
          <th scope="col">Tempo</th>
          <th scope="col">Trimestre</th>
          <th scope="col">Tipo de falta</th>
          <th scope="col">Estado</th>
          <th scope="col">Justificar</th>
          <th scope="col">Descrição</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($assiduidade as $key => $assid)
            <tr style="text-align: center;">
                <th scope="row">{{date('d/m/Y', strtotime($assid->created_at))}}</th>
                <td>{{$assid->tempo->tempo}}</td>
                <td>{{$trimestre[0]->trimestre}}</td>
                <td>{{$assid->tipo_falta}}</td>
                <td>{{$assid->status_falta}}</td>
                <td style="text-align: center">
                    <a class="btn linkeditar" data-bs-toggle="modal" data-bs-target="#modal_assiduidade{{$assid['assiduidade_id']}}">Justificar</a>
                </td>
                <td> <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#Descricaoassid{{$assid['assiduidade_id']}}"></i></td>
                </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <!-- Termina a tabela -->

    <!-- Início da Modal -->
    @foreach ($assiduidade as $assid)
    <form method="POST" action="{{route('justificar.falta', $assid->assiduidade_id)}}">
        @csrf
        @method('put')
      <div class="modal" id="modal_assiduidade{{$assid['assiduidade_id']}}" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Justificar Falta</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="alert alert-warning" role="alert">
                      <h6>Atenção: Estás a justificar uma falta normal!!</h6><h6> A falta do dia {{date('d/m/Y', strtotime($assid->created_at))}} no 1º Tempo do 1º Trimestre Inserida ao Aluno (a) {{$assiduidade[0]->aluno->candidato->pessoa->nome_completo}} será Removidada</h6>
                      <h5>Deseja Realmente Continuar?</h5>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100"  rows="5" name="conteudo"  id="area" placeholder="Descreve a causa da Justificação da Falta"></textarea>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" class="btn btn-primary" value="">Confirmar</button>
          </div>
          </div>
      </div>
      </div>
    </form>
    @endforeach
<!-- Fím da modal -->

@foreach ($assiduidade as $assid)
    <div class="modal fade" id="Descricaoassid{{$assid['assiduidade_id']}}" tabindex="-1" data-bs-backdrop="false">
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
                <h1>Descrição Da Falta</h1>
              </div>
            </div>
          </div>

          <div class="corpo-modal">
            <div class="form-inativo">

                  <div class="row">
                      <div class="col">
                          <textarea class="form-control" style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100 "  rows="13" name="conteudo"  id="area" placeholder="Não foi inserido nenhuma descrição" readonly disabled>{{$assid->descricao_falta}}</textarea>
                      </div>
                  </div>


                    <div class="footer-modal" style="text-align: center;">

                      <div class="jnt">
                          <a class="btn" data-bs-toggle="modal" aria-label="Close" data-bs-dismiss="modal" style="background-color: #070b17; color: #fff;">Retroceder</a>

                          <a class="btn" data-bs-toggle="modal" data-bs-target="#modal_assiduidade{{$assid['assiduidade_id']}}" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
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
