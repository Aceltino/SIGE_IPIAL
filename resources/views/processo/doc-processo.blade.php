@extends('layouts.main')

@section('title', 'Processo de aluno')

@section('conteudo')
<main id="main" class="main">
    
    <div class="container no-print">
      <div class="row" style="margin-top: -30px;">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
          <h1>Processo do aluno</h1>      
        </div>
      
        <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
            <button class="btn-imprimir" id="gerar-pdf" onclick="window.print()">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
        </div>
      </div>
    </div><br>

    <section class="section perfil">
      <div class="processo-al row">
        <div class="col-xl-2">

            <div class="card-bodys">

              <img src={{URL::asset("img/foto-perfil.jpg")}} alt="perfil" class="foto-processo">
            </div>
            <hr id="borda-nome">
        </div>

        <div class="col-xl-10">
          <div>
            <h3>Dados pessoais:</h3>
            <div class="area-dado-pessoal">
              <h4>Nome: </h4> <h5>Mario Developer do Ipial</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Filho de: </h4> <h5>Mario Developer do Ipial</h5><h4>E de: </h4> <h5>Mario Developer do Ipial</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Nascido aos: </h4> <h5>02</h5> <h4>de</h4> <h5>Marco</h5> <h4>de</h4> <h5>2006</h5> <h4>na Província de:</h4><h5>Luanda</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Munícipio de:</h4><h5>Viana</h5><h4>Portador do BI nº:</h4><h5>000009090LK098</h5>
              <h4>Emitido em:</h4><h5>03</h5><h4>de</h4><h5>Junho</h5><h4>de</h4><h5>2020</h5>
            </div>
          </div>
          <div class="area-dados-academicos">
            <h3>Dados académicos:</h3>
            <div class="area-dado-pessoal">
              <h4>Matriculado no curso de:</h4><h5>Técnico de Informática</h5><h4>Na area de formacao:</h4><h5>Informática</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>No ano lectivo:</h4><h5>2020-2021</h5><h4>a</h4><h5>10a</h5><h4>Classe em regime</h4><h5>Diurno</h5>
            </div>
            <div class="area-dado-pessoal">
              <h4>Na turma:</h4><h5>I10AM</h5><h4>com o Número</h4><h5>14</h5><h4>Processo nº</h4><h5>82728282</h5><h4>Telefone:</h4><h5>928382232</h5>
            </div>
            
            <div class="area-turmas">
              <div class="area-dado-pessoal">
                <h4>Dados da 10a Class, Turma:</h4><h5>I10AM</h5><h4>Nº</h4><h5>12</h5><h4>ano lectivo</h4><h5>2020-2021</h5>
              </div>
              <div class="area-dado-pessoal">
                <h4>Dados da 11a Class, Turma:</h4><h5>I11AM</h5><h4>Nº</h4><h5>16</h5><h4>ano lectivo</h4><h5>2021-2022</h5>
              </div>
              <div class="area-dado-pessoal">
                <h4>Dados da 12a Class, Turma:</h4><h5>I12BT</h5><h4>Nº</h4><h5>10</h5><h4>ano lectivo</h4><h5>2022-2023</h5>
              </div>
              <div class="area-dado-pessoal">
                <h4>Dados da 13a Class, Turma:</h4><h5>I13BT</h5><h4>Nº</h4><h5>10</h5><h4>ano lectivo</h4><h5>2023-2024</h5>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>
  
</main>
@endsection