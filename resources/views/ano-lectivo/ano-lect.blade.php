@extends('layouts.main')

@section('title', 'Anos Letivos')

@section('conteudo')
<main id="main" class="main">
      <div class="row">
        <div class="col">
          <h2 class="color-blue-principal">ANO LECTIVO</h2>      
        </div>
         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro1">
             <option selected disabled>Ano de Inicio</option>
             <option value="2021">2021</option>
             <option value="2022">2022</option>
             <option value="2023">2023</option>
             <option value="2024">2024</option>
             <option value="2025">2025</option>
             <option value="2026">2026</option>
           </select>
         </div>

         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro2">
             <option selected disabled>Ano de fim</option>
             <option value="2021">2021</option>
             <option value="2022">2022</option>
             <option value="2023">2023</option>
             <option value="2024">2024</option>
             <option value="2025">2025</option>
             <option value="2026">2026</option>
           </select>
         </div>
      
      </div>

      <div class="procurar mt-4">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" placeholder="Qual ano letivo estás a procurar?" value="" type="text" name="" class="campo-pesq">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>   
        </form>
      </div>

      <!-- /  Inicio da tabela de inscritos -->
      <table id="matricula-tab" class="table table-striped mt-4">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Designação</th>
            <th scope="col">Data de Inicio</th>
            <th scope="col">Data de Fim</th>
            <th scope="col">Número máximo de vagas nas turmas</th>
            <th scope="col">Qtd. de salas</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
            </td>
          </tr>

          
          <tr style=" text-align: center;">
            <td>2025-2026</td>
            <td>04/09/2025</td>
            <td>14/07/2026</td>
            <td>50</td>
            <td>50</td>
            <td>
              <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
              <a href="/editar-ano-letivo"><i class="bi bi-pencil"></i></a>
              <i class="bi bi-trash-fill"></i>
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
                  <h1>Dados Do Ano Lectivo</h1>      
                </div>
            
              </div>
            </div>

            <div class="corpo-modal">
              <form class="form-inativo">
                <div class="dados-pessoais">
                  <div Class="row">

                    <div class=" col area-input form-group" disabled>
                     <label>Nome do Ano Letivo: </label><input class="form-control" type="text" name="" value="Ano-Alda-2023" style="text-align: center;" disabled>
                    </div>
                  </div>  

                  <div Class="row">

                    <div class=" col area-input form-group" disabled>
                     <label>Data de Inicio: </label><input class="form-control" type="text" name="" value="2020" disabled>
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;" disabled>
                     <label>Data de Fim: </label><input class="form-control" type="text" name="" value="2021" disabled>
                    </div>
                  </div>  
                  
                  <div class="row">
                    <div class="col area-input form-group" disabled>
                      <label>Número Máximo de vagas na turma: </label><input class="form-control" type="text" name="" value="50" disabled>
                    </div>
  
                    <div class="col area-input form-group" style="margin-left: 10px;" disabled>
                      <label>Número Máximo de Sala: </label><input class="form-control" type="text" name="" value="29" disabled>
                    </div>

                  </div>
                  
                  <div Class="row">

                    <div class=" col area-input form-group" disabled>
                      <label>Início das Incrições:</label><input class="form-control" type="text" name="" value="2002" disabled>
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;" disabled>
                      <label>Fim das Incrições:</label><input class="form-control" type="text" name="" value="2023" disabled>
                    </div>
                  </div> 

                  <div Class="row">

                    <div class=" col area-input form-group" disabled>
                      <label>Início das Matriculas:</label><input class="form-control" type="text" name="" value="2002" disabled>
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;" disabled>
                      <label>Fim das Matriculas:</label><input class="form-control" type="text" name="" value="2023" disabled>
                    </div>
                  </div> 

                </div>
                <div class="footer-modal" style="text-align: center;">
                 
                  <div class="jnt">
                      <a href="/ano-letivo" class="btn" style="background-color: #070b17; color: #fff;">Retrocer aos Anos Lectivos</a>

                      <a href="/editar-ano-letivo" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
  
  
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