@extends('layouts.main')

@section('title', 'Assiduidade De Aluno')

@section('conteudo')
<main id="main" class="main">
  <div class="pagetitle">
    <div class="row">
          <div class="col">
              <h1>Assiduidade De Aluno</h1>      
          </div>
      
          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro8">
              <option  disabled>Curso</option>
              <option value="Informática">Informática</option>
              <option value="Técnico de Energia e Instalações Electricas">Técnico de Energia e Instalações Electricas</option>
              <option value="construção civil">construção civil</option>
              <option value="Electronica e Telecomunicação">Electronica e Telecomunicação</option>
            </select>
          </div> 

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro9">
              <option disabled >Disciplina</option>
              <option value="Desenho técnico">Desenho técnico</option>
              <option value="Técnicas de Linguagem de Programação">Técnicas de Linguagem de Programação</option>
              <option value="Língua Portuguêsa">Língua Portuguêsa</option>
            </select>
          </div> 

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro10">
              <option disabled >Turma</option>
              <option value="I10AM" selected>I10AM</option>
              <option value="I11AM">I11AM</option>
              <option value="I12AT">I12AT</option>
              <option value="I12BT">I12BT</option>
            </select>
          </div> 
    </div>

  <div class="procurar">
  <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="" class="campo-pesq">
      <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
  </form>
  </div>

  <div class="bortabela">
    <div class="pagetitle">
        <div class="row">
            <div class="col datatabelapeddin">
                <h4 style="text-align: center">Data:21-03-2023</h3>
            </div>
        </div>
    </div>
    <!-- /  Inicio da tabela  -->
    <table id="tabela" class="table table-striped" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Nº</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">F.Normais</th>
          <th scope="col">F.Vermelhas</th>
          <th scope="col">f.Outro</th>
          <th scope="col">Marcar Falta</th>
          <th scope="col">justificar</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>9</td>
          <td>6</td>
          <td>15</td>
          <td>
            <a class="btn botaoazul" data-bs-toggle="modal" data-bs-target="#modal_assiduidade">Normal</a>
            <a class="btn botaovermelho" data-bs-toggle="modal" data-bs-target="#modal_assiduidade">Vermelha</a>
            <a class="btn botaopreto" data-bs-toggle="modal" data-bs-target="#modal_assiduidade">Outra</a>
          </td>
          <td style="text-align: center">
            <a href="editar_assiduidade" class="btn linkeditar">Justificar</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Desenho técnico</td>
          <td hidden>I12BT</td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Márcio Celestino Ma...</td>
          <td>9</td>
          <td>6</td>
          <td>15</td>
          <td>
            <a class="btn botaoazul" data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Normal</a>
            <a class="btn botaovermelho" data-bs-toggle="modal" data-bs-target="#modal_assiduidade">Vermelha</a>
            <a class="btn botaopreto" data-bs-toggle="modal" data-bs-target="#modal_assiduidade">Outra</a>
          </td>
          <td style="text-align: center">
            <a href="editar_assiduidade" class="btn linkeditar">Justificar</a>
          </td>
          <td hidden>construção civil</td>
          <td hidden>Língua Portuguêsa</td>
          <td hidden>I10AM</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Termina a tabela -->

    <!-- Início da Modal -->
    <form method="POST" action="">
      <div class="modal" id="modal_assiduidade" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Marcar Falta</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="alert alert-warning" role="alert">
                      <h6>Atenção: Estás a Marcar uma falta normal ao Aluno (a) !! </h6><h6> Estás prestes a inserir uma falta Normal no dia 21/06/2021 no 1º Tempo do 1º Trimestre ao Aluno (a) Fulano Fulano</h6>
                      <h5>Deseja Realmente Continuar?</h5>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100"  rows="5" name="conteudo"  id="area" placeholder="Descreve ou não a causa da Marcação da Falta"></textarea>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" class="btn btn-primary">Confirmar</button>
          </div>
          </div>
      </div>
      </div>
  </form>
<!-- Fím da modal -->
    
</main>
@endsection