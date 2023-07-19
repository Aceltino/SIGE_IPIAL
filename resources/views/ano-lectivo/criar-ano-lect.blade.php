@extends('layouts.main')

@section('title', 'Criar Ano Lectivo')

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
    <form method="POST" id="regForm" action="{{route('cadastrar.ano.lectivo')}}" class="formulario-layout">
        @csrf
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">Ano lectivo</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>

          <div class="row" >
                <div class="col">
                    <p>Designação do ano lectivo<input type="text" id="descricao-do-ano-lectivo" name="ano_lectivo" class="form-control" value="" oninput="this.className = ''"></p>
                    @error('ano_lectivo')
                        <p class="alert alert-danger" role="alert">{{$message}}
                            <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                            </button>
                        </p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-descricao-do-ano-lectivo"></p>
                </div>
                <div class="col">
                    <p>Data de início do ano lectivo<input type="date" name="data_inicio_ano_lectivo" id="data-de-inicio-do-ano-lectivo" value="retornarADataActual()" style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;" oninput="this.className = ''" disabled readonly required></p>
                    @error('data_inicio_ano_lectivo')
                        <p class="alert alert-danger" role="alert">{{$message}}
                            <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                            </button>
                        </p>
                    @enderror
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das inscrições<input type="date" name="data_inicio_inscricao" id="data-de-inicio-das-inscricoes" value="{{old('data_inicio_inscricao')}}" oninput="this.className = ''" required></p>
                    @error('data_inicio_inscricao')
                        <p class="alert alert-danger" role="alert">{{$message}}
                            <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                            </button>
                        </p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-inicio-das-inscricoes"></p>
                </div>

                <div class="col">
                    <p>Data de fim das inscrições<input type="date" name="data_fim_inscricao" id="data-de-fim-das-inscricoes" value="{{old('data_fim_inscricao')}}" oninput="this.className = ''" required></p>
                    @error('data_fim_inscricao')
                        <p class="alert alert-danger" role="alert">{{$message}}
                            <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                            </button>
                        </p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-fim-das-inscricoes"></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das matriculas<input type="date" name="data_inicio_matricula" id="data-de-inicio-das-matriculas" value="{{old('data_inicio_matricula')}}"  oninput="this.className = ''" required></p>
                    @error('data_inicio_matricula')
                        <p class="alert alert-danger" role="alert">{{$message}}
                            <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                            </button>
                        </p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-inicio-das-matriculas"></p>
                </div>

                <div class="col">
                    <p>Data de fim das matriculas<input type="date" name="data_fim_matricula" id="data-de-fim-das-matriculas" value="{{old('data_fim_matricula')}}" oninput="this.className = ''" required></p>
                    @error('data_fim_matricula')
                        <p class="alert alert-danger" role="alert">{{$message}}
                            <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                            </button>
                        </p>
                    @enderror
                    <p class="alert alert-danger d-none" role="alert" id="paragrafo-de-validacao-da-data-de-fim-das-matriculas"></p>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de alunos nas turmas" name="num_aluno_na_turma" id="numero-maximo-de-alunos-nas-turmas" value="{{old('num_aluno_na_turma')}}"  oninput="this.className = ''" required min="0" max="55">
                    @error('num_aluno_na_turma')
                        <p class="alert alert-danger" role="alert">{{$message}}
                            <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                            </button>
                        </p>
                    @enderror
                    <p class="alert alert-danger d-none mt-3" role="alert" id="paragrafo-de-validacao-do-numero-maximo-de-alunos-nas-turmas"></p>
                </div>

                <div class="col-6">
                    <input type="number" placeholder=" Número máximo de salas" name="num_sala_escola" id="numero-maximo-de-salas" value="{{old('num_sala_escola')}}" oninput="this.className = ''" required min="0" max="30">
                    @error('num_sala_escola')
                        <p class="alert alert-danger" role="alert">{{$message}}
                            <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                            </button>
                        </p>
                    @enderror
                    <p class="alert alert-danger d-none mt-2" role="alert" id="paragrafo-de-validacao-do-numero-maximo-de-salas"></p>
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="submit" class="btn btn-success">Criar ano lectivo</button>
          </div>
        </div>
    </form>
</main>
@endsection
