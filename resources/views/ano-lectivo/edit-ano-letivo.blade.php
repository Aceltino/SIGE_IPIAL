@extends('layouts.main')

@section('title', 'Editar Ano Lectivo')

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
    <form id="regFormh" action="{{route('update.ano.lectivo')}}" class="formulario-layout" method="POST">
        @csrf
        @method('put')
        <div class="tab">
            <h2 class="text-uppercase text-center my-3 color-blue-principal">editar dados do ano lectivo</h2>
            <h4 class="text-uppercase text-center my-4 color-blue-principal">Informações gerais</h4>

            <div class="row">
                <div class="col">
                    <p>Designação do ano lectivo<input type="text" id="editar-descricao-do-ano-lectivo" name="ano_lectivo"
                            value="{{old('ano_lectivo', $anoLectivo[0]['ano_lectivo'])}}" required></p>
                    @error('ano_lectivo')
                    <p class="alert alert-danger d-none mt-2">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </p>
                    @enderror
                    <p class="alert alert-danger d-none mt-2" role="alert" id="paragrafo-de-validacao-do-editar-descricao-do-ano-lectivo"></p>
                </div>

                <div class="col">
                    <p>Data de início do ano lectivo<input type="date" name="data_inicio_ano_lectivo"
                            id="editar-data-de-inicio-do-ano-lectivo"
                            value="{{old('data_inicio_ano_lectivo', $anoLectivo[0]['data_inicio_ano_lectivo'])}}"
                            oninput="this.className = ''"
                            style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;"
                            disabled readonly required></p>
                    @error('data_inicio_ano_lectivo')
                    <p class="alert alert-danger d-none mt-2">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </p>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p>Data de início das inscrições<input type="date" name="data_inicio_inscricao"
                            id="editar-data-de-inicio-das-inscricoes"
                            value="{{old('data_inicio_inscricao', $anoLectivo[0]['data_inicio_inscricao'])}}"
                            oninput="this.className = ''" required></p>
                    @error('data_inicio_inscricao')
                    <p class="alert alert-danger d-none mt-2">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </p>
                    @enderror
                    <p class="alert alert-danger d-none mt-2" role="alert"
                        id="paragrafo-de-validacao-do-editar-data-de-inicio-das-inscricoes"></p>
                </div>

                <div class="col">
                    <p>Data de fim das inscrições<input type="date" name="data_fim_inscricao"
                            id="editar-data-de-fim-das-inscricoes"
                            value="{{old('data_fim_inscricao', $anoLectivo[0]['data_fim_inscricao'])}}"
                            oninput="this.className = ''" required></p>
                    @error('data_fim_inscricao')
                    <p class="alert alert-danger d-none mt-2">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </p>
                    @enderror
                    <p class="alert alert-danger d-none mt-2" role="alert"
                        id="paragrafo-de-validacao-do-editar-data-de-fim-das-inscricoes"></p>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <p>Data de início das matriculas<input type="date" name="data_inicio_matricula"
                            id="editar-data-de-inicio-das-matriculas"
                            value="{{old('data_inicio_matricula', $anoLectivo[0]['data_inicio_matricula'])}}"
                            oninput="this.className = ''" required></p>
                    @error('data_inicio_matricula')
                    <p class="alert alert-danger d-none mt-2">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </p>
                    @enderror
                    <p class="alert alert-danger d-none mt-2" role="alert"
                        id="paragrafo-de-validacao-do-editar-data-de-inicio-das-matriculas"></p>
                </div>

                <div class="col">
                    <p>Data de fim das matriculas<input type="date" name="data_fim_matricula"
                            id="editar-data-de-fim-das-matriculas"
                            value="{{old('data_fim_matricula', $anoLectivo[0]['data_fim_matricula'])}}"
                            oninput="this.className = ''" required></p>
                    @error('data_fim_matricula')
                    <p class="alert alert-danger d-none mt-2">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </p>
                    @enderror
                    <p class="alert alert-danger d-none mt-2" role="alert"
                        id="paragrafo-de-validacao-do-editar-data-de-fim-das-matriculas"></p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de alunos nas turmas" name="num_aluno_na_turma"
                        id="editar-numero-maximo-de-alunos-nas-turmas"
                        value="{{old('num_aluno_na_turma', $anoLectivo[0]['num_aluno_na_turma'])}}"
                        oninput="this.className = ''" required>
                    @error('num_aluno_na_turma')
                    <p class="alert alert-danger d-none mt-2">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </p>
                    @enderror
                    <p class="alert alert-danger d-none mt-2" role="alert"
                        id="paragrafo-de-validacao-do-editar-numero-maximo-de-alunos-nas-turmas"></p>
                </div>

                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de salas" name="num_sala_escola"
                        id="editar-numero-maximo-de-salas"
                        value="{{old('num_sala_escola', $anoLectivo[0]['num_sala_escola'])}}"
                        oninput="this.className = ''" required>
                    @error('num_sala_escola')
                    <p class="alert alert-danger d-none mt-2">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </p>
                    @enderror
                    <p class="alert alert-danger d-none mt-2" role="alert"
                        id="paragrafo-de-validacao-do-editar-numero-maximo-de-salas"></p>
                </div>
            </div>

        <div style="text-align:center;margin-top:10px;">
            <div class="mt-4">
                <a href="{{route('ano.lectivo')}}" class="btn" style="background-color: #070b17; color: #fff;">Cancelar
                    edição</a>
                <button type="submit" class="btn btn-success" name="id"
                    value="{{$anoLectivo[0]['ano_lectivo_id']}}" id="editar-ano-lectivo">Editar Ano Lectivo</button>
            </div>
        </div>
    </form>
</main>
@endsection
