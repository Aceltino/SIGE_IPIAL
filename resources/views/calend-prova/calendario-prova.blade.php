@extends('layouts.main')

@section('title', 'Calendário de Prova')

@section('conteudo')
<main id="main" class="main">
    <div class="cabecalho-calend">    
      <div class="row">
        <div class="col-lg-6">
          <span class="titl-cab-calend">Area de formacao: </span><span class="normal-cab-calend">Informatica</span>
        </div>

        <div class="col-lg-6" style="text-align: right;">
          <span class="titl-cab-calend">Curso: </span><span class="normal-cab-calend">Tecnico de Informatica</span>
        </div>
      </div> 

      <div class="row">
        <div class="col-lg-6">
          <span class="titl-cab-calend">Calendário das provas: </span><span class="normal-cab-calend">IIº Trimestre</span>
        </div>

        <div class="col-lg-6" style="text-align: right;">
          <span class="titl-cab-calend">10ª Classe 2022-2023</span>          
        </div>
      </div>
    </div>

    <table class="tabela-calendario table table-custom table-escuro">
      <thead class="cabecalho-tab-calend">
        <tr class="linha-tab-calend">
          <th scope="col" class="coluna-tab-calend coluna-centro">Data</th>
          <th scope="col" class="coluna-tab-calend coluna-centro">Escala</th>
          <th scope="col" class="coluna-tab-calend coluna-centro">Disciplina</th>
          <th scope="col" class="coluna-tab-calend coluna-centro">Turma/Regime diurno e Pós.Lab</th>
        </tr>
      
      </thead>
      <tbody class="corpo-tab-calend">
        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro" rowspan="2">28/03/2023 <br>(Segunda-Feira)</td>
          <td class="coluna-tab-calend coluna-centro">1ª Prova</td>
          <td class="coluna-tab-calend">Português</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro">2ª Prova</td>
          <td class="coluna-tab-calend">Inglês</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro" rowspan="2">29/03/2023 <br>(Terça-Feira)</td>
          <td class="coluna-tab-calend coluna-centro">1ª Prova</td>
          <td class="coluna-tab-calend">TIC</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro">2ª Prova</td>
          <td class="coluna-tab-calend">Empreendedorismo</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro" rowspan="2">30/03/2023 <br>(Quarta-Feira)</td>
          <td class="coluna-tab-calend coluna-centro">1ª Prova</td>
          <td class="coluna-tab-calend">FAI</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro">2ª Prova</td>
          <td class="coluna-tab-calend">Electrotecnia</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro" rowspan="2">31/03/2023 <br>(Quinta-Feira)</td>
          <td class="coluna-tab-calend coluna-centro">1ª Prova</td>
          <td class="coluna-tab-calend">SEAC</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro">2ª Prova</td>
          <td class="coluna-tab-calend">Química</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro" rowspan="2">01/04/2023 <br>(Sexta-Feira)</td>
          <td class="coluna-tab-calend coluna-centro">1ª Prova</td>
          <td class="coluna-tab-calend">Fisica</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro">2ª Prova</td>
          <td class="coluna-tab-calend">TLP</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>

        <tr class="linha-tab-calend">
          <td class="coluna-tab-calend coluna-centro" rowspan="2">05/04/2023 <br>(Terça-Feira)</td>
          <td class="coluna-tab-calend coluna-centro">1ª Prova</td>
          <td class="coluna-tab-calend">Matemática</td> 
          <td class="coluna-tab-calend centro-turma">Todas</td>         
        </tr>


      </tbody>
    </table>

    <div class="area-hora-prova">
      <table class="tabela-hora-prova table table-custom table-escuro">
        <thead class="cabecalho-tab-calend">
          <tr class="linha-tab-hr">
            <th scope="col" class="coluna-tab-hr coluna-centro">Data</th>
            <th scope="col" class="coluna-tab-hr coluna-centro">Manhã</th>
            <th scope="col" class="coluna-tab-hr coluna-centro">Tarde</th>
            <th scope="col" class="coluna-tab-hr coluna-centro">Noite</th>
          </tr>
        
        </thead>
        <tbody class="corpo-tab-calend">
          <tr class="linha-tab-hr">
            <td class="coluna-tab-hr coluna-centro" rowspan="2">28-03 A 05-04</td>
            <td class="coluna-tab-hr coluna-centro">1ª Prova <br> 7h30-9h00</td>
            <td class="coluna-tab-hr">1ª Prova <br> 12h30-14h00</td> 
            <td class="coluna-tab-hr">1ª Prova <br> 17h30-19h00</td>         
          </tr>

          <tr class="linha-tab-hr" style="border-top: 1px solid #000;">
            <td class="coluna-tab-hr coluna-centro">2ª Prova <br> 9h10-10h40</td>
            <td class="coluna-tab-hr">2ª Prova <br> 14h10-15h40</td> 
            <td class="coluna-tab-hr">2ª Prova <br> 19h10-20h40</td>         
          </tr>


        </tbody>
      </table>
    </div>

</main>
@endsection







