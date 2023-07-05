@extends('layouts.doc')

@section('title', 'Recibo de Inscrição')

@section('conteudo')
<main id="main" class="main" style="margin-left: 0;">
    <div class="container no-print" style="margin-top: -20px;">
        <div class="row">
            <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                <a href="{{route('inscricao-view')}}"><i class="voltar bi bi-arrow-left-circle-fill"></i></a>
                <h1>Recibo de Inscrição</h1>      
            </div>
        
            <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
                <button class="btn-imprimir" id="gerar-rec" onclick="window.print()">Gerar Recibo <i class="bi bi-file-earmark-pdf"></i></button>
            </div>
        </div>
    </div>

    <!--Inicio do recibo inscricao -->
    <div id="recibo-pdf">
        <table class="recibo-insc" id="recibo-insc"  style="text-align: left; width: 65%; margin: auto; margin-top: 40px; color: #000; font-size: 12pt;">
            <thead class="cabecalho-recibo-insc" style="text-align: center; font-size: 17px;">
                <tr>
                <th rowspan="3" class="logo-reciboBLI" style="width: 100px;">
                    <span id="logo-reciboBLISS"></span>
                    <img src={{URL::asset("img/logo.png")}} width="100px" height="50px">
                    Cod. 2020297878
                </th>
                <th>
                    <span class="tx-cab-mp">INSTITUTO POLITÉCNICO INDUSTRIAL Nº 1.225 - ALDA LARA</span>
                </th>
                </tr>
                
                <tr>
                <th>
                    <span class="tx-cab-mp">RECIBO DA FICHA DE CANDIDATURA DOS CURSOS DA FORMAÇÃO MÉDIA TÉCNICA</span>
                </th>
                </tr>
                
                <tr>
                <th>
                    <span class="tx-cab-mp">Ano lectivo 2022-2023</span>
                </th>
                </tr>
            </thead>
            <tbody class="corpo-recibo-insc" style="font-size: 13px; text-transform: uppercase;">
                <tr>
                <th colspan="2" style="padding-bottom: 20px;">
                    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
                    <span>Nome</span>
                    
                    <div style="border-bottom: 1px solid #000; width: 100%; text-align: center;"><span class="texto-azul">Sungo Afonso</span></div>
                    </div>
                </th>
                </tr>
                <tr>
                <th colspan="2" style="padding-bottom: 20px;">
                    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
                    <span>Data de nascimento</span>
                    <div style="border-bottom: 1px solid #000; width: 40px; text-align: center;"><span class="texto-azul">02</span></div>/
                    <div style="border-bottom: 1px solid #000; width: 40px; text-align: center;"><span class="texto-azul">10</span></div>/
                    <div style="border-bottom: 1px solid #000; width: 70px; text-align: center;"><span class="texto-azul">2022</span></div>
                    <span>Idade (até Dezembro de 2022):</span>
                    <div style="border-bottom: 1px solid #000; width: 70px; text-align: center;"><span class="texto-azul">19</span></div>
                    <span>anos, Sexo</span>
                    <div style="border-bottom: 1px solid #000; width: 70px; text-align: center;"><span class="texto-azul">Masculino</span></div>
                    </div>
                </th>
                </tr>

                <tr>
                <th colspan="2" style="padding-bottom: 20px;">
                    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
                    <span>Funcionario</span>
                    <div style="border-bottom: 1px solid #000; width: 355px; text-align: center;"><span class="texto-azul">Mario Andre Agostinho Mauro</span></div>
                    <span>Data</span>
                    <div style="border-bottom: 1px solid #000; width: 40px; text-align: center;"><span class="texto-azul">20</span></div>/
                    <div style="border-bottom: 1px solid #000; width: 40px; text-align: center;"><span class="texto-azul">10</span></div>/
                    <div style="border-bottom: 1px solid #000; width: 70px; text-align: center;"><span class="texto-azul">2022</span></div>
                    <span>DOC.IPIAL/2022</span>
                    </div>
                </th>
                </tr>
                <tr>
                <th colspan="2" style="padding-bottom: 20px;">
                    <div style="display: flex; justify-content: flex-start; align-items: center; gap: 5px;">
                    <span>1ª Opção</span>
                    <div style="border-bottom: 1px solid #000; width: 160px; text-align: center;"><span class="texto-azul">TI</span></div>
                    <span>2ª Opção</span>
                    <div style="border-bottom: 1px solid #000; width: 160px; text-align: center;"><span class="texto-azul">DL</span></div>
                    <span>3ª Opção</span>
                    <div style="border-bottom: 1px solid #000; width: 160px; text-align: center;"><span class="texto-azul">LS</span></div>
                    <span>4ª Opção</span><span class="texto-azul">TS</span>
                    </div>
                </th>
                </tr>
                <tr>
                <th colspan="2" style="text-align: center; font-size: 16px;">
                    <strong>OBS: É obrigatório a apresentação do recibo de INCRIÇÃO em caso de qualquer reclamação</strong>
                </th>
                </tr>

            </tbody>
        </table>

    </div>
    <!--Fim recibo de inscricao-->
    <br><br>
</main>
@endsection