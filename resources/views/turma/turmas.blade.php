@extends('layouts.main')

@section('title', 'Turmas')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h2>TURMAS</h2>      
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

      <div class="col-lg-2">
        <select class="btn-sel form-select">
          <option selected>Ano</option>
        </select>
      </div>
  
  </div>

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input  id="pesquisa" type="text" name="" class="campo-pesq">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>   
    </form>
  </div>

  <!-- /  Inicio da tabela de inscritos -->
  <table class="table table-striped"  id="matricula-tab">
    <thead>
      <tr style=" text-align: center;">
        <th scope="col">Nome da Turma</th>
        <th scope="col">Classe</th>
        <th scope="col">Turno</th>
        <th scope="col">Vagas</th>
        <th scope="col">Curso</th>
        <th scope="col">Sala</th>
        <th scope="col">Ano</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr style=" text-align: center;">
        <th scope="row">I10AM</th>
        <td>10ª</td>
        <td>Tarde</td>
        <td>16</td>
        <td>Informática</td>
        <td>100</td>
        <td>2020/2029</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Telecomunicação</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Telecomunicação</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Desenhador projetista</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Telecomunicação</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Desenhador projetista</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Telecomunicação</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Informática</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Telecomunicação</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Telecomunicação</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Informática</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Telecomunicação</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">I13AT</th>
        <td>12ª</td>
        <td>Tarde</td>
        <td>50</td>
        <td>Telecomunicação</td>
        <td>100</td>
        <td>2020/2024</td>
        <td>
          <i class="bi bi-eye-fill"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- Termina a tabela de matriculas -->


    </main>
@endsection