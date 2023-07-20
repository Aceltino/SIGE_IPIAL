@extends('layouts.main')

@section('title', 'Cadastrardisciplina')

@section('conteudo')
    <main id="main" class="main">

        <form id="regFormh" action="{{ route('disciplina.store') }}" class="formulario-layout" method="POST">
            @csrf
            <div style="text-align:center;margin-top:10px;">
                <span class="step"></span>
            </div>

            <div class="tab">

                <div class="row">
                    <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                        <div style="  text-align: center;">
                            <h2>CADASTRAR DISCIPLINA</h2>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <input type="text" style=" text-align: center;" placeholder="Nome da disciplina"
                                id="letra" name="nome_disciplina" value="{{ old('nome_disciplina') }}">
                            @error('nome_disciplina')
                                <div class="alert alert-danger">{{ $message }}
                                    <button class="botaofecharerro">
                                        <i class="bi bi-x"></i>
                                    </button>
                                </div>
                            @enderror
                        </div>
                        <div class="col">
                            <input type="text" style=" text-align: center;" id="sigla" value="{{ old('sigla') }}"
                                placeholder="Sigla" name="sigla" oninput="this.className = ''" maxlength="4">
                            @error('sigla')
                                <div class="alert alert-danger">{{ $message }}
                                    <button class="botaofecharerro">
                                        <i class="bi bi-x"></i>
                                    </button>
                                </div>
                            @enderror
                        </div>
                    </div> <br>
                    <div class="row" style="margin-top: 15px;">
                        <div class="form-group col">
                            <select oninput="this.className = ''" class="form-select" name="componente"
                                id="selectComponente" value="{{ old('componente') }}">
                                <option selected disabled> Componetes</option>
                                <option value="Componente Técnica, Tecnológica e Prática">Componente Técnica, Tecnológica e Prática</option>
                                <option value="Componente Socio-Cultural">Componente Socio-Cultural</option>
                                <option value="Componente Científica">Componente Científica</option>
                            </select>
                            @error('componente')
                                <div class="alert alert-danger">{{ $message }}
                                    <button class="botaofecharerro">
                                        <i class="bi bi-x"></i>
                                    </button>
                                </div>
                            @enderror
                        </div>

                        <div class="col">
                            <input type="Time" style=" text-align: center;" name="tempo_prova"
                                value="{{ old('tempo_prova') }}" placeholder="Tempo de prova" oninput="this.className = ''">
                            @error('tempo_prova')
                                <div class="alert alert-danger">{{ $message }}
                                    <button class="botaofecharerro">
                                        <i class="bi bi-x"></i>
                                    </button>
                                </div>
                            @enderror
                        </div>

                    </div>

                </div>
                <div id="inputsContainer"></div>
                <div class="row">
                    <div class="col">
                        @foreach ($cursos as $curso)
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="checkboxCurso{{ $curso['curso_id'] }}"
                                    name="curso" value="{{ $curso['curso_id'] }}" disabled>
                                <label class="form-check-label"
                                    for="checkboxCurso{{ $curso['curso_id'] }}">{{ $curso['nome_curso'] }}</label>
                            </div>
                        @endforeach

                        <div id="selects">
                            <div class="row">
                                <div class="form-group col-4">
                                    <select oninput="this.className = ''" class="form-select" name="tipo_disciplina"
                                        id="selectTipoDisciplina">
                                        <option selected disabled>Tipo de Disciplina</option>
                                        <option value="Terminal">Terminal</option>
                                        <option value="Contínua">Contínua</option>
                                    </select>
                                    @error('Tipo_disciplina')
                                        <div class="alert alert-danger">{{ $message }}
                                            <button class="botaofecharerro">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-4">
                                    <select oninput="this.className = ''" class="form-select" name="classe"
                                        id="selectclasse">
                                        <option selected disabled>Classe</option>
                                        @foreach ($classes as $classe)
                                            <option value="{{ $classe['classe_id'] }}">{{ $classe['classe'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('classe')
                                        <div class="alert alert-danger">{{ $message }}
                                            <button class="botaofecharerro">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group col-3">
                                    <input type="text" id="input" style=" text-align: center;" name="carga_horaria"
                                        value="{{ old('carga_horaria') }}" placeholder="Carga Horária"
                                        oninput="this.className = ''" maxlength="4">
                                    @error('carga_horaria')
                                        <div class="alert alert-danger">{{ $message }}
                                            <button class="botaofecharerro">
                                                <i class="bi bi-x"></i>
                                            </button>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div id="add" style="margin-top: -5px">
                            <i id="clonebtn1"class="bi bi-plus-circle" onclick="clonar()"
                                style="font-size: 30px; cursor: pointer;"></i>
                        </div>
                        <div style="text-align:center;margin-top:10px;">
                            <div>
                                <button type="submit" id="botao" class="btn btn-success">Cadastrar</button>

                            </div>
        </form>
    </main>
@endsection
