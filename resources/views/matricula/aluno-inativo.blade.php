@extends('layouts.main')

@section('title', 'Alunos inativos')

@section('conteudo')
<main id="main" class="main">
      <div class="row header-ficha">
        <div class="col">
          <img src="img/foto.jpg"><span>Dados académicos</span>      
        </div>
      
         <div class="col-lg-2">
           <select class="btn-sel form-select">
              <option selected>Avaliação</option>
              <option value="D.P">Ver boletim</option>
              <option value="T.E.I.E">Ficha biográfica</option>
           </select>
         </div>
         
         <div class="col-lg-2">
           Dados pessoais
         </div> 

         <div class="col-lg-2">
           Encarregado
         </div>
      
      </div>


      <div class="row" style="margin-top: 20px;">
        <div class="col-lg-10">
          <span class="btn" style="background-color: #941919; color: #fff;">Inativo</span>
        </div>

        <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
          <select class="btn-sel form-select">
            <option selected>2022 - 2023</option>
            <option value="2021-2022">2021 - 2022</option>
          </select>
        </div>
      </div>

      <form class="form-inativo">
        <div class="area-input form-group">
          <label>Nome: </label><input type="text" name="">
        </div>
        <div class="area-input form-group">
          <label>Processo: </label><input type="text" name="">
        </div>
        <div class="area-input form-group">
          <label>Curso: </label><input type="text" name="">
        </div>
        <div class="area-input form-group">
          <label>Classe: </label><input type="text" name="">
        </div>
        <div class="area-input form-group">
          <label>Turno: </label><input type="text" name="">
        </div>
        
        <div class="container">
          
          <div class="row">
            <div class="col area-input form-group">
              <label>Sala: </label><input type="text" name="">
            </div>
            <div class="col area-input form-group" style="margin-left: 10px;">
              <label>Número: </label><input type="text" name="">
            </div>
          </div>

        </div>

        <div class="container">
          <div class="row">
            <div class="col area-input form-group">
              <label>Matrícula: </label><input type="text" name="">
            </div>
            <div class="col area-input form-group" style="margin-left: 10px;">
              <label>Ano: </label><input type="text" placeholder="Ano lectivo terminado" name="">
            </div>
          </div>
        </div>

        <div class="area-input form-group">
          <label>Turma: </label>
          <div style="display: flex;justify-content: flex-end; align-items: center; width: 100%;">
            <a href="#" class="btn btn-cor-sg-a">Ver turma</a>
          </div>
        </div>
        <div class="area-input-l form-group">
          <div class="row">
            <div class="col">
              <label>Média atual do ano lectivo: </label>
              
            </div>
          <div class="col-lg-6" style="display: flex;justify-content: flex-end; align-items: center;">
            <a href="#" class="btn btn-cor-sg-a"> Ver ficha biográfica</a>
          </div>
          </div>
        </div>
        <div class="area-input form-group">
          <label>Resultado: </label>
          <div style="display: flex;justify-content: flex-end; align-items: center; width: 100%;">
            <a href="#" class="btn btn-cor-sg-a">Ver boletins</a>
          </div>
        </div>
        <div class="area-input-l form-group">
          <div class="row">
            <div class="col">
              <label>Ver ficha de inscrição: </label>          
            </div>

            <div class="col-lg-6" style="display: flex;justify-content: flex-end; align-items: center;">
              <a href="#" class="btn btn-cor-sg-a">Ver ficha de inscrição</a>
              
            </div>
          </div>
        </div>

        <div style="text-align: center;">
          <button class="btn" style="background-color: #070b17; color: #fff;"><i class="bi bi-arrow-left"></i> Retroceder</button>
          <button class="btn" style="background-color: #26dd35; color: #fff; margin-left: 30px;">Readimitir aluno</button>
        </div>
      
      </form>


    </main>
@endsection