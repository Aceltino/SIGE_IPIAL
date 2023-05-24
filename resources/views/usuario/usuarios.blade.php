@extends('layouts.main')

@section('title', 'Consultar usuário')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h2>Usuários</h2>     
  </div>
  
  <div class="col-md-12 col-lg-4 mb-2">
    <select class="btn-sel form-select" id="filtro4">
                <option selected disabled>Cargo:</option>
                <option value="Professora">Professora</option>
                <option value="Secretária">Secretária</option>
                <option value="Coordenadora">Coordenadora</option>
        </optgroup>
    </select>
</div> 

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" type="text" name="" class="campo-pesq">
      <button type="submit" title="procurar"><i class="bi bi-search"></i></button>   
    </form>
  </div>

  
  <!-- /  Inicio da tabela de usuários-->
  <table class="table table-striped table-custom" id="matricula-tab">
    <thead>
      <tr style=" text-align: center;">
          <th scope="col">Nome do usuário</th>
          <th scope="col">Email</th>
          <th scope="col">Genero</th>
          <th scope="col">Cargo</th>
          <th scope="col">Estado</th>
          <th></th>
      </tr>
    </thead>
    <tbody>
      <tr style=" text-align: center;">
        <th scope="row">Maria Paulo André</th>
        <td>MariaPauloAndré</td>
        <td>Femenina</td>
        <td>professora</td>
        <td> <a href="#" class="btn btn-cor-sg-a w-48 bg-red">Inactivar</a> </td>
        <td>
            <i class="bi bi-eye-fill"></i>
            <a href="/use_editar"><i class="bi bi-pencil"></i></a>
            <i class="bi bi-trash-fill"></i>
            
          </td>
      </tr>
      

      
    </tbody>
  </table>
  <!-- Termina a tabela do usuário -->
  
</main>
@endsection