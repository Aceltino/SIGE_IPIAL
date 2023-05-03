@extends('layouts.main')

@section('title', 'Assiduidade do Aluno')

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

      <div class="container" style="padding-top: 10px;">
        <div class="row">
          <div class="bordado col">
            <span class="t-negrito">Nome: </span><span class="t-normal">Bruno dos Santos Manuel</span>
          </div>

          <div class="bordado col-lg-2" style="display: flex; justify-content: flex-start; align-items: center;">
            <span class="t-negrito">Número: </span><span class="t-normal">09</span>
          </div>
        </div>
        
      </div>

      <div class="row" style="margin-top: 20px; margin-bottom: 10px;">
        <div class="area-mini-info1 col">
          <select class="btn-sel form-select">
            <option disabled selected>Disiciplina</option>
            <option>Lingua Portuguesa</option>
            <option>Matemática</option>
            <option>TREI</option>
          </select>
        </div>


        <div class="area-mini-info2 col-lg-8" style="">
          <span class="mini-info btn">I10AM</span>
          <span class="mini-info btn">10ª Classe</span>
        </div>
      </div>

      <!--Cor em volta da tabela-->
      <div class="volta-tabela accordion" id="assiduidades">

        <!--1a Disiciplina-->
        <div class="assidd-diciplina">            
          <div class="container">
            <div class="titulo-dassd row" style="color: #fff;">
              <div class="area-mini-info1 col">
                Lingua Portuguesa
              </div>

              <div class="area-mini-info2 col-lg-3">
                <span class="bt-acord accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseUm" aria-expanded="true" aria-controls="collapseUm" style="background-color: transparent;   color: #00ff22;">Ma.Faltas 18</span>
              </div>
            </div>
            
          </div>
          
          <div id="collapseUm" class="accordion-collapse collapse show" aria-labelledby="headingUm" data-bs-parent="#assiduidades">
            <!-- /  Inicio da tabela de assiduidade -->
            <table class="tabelassd" style="margin-top: 20px;">
              <thead>
                <tr>
                  <th scope="col">Data</th>
                  <th scope="col">Tempo</th>
                  <th scope="col">Trimestre</th>
                  <th scope="col">Faltou</th>
                  <th scope="col">Justificativa</th>
                  <th scope="col">Professor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>20/03/2023</td>
                  <td>1º</td>
                  <td>Iº</td>
                  <td><span class="sim">SIM</span></td>
                  <td>Doença</td>
                  <td>Sivi</td>
                </tr>

                
                <tr>
                  <td>20/03/2023</td>
                  <td>1º</td>
                  <td>Iº</td>
                  <td><span class="sim">SIM</span></td>
                  <td>Doença</td>
                  <td>Sivi</td>
                </tr>

                <tr>
                  <td>20/03/2023</td>
                  <td>1º</td>
                  <td>Iº</td>
                  <td><span class="nao">NÃO</span></td>
                  <td><span class="nao">-----------</span></td>
                  <td>Sivi</td>
                </tr>

                <tr>
                  <td><strong>TFNJ</strong></td>
                  <td>--</td>
                  <td>Iº</td>
                  <td><span class="f-normal">5</span></td>
                  <td style="border-left: 2px solid #212121;">
                    <strong>RPF: <span class="nao">NÃO</span></strong>
                  </td>
                  <td></td>
                </tr>

                <tr>
                  <td>20/03/2023</td>
                  <td>6º</td>
                  <td>IIº</td>
                  <td><span class="nao">NÃO</span></td>
                  <td><span class="nao">-----------</span></td>
                  <td>Sivi</td>
                </tr>

              </tbody>
            </table>
            <!-- Termina a tabela de assiduidade -->
            
          </div>
        </div>

        <!--2a Disciplina-->
        <div class="assidd-diciplina">          
          <div class="container">
            <div class="titulo-dassd row" style="color: #fff;">
              <div class="area-mini-info1 col">
                Matematica
              </div>

              <div class="area-mini-info2 col-lg-3">
                <span class="bt-acord accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseDois" aria-expanded="false" aria-controls="collapseDois" style="background-color: transparent;   color: #00ff22;">Ma.Faltas 18</span>
              </div>
            </div>
            
          </div>
          
          <div id="collapseDois" class="accordion-collapse collapse" aria-labelledby="headingDois" data-bs-parent="#assiduidades">
            <!-- /  Inicio da tabela de assiduidade -->
            <table class="tabelassd" style="margin-top: 20px;">
              <thead>
                <tr>
                  <th scope="col">Data</th>
                  <th scope="col">Tempo</th>
                  <th scope="col">Trimestre</th>
                  <th scope="col">Faltou</th>
                  <th scope="col">Justificativa</th>
                  <th scope="col">Professor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>20/03/2023</td>
                  <td>1º</td>
                  <td>Iº</td>
                  <td><span class="sim">SIM</span></td>
                  <td>Doença</td>
                  <td>Sivi</td>
                </tr>

                
                <tr>
                  <td>20/03/2023</td>
                  <td>1º</td>
                  <td>Iº</td>
                  <td><span class="sim">SIM</span></td>
                  <td>Doença</td>
                  <td>Sivi</td>
                </tr>

                <tr>
                  <td>20/03/2023</td>
                  <td>1º</td>
                  <td>Iº</td>
                  <td><span class="nao">NÃO</span></td>
                  <td><span class="nao">-----------</span></td>
                  <td>Sivi</td>
                </tr>

                <tr>
                  <td><strong>TFNJ</strong></td>
                  <td>--</td>
                  <td>Iº</td>
                  <td><span class="f-normal">5</span></td>
                  <td style="border-left: 2px solid #212121;">
                    <strong>RPF: <span class="nao">NÃO</span></strong>
                  </td>
                  <td></td>
                </tr>

                <tr>
                  <td>20/03/2023</td>
                  <td>6º</td>
                  <td>IIº</td>
                  <td><span class="nao">NÃO</span></td>
                  <td><span class="nao">-----------</span></td>
                  <td>Sivi</td>
                </tr>

              </tbody>
            </table>
            <!-- Termina a tabela de assiduidade -->
            
          </div>
        </div>

        <!--3a Disicplina-->
        <div class="assidd-diciplina">          
          <div class="container">
            <div class="titulo-dassd row" style="color: #fff;">
              <div class="area-mini-info1 col">
                Tecnicas de Linguagens de Programacao
              </div>

              <div class="area-mini-info2 col-lg-3">
                <span class="bt-acord accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTres" aria-expanded="false" aria-controls="collapseTres" style="background-color: transparent;   color: #00ff22;">Ma.Faltas 18</span>
              </div>
            </div>
            
          </div>
          
          <div id="collapseTres" class="accordion-collapse collapse" aria-labelledby="headingTres" data-bs-parent="#assiduidades">
            <!-- /  Inicio da tabela de assiduidade -->
            <table class="tabelassd" style="margin-top: 20px;">
              <thead>
                <tr>
                  <th scope="col">Data</th>
                  <th scope="col">Tempo</th>
                  <th scope="col">Trimestre</th>
                  <th scope="col">Faltou</th>
                  <th scope="col">Justificativa</th>
                  <th scope="col">Professor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>20/03/2023</td>
                  <td>1º</td>
                  <td>Iº</td>
                  <td><span class="sim">SIM</span></td>
                  <td>Doença</td>
                  <td>Sivi</td>
                </tr>

                
                <tr>
                  <td>20/03/2023</td>
                  <td>1º</td>
                  <td>Iº</td>
                  <td><span class="sim">SIM</span></td>
                  <td>Doença</td>
                  <td>Sivi</td>
                </tr>

                <tr>
                  <td>20/03/2023</td>
                  <td>1º</td>
                  <td>Iº</td>
                  <td><span class="nao">NÃO</span></td>
                  <td><span class="nao">-----------</span></td>
                  <td>Sivi</td>
                </tr>

                <tr>
                  <td><strong>TFNJ</strong></td>
                  <td>--</td>
                  <td>Iº</td>
                  <td><span class="f-normal">5</span></td>
                  <td style="border-left: 2px solid #212121;">
                    <strong>RPF: <span class="nao">NÃO</span></strong>
                  </td>
                  <td></td>
                </tr>

                <tr>
                  <td>20/03/2023</td>
                  <td>6º</td>
                  <td>IIº</td>
                  <td><span class="nao">NÃO</span></td>
                  <td><span class="nao">-----------</span></td>
                  <td>Sivi</td>
                </tr>

              </tbody>
            </table>
            <!-- Termina a tabela de assiduidade -->
            
          </div>
        </div>          
      </div>
      
      <div class="footer-modal" style="text-align: center;">
        
        <div class="jnt">
            <a href="#" class="btn" style="background-color: #070b17; color: #fff;"><i class="bi bi-arrow-left"></i> Retroceder</a>

            <button class="btn" style="background-color: #070b17; color: #fff;">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
        </div>

      </div>      

    </main>
@endsection