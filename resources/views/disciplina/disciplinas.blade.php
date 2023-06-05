@extends('layouts.main')

@section('title', 'disciplinas')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h2>DISCIPLINAS</h2>      
    </div>
  
      <div class="col-lg-2">
        <select class="btn-sel form-select" id="filtro3">
          <option selected disabled>Curso</option>
          <option value="Desenhador projetista">Desenhador projetista</option>
          <option value="Técnico de Energia e Instalações Electricas">Técnico de Energia e Instalações Electricas</option>
          <option value="Técnico de Informática">Técnico de Informática</option>
          <option value="Electronica e Telecomunicação">Electronica e Telecomunicação</option>
        </select>
      </div> 
      <div class="col-lg-2">
        <select class="btn-sel form-select" id="filtro2">
          <option selected disabled>Componetes</option>
          <option value="Técnicas">Técnicas</option>
          <option value="Socio-culturais">Socio-culturais</option>
          <option value="Cientificas">Cientificas</option>
        </select>
      </div> 

   
  
  </div>

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" placeholder='Digite o numéro de processo' type="text" name="" class="campo-pesq">
      <button type="submit" title="procurar"><i class="bi bi-search"></i></button>   
    </form>
  </div>


  
  <!-- /  Inicio da tabela de disciplina -->
  <table class="table table-striped table-custom" id="matricula-tab">
    <thead>
      <tr style=" text-align: center;">
          <th scope="col">Nome da disciplina</th>
          <th scope="col">Componete</th>
          <th scope="col">Curso</th>
          <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr style=" text-align: center;">
        <th scope="row">Empreendedorismo</th>
        <td>Socio-culturais</td>
        <td>Todos os curos</td>
      
     
        <td>
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
          <a href="/edit-disciplina"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
        
        </td>
      </tr>
      <tr style=" text-align: center;">
        <th scope="row">Programação</th>
        <td>Técnicas</td>
        <td>Técnico de Informática</td>
      
     
        <td>
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
          <a href="/edit-disciplina"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
        
        </td>
      </tr>
      <tr style=" text-align: center;">
        <th scope="row">Empreendedorismo</th>
        <td>Socio-culturais</td>
        <td>Todos os curos</td>
      
     
        <td>
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
          <a href="/edit-disciplina"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
        
        </td>
      </tr>
      
  

      
    </tbody>
  </table>
  <!-- Termina a tabela de disciplina -->

      <!--Inicio da modal ver disciplina-->
      <div class="modal fade" id="ExtralargeModal" tabindex="-1" data-bs-backdrop="false">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">

            <div class="provisorio">
              <div class="card-icon-modal rounded-circle d-flex align-items-center justify-content-flex-end">

                <i class="bi bi-x-lg" data-bs-toggle="modal" aria-label="Close" data-bs-dismiss="modal"></i>
              </div>
            </div>

           
            <div class="cabecalho-modal">
              <div class="row">
                <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                  <h1>Dados da discplina</h1>      
                </div>
                  <div class="corpo-modal" >
              <form class="form-inativo">
                <div class="dados da disciplina">        
                <div class="area-input form-group" style="border: none;">
                <label>Nome da disciplina: </label><input type="text" name="" value=" Matemática" disabled>
            </div>
            <div class="area-input form-group" style="border: none; ">
                <label>Sigla: </label><input type="text" name="" value="MAT" disabled>
            </div>
            <div class="area-input form-group" style="border: none; ">
                <label>Descrição: </label><input type="text" name="" value="A matemática é a área do conhecimento que se ocupa do estudo de números..." disabled>
            </div>
            <div class="area-input form-group" style="border: none; ">
                <label>Componete: </label><input type="text" name="socio-culturais" value="socio-culturais" disabled>
            </div>
            <div class="area-input form-group" style="border: none; ">
                <label>Curso: </label><input type="text" name="socio-culturais" value="Instalaçoes electricas/Electronica e automaçao" disabled>
            </div>

                      <div class="footer-modal" style="text-align: center;">
                        <a href="/edit-disciplina" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                    
                      </div>
            
              </form> 
            </div>
      
            
          </div>
        </div>
      </div>      

     
  
</main>
@endsection