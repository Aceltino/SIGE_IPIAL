@extends('layouts.doc')

@section('title', 'Mini-Pautas')

@section('conteudo')
<main id="main" class="main">
    <div class="container no-print">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
        <a href="/mini-pauta"><i class="voltar bi bi-arrow-left-circle-fill"></i></a>

        <h1>Mini pauta</h1>      
        </div>
    
        <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
            <button class="btn-imprimir" id="gerar-pdf" onclick="window.print()">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
        </div>
    </div>
    </div>
    <!--Inicio da mini-puta -->
    <table class="t-mini-pauta">
    <thead>
        <tr>
        <th scope="col" colspan="28">
        <img src={{URL::asset("img/insignia.jpg")}} alt="Insígnia" class="insignia">
        </th>
        </tr>
        <tr>
        <th colspan="28">
            <span class="tx-cab-mp">REPÚBLICA DE ANGOLA</span>
        </th>
        </tr>
        
        <tr>
        <th colspan="28">
            <span class="tx-cab-mp">GOVERNO PROVINCIAL DE LUANDA</span>
        </th>
        </tr>
        
        <tr>
        <th colspan="28">
            <span class="tx-cab-mp">INSTITUTO POLITÉCNICO INDUSTRIAL "ALDA LARA"</span>
        </th>
        </tr>
        
        <tr>
        <th colspan="28" style="padding-bottom: 10px;">
            <span class="tx-cab-mp">MINI-PAUTA</span>
        </th>
        </tr>
    </thead>

    <tbody class="corpo-tab-mp">
        <tr class="linha-tab-mp">
        <th class="coluna-tab-mp" colspan="2">
            <span>Disciplina</span>
        </th>
        <th class="coluna-tab-mp">
            <span>MAT</span>
        </th>
        <th class="coluna-tab-mp" colspan="12">
            <span>Prof.(a): Osvaldo de Carvalho da Silva Neto</span>
        </th>
        <th class="coluna-tab-mp" colspan="6">
            <span>Turno: Tarde</span>
        </th>
        <th class="coluna-tab-mp" colspan="7">
            Ano Lectivo: <span class="largura-18">2022/2023</span>
        </th>
        </tr>

        <tr class="linha-tab-mp">
        <th class="coluna-tab-mp" colspan="3" rowspan="2">
            <span class="largura-24">Turma: I12AT</span>
        </th>
        <th class="coluna-tab-mp" colspan="25">
            <span class="nota-pos" style="font-size: 12pt;">CLASSIFICAÇÃO</span>
        </th>
        </tr>

        <tr class="linha-tab-mp">
        <th class="coluna-tab-mp" colspan="1" rowspan="3">
            <span class="t-vert-mp">Idade</span>
        </th>
        <th class="coluna-tab-mp" colspan="1" rowspan="3">
            <span class="t-vert-mp">Gênero</span>
        </th>
        <th class="coluna-tab-mp" colspan="6">
            <span>1º Trimestre</span>
        </th>
        <th class="coluna-tab-mp" colspan="6">
            <span>2º Trimestre</span>
        </th>
        <th class="coluna-tab-mp" colspan="6">
            <span>3º Trimestre</span>
        </th>
        <th class="coluna-tab-mp" rowspan="3" style="background-color: yellow;">
            <span class="t-obliqua">EXAME</span>
        </th>
        <th class="coluna-tab-mp" colspan="3">
            <span>Resultados finais</span>
        </th>
        <th class="coluna-tab-mp" colspan="1" rowspan="3">
            <span>OBS</span>
        </th>
        </tr>

        <tr class="linha-tab-mp">
        <th class="coluna-tab-mp" rowspan="2">Nº</th>
        <th class="sm-cor" rowspan="2"></th>
        <th class="coluna-tab-mp" colspan="1" rowspan="2">Nome do(a) aluno(a)</th>
        <th class="coluna-tab-mp" rowspan="2">
            M <br>
            A <br>
            C
        </th>
        <th class="coluna-tab-mp" rowspan="2">
            N <br>
            P <br>
            P
        </th>
        <th class="coluna-tab-mp" rowspan="2">
            N <br>
            P <br>
            T
        </th>
        <th class="bg-laranja coluna-tab-mp" rowspan="2">  
            M <br>
            T <br>
            1
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-10">FALTAS</span>
        </th>
        <th class="coluna-tab-mp" rowspan="2">
            M <br>
            A <br>
            C
        </th>
        <th class="coluna-tab-mp" rowspan="2">
            N <br>
            P <br>
            P
        </th>
        <th class="coluna-tab-mp" rowspan="2">
            N <br>
            P <br>
            T
        </th>
        <th class="bg-laranja coluna-tab-mp" rowspan="2">
            M <br>
            T <br>
            2
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-10">FALTAS</span>
        </th>
        <th class="coluna-tab-mp" rowspan="2">
            M <br>
            A <br>
            C
        </th>
        <th class="coluna-tab-mp" rowspan="2">
            N <br>
            P <br>
            P
        </th>
        <th class="coluna-tab-mp" rowspan="2">
            N <br>
            P <br>
            T
        </th>
        <th class="bg-laranja coluna-tab-mp" rowspan="2">
            M <br>
            T <br>
            3
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-10">FALTAS</span>
        </th>
        <th class="bg-laranja coluna-tab-mp" rowspan="2">
            M <br> 
            F <br>
            D
        </th>
        <th class="coluna-tab-mp" rowspan="2" style="background-color: #03b863;">
            M <br> 
            F
        </th>
        <th class="coluna-tab-mp" rowspan="2" style="background-color: red;">
            <span class="t-obliqua largura-8">E.RECURSO</span>
        </th>
        </tr>

        <tr class="linha-tab-mp">
        <th class="coluna-tab-mp">
            <span class="largura-8">
            F <br>
            N <br>
            J
            </span>
        </th>
        <th class="coluna-tab-mp">
            <span class="largura-10">
            F <br>
            J
            </span>
        </th>
        <th class="coluna-tab-mp">
            <span class="largura-8">
            F <br>
            N <br>
            J
            </span>
        </th>
        <th class="coluna-tab-mp">
            <span class="largura-10">
            F <br>
            J
            </span>
        </th>
        <th class="coluna-tab-mp">
            <span class="largura-8">
            F <br>
            N <br>
            J
            </span>
        </th>
        <th class="coluna-tab-mp">
            <span class="t-obliqua largura-8">TOTAL</span>
        </th>            
        </tr>

        <tr class="linha-tab-mp">
        <td class="coluna-tab-mp">1</td>
        <td class="sm-cor"></td>
        <td class="coluna-tab-mp" style="font-size: 11pt;">Ana Maria Lopes Bliss</td>
        <td class="coluna-tab-mp">
            <span class="largura-10">17</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="largura-10">F</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">16</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">19</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">8</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">13</span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>

        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">11</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">10</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">17</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">6</span>
        </td>

        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">14</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">12</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">14</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">18</span>
        </td>

        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>

        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">16</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">11</span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="nota-pos decide-mp">Transita</span>
        </td>            
        </tr>

        <tr class="linha-tab-mp">
        <td class="coluna-tab-mp">2</td>
        <td class="sm-cor"></td>
        <td class="coluna-tab-mp" style="font-size: 11pt;">Beto Domigos Afonso</td>
        <td class="coluna-tab-mp">
            <span class="largura-10">17</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="largura-10">M</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">6</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">9</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">8</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">4</span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>

        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">11</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">10</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">17</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">6</span>
        </td>

        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">14</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-pos largura-10">12</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">4</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">6</span>
        </td>

        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>

        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">8</span>
        </td>
        <td class="coluna-tab-mp">
            <span class="nota-neg largura-10">5</span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="largura-10">
            
            </span>
        </td>
        
        <td class="coluna-tab-mp">
            <span class="nota-neg decide-mp">N/Transita</span>
        </td>            
        </tr>

    </tbody>
    </table>
    <!--Fim da mini-pauta-->
    <table class="t-mini-pauta">
    <tbody>
        <tr class="linha-tab-mp">
        <th class="coluna-tab-mp" colspan="2" rowspan="2">Matriculados</th>
        <th class="col-trim-rodape coluna-tab-mp" colspan="8">1º Trimestre</th>
        <th class="col-trim-rodape coluna-tab-mp" colspan="8">2º Trimestre</th>
        <th class="col-trim-rodape coluna-tab-mp" colspan="8">3º Trimestre</th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="txt-assinatura" style="font-size: 14pt;">Assinatura do(a) Prof.</span>
        </th>            
        </tr>

        <tr class="linha-tab-mp">
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">Desistente</span>
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">Avaliados</span>
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">C/Aproveit.</span>
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">S/Aproveit.</span>
        </th>

        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">Desistente</span>
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">Avaliados</span>
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">C/Aproveit.</span>
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">S/Aproveit.</span>
        </th>

        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">Desistente</span>
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">Avaliados</span>
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">C/Aproveit.</span>
        </th>
        <th class="coluna-tab-mp" colspan="2">
            <span class="largura-9">S/Aproveit.</span>
        </th>




        <th class="coluna-tab-mp" colspan="2" rowspan="2" style="border-bottom: 2px solid #000;">
            
        </th>

        </tr>

        <tr>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        <th class="coluna-tab-mp">MF</th>
        <th class="coluna-tab-mp">F</th>
        </tr>


        <tr class="linha-tab-mp">
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp">0</td>
        <td class="coluna-tab-mp" colspan="2" rowspan="2">
            <span class="nome-prof" style="font-size: 12pt;">Osvaldo de Carvalho da Silva Neto</span>
        </td>
        </tr>

        <tr class="linha-tab-mp">
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>

        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>

        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>
        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>  

        <th class="c-vazia coluna-tab-mp" colspan="2">
            
        </th>

        </tr>

        
    </tbody>
    </table>       
    <br><br>
</main>
@endsection