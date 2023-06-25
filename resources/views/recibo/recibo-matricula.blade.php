@extends('layouts.doc')

@section('title', 'Recibo de Matrícula')

@section('conteudo')
<main id="main" class="main" style="margin-left: 0;">
    <div class="container no-print" style="margin-top: -20px;">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
        <a href="#"><i class="voltar bi bi-arrow-left-circle-fill"></i></a>
        <h1>Recibo de Matricula</h1>      
        </div>
    
        <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
            <button class="btn-imprimir" id="gerar-pdf" onclick="window.print()">Gerar Recibo <i class="bi bi-file-earmark-pdf"></i></button>
        </div>
    </div>
    </div>

    <!--Inicio do recibo -->
    <table class="recibo-insc" id="recibo-insc" style="text-align: left; width: 65%; margin: auto; margin-top: 40px; color: #000; font-family: Times new Roman; font-size: 12pt;">
    <thead class="cabecalho-recibo-insc" style="text-align: center;">
        <tr>
        <th rowspan="2" style="width: 100px;">
            <img src="assets/img/logo.png" width="100px" height="50px">
        </th>
        <th style="padding: 15px;">
            
        </th>
        </tr>
        <tr>
        <td><span class="tx-cab-mp" style="font-size: 22px;">INSTITUTO POLITÉCNICO INDUSTRIAL Nº 1.225 - ALDA LARA</span></td>
        </tr>
        <tr >
        <th colspan="2" style="padding: 0 30px 0 30px;">
            <div style="border: 3px solid #000;">
            <span class="tx-cab-mp">RECIBO DA FICHA DE MATRÍCULA - ANO LECTIVO 2022-2023</span>              
            </div>
        </th>
        </tr>

    </thead>

    <tbody class="corpo-recibo-insc">
        <tr>
        <th colspan="2" style="padding: 10px 75px 15px 30px; /*padding-bottom: 15px; padding-top: 10px;*/">
            <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
            <span>Nome</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 100%;"></div>
            </div>
        </th>
        </tr>
        <tr>
        <th colspan="2" style="padding-bottom: 15px;">
            <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
            <span>Data de nascimento</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 40px;"></div>/
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 40px;"></div>/
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
            <span>Idade (até Dezembro de 2022):</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
            <span>anos, Sexo</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
            </div>
        </th>
        </tr>

        <tr style="border-top: 3px solid #000; border-left: 3px solid #000; border-right: 3px solid #000;">
        <th colspan="2" style="padding-bottom: 15px; padding-left: 10px;">
            <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
            <span>Nome da escola de providência:</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 540px;"></div>
            </div>
        </th>
        </tr>

        <tr style="border-left: 3px solid #000; border-right: 3px solid #000; border-bottom: 3px solid #000;">
        <th colspan="2" style="padding-bottom: 15px; padding-left: 10px;">
            <div style="display: flex; justify-content: center; align-items: center; gap: 5px;">
            <span>Turno:</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
            <span>, Turma:</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 60px;"></div>
            <span>, Nº</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 40px;"></div>
            <span>, Processo nº:</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 90px;"></div>
            <span>, Ano Lectivo</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 100px;"></div>
            </div>
        </th>
        </tr>

        <tr>
        <th colspan="2" style="padding-bottom: 15px; padding-left: 40px;">
            <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
            <span>Luanda, aos</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
            <span>de</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 200px;"></div>
            <span>de 20</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 90px;"></div>
            </div>
        </th>
        </tr>

        <tr>
        <th colspan="2" style="padding-bottom: 15px;">
            <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
            <span>O Funcionário:</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 490px;"></div>
            <span>Data</span>
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 40px;"></div>/
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 40px;"></div>/
            <div style="border-bottom: 1px solid #000; margin-top: 9px; width: 70px;"></div>
            </div>
        </th>
        </tr>

        <tr>
        <td colspan="2" style="text-align: left;">
            <strong style="font-size: 22px; font-family: Beesknees ITC;">Observação: </strong>
            <ul style="font-size: 19px;">
            <li>É obrigatório a apresentação do recibo de <span style="font-weight: bolder;">MATRÍCULA</span> em caso de qualquer reclamação</li>
            </ul>
            
        </td>
        </tr>

    </tbody>
    </table>
    <!--Fim da pauta-->
    <br><br>
</main>
@endsection