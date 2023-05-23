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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal" ></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
          <a href="/editar-turma"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- Termina a tabela de matriculas -->

        <!--Inicio da modal ver inscrito-->
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
                  <h1>Dados Da Turma</h1>      
                </div>
            
              </div>
            </div>

            <div class="corpo-modal">
            <form class="form-inativo">
              <div class="dados-pessoais">        
                  <div class="area-input form-group">
                      <label>Nome Da Turma: </label><input type="text" name="" value="I12AT"  disabled>
                  </div>

                <div class="row">
                    
                    <div class="col form-group gap-1 ">
                        <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select"  disabled>
                            <option  disabled>Classe:</option>
                            <option value="Décima">10ª</option>
                            <option value="Décima-primeira">11ª</option>
                            <option value="Décima-segunda" selected>12ª</option>
                            <option value="Décima-terceira">13ª</option>
                        </select>
                    </div>
                        
                    <div class="col form-group gap-1 ">
                        <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select"  disabled>
                            <option disabled>Turno:</option>
                            <option value="Manhã">Manhã</option>
                            <option value="Tarde" selected>Tarde</option>
                            <option value="Noite">Noite</option>
                        </select>
                    </div>

                    <div class="form-group col">
                        <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select"  disabled>
                            <option  disabled>CURSO</option>
                                <option value ="I" selected>Informática - I</option>
                                <option value="D.P">Desenhador projetista - D.P</option>
                                <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                                <option value="T.I">Técnico de Informática - T.I</option>
                                <option value="E.T">Electronica e Telecomunicação - E.T</option>
                        </select>
                    </div>


                </div>
                <div class="container">
                <div class="row">

                    <div class=" col area-input form-group " >
                        <label for=""> Sala:</label><input type="text" name="" value="09"  disabled >
                    </div>
                    <div class=" col area-input form-group " style="margin-left: 10px;" >
                        <label for=""> Ano Lectivo:</label><input type="text" name="" value="2020-2021"  disabled >
                    </div>
                    <div class=" col area-input form-group " style="margin-left: 10px;" >
                        <label for=""> Vagas:</label><input type="text" name="" value="50" disabled>
                    </div>
                </div>
            </div>

            <div class="footer-modal" style="text-align: center;">
                 
                 <div class="jnt">
                     <a href="/turmas" class="btn" style="background-color: #070b17; color: #fff;">Retrocer as Turmas</a>

                     <a href="/editar-turma" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
 
 
                 </div>
               </div>
        </div>
        
    </form> 
            </div>
            
          </div>
        </div>
      </div>      

      <!--  / Termina a modal ver inscrito-->


    </main>
@endsection