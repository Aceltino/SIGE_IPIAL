@extends('layouts.main')

@section('title', 'editar disciplina')

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
                        <h2>ACTUALIZAR DADOS DA DISCIPLINA</h2>
                    </div>

                </div>
            </div>
        <div class="row">
           <div class="col">
                <input type="text" style=" text-align: center;" placeholder="Nome da disciplina" name="" value="Matemática" oninput="this.className = ''">
            </div>
           <div class="col">
                <input type="text" style=" text-align: center;" placeholder="Sigla" name="" value="MAT" oninput="this.className = ''">
            </div>
        </div> <br>

            <div class="mb-3">
                <textarea class="form-control" id="des-disciplina" rows="8" style="padding: 50px" placeholder="Descrição sobre a disciplina">Matemática é a área do conhecimento que se ocupa do estudo de números, formas, estruturas, organizaçõe variações etc., perpassando pelas mais diversas ciências e técnicas.</textarea>
              </div>
              <div class="form-group">
                <select oninput="this.className = ''" class="form-select">
                  <option  disabled> Componetes</option>
                  <option selected value="c.T">Técnicas </option>
                  <option value="I.E"> Socio-culturais</option>
                  <option value="I"> Cientificas</option>
                </select>
              </div>
          <div class="row form-group">
              <div class="col">
                <select oninput="this.className = ''" class="form-select" name="curso1">
                  <option  disabled>Curso</option>
                  <option selected value="Tecnico de Informática">Tecnico de Informática</option>
                  <option value="Instalaçoes electricas">Instalaçoes electricas</option>
                  <option value="Desenho tecnico">Desenho tecnico</option>
                  <option value="Electronica e automaçao">Electronica e automaçao</option>
                </select>
              </div>
              <ul class="col list-group">
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="..." checked>
                  Tecnico de Informática
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="...">
                  Instalaçoes electricas
                </li>
                <li class="list-group-item">
                  <input class="form-check-input me-1" type="checkbox" value="" aria-label="..."checked>
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
                    <button type="button" class="btn btn-success">Actualizar</button>
                </div>
            </div>    
        </div>
    </form>
</main>
@endsection