@extends('layouts.doc')

@section('title', 'Pautas Trimestral')

@section('conteudo')
<main id="main" class="main" style="margin-left: 0; position: absolute; width: 100%;">
    <div class="container no-print">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
        <a href="/pautas"><i class="voltar bi bi-arrow-left-circle-fill"></i></a>
        <h1>Pauta Trimestral</h1>      
        </div>
    
        <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
            <button class="btn-imprimir" id="gerar-pdf" onclick="window.print()">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
        </div>
    </div>
    </div>
      <!--Inicio da puta -->
    <table class="pauta-geral" id="pauta-g" style="width: 100%;">
    <thead class="cabecalho-tab-p">

        <tr>
        <th scope="col" colspan="3">
            
        </th>

        <th scope="col" colspan="12">
            <img src={{URL::asset("img/insignia.jpg")}} alt="Insígnia" class="insignia">
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>
        
        <tr>
        <th scope="col" colspan="3">
            
        </th>
        
        <th scope="col" colspan="12">
            <span class="tx-cab-p">REPÚBLICA DE ANGOLA</span> 
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>
        
        <tr>
        <th scope="col" colspan="3">
            
        </th>
        
        <th scope="col" colspan="12">
            <span class="tx-cab-p">GOVERNO PROVINCIAL DE LUANDA</span>
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>

        <tr>
        <th scope="col" colspan="3">
            VISTO
        </th>
        <th scope="col" colspan="12">
            <span class="tx-cab-p">INSTITUTO POLITÉCNICO INDUSTRIAL "ALDA LARA"</span>
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>


        <tr>
        <th scope="col" colspan="3">
            O DIRECTOR
        </th>
        <th scope="col" colspan="12">
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
        <td colspan="12"></td>
        
        <td colspan="3">
            
        </td>
        </tr>

        <tr>
        <th scope="col" colspan="3">
            <span class="nome-dg">VICTORINO ANDRE CACULO</span>
        </th>
        <th scope="col" colspan="12">
            <h1 style="font-size: 30px;">PAUTA DE AVALIAÇÃO Trimestral</h1> 
        </th>
        <th colspan="3">
            <span class="ano-lec-p nota-neg">ANO LECTIVO: 2022-2023</span>
        </th>
        </tr>

    </thead>
    <tbody class="corpo-tab-p">
        
        <tr class="linha-tab-p">
        <th class="coluna-tab-p" colspan="3" rowspan="2">
            <span class="tx-turma-p">TURMA: I10AM</span>
        </th>
        <th class="coluna-tab-p" colspan="15">
            <span class="tx-disciplina-p">DISICPLINAS</span>
        </th> 
                            
        </tr>
        
        <tr class="linha-tab-p">
        <th class="coluna-tab-ps" colspan="3" style="border-left: 1px solid #000;">TLP</th>
        <th class="coluna-tab-ps" colspan="3" style="border-left: 1px solid #000;">TIC</th>
        <th class="coluna-tab-ps" colspan="3" style="border-left: 1px solid #000;">SEAC</th>
        <th class="coluna-tab-ps" colspan="3" style="border-left: 1px solid #000;">SEAC</th>
        <th class="coluna-tab-ps" colspan="3" style="border-left: 1px solid #000;">SEAC</th>
        </tr>

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
        <th class="coluna-tab-p"><span class="t-vert">MT1</span></th>
        <th class="coluna-tab-p"><span class="t-vert">MT2</span></th>
        <th class="coluna-tab-p c-tab-sinza-esq"><span class="t-vert-falta-aluno-p">FALTAS</span></th>
        <th class="coluna-tab-p"><span class="t-vert">MT1</span></th>
        <th class="coluna-tab-p"><span class="t-vert">MT2</span></th>
        <th class="coluna-tab-p c-tab-sinza-esq"><span class="t-vert-falta-aluno-p">FALTAS</span></th>
        <th class="coluna-tab-p"><span class="t-vert">MT1</span></th>
        <th class="coluna-tab-p"><span class="t-vert">MT2</span></th>
        <th class="coluna-tab-p c-tab-sinza-esq"><span class="t-vert-falta-aluno-p">FALTAS</span></th>
        <th class="coluna-tab-p"><span class="t-vert">MT1</span></th>
        <th class="coluna-tab-p"><span class="t-vert">MT2</span></th>
        <th class="coluna-tab-p c-tab-sinza-esq"><span class="t-vert-falta-aluno-p">FALTAS</span></th>
        <th class="coluna-tab-p"><span class="t-vert">MT1</span></th>
        <th class="coluna-tab-p"><span class="t-vert">MT2</span></th>
        <th class="coluna-tab-p c-tab-sinza-esq"><span class="t-vert-falta-aluno-p">FALTAS</span></th> 

        </tr>

        <tr class="linha-tab-p">
        <td class="coluna-tab-p">
            <span class="num-aluno-p">1</span>
        </td>
        <td class="coluna-tab-ps">
            <span class="nome-aluno-p">Nome Completo Deumaluno</span>
        </td>
        <td class="coluna-tab-ps" style="border-left: 1px solid #000;">
            <span class="num-proc-p">36701</span>
        </td>          
        <td class="nota coluna-tab-p"><span class="nota-pos">12</span></td>
        <td class="nota coluna-tab-p"><span class="nota-neg">8</span></td>
        
        <td class="nota coluna-tab-p">
            <span>
            
            </span>
        </td>

        <td class="nota coluna-tab-p"><span class="nota-neg">9</span></td>
        <td class="nota coluna-tab-p"><span class="nota-neg">4</span></td>
        <td class="nota coluna-tab-p">
            <span>
            
            </span>
        </td>

        <td class="nota coluna-tab-p"><span class="nota-pos">12</span></td>
        <td class="nota coluna-tab-p"><span class="nota-neg">8</span></td>
        
        <td class="nota coluna-tab-p">
            <span>
            
            </span>
        </td>
        <td class="nota coluna-tab-p"><span class="nota-pos">12</span></td>
        <td class="nota coluna-tab-p"><span class="nota-neg">8</span></td>
        
        <td class="nota coluna-tab-p">
            <span>
            
            </span>
        </td>
        <td class="nota coluna-tab-p"><span class="nota-pos">12</span></td>
        <td class="nota coluna-tab-p"><span class="nota-neg">8</span></td>
        
        <td class="nota coluna-tab-p">
            <span>
            
            </span>
        </td>
        </tr>

        <!--Rodape da pauta-->
        <tr>
        <th colspan="3" style="padding-top: 10px;">
            O COORDENADOR DA AREA DE FORMAÇÃO

        </th>
        <th colspan="15" style="text-align: right; padding-right: 5px; padding-top: 10px;">O SUBDIRETOR PEDAGOGICO</th>
        </tr>

        <tr>
        <th colspan="18"></th>

        </tr>

        <tr>
        <th colspan="18"></th>

        </tr>

        <tr>
        <th colspan="18"></th>
        </tr>

        <tr>
        <th colspan="3">Sivi Lando</th>
        <th colspan="15" style="text-align: right; padding-right: 15px; padding-top: 10px;">DOMINGOS AGOSTINHO</th>
        </tr>

        <tr>
        <th colspan="3"></th>
        <th colspan="15"></th>

        </tr>

        <tr>
        <th colspan="18"></th>

        </tr>

        <tr>
        <th colspan="18"></th>
        </tr>


        <tr>
        <th colspan="3" style="border-bottom: 2px solid #000;">              
            <strong>O(A) DIRETOR(A) DE TURMA </strong>
        </th>
        <th colspan="15"></th>     
        </tr>



        <!--Fim Rodape da pauta-->
    </tbody>
    </table>
    <!--Fim da pauta-->
    <br><br>
</main>
@endsection