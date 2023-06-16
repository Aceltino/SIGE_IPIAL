@extends('layouts.main')

@section('title', 'Avaliar Aluno')

@section('conteudo')
<main id="main" class="main">
  <div class="pagetitle">
    <div class="row">
          <div class="col">
              <h1>Avaliação de Aluno</h1>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro10">
              <option  disabled>Curso</option>
              <option value="Informática">Informática</option>
              <option value="Técnico de Energia e Instalações Electricas">Técnico de Energia e Instalações Electricas</option>
              <option value="construção civil">construção civil</option>
              <option value="Electronica e Telecomunicação">Electronica e Telecomunicação</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro11">
              <option disabled >Disciplina</option>
              <option value="Desenho técnico">Desenho técnico</option>
              <option value="Técnicas de Linguagem de Programação">Técnicas de Linguagem de Programação</option>
              <option value="Língua Portuguêsa">Língua Portuguêsa</option>
            </select>
          </div>

          <div class="col-lg-2">
            <select class="btn-sel form-select" id="filtro12">
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
    <table id="tabela" class="table table-striped" style="margin-top: 20px; width: 100%;" >
      <thead style="text-align: center">
        <tr>
          <th scope="col">Nº</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">MAC</th>
          <th scope="col">NPP</th>
          <th scope="col">NPT</th>
          <th scope="col">Exame</th>
          <th scope="col">E.Recurso</th>
          <th scope="col">Avaliar</th>
          <th scope="col">Ediatr avaliação</th>
          <th scope="col" hidden>curso</th>
          <th scope="col" hidden>Disciplina</th>
          <th scope="col" hidden>Turma</th>
        </tr>
      </thead>
      <tbody>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>12</td>
          <td>10</td>
          <td>0</td>
          <td>0</td>
          <td>19</td>
          <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Avaliar aluno</a>
          </td>
          <td style="text-align: center">
            <a href="editar-avaliacao-aluno" class="btn linkeditar">Editar Avaliação</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Desenho técnico</td>
          <td hidden>I12BT</td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>12</td>
          <td>10</td>
          <td>0</td>
          <td>0</td>
          <td>19</td>
          <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Avaliar aluno</a>
          </td>
          <td style="text-align: center">
            <a href="editar-avaliacao-aluno" class="btn linkeditar">Editar Avaliação</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Técnicas de Linguagem de Programação</td>
          <td hidden>I12BT</td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>12</td>
          <td>10</td>
          <td>0</td>
          <td>0</td>
          <td>19</td>
          <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Avaliar aluno</a>
          </td>

          <td style="text-align: center">
            <a href="editar-avaliacao-aluno" class="btn linkeditar">Editar Avaliação</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Técnicas de Linguagem de Programação</td>
          <td hidden>I12BT</td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>12</td>
          <td>10</td>
          <td>0</td>
          <td>0</td>
          <td>19</td>
          <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Avaliar aluno</a>
          </td>
          <td style="text-align: center">
            <a href="editar-avaliacao-aluno" class="btn linkeditar">Editar Avaliação</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Técnicas de Linguagem de Programação</td>
          <td hidden>I12BT</td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>12</td>
          <td>10</td>
          <td>0</td>
          <td>0</td>
          <td>19</td>
          <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Avaliar aluno</a>
          </td>
          <td style="text-align: center">
            <a href="editar-avaliacao-aluno" class="btn linkeditar">Editar Avaliação</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Técnicas de Linguagem de Programação</td>
          <td hidden>I12BT</td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>12</td>
          <td>10</td>
          <td>0</td>
          <td>0</td>
          <td>19</td>
          <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Avaliar aluno</a>
          </td>
          <td style="text-align: center">
            <a href="editar-avaliacao-aluno" class="btn linkeditar">Editar Avaliação</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Técnicas de Linguagem de Programação</td>
          <td hidden>I12BT</td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>12</td>
          <td>10</td>
          <td>0</td>
          <td>0</td>
          <td>19</td>
          <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Avaliar aluno</a>
          </td>
          <td style="text-align: center">
            <a href="editar-avaliacao-aluno" class="btn linkeditar">Editar Avaliação</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Técnicas de Linguagem de Programação</td>
          <td hidden>I12BT</td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>12</td>
          <td>10</td>
          <td>0</td>
          <td>0</td>
          <td>19</td>
          <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Avaliar aluno</a>
          </td>
          <td style="text-align: center">
            <a href="editar-avaliacao-aluno" class="btn linkeditar">Editar Avaliação</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Lingua Portuguêsa</td>
          <td hidden>I12BT</td>
        </tr>
        <tr style="text-align: center;">
          <th scope="row">1</th>
          <td>Fulano fulano fu...</td>
          <td>12</td>
          <td>10</td>
          <td>0</td>
          <td>0</td>
          <td>19</td>
          <td style="text-align: center">
            <a class="btn botaoazul"data-bs-toggle="modal" data-bs-target="#modal_assiduidade" >Avaliar aluno</a>
          </td>
          <td style="text-align: center">
            <a href="editar-avaliacao-aluno" class="btn linkeditar">Editar Avaliação</a>
          </td>
          <td hidden>Informática</td>
          <td hidden>Língua Portuguêsa</td>
          <td hidden>I12BT</td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- Termina a tabela -->
    <!-- Início da Modal -->
    <form method="POST" action="">
      <div class="modal" id="modal_assiduidade" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog modal-xl">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Avaliar Aluno</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <div class="row">
                <div class="col-lg-10">
                    <div class="nomenumeroalunoinfo">
                        <h5 style="margin-left: 3px;"> <b>Nome:</b> Fualno Fulano Fulano Fulano</h5>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="nofimnomenumeroaluno">
                        <h5 class="nomenumeroalunoinfo"> <b>Nº:</b> 12</h5>
                    </div>
                </div>
              </div>
            <div class="bortabelasemscroll">
              <!-- /  Inicio da tabela  -->
              <table class="table table-striped" style="margin-top: 20px; width: 100%;" >
                <thead style="text-align: center">
                  <tr>
                    <th scope="col">AC</th>
                    <th scope="col">NPP</th>
                    <th scope="col">NPT</th>
                    <th scope="col">Exame</th>
                    <th scope="col">E.Recurso</th>
                    <th scope="col" hidden>curso</th>
                    <th scope="col" hidden>Disciplina</th>
                    <th scope="col" hidden>Turma</th>
                  </tr>
                </thead>
                <tbody>
                  <tr style="text-align: center;">
                    <td><input class=" form-control innota" type="text" name="" maxlength="2"></td>
                    <td><input class=" form-control innota " type="text" name="" maxlength="2"></td>
                    <td><input class=" form-control innota" type="text" name="" maxlength="2"></td>
                    <td><input class=" form-control innota" type="text" name="" maxlength="2"></td>
                    <td><input class=" form-control innota" type="text" name="" maxlength="2"></td>
                    <td hidden>Informática</td>
                    <td hidden>Desenho técnico</td>
                    <td hidden>I12BT</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
              <button type="button" class="btn botaovermelhonota" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" class="btn botaoazulnota" >Avaliar Aluno</button>
          </div>
          </div>
      </div>
      </div>
    </form>
<!-- Fím da modal -->

</main>
@endsection
