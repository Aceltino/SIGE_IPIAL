@extends('layouts.doc')

@section('title', 'Pautas')

@section('conteudo')
<main id="main" class="main">
      <div class="container no-print">
        <div class="row">
          <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
            <a href="/pautas"><i class="voltar bi bi-arrow-left-circle-fill"></i></a>  
            <h1>Pauta</h1>      
          </div>
        
          <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
              <button class="btn-imprimir" id="gerar-pdf" onclick="window.print()">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
          </div>
        </div>
      </div>
      <!--Inicio da puta -->
      <table class="pauta-geral" id="pauta-g" style="font-size: 10px;">
        <thead class="cabecalho-tab-p">

          <tr>
            <th scope="col" colspan="3">
              
            </th>

            <th scope="col" colspan="29">
              <img src={{URL::asset("img/insignia.jpg")}} alt="Insígnia" class="insignia">
            </th>
            <th scope="col" colspan="3">
              
            </th>
          </tr>
          
          <tr>
            <th scope="col" colspan="3">
              
            </th>
            
            <th scope="col" colspan="29">
              <span class="tx-cab-p">REPÚBLICA DE ANGOLA</span> 
            </th>
            <th scope="col" colspan="3">
              
            </th>
          </tr>
          
          <tr>
            <th scope="col" colspan="3">
              
            </th>
            
            <th scope="col" colspan="29">
              <span class="tx-cab-p">GOVERNO PROVINCIAL DE LUANDA</span>
            </th>
            <th scope="col" colspan="3">
              
            </th>
          </tr>

          <tr>
            <th scope="col" colspan="3">
              VISTO
            </th>
            <th scope="col" colspan="29">
              <span class="tx-cab-p">INSTITUTO POLITÉCNICO INDUSTRIAL "ALDA LARA"</span>
            </th>
            <th scope="col" colspan="3">
              
            </th>
          </tr>


          <tr>
            <th scope="col" colspan="3">
              O DIRECTOR
            </th>
            <th scope="col" colspan="29">
              <span class="tx-curso-p">INFORMÁTICA: TÉCNICO DE INFORMÁTICA</span>
            </th>
            <th scope="col" colspan="3">
              
            </th>           
          </tr>
          
          <tr>
            <td colspan="1">
              
            </td>
            <td colspan="2" style="background-color: #fff; border-bottom: 1px solid #000; padding-bottom: 8px;">
              
            </td>
            <td colspan="29"></td>
            
            <td colspan="3">
              
            </td>
          </tr>

          <tr>
            <th scope="col" colspan="3">
              <span class="nome-dg">VICTORINO ANDRE CACULO</span>
            </th>
            <th scope="col" colspan="29">
              <h1>PAUTA DE AVALIAÇÃO Anual</h1> 
            </th>
            <th colspan="3">
              <span class="ano-lec-p nota-neg">ANO LECTIVO: 2022-2023</span>
            </th>
          </tr>

        </thead>
        <tbody class="corpo-tab-p">
          
          <tr class="linha-tab-p">
            <th class="coluna-tab-p" colspan="3" rowspan="2">
              <span class="tx-turma-p">TURMA: I12BT</span>
            </th>
            <th class="coluna-tab-p cdfs" rowspan="3"><span class="t-vert-maisc">CFD port</span></th>
            <th class="coluna-tab-p cdfs" rowspan="3"><span class="t-vert-maisc">CFD ing</span></th>
            <th class="coluna-tab-p cdfs" rowspan="3"><span class="t-vert-maisc">CFD fai</span></th>
            <th class="coluna-tab-p cdfs" rowspan="3"><span class="t-vert-maisc">CFD elect</span></th>
            <th class="coluna-tab-p cdfs" rowspan="3"><span class="t-vert-maisc">CFD Quim</span></th>
            <th class="coluna-tab-p" colspan="24">
              <span class="tx-disciplina-p maisculo-p">DISICPLINAS</span>
            </th> 

            <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p">OBS(EXAMES)</span></th>
            <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p">RESULTADOS</span></th>
            <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p">Nº</span></th>
                              
          </tr>
          
          <tr class="linha-tab-p">
            <th class="coluna-tab-p" colspan="8"><span class="maisculo-p">TLP</span></th>
            <th class="coluna-tab-p" colspan="8"><span class="maisculo-p">TIC</span></th>
            <th class="coluna-tab-p" colspan="8"><span class="maisculo-p">SEAC</span></th>
          </tr>

          <tr class="linha-tab-p">
            <th class="coluna-tab-p">
              <span class="txnum-aluno-p">Nº</span>
            </th>
            <th class="coluna-tab-p">
              <span class="txnome-aluno-p maisculo-p">NOME COMPLETO</span>
            </th>
            <th class="coluna-tab-p">
              <span class="txproc-p">Nº PROC</span>
            </th>
            <th class="coluna-tab-p"><span class="t-vert">10ª Classe</span></th>          
            <th class="coluna-tab-p"><span class="t-vert">11ª Classe</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">MT1</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">MT2</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">MT3</span></th>
            <th class="c-tab-amarelo coluna-tab-p"><span class="t-vert-maisc">CFD</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">EXAMES</span></th>
            <th class="coluna-tab-p"><span class="t-vert-falta-aluno-p">FALTAS</span></th>
            <th class="coluna-tab-p"><span class="t-vert">10ª Classe</span></th>
            <th class="coluna-tab-p"><span class="t-vert">11ª Classe</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">MT1</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">MT2</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">MT3</span></th>
            <th class="c-tab-amarelo coluna-tab-p"><span class="t-vert-maisc">CFD</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">EXAMES</span></th>
            <th class="coluna-tab-p"><span class="t-vert-falta-aluno-p">FALTAS</span></th>
            <th class="coluna-tab-p"><span class="t-vert">10ª Classe</span></th>
            <th class="coluna-tab-p"><span class="t-vert">11ª Classe</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">MT1</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">MT2</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">MT3</span></th>
            <th class="c-tab-amarelo coluna-tab-p"><span class="t-vert-maisc">CFD</span></th>
            <th class="coluna-tab-p"><span class="t-vert-maisc">EXAMES</span></th>
            <th class="coluna-tab-p"><span class="t-vert-falta-aluno-p">FALTAS</span></th>            
          </tr>

          <tr class="linha-tab-p">
            <td class="coluna-tab-p">
              <span class="num-aluno-p">1</span>
            </td>
            <td class="coluna-tab-p">
              <span class="nome-aluno-p">Nome Completo Deumaluno</span>
            </td>
            <td class="coluna-tab-p">
              <span class="num-proc-p">36701</span>
            </td>          
            <td class="nota coluna-tab-p cdfs"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p cdfs"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p cdfs"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p cdfs"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p cdfs"><span class="nota-pos">14</span></td>


            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">12</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg">8</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg">6</span></td>
            <td class="nota c-tab-amarelo coluna-tab-p"><span class="nota-pos">18</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">19</span></td>

            <td class="nota c-tab-sinza-esq coluna-tab-p">
              <span>
                
              </span>
            </td>

            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">13</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg">9</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg">4</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota c-tab-amarelo coluna-tab-p"><span class="nota-pos">15</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">16</span></td>

            <td class="nota c-tab-sinza-esq coluna-tab-p">
              <span>
                
              </span>
            </td>

            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">12</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg">8</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg">6</span></td>
            <td class="nota c-tab-amarelo coluna-tab-p"><span class="nota-pos">18</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">19</span></td>
            
            <td class="nota c-tab-sinza-esq coluna-tab-p">
              <span>
                
              </span>
            </td>

            <td class="nota coluna-tab-p"><span class="nota-neg maisculo-p">rpf</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg maisculo-p">NÃo transita</span></td>
            <td class="nota coluna-tab-p">1</td>
          </tr>

          <!--Rodape da pauta-->
          <tr>
            <th colspan="3">
              O COORDENADOR DA AREA DE FORMAÇÃO
              <div style="border-bottom: 1px solid #000; margin-top: 15px;"></div>
            </th>

            <th colspan="29"></th>

            <th colspan="3" style="padding-top: 15px;">
              O SUBDIRETOR PEDAGOGICO
              <div style="border-bottom: 1px solid #000; margin-top: 15px;"></div>
            </th>            
          </tr>

          <tr>
            <th colspan="36"></th>

          </tr>

          <tr>
            <th colspan="36"></th>

          </tr>

          <tr>
           <th colspan="36"></th>
          </tr>

          <tr>
            <th colspan="3">Sivi Lando</th>

            <th colspan="29"></th>

            <th colspan="3" style="padding-top: 15px;">             
              DOMINGOS AGOSTINHO
            </th> 
          </tr>

          <tr>
            <th colspan="36"></th>

          </tr>

          <tr>
            <th colspan="36"></th>

          </tr>

          <tr>
           <th colspan="36"></th>
          </tr>


          <tr>
            <th colspan="3">              
              <strong>O(A) DIRETOR(A) DE TURMA </strong>
              <div style="border-bottom: 1px solid #000; margin-top: 15px;"></div>
            </th>
            <th colspan="33"></th>    
          </tr>

          <!--Fim Rodape da pauta-->
        </tbody>
      </table>
      <!--Fim da pauta-->
    <br><br>
</main>
@endsection