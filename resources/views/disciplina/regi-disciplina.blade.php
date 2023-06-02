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
                <textarea class="form-control" id="des-disciplina" rows="8" style="padding: 50px" placeholder="Descrição sobre a disciplina"></textarea>
              </div>
              <div class="form-group">
                <select oninput="this.className = ''" class="form-select">
                  <option selected  disabled> Componetes</option>
                  <option value="c.T">Técnicas </option>
                  <option value="I.E"> Socio-culturais</option>
                  <option value="I"> Cientificas</option>
                </select>
              </div>
          <div class="row form-group">
              <div class="col">
                <select oninput="this.className = ''" class="form-select" name="curso1">
                  <option selected disabled>Curso</option>
                  <option value="Tecnico de Informática">Tecnico de Informática</option>
                  <option value="Instalaçoes electricas">Instalaçoes electricas</option>
                  <option value="Desenho tecnico">Desenho tecnico</option>
                  <option value="Electronica e automaçao">Electronica e automaçao</option>
                </select>
              </div>
              <ul class="col list-group">
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                  Tecnico de Informática
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." >
                  Instalaçoes electricas
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                  Desenho tecnico
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                Electronica e automaçao
                </li>
              </ul>
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