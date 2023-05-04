@extends('layouts.main')

@section('title', 'Ficha Biográfica')

@section('conteudo')
<main id="main" class="main">
      <div class="container">
        <div class="row header-ficha">
          <div class="col">
            <img src="img/foto.jpg"><span>Dados académicos</span>      
          </div>
        
           <div class="col-lg-2">
             <select class="btn-sel form-select">
                <option selected>Avaliação</option>
                <option value="D.P">Ver boletim</option>
                <option value="T.E.I.E">Ficha biográfica</option>
             </select>
           </div>
           
           <div class="col-lg-2">
             Dados pessoais
           </div> 

           <div class="col-lg-2">
             Encarregado
           </div>
        
        </div> 
      </div>

      <div class="container" style="padding-top: 10px; margin-bottom: 20px">
        <div class="row">
          <div class="bordado col">
            <span class="t-negrito">Nome: </span><span class="t-normal">Bruno dos Santos Manuel</span>
          </div>

          <div class="bordado col-lg-2" style="display: flex; justify-content: flex-start; align-items: center;">
            <span class="t-negrito">Processo: </span><span class="t-normal">2339</span>
          </div>
        </div>
        
        <div class="row" style="padding-top: 10px;">
          <div class="bordado col">
            <span class="t-negrito">Curso: </span><span class="t-normal">Tecnico de Informatica</span>
          </div>
        </div>
        
      </div>

      <!--Cor em volta da tabela-->
      <div class="volta-tabela">

        <!--1a Disiciplina-->
        <div class="assidd-diciplina">            
          
            <!-- /  Inicio da tabela de ficha biografica -->
            <table class="tabelassd" style="margin-top: 20px;">
              <thead>
                <tr style="background-color: var(--bs-cor-principal); color: #fff;">
                  <th scope="col" style="text-align: left;">Disciplina</th>
                  <th scope="col">Ano lectivo</th>
                  <th scope="col">Classe</th>
                  <th scope="col">Turma</th>
                  <th scope="col">Nº</th>
                  <th scope="col">1ºT</th>
                  <th scope="col">2ºT</th>                  
                  <th scope="col">3ºT</th>                  
                  <th scope="col">CF</th>                  
                  <th scope="col">PG</th>                  
                  <th scope="col">CA</th>                  
                  <th scope="col">1ºE</th>                  
                  <th scope="col">2ºE</th>                  
                  <th scope="col">3ºE</th>                  
                  <th scope="col">CDF</th>      
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td style="text-align: left;">Lingua Portuguesa</td>
                  <td>23-24</td>
                  <td>10ª</td>
                  <td>I10AM</td>
                  <td>08</td>
                  <td>14</td>
                  <td>14</td>                                                      
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>
                </tr>

                <tr>
                  <td style="text-align: left;">Matematica</td>
                  <td>23-24</td>
                  <td>10ª</td>
                  <td>I10AM</td>
                  <td>08</td>
                  <td>14</td>
                  <td>14</td>                                                      
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>
                </tr>

                <tr>
                  <td style="text-align: left;">Quimica</td>
                  <td>23-24</td>
                  <td>10ª</td>
                  <td>I10AM</td>
                  <td>08</td>
                  <td>14</td>
                  <td>14</td>                                                      
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>
                </tr>                

                <tr>
                  <td colspan="15" style="text-align: left; background-color: #96abce;">
                    
                    <span class="tb-negrito">Situação Final do Aluno: </span><span class="tb-vermelho">Excluido por excesso de faltas</span>
                    <span style="float: right;">
                      <a href="#" style="background-color: #fff; color: #000; padding: 7px; border-radius: 10px;">Ver boletins</a>
                    </span>
                  </td>
                </tr>
                

              </tbody>
            </table>
            <!-- Termina a tabela de ficha biogrfica -->
                        <!-- /  Inicio da tabela de inscritos -->
            <table class="tabelassd" style="margin-top: 20px;">
                <tr>
                  <td style="text-align: left;">Lingua Portuguesa</td>
                  <td>23-24</td>
                  <td>10ª</td>
                  <td>I10AM</td>
                  <td>08</td>
                  <td>14</td>
                  <td>14</td>                                                      
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>
                </tr>

                <tr>
                  <td style="text-align: left;">Matematica</td>
                  <td>23-24</td>
                  <td>10ª</td>
                  <td>I10AM</td>
                  <td>08</td>
                  <td>14</td>
                  <td>14</td>                                                      
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>
                </tr>

                <tr>
                  <td style="text-align: left;">Quimica</td>
                  <td>23-24</td>
                  <td>10ª</td>
                  <td>I10AM</td>
                  <td>08</td>
                  <td>14</td>
                  <td>14</td>                                                      
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>                  
                  <td>14</td>
                </tr>                

                <tr>
                  <td colspan="15" style="text-align: left; background-color: #96abce;">
                    
                    <span class="tb-negrito">Situação Final do Aluno: </span><span class="tb-verde">Aprovado</span>
                    <span style="float: right;">
                      <a href="#" style="background-color: #fff; color: #000; padding: 7px; border-radius: 10px;">Ver boletins</a>
                    </span>
                  </td>
                </tr>
                
            </table>
            <!-- Termina a tabela de inscritos -->
        </div>
 
      </div>
      
      <div class="footer-modal" style="text-align: center;">
        
        <div class="jnt">
            <a href="#" class="btn" style="background-color: #070b17; color: #fff;"><i class="bi bi-arrow-left"></i> Retroceder</a>

            <button class="btn" style="background-color: #070b17; color: #fff;">Imprimir Ficha <i class="bi bi-file-earmark-pdf"></i></button>
        </div>

      </div>      

    </main>

@endsection