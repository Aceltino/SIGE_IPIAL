@extends('layouts.main')

@section('title', 'cadastrar disciplina')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" action="" class="formulario-layout">
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
                <input type="text" style=" text-align: center;" placeholder="Nome da disciplina" name="" oninput="this.className = ''">
            </div>
           <div class="col">
                <input type="text" style=" text-align: center;" placeholder="Sigla" name="" oninput="this.className = ''">
            </div>
        </div> <br>

            <div class="mb-3">
                <textarea class="form-control" id="des-disciplina" rows="8" style="padding:50px; resize: none;" placeholder="Descrição sobre a disciplina"></textarea>
              </div>
              <div class="form-group">
                <select oninput="this.className = ''" class="form-select">
                  <option selected  disabled> Componetes</option>
                  <option value="c.T">Técnicas </option>
                  <option value="I.E"> Socio-culturais</option>
                  <option value="I"> Cientificas</option>
                </select>
              </div>
      
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
              
            <div style="text-align:center;margin-top:40px;">
                <div>
                    <button type="button" class="btn btn-success">Cadastrar</button>
                </div>
            </div>    
        </div>
    </form>
</main>
@endsection