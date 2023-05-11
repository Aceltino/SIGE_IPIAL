@extends('layouts.main')

@section('title', 'Alunos Matriculados')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h2>Matriculas</h2>      
    </div>
  
      <div class="col-lg-2">
        <select class="btn-sel form-select" id="filtro">
          <option selected disabled>Curso</option>
          <option value="Desenhador projetista">Desenhador projetista</option>
          <option value="Técnico de Energia e Instalações Electricas">Técnico de Energia e Instalações Electricas</option>
          <option value="Técnico de Informática">Técnico de Informática</option>
          <option value="Electronica e Telecomunicação">Electronica e Telecomunicação</option>
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
      <input id="pesquisa" type="text" name="" class="campo-pesq">
      <button type="submit" title="procurar"><i class="bi bi-search"></i></button>   
    </form>
  </div>

  <div style="display: flex; justify-content: flex-end; align-items: center;">
    <button class="btn-imprimir">Imprimir <i class="bi bi-file-earmark-pdf-fill"></i></button>
  </div>
  
  <!-- /  Inicio da tabela de inscritos -->
  <table class="table table-striped table-custom" id="matricula-tab">
    <thead>
      <tr style=" text-align: center;">
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
      <tr style=" text-align: center;">
        <th scope="row">393839</th>
        <td>Fernando </td>
        <td>Masculino</td>
        <td>16</td>
        <td>15</td>
        <td>Técnico de Informática</td>
        <td>Manhã</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-registro"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>
      
      <tr style=" text-align: center;">
        <th scope="row">38373839</th>
        <td>Fernando Exemplo</td>
        <td>Masculino</td>
        <td>16</td>
        <td>15</td>
        <td>Desenhador projetista</td>
        <td>Manhã</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-matricula"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
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