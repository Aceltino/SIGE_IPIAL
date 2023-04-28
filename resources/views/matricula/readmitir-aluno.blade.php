@extends('layouts.main')

@section('title', 'Readimitir Aluno')

@section('conteudo')
<main id="main" class="main" >

<form id="regFormh" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:10px;">
          <span class="step"></span>
        </div>
</form>

<div class="tab">     
    <div class="container-fluid">
         <div class="row" >
            <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                <div style="  text-align: center;">
                    <h2>DADOS DO INSTITUTO</h2>
                </div>

         </div>
         </div>
    <form id="regFormh" action="" class="formulario-layout">

        <div class="form-group">
            <input type="text" placeholder="Nome Completo do Aluno" name="" >
        </div>

            <div class="row">
                
                <div class="col">
                <div class="form-group">
                    <input type="text" placeholder="Turno do Aluno" >
                </div>
                </div>

                <div class="col">
                <div class="form-group">
                    <input type="text" placeholder="Turma do Aluno" >
                </div> 
                </div>

                <div class="col">
                <div class="form-group">
                    <input type="text" placeholder="Nº do Aluno" >
                </div> 
                </div>
          </div>

            <div class="row">

                <div class="col">
                  <div class="form-group">
                <input type="text" placeholder="Número de processo" >
                  </div> 
                </div>

                <div class="col">
                 <div class="form-group">
                <input type="text" placeholder="Ano lectivo" >
                 </div> 
                </div>
            </div>

            <div class="row">

                <div class="col">
                  <div class="form-group">
                <input type="text" placeholder="Sala do Aluno" >
                  </div> 
                </div>

                <div class="col">
                 <div class="form-group">
                <input type="text" placeholder="Classe do aluno" >
                 </div> 
                </div>
            </div>

        <div class="form-group">
            <input type="text" placeholder="Curso do aluno" name="" >
         </div>

            
            </div>
            </div>
        
    </form>
</div>

<div style="text-align:center;margin-top:10px;">
          <div>
            <button type="button" class="btn btn-danger" >Cancelar</button>
            <button type="button" class="btn btn-success" >Readmitir Aluno</button>
          </div>
        </div>
</main>
@endsection
