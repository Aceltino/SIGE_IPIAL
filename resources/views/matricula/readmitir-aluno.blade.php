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
          <input type="text" class="form-control" value= "Márcio Celestino" placeholder="Nome Completo do Aluno" name="" disabled readonly>
        </div>

        <div class="row">
            
          <div class="col">
            <div class="form-group">
              <span>Turno do Aluno</span>
              <input type="text" class="form-control" value= "Manhã" placeholder="Turno do Aluno" disabled readonly >
            </div>
          </div>

            <div class="col">
              <div class="form-group">
                <span>Turma do Aluno</span>
                  <input type="text" class="form-control" value= "I11AM" placeholder="Turma do Aluno" disabled readonly >
              </div> 
            </div>

            <div class="col">
              <div class="form-group">
                <span>Número do Aluno</span>
                  <input type="text" class="form-control" value= "33" placeholder="Nº do Aluno" disabled readonly >
              </div> 
            </div>
        </div>

        <div class="row">

            <div class="col">
              <div class="form-group">
                <span>Número de Processo</span>
                <input type="text" class="form-control" value= "9383474" placeholder="Número de processo" disabled readonly >
              </div> 
            </div>

            <div class="col">
              <div class="form-group">
                <span>Ano lectivo</span>
                <input type="text" class="form-control" value= "2020/2029" placeholder="Ano lectivo" disabled readonly >
              </div> 
            </div>
        </div>

        <div class="row">

            <div class="col">
              <div class="form-group">
                <span>Sala do Aluno</span>
                <input type="text" class="form-control" value= "44" placeholder="Sala do Aluno" disabled readonly >
              </div> 
            </div>

            <div class="col">
              <div class="form-group">
                <span>Classe do ALuno</span>
                <input type="text" class="form-control" value= "12ª" placeholder="Classe do aluno" disabled readonly>
              </div> 
            </div>
        </div>

        <div class="form-group">
            <input type="text" class="form-control" style=" text-align: center; "value= "Informática" placeholder="Curso do aluno" name="" disabled readonly >
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
