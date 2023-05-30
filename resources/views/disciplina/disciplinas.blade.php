@extends('layouts.main')

@section('title', 'disciplinas')

@section('conteudo')
<main id="main" class="main">
      <div class="row">
        <div class="col">
          <h2>DISCIPLINAS</h2>      
        </div>
        <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro5">
              <option selected>curso</option>
              <option value="Desenhador projetista">Desenhador projetista</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="Informática">Informática</option>
              <option value="Telecomunicação">Telecomunicação</option>
            </select>
          </div> 
      
      <div class="procurar">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" type="text" name="" class="campo-pesq">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>   
        </form>
      </div>

      <!-- /  Inicio da tabela de inscritos -->
      <table class="table table-striped" id="disciplinas">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Nome da disciplina</th>
            <th scope="col">Curso</th>
          </tr>
        </thead> <br>
        <tbody>

          <tr style=" text-align: center;">
            <th scope="row">Técnico de Informática</th>
            <th scope="row">Informática</th>
           
            <td>
             
              <a href="/edit-disciplina"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          <tr style=" text-align: center;">
            <th scope="row">Informática</th>
              <th scope="row">Desenhador projetista</th>
           
            <td>
              
              <a href="/edit-disciplina"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          <tr style=" text-align: center;">
            <th scope="row"> Matemática</th>
            <th scope="row">Telecomunicação</th>

            <td>
          
              <a href="/edit-disciplina"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          <tr style=" text-align: center;">
            <th scope="row">Empreendedorismo</th>
            <th scope="row">Técnico de Energia e Instalações Electricas</th>
        
            <td>
             
              <a href="/edit-disciplina"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

        </tbody>
      </table>
      <!-- Termina a tabela de matriculas -->


    </main>
@endsection