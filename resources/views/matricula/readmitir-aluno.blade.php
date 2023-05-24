@extends('layouts.main')

@section('title', 'Readimitir Aluno')

@section('conteudo')
<main id="main" class="main" >
  
  <form method="POST" action="" id="regForm" action="" class="formulario-layout">

    <div style="text-align:center;margin-top:10px;">
      <span class="step"></span>
    </div>

      <div class="tab">     

        <div class="row" >
          <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

            <div style="  text-align: center;">
                <h2>DADOS DO INSTITUTO</h2>
            </div>

          </div>
        </div>

        <div class="form-group">
          <input type="text" value= "Márcio Celestino" placeholder="Nome Completo do Aluno" name="" >
        </div>

        <div class="row">
            
          <div class="col">
            <div class="form-group">
              <input type="text" value= "Manhã" placeholder="Turno do Aluno" >
            </div>
          </div>

            <div class="col">
              <div class="form-group">
                  <input type="text" value= "I11AM" placeholder="Turma do Aluno" >
              </div> 
            </div>

            <div class="col">
              <div class="form-group">
                  <input type="text" value= "33" placeholder="Nº do Aluno" >
              </div> 
            </div>
        </div>

        <div class="row">

            <div class="col">
              <div class="form-group">
                <input type="text" value= "9383474" placeholder="Número de processo" >
              </div> 
            </div>

            <div class="col">
              <div class="form-group">
                <input type="text" value= "2020/2029" placeholder="Ano lectivo" >
              </div> 
            </div>
        </div>

        <div class="row">

            <div class="col">
              <div class="form-group">
                <input type="text" value= "44" placeholder="Sala do Aluno" >
              </div> 
            </div>

            <div class="col">
              <div class="form-group">
                <input type="text" value= "I13AM" placeholder="Classe do aluno" >
              </div> 
            </div>
        </div>

        <div class="form-group"> 
          <select oninput="this.className = ''" class="form-select">
            <option selected>Turno</option>
            <option>Manhã</option>
            <option>Tarde</option>
            <option>Noite</option>
          </select>
        </div>

        <div class="form-group">
            <input type="text" value= "exame 1" placeholder="Curso do aluno" name="" >
        </div>

        <div class="form-group">
            <input type="text" value= "exame 2" placeholder="Curso do aluno" name="" >
        </div>

        <div class="form-group">
            <input type="text" value= "Exame 3" placeholder="Curso do aluno" name="" >
        </div>

        <div class="form-group">
            <input type="text" style=" text-align: center; "value= "Informática" placeholder="Curso do aluno" name="" >
        </div>
      </div>

      <div style="text-align:center;margin-top:10px;">
        <div>
          <button type="button" class="btn btn-danger" >Cancelar</button>
          <button type="button" class="btn btn-success" >Readmitir Aluno</button>
        </div>
      </div>
  </form>
</main>
@endsection
