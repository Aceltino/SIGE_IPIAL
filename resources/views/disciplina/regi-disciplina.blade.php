@extends('layouts.main')

@section('title', 'Cadastrardisciplina')

@section('conteudo')
<main id="main" class="main" >

<form id="regFormh" action="{{ route('disciplina.store') }}" class="formulario-layout" method ="POST">
      @csrf
        <div style="text-align:center;margin-top:10px;">
        <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CADASTRAR DISCIPLINA</h2>
                    </div>

                </div>
            </div>
        <div class="row">
           <div class="col">
                <input type="text" style=" text-align: center;" placeholder="Nome da disciplina" name="nome_disciplina" oninput="this.className = ''">
            </div>
           <div class="col">
                <input type="text" style=" text-align: center;" placeholder="Sigla" name="sigla"  oninput="this.className = ''">
            </div>
        </div> <br>

              <div class="form-group">
                <select oninput="this.className = ''" class="form-select" name="componente">
                  <option selected disabled> Componetes</option>
                  <option  value="C.T">Técnicas </option>
                  <option value="I.E"> Socio-culturais</option>
                  <option value="I"> Cientificas</option>
                </select>
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
                     <input type="number" style=" text-align: center;" name="tempo_prova" placeholder="Tempo de prova" oninput="this.className = ''">
                 </div> 
             </div> 
             <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>
        </div> 
    </form>
</main>
@endsection
