@extends('layouts.main')

@section('title', 'editar disciplina')

@section('conteudo')
<main id="main" class="main" >


<form id="regFormh" method="POST" action="{{ route('disciplina.update', ['disciplina_id' => $disciplinas->disciplina_id]) }}" class="formulario-layout"  >
    @csrf
    @method('PUT')
        <div style="text-align:center;margin-top:10px;">
        <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" > 
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>ACTUALIZAR DADOS DA DISCIPLINA</h2>
                    </div>

                </div>  
            </div>
            <div class="row">
                    <div class="col">
                        <input type="text" style=" text-align: center;" placeholder="Nome da disciplina"
                            id="nome_disciplina" name="nome_disciplina" value="{{ $disciplinas->nome_disciplina }}">
                            @error('nome_disciplina')
                                <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                                </button></div>
                            @enderror
                    </div>
                    <div class="col">
                <input type="text" style=" text-align: center;" value="{{ $disciplinas->sigla }}" placeholder="Sigla" name="sigla"  oninput="this.className = ''">
                         @error('sigla')
                                <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                                </button></div>
                            @enderror
            </div>
                </div> <br>
                <div class="row" style="margin-top: 15px;">
                    <div class="form-group col">
                      <select oninput="this.className = ''" class="form-select" name="componente" id="selectComponente" value="{{ old('componente') }}">
                        <option selected disabled value="{{ $disciplinas->componente }}">{{ $disciplinas->componente }}</option>
                        <option  value="Técnicas">Técnicas</option>
                        <option value="Socio-culturais">Socio-culturais</option>
                        <option value="Cientificas"> Cientificas</option>
                      </select>
                      @error('componente')
                                <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                                </button></div>
                            @enderror
                    </div>
                    <div class="form-group col">
                      <select oninput="this.className = ''" class="form-select" name="classe" id="selectClasse" >
                        <option selected disabled value="{{ $disciplinas->classe }}">Classe</option>
                        @foreach ($classes as $classe)
                        <option value="{{$classe['classe_id']}}">{{$classe['classe']}}</option>     
                        @endforeach
                      </select>
                      @error('classe')
                                <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                                </button></div>
                            @enderror
                    </div>
                    <div class="form-group col">
                        <select oninput="this.className = ''" class="form-select" name="tipo_disciplina" id="selectTipoDisciplina">
                          <option selected disabled value="">Tipo de Disciplina</option>
                          <option value="Terminal">Terminal</option> 
                          <option value="Contínua">Contínua</option>    
                        </select>
                        @error('tipo_disciplina')
                                <div class="alert alert-danger">{{$message}}
                                <button class="botaofecharerro">
                                <i class="bi bi-x"></i>
                                </button></div>
                            @enderror
                      </div>
                </div>
              <div class="row">
                <div class="col">
                  @foreach($cursos as $curso)
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="checkboxCurso{{$curso['curso_id']}}" name="curso" value="{{$curso['curso_id']}}" disabled>
                    <label class="form-check-label" for="checkboxCurso{{$curso['curso_id']}}" value="{{ $disciplinas->curso }}" >{{$curso['nome_curso']}}</label>
                 </div>
                  @endforeach
                    <div class="row">
                      <div class="col">
                        <input type="Time" style=" text-align: center;" name="tempo_prova" value="{{ $disciplinas->tempo_prova }}" placeholder="Tempo de prova" oninput="this.className = ''">
                               @error('tempo_prova')
                                   <div class="alert alert-danger">{{$message}}
                                   <button class="botaofecharerro">
                                   <i class="bi bi-x"></i>
                                   </button></div>
                               @enderror
                       </div> 
                       <div class="col">
                          <input type="text" style=" text-align: center;" name="carga_horaria" value="{{ $disciplinas->carga_horaria }}" placeholder="Carga Horária" oninput="this.className = ''">
                          @error('carga_horaria')
                                   <div class="alert alert-danger">{{$message}}
                                   <button class="botaofecharerro">
                                   <i class="bi bi-x"></i>
                                   </button></div>
                               @enderror
                        </div> 
                    </div>
             </div>  
             <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Atualizar Disciplina</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection
