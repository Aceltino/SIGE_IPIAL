@extends('layouts.main')

@section('title', 'Alunos Matriculados')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h2>Matriculas</h2>      
    </div>
  
      <div class="col-lg-2">
        <select class="btn-sel form-select">
          <option selected>Curso</option>
          <option value="D.P">Desenhador projetista - D.P</option>
          <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
          <option value="T.I">Técnico de Informática - T.I</option>
          <option value="E.T">Electronica e Telecomunicação - E.T</option>
        </select>
      </div> 

      <div class="col-lg-2">
        <select class="btn-sel form-select">
          <option selected>Matriculas</option>
        </select>
      </div>
  
  </div>

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input type="text" name="" class="campo-pesq">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>   
    </form>
  </div>

  <div style="display: flex; justify-content: flex-end; align-items: center;">
    <button class="btn-imprimir">Imprimir <i class="bi bi-file-earmark-pdf-fill"></i></button>
  </div>
  <!-- /  Inicio da tabela de inscritos -->
  <table class="table table-striped">
    <thead>
      <tr>
        <th scope="col">N do Processo</th>
        <th scope="col">Nome do Aluno</th>
        <th scope="col">Genero</th>
        <th scope="col">Média</th>
        <th scope="col">Idade</th>
        <th scope="col">Curso</th>
        <th scope="col">Período</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">393839</th>
        <td>Fernando Exemplo</td>
        <td>Masculino</td>
        <td>16</td>
        <td>15</td>
        <td>Informática</td>
        <td>Manhã</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-registro"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>
      
      <tr>
        <th scope="row">38373839</th>
        <td>Fernando Exemplo</td>
        <td>Masculino</td>
        <td>16</td>
        <td>15</td>
        <td>Informática</td>
        <td>Manhã</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-matricula"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- Termina a tabela de matriculas -->
  
</main>
@endsection