@extends('layouts.main')

@section('title', 'Anos Lectivos')

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
      <div class="row">
        <div class="col">
          <h2 class="color-blue-principal text-uppercase">Anos lectivos</h2>
        </div>
         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro1">
             <option selected disabled>Ano de Inicio</option>
             @for ($i = 0; $i < count($anoLectivo); $i++)
                <option value="{{$anoLectivo[$i]['data_inicio_ano_lectivo']}}">{{$anoLectivo[$i]['data_inicio_ano_lectivo']}}</option>
             @endfor
           </select>
         </div>

         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro2">
             <option selected disabled>Ano de fim</option>
             @for ($i = 0; $i < count($anoLectivo); $i++)
                <option value="{{$anoLectivo[$i]['data_fim_ano_lectivo']}}">{{$anoLectivo[$i]['data_fim_ano_lectivo']}}</option>
             @endfor
           </select>
         </div>

      </div>

      <div class="procurar mt-4">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" placeholder="Qual ano letivo estás a procurar?" value="" type="text" name="" class="campo-pesq">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div>

      <!--Inicío da tabela de ver ano lectivo-->
      <table id="matricula-tab" class="table table-striped mt-4 table-custom table-escuro">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Designação</th>
            <th scope="col">Data de Inicio</th>
            <th scope="col">Data de Fim</th>
            <th scope="col">Número máximo de vagas nas turmas</th>
            <th scope="col">Qtd. de salas</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @for ($i = count($anoLectivo) - 1; $i >= 0; $i--)
          <tr style=" text-align: center;">
                <td>{{$anoLectivo[$i]['ano_lectivo']}}</td>
                <td>{{$anoLectivo[$i]['data_inicio_ano_lectivo']}}</td>
                <td>{{$anoLectivo[$i]['data_fim_ano_lectivo']}}</td>
                <td>{{$anoLectivo[$i]['num_aluno_na_turma']}}</td>
                <td>{{$anoLectivo[$i]['num_sala_escola']}}</td>
                <td class="d-flex justify-content-between align-items-center">
                    <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal{{$anoLectivo[$i]['ano_lectivo_id']}}"></i>
                    <a href="{{route('editar.ano.lectivo', $anoLectivo[$i]['ano_lectivo_id'])}}"><i class="bi bi-pencil"></i></a>
                    <a href="{{route('config.ano.lectivo', $anoLectivo[$i]['ano_lectivo_id'])}}" class="btn d-flex align-items-center p-0" data-bs-toggle="modalDesactivar" data-bs-target="#basicModalDesactivar"><i class="bi bi-gear" ></i></a>
                </td>
            </tr>
        @endfor

        </tbody>
      </table>
      <!-- Termina a tabela de ver ano lectivo -->

      <div class="modal fade" id="basicModalDesactivar" tabindex="-1" data-bs-backdrop="false">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="btn-close" data-bs-dismiss="modalDesactivar" aria-label="Close"></button>
            </div>

            <div class="modal-body">
              <strong>Tem a certeza de que pretende desactivar o ano lectivo?</strong>
            </div>

            <div class="modal-footer" style="border: none;">
              <button type="button" class="btn btn-warning" data-bs-dismiss="modalDesactivar">Cancelar</button>
              <form action="" method="POST">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger d-flex align-items-center p-0">Desactivar</button>
                </form>
            </div>
          </div>
        </div>
      </div>

      @for ($i = count($anoLectivo) - 1; $i >= 0; $i--)
    <!--Início da modal ver dados ano lectivo-->
    <div class="modal fade" id="ExtralargeModal{{$anoLectivo[$i]['ano_lectivo_id']}}" tabindex="-1" data-bs-backdrop="false">
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
                  <h1>Dados Do Ano Lectivo</h1>
                </div>
              </div>
            </div>

            <div class="corpo-modal">
              <form class="form-inativo">
                <div class="dados-pessoais">
                  <div Class="row">
                    <div class=" col area-input form-group" disabled>
                     <label>Nome do Ano Letivo: </label><input class="form-control" type="text" name="" value="{{$anoLectivo[$i]['ano_lectivo']}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                    </div>
                  </div>

                  <div Class="row">
                    <div class=" col area-input form-group" disabled>
                     <label>Data de Inicio: </label><input class="form-control" type="text" name="" value="{{$anoLectivo[$i]['data_inicio_ano_lectivo']}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;" disabled>
                     <label>Data de Fim: </label><input class="form-control" type="text" name="" value="{{$anoLectivo[$i]['data_fim_ano_lectivo']}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col area-input form-group" disabled>
                      <label>Número Máximo de vagas na turma: </label><input class="form-control" type="text" name="" value="{{$anoLectivo[$i]['num_aluno_na_turma']}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;"  disabled>
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;" disabled>
                      <label>Número Máximo de Sala: </label><input class="form-control" type="text" name="" value="{{$anoLectivo[$i]['num_sala_escola']}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                    </div>
                  </div>

                  <div Class="row">
                    <div class=" col area-input form-group" disabled>
                      <label>Início das Incrições:</label><input class="form-control" type="text" name="" value="{{$anoLectivo[$i]['data_inicio_inscricao']}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;" disabled>
                      <label>Fim das Incrições:</label><input class="form-control" type="text" name="" value="{{$anoLectivo[$i]['data_fim_inscricao']}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                    </div>
                  </div>

                  <div Class="row">
                    <div class=" col area-input form-group" disabled>
                      <label>Início das Matriculas:</label><input class="form-control" type="text" name="" value="{{$anoLectivo[$i]['data_inicio_matricula']}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;" disabled>
                      <label>Fim das Matriculas:</label><input class="form-control" type="text" name="" value="{{$anoLectivo[$i]['data_fim_matricula']}}" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" disabled>
                    </div>
                  </div>

                </div>
                <div class="footer-modal" style="text-align: center;">

                  <div class="jnt">
                      <a href="{{route('editar.ano.lectivo', $anoLectivo[$i]['ano_lectivo_id'])}}" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                  </div>
                </div>

              </form>
            </div>

          </div>
        </div>
      </div>

      <!--Termina a modal ver dados do ano lectivo-->
      @endfor

    </main>
@endsection
