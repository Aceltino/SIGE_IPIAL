@extends('layouts.main')

@section('title', 'Comunicados')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h1>Comunicados</h1>
    </div>
  </div> 
 
  <div class="procurar">
    <form class="proc-form d-flex align-items-center" method="GET">
      <input id="pesquisa" placeholder='pesquise o comunicado pelo seu Título' type="text" name="pesquisa" class="campo-pesq">
      <button type="button" title="procurar"><i class="bi bi-search"></i></button>
    </form>
  </div><br>

  @if(session('sucess'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
    <i class="bi bi-check-circle me-1"></i>
    {{(session('sucess'))}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
  @endif

  @if(session('edit'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <i class="bi bi-check-circle me-1"></i>
      {{(session('edit'))}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif
  @if(session('delete'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <i class="bi bi-exclamation-octagon me-1"></i>
      {{(session('delete'))}}
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  @endif

  {{-- /  Inicio da tabela dos comunicados --}}
  <table class="table table-custom table-escuro" id="matricula-tab">
    <thead>
      <tr style=" text-align: center;">
        <th scope="col">Titulo do comunicado</th>
        <th scope="col">Conteudo do comunicado</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    @foreach ($comunicados as $com)
      <tr style=" text-align: center;">
        <th scope="row">{{ $com->titulo_com }}</th>
        <td>{{ $com->conteudo_com }}</td>
        <td style="display: flex; justify-content: center; align-items: center; gap:5px;">
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal{{ $com['comunicado_id'] }}"></i>

          <a href="{{ route('comunicado.edit', ['comunicado_id' => $com->comunicado_id]) }}"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill" data-bs-toggle="modal" data-bs-target="#modalApagar{{$com['comunicado_id']}}"></i>
      
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>{{--Fim da tabela dos comunicados --}}

  {{--Inicio da modal apagarComunicado--}}
  @foreach ($comunicados as $com)
  <div class="modal fade" id="modalApagar{{$com['comunicado_id']}}" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">

        <div class="modal-header" style="border: none;">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body" style="text-transform: uppercase; text-align: center;">
          <strong>Deseja eliminar esse comunicado?</strong>
        </div>

        <div class="modal-footer" style="border: none;">
          <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>

          <form action="{{ route('comunicado.destroy', ['comunicado_id' => $com->comunicado_id]) }}" method="POST">

            @csrf
            @method('delete')
          <button type="submit" class="btn btn-danger" style="border: none;">Eliminar</button>
          </form>
        </div>

      </div>
    </div>
	</div>{{--  / Fim da modal apagarComunicado--}}
  @endforeach
  
  <!-- Termina a tabela de matriculas -->
    @foreach ($comunicados as $com)
      <!--Inicio da modal ver inscrito-->
      <div class="modal fade" id="ExtralargeModal{{ $com['comunicado_id'] }}" tabindex="-1" data-bs-backdrop="false">
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
                  <h1>Dados do Comunicado</h1>
                </div>
              </div>
            </div>

            <div class="corpo-modal">
              <form class="form-inativo">
                <div class="dados-pessoais">
                    <div class="area-input form-group">
                        <label>Título do Comunicado: </label><input class="form-control" type="text" name="" value="{{ $com['titulo_com'] }}" readonly disabled style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                    </div>
                </div>

                    <div class="row">
                        <div class="col">
                          
                            <textarea class="form-control" style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none; color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" class="w-100 "  rows="13" name="conteudo"  id="area" placeholder="Escreve aqui o conteúdo do Comunicado" readonly disabled>{{ $com['conteudo_com'] }} </textarea>
                        </div>
                    </div>


                      <div class="footer-modal" style="text-align: center;">

                        <div class="jnt">
                            <a href="{{ route('comunicado.index')}}" class="btn" style="background-color: #070b17; color: #fff;">Retrocer aos Comunicados</a>

                            <a href="{{ route('comunicado.edit', ['comunicado_id' => $com->comunicado_id] )}}" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                        </div>
                      </div>

              </form>
            </div>

          </div>
        </div>
      </div>
      <!--  / Termina a modal ver inscrito-->
      @endforeach
</main>
@endsection
<!-- o meu objectivo é ver se o codigo do controller esta a funcionar na tua maquina, se esta a pegar o id do usuario logado e o ano lectivo -->
<!--  -->
