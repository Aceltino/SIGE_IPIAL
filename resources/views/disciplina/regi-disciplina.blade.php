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
                            id="nome_disciplina" name="nome_disciplina" value="{{ old('nome_disciplina') }}">
                            @error('nome_disciplina')
                                <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                                </button></div>
                            @enderror
                    </div>
                    <div class="col">
                        <input type="text" style=" text-align: center;" placeholder="Sigla" name="sigla"
                            oninput="this.className = ''" id="sigla_disciplina" value="{{ old('sigla') }}">
                            @error('sigla')
                                <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                                </button></div>
                            @enderror
                    </div> 
                </div> 
                <br>
                <br>
              <div class="form-group">
                <select oninput="this.className = ''" class="form-select" name="componente" value="{{ old('componente') }}">
                  <option selected disabled> Componetes</option>
                  <option  value="Técnicas">Técnicas </option>
                  <option value="Socio-culturais"> Socio-culturais</option>
                  <option value="Cientificas"> Cientificas</option>
                </select>
                        @error('componente')
                                <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                                </button></div>
                            @enderror
              </div>
              <div class="row">
                <div class="col">
                  @foreach($cursos as $curso)
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="curso" name="curso" value="{{$curso['curso_id']}}">
                    <label class="form-check-label" for="curso">{{$curso['nome_curso']}}</label>
                 </div>
                  @endforeach
                 <div class="col">
                     <input type="Time" style=" text-align: center;" name="tempo_prova" value="{{ old('tempo_prova') }}" placeholder="Tempo de prova" oninput="this.className = ''">
                            @error('tempo_prova')
                                <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                                </button></div>
                            @enderror
                    </div> 
             </div> 
             <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>

                </div>
        </form>
    </main>
@endsection
