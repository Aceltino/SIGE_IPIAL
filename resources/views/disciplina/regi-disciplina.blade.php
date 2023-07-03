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
                </div>
                <div class="row">
                    <div class="col">
                        <input type="text" style=" text-align: center;" placeholder="Nome da disciplina"
                            id="nome_disciplina" name="nome_disciplina" required>
                        <span id="mensagem_erro_nome" style="color: red"></span>
                    </div>
                    <div class="col">
                        <input type="text" style=" text-align: center;" placeholder="Sigla" name="sigla"
                            oninput="this.className = ''" id="sigla_disciplina" maxlength="4"  required>
                            <span id="mensagem_erro_sigla"  style="color: red"></span>
                    </div>
                </div> <br>

                <div class="form-group">
                    <select oninput="this.className = ''" class="form-select" name="componente">
                        <option selected disabled> Componetes</option>
                        <option value="C.T">Técnicas </option>
                        <option value="I.E"> Socio-culturais</option>
                        <option value="I"> Cientificas</option>
                    </select>
                    <span id="mensagem_erro_select"  style="color: red"></span>
                </div>
                <div class="row">
                    <div class="col">
                        @foreach ($cursos as $curso)
                            <div class="form-check form-switch">
                                <input class="form-check-input curso" type="checkbox" name="curso"
                                    value="{{ $curso['curso_id'] }}">
                                <label class="form-check-label" for="curso">{{ $curso['nome_curso'] }}</label>
                               
                            </div>
                            
                        @endforeach
                        <span id="erro_check"  style="color: red"></span>
                        <div class="col">
                            <input type="number" style=" text-align: center;" name="tempo_prova"
                                placeholder="Tempo de prova" oninput="this.className = ''" id="tempo_prova" required>
                                <span id="erro_tempo_prov"  style="color: red"></span>
                            
                        </div>
                    </div>
                    <div style="text-align:center;margin-top:10px;">
                        <div>
                            <button type="button" class="btn btn-success" id="botao">Cadastrar</button>
                        </div>
                    </div>
                </div>
        </form>
    </main>
@endsection
