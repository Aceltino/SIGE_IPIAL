@extends('layouts.main')

@section('title', 'editar disciplina')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" action="" class="formulario-layout" method="POST" >
      @csrf

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
                <input type="text" style=" text-align: center;" placeholder="Nome da disciplina" name="nome_disciplina" value="{{ $disciplinas->nome_disciplina }}" oninput="this.className = ''">
            </div>
           <div class="col">
                <input type="text" style=" text-align: center;" placeholder="Sigla" name="sigla" value="{{ $disciplinas->sigla }}" oninput="this.className = ''">
            </div>
        </div> <br>


              <div class="form-group">
                <select oninput="this.className = ''" class="form-select" name="componente" value="{{ $disciplinas->componente }}">
                  <option  disabled> Componetes</option>
                  <option selected  value="c.T">Técnicas </option>
                  <option value="I.E"> Socio-culturais</option>
                  <option value="I"> Cientificas</option>
                </select>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Tecnico de Informática</label>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Instalaçoes electricas</label>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled" >
                    <label class="form-check-label" for="flexSwitchCheckDisabled">Desenho tecnico</label>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckCheckedDisabled" >
                    <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Electronica e automaçao</label>
                  </div>
                 </div>
                <div class="col">
                     <input type="time" style=" text-align: center;" name="tempo_prova" value="{{ $disciplinas->tempo_prova }}"  oninput="this.className = ''">
                 </div>
             </div>

            <div style="text-align:center;margin-top:40px;">
                <div>
                    <button type="button" class="btn btn-success">Actualizar</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection
