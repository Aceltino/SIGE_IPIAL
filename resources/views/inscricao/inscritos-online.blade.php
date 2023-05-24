@extends('layouts.main')

@section('title', 'Inscritos via online')

@section('conteudo')
<main id="main" class="main">
  <div class="pagetitle">
      <div class="row">
          <div class="col">
              <h1>INSCRITOS ONLINE</h1>      
          </div>
      
          <div class="col-lg-2">
          <select class="btn-sel form-select">
              <option selected>Rejeitados</option>
              <option value="D.P">Desenhador projetista - D.P</option>
              <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
              <option value="T.I">Técnico de Informática - T.I</option>
              <option value="E.T">Electronica e Telecomunicação - E.T</option>
          </select>
          </div> 
      
      </div>
  </div>

  <div class="procurar">
  <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" type="text" placeholder="Digite o código da inscrição ou o número do B.I do Candidato" name="" class="campo-pesq">
      <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
  </form>
  </div>

  <!-- /  Inicio da tabela de inscritos -->
  <table  id="matricula-tab" class="table table-striped" style="margin-top: 20px;" >
    <thead  style=" text-align: center;">
      <tr>
        <th scope="col">Número do BI</th>
        <th scope="col">Nome do Candidato</th>
        <th scope="col">Genero</th>
        <th scope="col">Média</th>
        <th scope="col">Idade</th>
        <th scope="col">Curso</th>
        <th scope="col">Período</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      <tr  style=" text-align: center;">
        <th scope="row">0000000KJ000098</th>
        <td>Fernando Exemplo</td>
        <td>Masculino</td>
        <td>16</td>
        <td>15</td>
        <td>Informática</td>
        <td>Manhã</td>
        <td>
        <a href="#" class="btn btn-cor-sg-a" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">Ver inscrição</a>
        </td>
      </tr>
      
      <tr  style=" text-align: center;">
        <th scope="row">0000000KJ000098</th>
        <td>Fernando Exemplo</td>
        <td>Masculino</td>
        <td>16</td>
        <td>15</td>
        <td>Informática</td>
        <td>Manhã</td>
        <td>
            <a href="#" class="btn btn-cor-sg-a" data-bs-toggle="modal" data-bs-target="#ExtralargeModal">Ver inscrição</a>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- Termina a tabela de inscritos -->

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
              <h1>Dados pessoais</h1>      
            </div>
          
            <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
              <button class="btn-imprimir">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
            </div>
          </div>
        </div>

        <div class="corpo-modal">
          <form class="form-inativo">
            <div class="dados-pessoais">        
              <div class="area-input form-group">
                <label>Nome Completo: </label><input type="text" name="" readonly="true" disabled value="Bruno dos Santos Manuel">
              </div>
              <div class="area-input form-group">
                <label>Nome do Pai: </label><input type="text" name="" readonly="true" disabled value="Bruno dos Santos Manuel">
              </div>
              <div class="area-input form-group">
                <label>Nome da Mãe: </label><input type="text" name="" readonly="true" disabled value="Fernanda MIiles Manuel">
              </div>

              <div class="container">
                <div class="row">
                  <div class="col area-input form-group">
                    <label>Data de nascimento: </label><input type="text" name="" readonly="true" disabled value="05/04/2023">  
                  </div>

                  <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Idade: </label><input type="text" name="" readonly="true" disabled value="16">
                  </div>

                  <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Gênero: </label><input type="text" name="" readonly="true" disabled value="Masculino">
                    
                  </div>

                </div>
              </div>

              <div class="area-input form-group">
                <label>Número do BI: </label><input type="text" name="" readonly="true" disabled value="0002505QL014">
              </div>

              <div class="container">
                <div class="row">
                  <div class="col area-input form-group">
                    <label>Tel-1: </label><input type="text" name="" readonly="true" disabled value="998 766 656">
                    
                  </div>
                  <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Tel-2: </label><input type="text" name="" readonly="true" disabled value="998 766 656">
                    
                  </div>
                </div>              
              </div>

              <div class="container">
                <div class="row">
                  <div class="col area-input form-group">
                    <label>Tel-3: </label><input type="text" name="" readonly="true" disabled value="998 766 656">
                  </div>

                  <div class="col area-input form-group" style="margin-left: 10px;">
                    <button class="accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border: none;background-color: transparent;">
                            Informações do Instituto: <i class="bi bi-arrow-right"></i>
                          </button>
                  </div>
                </div>
              </div>
                  
            </div>

            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              <div class="dados-academicos">
                <div class="row">
                  <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                    <h1>Dados académicos</h1>      
                  </div>
                
                </div>

                <br>

                  <div class="area-input form-group">
                    <label>Escola de proveniência: </label><input type="text" name="" readonly="true" disabled value="Escola Pública">
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Turno: </label><input type="text" name="" readonly="true" disabled value="Manhã">
                        
                      </div>
                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Turma: </label><input type="text" name="" readonly="true" disabled value="IJ12">
                        
                      </div>
                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Nº aluno: </label>
                        <input type="text" name="" readonly="true" disabled value="21">
                    </div>
                    </div>              
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Número de processo: </label><input type="text" name="" readonly="true" disabled value="76656">
                      
                      </div>
                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Ano lectivo: </label><input type="text" name="" readonly="true" disabled value="2022-2023">
                      
                      </div>
                    </div>
                  </div>
                
                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Língua Poertuguesa: </label><input type="text" name="" readonly="true" disabled value="17">
                      
                      </div>
                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>1º Curso: </label><input type="text" name="" readonly="true" disabled value="Electronica e Telecomunicação">
                      
                      </div>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Matemática: </label><input type="text" name="" readonly="true" disabled value="15">
                      
                      </div>
                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>2º Curso: </label><input type="text" name="" readonly="true" disabled value="Desenhador projetista - D.P">
                      
                      </div>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Química: </label><input type="text" name="" readonly="true" disabled value="14">
                      
                      </div>
                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>3º Curso: </label><input type="text" name="" readonly="true" disabled value="Técnico de Energia e Instalações Electricas">
                      
                      </div>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Física: </label><input type="text" name="" readonly="true" disabled value="16">
                      
                      </div>
                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>4º Curso: </label><input type="text" name="" readonly="true" disabled value="Técnico de Informática">
                      
                      </div>
                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col form-group">
                        <label style="padding: 10px; border-radius: 10px; background-color: #96abce;">Inscrição: 10-01-2023</label>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
                  
            <div class="footer-modal" style="text-align: center;">
              <a href="/editar-candidato" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
              <div class="jnt">
                  <a href="#" class="btn" style="background-color: #070b17; color: #fff;">Retrocer aos inscritos</a>

                  <a href="#ExtralargeModal" class="btn" style="background-color: #070b17; color: #fff;">Dados pessoais <i class="bi bi-arrow-up"></i></a>
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