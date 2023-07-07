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
      <table class="pauta-geral" id="pauta-g">
        <thead class="cabecalho-tab-p">

          <tr>
            <th scope="col" colspan="3">
              
            </th>

            <th scope="col" colspan="21">
            <img src={{URL::asset("img/insignia.jpg")}} alt="Insígnia" class="insignia">
            </th>
            <th scope="col" colspan="3">
              
            </th>
          </tr>
          
          <tr>
            <th scope="col" colspan="3">
              
            </th>
            
            <th scope="col" colspan="21">
              <span class="tx-cab-p">REPÚBLICA DE ANGOLA</span> 
            </th>
            <th scope="col" colspan="3">
              
            </th>
          </tr>
          
          <tr>
            <th scope="col" colspan="3">
              
            </th>
            
            <th scope="col" colspan="21">
              <span class="tx-cab-p">GOVERNO PROVINCIAL DE LUANDA</span>
            </th>
            <th scope="col" colspan="3">
              
            </th>
          </tr>

          <tr>
            <th scope="col" colspan="3">
              VISTO
            </th>
            <th scope="col" colspan="21">
              <span class="tx-cab-p">INSTITUTO POLITÉCNICO INDUSTRIAL "ALDA LARA"</span>
            </th>
            <th scope="col" colspan="3">
              
            </th>
          </tr>


          <tr>
            <th scope="col" colspan="3">
              O DIRECTOR
            </th>
            <th scope="col" colspan="21">
              <span class="tx-curso-p">{{$turma->curso->areaFormacao->nome_area_formacao}}: {{$turma->curso->nome_curso}}</span>
            </th>
            <th scope="col" colspan="3">
              
            </th>           
          </tr>
          
          <tr>
            <td colspan="1">
              
            </td>
            <td colspan="2" style="background-color: #fff; border-bottom: 1px solid #000; padding-bottom: 8px;">
              
            </td>
            <td colspan="21"></td>
            
            <td colspan="3">
              
            </td>
          </tr>

          <tr>
            <th scope="col" colspan="3">
              <span class="nome-dg">{{$dadosAssinantes['director']->pessoa->nome_completo}}</span>
            </th>
            <th scope="col" colspan="21">
              <h1>PAUTA DE AVALIAÇÃO ANUAL</h1>   
            </th>
            <th colspan="3">
              <span class="ano-lec-p nota-neg">ANO LECTIVO: {{$anoTurmaCoord->ano_lectivo->ano_lectivo}}</span>
            </th>
          </tr>

        </thead>
        <tbody class="corpo-tab-p">
          
          <tr class="linha-tab-p">
            <th class="coluna-tab-p" colspan="3" rowspan="2">
              <span class="tx-turma-p">TURMA: {{$anoTurmaCoord->turma->nome_turma}}</span>
            </th>
            <th class="coluna-tab-p" colspan="21">
              <span class="tx-disciplina-p">DISICPLINAS</span>
            </th> 

            <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p">OBS(EXAMES)</span></th>
            <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p">RESULTADOS</span></th>
            <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p">Nº</span></th>
                              
          </tr>

          {{-- @foreach ($collection as $item) --}}
          <tr class="linha-tab-p">
            <th class="coluna-tab-p" colspan="7">TLP</th>
            <th class="coluna-tab-p" colspan="7">TIC</th>
            <th class="coluna-tab-p" colspan="7">SEAC</th>
          </tr>
          {{-- @endforeach --}}

          <tr class="linha-tab-p">
            <th class="coluna-tab-p">
              <span class="txnum-aluno-p">Nº</span>
            </th>
            <th class="coluna-tab-p">
              <span class="txnome-aluno-p">NOME COMPLETO</span>
            </th>
            <th class="coluna-tab-p">
              <span class="txproc-p">Nº PROC</span>
            </th>          
            <th class="coluna-tab-p"><span class="t-vert">10ª Classe</span></th>
            <th class="coluna-tab-p"><span class="t-vert">MT1</span></th>
            <th class="coluna-tab-p"><span class="t-vert">MT2</span></th>
            <th class="coluna-tab-p"><span class="t-vert">MT3</span></th>
            <th class="c-tab-amarelo coluna-tab-p"><span class="t-vert">CFD</span></th>
            <th class="coluna-tab-p"><span class="t-vert">EXAMES</span></th>
            <th class="coluna-tab-p"><span class="t-vert-falta-aluno-p">FALTAS</span></th>
            <th class="coluna-tab-p"><span class="t-vert">10ª Classe</span></th>
            <th class="coluna-tab-p"><span class="t-vert">MT1</span></th>
            <th class="coluna-tab-p"><span class="t-vert">MT2</span></th>
            <th class="coluna-tab-p"><span class="t-vert">MT3</span></th>
            <th class="c-tab-amarelo coluna-tab-p"><span class="t-vert">CFD</span></th>
            <th class="coluna-tab-p"><span class="t-vert">EXAMES</span></th>
            <th class="coluna-tab-p"><span class="t-vert-falta-aluno-p">FALTAS</span></th>
            <th class="coluna-tab-p"><span class="t-vert">10ª Classe</span></th>
            <th class="coluna-tab-p"><span class="t-vert">MT1</span></th>
            <th class="coluna-tab-p"><span class="t-vert">MT2</span></th>
            <th class="coluna-tab-p"><span class="t-vert">MT3</span></th>
            <th class="c-tab-amarelo coluna-tab-p"><span class="t-vert">CFD</span></th>
            <th class="coluna-tab-p"><span class="t-vert">EXAMES</span></th>
            <th class="coluna-tab-p"><span class="t-vert-falta-aluno-p">FALTAS</span></th>            
          </tr>
          
          
        @foreach ($alunos as $aluno)
             
          <tr class="linha-tab-p">
            <td class="coluna-tab-p">
              <span class="num-aluno-p">{{$loop->index+1}}</span>
            </td>
            <td class="coluna-tab-p">
              <span class="nome-aluno-p">{{$aluno->candidato->pessoa->nome_completo}}</span>
            </td>
            <td class="coluna-tab-p">
              <span class="num-proc-p">{{$aluno->aluno_id}}</span>
            </td>   
            
            
            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">12</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">9</span></td>
            <td class="nota c-tab-amarelo coluna-tab-p"><span class="nota-pos">18</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">19</span></td>
            
            <td class="nota c-tab-sinza-esq coluna-tab-p">
              <span>
                
              </span>
            </td>
            
            <td class="nota coluna-tab-p"><span class="nota-pos">13</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">19</span></td>
            <td class="nota coluna-tab-p"><span class="nota-12">4</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota c-tab-amarelo coluna-tab-p"><span class="nota-pos">15</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">16</span></td>
            
            <td class="nota c-tab-sinza-esq coluna-tab-p">
              <span>
                
              </span>
            </td>
            
            <td class="nota coluna-tab-p"><span class="nota-pos">14</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">12</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg">9</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg">8</span></td>
            <td class="nota c-tab-amarelo coluna-tab-p"><span class="nota-pos">18</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">19</span></td>
            
            <td class="nota c-tab-sinza-esq coluna-tab-p">
              <span>
                
              </span>
            </td>            
            
            <td class="nota coluna-tab-p"><span class="nota-neg"></span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">TRANSITA</span></td>
            <td class="nota coluna-tab-p">1</td>
          </tr>
        @endforeach
       

          <!--Rodape da pauta-->
          <tr>
            <th colspan="3" rowspan="3">
              O COORDENADOR DA AREA DE FORMAÇÃO

            </th>
            <th></th>
            <th class="c-tab-sinza coluna-tab-p" colspan="5">Iº Trimestre</th>
            <th></th>

            <th></th>
            <th class="c-tab-sinza coluna-tab-p" colspan="5">Iº Trimestre</th>
            <th></th>

            <th></th>
            <th class="c-tab-sinza coluna-tab-p" colspan="5">Iº Trimestre</th>
            <th></th>

            <th colspan="3" rowspan="3">
              O SUBDIRETOR PEDAGOGICO

            </th>            
          </tr>

          <tr>
            <th></th>
            <th class="coluna-tab-p" colspan="2" style="text-align: left;">C/APROV</th>
            <th class="coluna-tab-p" colspan="3" style="text-align: left;">S/APROV</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="2" style="text-align: left;">C/APROV</th>
            <th class="coluna-tab-p" colspan="3" style="text-align: left;">S/APROV</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="2" style="text-align: left;">C/APROV</th>
            <th class="coluna-tab-p" colspan="3" style="text-align: left;">S/APROV</th>
            <th></th>

          </tr>

          <tr>
            <th></th>
            <th class="coluna-tab-p">MF</th>
            <th class="coluna-tab-p">F</th>
            <th class="coluna-tab-p" colspan="2">MF</th>
            <th class="coluna-tab-p">F</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">MF</th>
            <th class="coluna-tab-p">F</th>
            <th class="coluna-tab-p" colspan="2">MF</th>
            <th class="coluna-tab-p">F</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">MF</th>
            <th class="coluna-tab-p">F</th>
            <th class="coluna-tab-p" colspan="2">MF</th>
            <th class="coluna-tab-p">F</th>
            <th></th>

          </tr>

          <tr>
            <th colspan="3"></th>

            <th></th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p" colspan="2">0</th>
            <th class="coluna-tab-p">0</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p" colspan="2">0</th>
            <th class="coluna-tab-p">0</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p" colspan="2">0</th>
            <th class="coluna-tab-p">0</th>
            <th></th>

            <th colspan="3"></th>
          </tr>

          <tr>
            <th colspan="3">Sivi Lando</th>
            <th></th>
            <th class="c-tab-sinza coluna-tab-p" colspan="5">IIº Trimestre</th>
            <th></th>

            <th></th>
            <th class="c-tab-sinza coluna-tab-p" colspan="5">IIº Trimestre</th>
            <th></th>

            <th></th>
            <th class="c-tab-sinza coluna-tab-p" colspan="5">IIº Trimestre</th>
            <th></th>     

            <th colspan="3">              
              {{$dadosAssinantes['subdirector']->pessoa->nome_completo}}
            </th> 
          </tr>

          <tr>
            <th colspan="3" rowspan="3"></th>
            <th></th>
            <th class="coluna-tab-p" colspan="2" style="text-align: left;">C/APROV</th>
            <th class="coluna-tab-p" colspan="3" style="text-align: left;">S/APROV</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="2" style="text-align: left;">C/APROV</th>
            <th class="coluna-tab-p" colspan="3" style="text-align: left;">S/APROV</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="2" style="text-align: left;">C/APROV</th>
            <th class="coluna-tab-p" colspan="3" style="text-align: left;">S/APROV</th>
            <th></th>

            <th colspan="3" rowspan="7"></th>
          </tr>

          <tr>
            <th></th>
            <th class="coluna-tab-p">MF</th>
            <th class="coluna-tab-p">F</th>
            <th class="coluna-tab-p" colspan="2">MF</th>
            <th class="coluna-tab-p">F</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">MF</th>
            <th class="coluna-tab-p">F</th>
            <th class="coluna-tab-p" colspan="2">MF</th>
            <th class="coluna-tab-p">F</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">MF</th>
            <th class="coluna-tab-p">F</th>
            <th class="coluna-tab-p" colspan="2">MF</th>
            <th class="coluna-tab-p">F</th>
            <th></th>

          </tr>

          <tr>
            <th></th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p" colspan="2">0</th>
            <th class="coluna-tab-p">0</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p" colspan="2">0</th>
            <th class="coluna-tab-p">0</th>
            <th></th>
            
            <th></th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p" colspan="2">0</th>
            <th class="coluna-tab-p">0</th>
            <th></th>
          </tr>


          <tr>
            <th colspan="3" rowspan="4" style="border-bottom: 2px solid #000;">              
              <strong>O(A) DIRETOR(A) DE TURMA </strong>
            </th>
            <th></th>
            <th class="c-tab-sinza coluna-tab-p" colspan="5">IIIº Trimestre</th>
            <th></th>

            <th></th>
            <th class="c-tab-sinza coluna-tab-p" colspan="5">IIIº Trimestre</th>
            <th></th>

            <th></th>
            <th class="c-tab-sinza coluna-tab-p" colspan="5">IIIº Trimestre</th>
            <th></th>      
          </tr>

          <tr>
            <th></th>
            <th class="coluna-tab-p" colspan="2" style="text-align: left;">C/APROV</th>
            <th class="coluna-tab-p" colspan="3" style="text-align: left;">S/APROV</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="2" style="text-align: left;">C/APROV</th>
            <th class="coluna-tab-p" colspan="3" style="text-align: left;">S/APROV</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="2" style="text-align: left;">C/APROV</th>
            <th class="coluna-tab-p" colspan="3" style="text-align: left;">S/APROV</th>
            <th></th>

          </tr>

          <tr>
            <th></th>
            <th class="coluna-tab-p">MF</th>
            <th class="coluna-tab-p">F</th>
            <th class="coluna-tab-p" colspan="2">MF</th>
            <th class="coluna-tab-p">F</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">MF</th>
            <th class="coluna-tab-p">F</th>
            <th class="coluna-tab-p" colspan="2">MF</th>
            <th class="coluna-tab-p">F</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">MF</th>
            <th class="coluna-tab-p">F</th>
            <th class="coluna-tab-p" colspan="2">MF</th>
            <th class="coluna-tab-p">F</th>
            <th></th>

          </tr>

          <tr>
            <th></th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p" colspan="2">0</th>
            <th class="coluna-tab-p">0</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p" colspan="2">0</th>
            <th class="coluna-tab-p">0</th>
            <th></th>
            
            <th></th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p">0</th>
            <th class="coluna-tab-p" colspan="2">0</th>
            <th class="coluna-tab-p">0</th>
            <th></th>
          </tr>

          <tr>
            <th colspan="3" rowspan="2">

            </th>
            <th></th>
            <th class="coluna-tab-p" colspan="5" style="padding: 20px;"></th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="5" style="padding: 20px;"></th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="5" style="padding: 20px;"></th>
            <th></th>
            
            <th colspan="3" rowspan="2">

            </th>

          </tr>

          <tr>

            <th></th>
            <th class="coluna-tab-p" colspan="5">Sungo Afonso</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="5">Margarida Francisco</th>
            <th></th>

            <th></th>
            <th class="coluna-tab-p" colspan="5">Lucia Diambote</th>
            <th></th>

          </tr>


          <!--Fim Rodape da pauta-->
        </tbody>
      </table>
      <!--Fim da pauta-->
             <br><br>
    </main>