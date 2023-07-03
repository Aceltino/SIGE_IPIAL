@extends('layouts.main')

@section('title', 'Recurso-Aluno')
@section('conteudo')
<main id="main" class="main">

  <div class="pagetitle">
    <div class="row">
          <div class="col">
              <h1>Recurso</h1>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro10">
              <option  disabled>Curso</option>
                <option value="">informática</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro11">
              <option disabled >Disciplina</option>
                    <option value="">Língua Portuguesa</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro12">
              <option disabled >Turma</option>  
                    <option value="">I10AM</option>
            </select>
          </div>
    </div>

    <div class="procurar">
    <div class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="" class="campo-pesq">
        <button  title="Search"><i class="bi bi-search"></i></button>
    </div>
    </div>
  </div>
  <div class="bortabela">
    <div class="pagetitle">
        <div class="row">
            <div class="col" style="padding-left: 25px; padding-top: 15px;">
                <h4 style="text-align: center">Data: {{date('d/m/Y')}}</h3>
            </div>
        </div>
    </div>
    <!-- /  Inicio da tabela  -->
    <table id="avaliaca" class="table table-striped" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Nº do Processo</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">Nota</th>
          <th scope="col">Ano</th>
          <th scope="col">Recurso</th>
          <th scope="col">Histórico</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>

        <tr style="text-align: center;">
            <th scope="row"></th>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Realizar Operação</a>
            </td>
            <td style="text-align: center">
            <a href="/recurso_histo" class="btn linkeditar">Recursos</a>
            </td>
            <td hidden></td>
            <td hidden></td>
            <td hidden></td>
        </tr>
                <!-- Início da Modal -->

          <!-- Fím da modal -->

        </tbody>
    </table>
    <!-- Cola aqui o código -->
    
   
    <form method="POST" action="">
        @csrf
      <div class="modal" id="modal_assiduidade" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog modal-xl">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Recurso-Aluno</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <div class="row">
                <div class="col-lg-10">
                    <div class="nomenumeroalunoinfo">
                        <h5 style="margin-left: 3px;"> <b>Nome:</b></h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="nofimnomenumeroaluno">
                        <h5 class="nomenumeroalunoinfo"> <b>Nº:</b></h5>
                    </div>
                </div>
              </div>
            <div class="bortabelasemscroll">
              <!-- /  Inicio da tabela  -->
              <table class="table table-striped" style="margin-top: 20px; width: 100%;" >
                <thead style="text-align: center">
                  <tr>
                    <th scope="col">Disciplina</th>
                    <th scope="col">Recurso Nota</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td></td>
                    <td><input class="form-control innota" type="text" name="npp" maxlength="5" id="notaimput"></td>
                
                  </tr>
                </tbody>
              </table>

            </div>
          </div>
          <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
              <button type="button" class="btn botaovermelhonota" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" name="aluno_id" class="btn botaoazulnota" value="" >Realizar Recurso</button>
          </div>
          </div>
      </div>
      </div>
    </form>
    </div>

  <!-- Termina a tabela -->
</main>
@endsection
