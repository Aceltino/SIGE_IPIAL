@extends('layouts.main')

@section('title', 'Área de formação')

@section('conteudo')
    <main id="main" class="main">
        @if (session()->has('erro'))
            <div class="alert alert-danger">
                {{ session('erro') }}
            </div>
        @endif
        @if (session()->has('sucesso'))
            <div class="alert alert-success">
                {{ session('sucesso') }}
            </div>
        @endif
        <div class="row">
            <div class="col">
                <h2>Áreas de formação</h2>
            </div>

            <div class="col-lg-3">
                <select class="btn-sel form-select" id="filtro1">
                    <option selected disabled>Area de Formação</option>
                    @foreach ($area_formacao as $af)
                        <option value="{{ $af->nome_area_formacao }}">{{ $af->nome_area_formacao }}</option>
                    @endforeach

                </select>
            </div>

        </div>

        <div class="procurar">
            <form class="proc-form d-flex align-items-center">
                <input id="pesquisa" type="text" name="" class="campo-pesq"
                    placeholder="Digite a area de formação que pretende que estás a procurar">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div>


        <table class="table table-striped table table-custom table-escuro" id="matricula-tab">
            <thead>
                <tr style=" text-align: center;">
                    <th scope="col">Area de Formação</th>
                    <th scope="col">Coordenador</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>


                @foreach ($area_formacao as $af)
                    <tr style=" text-align: center;">

                        <th scope="row">{{$af->nome_area_formacao }}</th>
                        
                        @if ($af->coordenador)
                            <th>{{$af->coordenador->pessoa->nome_completo}}</th>
                        @else
                            <th>Sem Coordenador</th>
                        @endif


                        <td  style="display: flex; justify-content: center; align-items: center; gap:5px;">

                              <i class="bi bi-eye-fill" data-bs-toggle="modal"
                                    data-bs-target="#ExtralargeModal{{ $af->area_formacao_id }}"></i>
                                <a style="margin-left: 6px;"
                                    href="{{ route('editar.area.formacao', $af->area_formacao_id) }}"
                                    class="bi bi-pencil"></a>
                                <form method="POST"action="{{ route('eliminar.area.formacao', $af->area_formacao_id) }}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="bi bi-trash-fill"
                                        style="border: none; background: none;"></button>
                                </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        @foreach ($area_formacao as $af)
            <div class="modal fade" id="ExtralargeModal{{ $af->area_formacao_id }}" tabindex="-1"
                data-bs-backdrop="false">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="provisorio">
                            <div
                                class="card-icon-modal rounded-circle d-flex align-items-center justify-content-flex-end">

                                <i class="bi bi-x-lg" data-bs-toggle="modal" aria-label="Close"
                                    data-bs-dismiss="modal"></i>
                            </div>
                        </div>

                        <div class="cabecalho-modal">
                            <div class="row">
                                <div class="col"
                                    style="display: flex; justify-content: flex-start; align-items: center;">
                                    <h1>Dados Da Area de formação</h1>
                                </div>

                            </div>
                        </div>

                        <div class="corpo-modal">
                            <form class="form-inativo">
                                <div class="dados-pessoais">
                                    <div class="area-input form-group" disabled>
                                        <label>Nome da area de formação: </label><input type="text"
                                            name="" value="{{ $af->nome_area_formacao }}" disabled>
                                    </div>




                                    <div class="footer-modal" style="text-align: center;">
                                        <div class="jnt">
                                            <a href="areaformacao" class="btn"
                                                style="background-color: #070b17; color: #fff;">Retrocer aos
                                                Cursos</a>
                                            <a href="edit-areaformacao" class="btn"
                                                style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        <!-- Termina a tabela de matriculas -->

        <!--Inicio da modal ver inscrito-->



        <!--  / Termina a modal ver inscrito-->

    </main>
@endsection
