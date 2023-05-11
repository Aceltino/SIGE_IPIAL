@extends('layouts.main')

@section('title', 'Cursos')

@section('conteudo')
<main id="main" class="main">
      <div class="row">
        <div class="col">
          <h2>CURSOS</h2>      
        </div>
      
         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro2">
              <option selected>Area de Formação</option>
              <option value="Construção civil">Construção civil</option>
              <option value="EL">Electricidade</option>
              <option value="Informática">Informática</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
           </select>
         </div> 

         <div class="col-lg-4">
           <select class="btn-sel form-select">
             <option selected>Coordenador</option>
           </select>
         </div>
      
      </div>

      <div class="procurar">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" type="text" name="" class="campo-pesq">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>   
        </form>
      </div>

      <!-- /  Inicio da tabela de inscritos -->
      <table class="table table-striped" id="matricula-tab">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Nome do Curso</th>
            <th scope="col">Area de Formação</th>
            <th scope="col">Coordenador</th>
            <th scope="col">Disciplinas</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Construção civil</td>
            <td>Aceltino</td>
            <td>TLP,SEAC( JESON*)</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>TLP,SEAC( JESON*)</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>TLP,SEAC( JESON*)</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Construção civil</td>
            <td>Tom Brauny</td>
            <td>TLP,SEAC( JESON*)</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          <tr style=" text-align: center;">
            <th scope="row"> Técnico de Informática</th>
            <td>Informática</td>
            <td>Tom Brauny</td>
            <td>TLP,SEAC( JESON*)</td>
            <td>
              <i class="bi bi-eye-fill"></i>
              <a href="/editar-curso"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
              <i class="bi bi-check-square-fill"></i>
            </td>
          </tr>

          


        </tbody>
      </table>
      <!-- Termina a tabela de matriculas -->


    </main>
@endsection