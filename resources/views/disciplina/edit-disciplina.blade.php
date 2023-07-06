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
                <input type="text" style=" text-align: center;"  value="{{ $disciplinas->nome_disciplina }}" placeholder="Nome da disciplina" name="nome_disciplina"  oninput="this.className = ''">
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

            <div class="row">

                <div class="form-group col">
                  <select oninput="this.className = ''"  value="{{ $disciplinas->componente }}" class="form-select" name="componente" >
                    <option  disabled> Componetes</option>
                    <option selected  value="c.T">Técnicas </option>
                    <option value="I.E"> Socio-culturais</option>
                    <option value="I"> Cientificas</option>
                  </select>
                  @error('componente')
                                  <div class="alert alert-danger">{{$message}}
                                  <button class="botaofecharerro">
                                  <i class="bi bi-x"></i>
                                  </button></div>
                              @enderror
                </div>
                <div class="form-group col">
                    <select oninput="this.className = ''" class="form-select" name="componente" id="selectClasse">
                      <option selected disabled>Classe</option>
                      @foreach ($classes as $classe)
                      <option value="{{$classe['classe']}}">{{$classe['classe']}}</option>     
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group col">
                      <select oninput="this.className = ''" class="form-select" name="componente" id="selectTipoDisciplina">
                        <option selected disabled>Tipo de Disciplina</option>
                        <option value="Terminal">Terminal</option> 
                        <option value="Contínua">Contínua</option>    
                      </select>
                    </div>
              </div>
            </div>
              <div class="row">
                <div class="col">
                @foreach($cursos as $curso)
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" name="curso" value="{{$curso['curso_id']}}">
                    <label class="form-check-label" for="flexSwitchCheckDefault">{{$curso['nome_curso']}}</label>
                 </div>
                  @endforeach 
                <div class="row">
                    <div class="col">
                        <input type="Time" style=" text-align: center;" value="{{ $disciplinas->tempo_prova }}" name="tempo_prova"    oninput="this.className = ''">
                        @error('tempo_prova')
                                    <div class="alert alert-danger">{{$message}}
                                    <button class="botaofecharerro">
                                    <i class="bi bi-x"></i>
                                    </button></div>
                                @enderror
                    </div>
                    <div class="col">
                        <input type="text" style=" text-align: center;" name="tempo_prova" value="" placeholder="Carga Horária" oninput="this.className = ''">
  
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
