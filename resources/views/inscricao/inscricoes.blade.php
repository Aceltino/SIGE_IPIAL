@extends('layouts.main')

@section('title', 'Alunos inscritos')


@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h2>Inscritos</h2>
    </div>

    <div class="col-lg-2">
      <select class="btn-sel form-select" id="filtro5">
        <option selected disabled>Curso</option>
        <option value="Desenhador projetista">Desenhador projetista</option>
        <option value="Técnico de Energia e Instalações Electricas">Técnico de Energia e Instalações Electricas</option>
        <option value="Informática ">Informática</option>
        <option value="Electronica e Telecomunicação">Electrônica e Telecomunicação</option>
      </select>
    </div>

    <div class="col-lg-2">
      <select class="btn-sel form-select" id="filtro">
        <option selected disabled>Situação</option>
        <option>A/Admitido</option>
        <option>N/Admitido</option>
      </select>
    </div>
  </div>

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" type="text" placeholder="Digite o código da inscrição ou o número do B.I do Candidato" name="" class="campo-pesq">
      <button type="submit" title="Search"><i class="bi bi-search"></i></button>
    </form>
  </div>
  <div style="display: flex; justify-content: flex-end; align-items: center;">
    <div >
      <button class="btn-imprimir">Imprimir<i class="bi bi-file-earmark-pdf"></i></button>
    </div>
    <!-- / Adicionar a condição se a data atual for menor a da final de matricula aparece o botão -->
    <div >
      <a href="" class="bth btnadmitir">Ativar Admitido</a>
    </div>
    <!-- / Adicionar a condição se a data atual for menor a da final de matricula aparece o botão fin do coment+ario -->

  </div>
  <!-- /  Inicio da tabela de inscritos -->

  <table class="table table-striped display" style="margin-top: 10px;" id="Inscricoes-tab">
    <thead>
      <tr style=" text-align: center;">
        <th scope="col">Número do BI</th>
        <th scope="col">Nome do Candidato</th>
        <th scope="col">Média</th>
        <th scope="col">Idade</th>
        <th scope="col">Curso</th>
        <th scope="col">Situação</th>
        <th scope="col">Matricular</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
    </tbody>
  </table>
 
  <!-- Termina a tabela de inscritos -->


  <!--Inicio da modal ver inscrito-->
  <div class="modal fade" id="Modalinscricao" tabindex="-1" data-bs-backdrop="false">
    <div class="modal-dialog modal-xl">
      <div class="modal-content">

        <div class="provisorio">
          <div class="card-icon-modal rounded-circle d-flex align-items-center justify-content-flex-end">

            <i class="bi bi-x-lg" data-bs-toggle="modal" aria-label="Close" data-bs-dismiss="modal"></i>
          </div>
        </div>

        <div class="cabecalho-modal">
          <div class="row">
            <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
              <h1>Dados pessoais</h1>
            </div>

            <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
              <button class="btn-imprimir">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
            </div>

          </div>
        </div>

        <div class="corpo-modal">
          <form class="form-inativo">
            <div class="dados-pessoais">
              <div class="area-input form-group">
                <label>Nome Completo: </label><input type="text" id="modal-registro-nome" name="" readonly="true" disabled value="">
              </div>
              <div class="area-input form-group">
                <label>Nome do Pai: </label><input type="text" name="" id="modal-registro-pai" readonly="true" disabled value="">
              </div>
              <div class="area-input form-group">
                <label>Nome da Mãe: </label><input type="text" name="" id="modal-registro-mae" readonly="true" disabled value="">
              </div>

              <div class="container">
                <div class="row">
                  <div class="col area-input form-group">
                    <label>Data de nascimento: </label><input type="text" name="" id="modal-registro-datanasc" readonly="true" disabled value="">
                  </div>

                  <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Idade: </label><input type="text" name=""id="modal-registro-Idade"readonly="true" disabled value="">
                  </div>

                  <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Gênero: </label><input type="text" name="" id="modal-registro-Genero" readonly="true" disabled value="">  
                  </div>

                </div>
              </div>

              <div class="area-input form-group">
                <label>Número do BI: </label><input type="text" name="" id="modal-registro-NumeroBI" readonly="true" disabled value="0002505QL014">
              </div>

              <div class="container">
                <div class="row">
                  <div class="col area-input form-group">
                    <label>Telefone: </label><input type="text" name="" id="modal-registro-Numerotel" readonly="true" disabled value="">
                  </div>

                  <div class="col form-group" style="margin-left: 10px;">
                    <button class="btn-imprimir accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border: none; padding: 5px; width: 230px; height: 40px;">
                      Informações do Instituto: <i class="bi bi-arrow-down"></i>
                    </button>
                  </div>

                </div>
              </div>
            </div>

            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="dados-academicos">
                  <div class="row">
                    <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                      <h1>Dados académicos</h1>
                    </div>
                  </div>

                  <br>

                  <div class="area-input form-group">
                    <label>Escola de proveniência: </label><input type="text" id="modal-registro-escolaprov" name="" readonly="true" disabled value="">
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Turno: </label><input type="text" name="" id="modal-registro-Turno" readonly="true" disabled value="">
                      </div>

                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Turma: </label><input type="text" name="" id="modal-registro-Turma" readonly="true" disabled value="IJ12">
                      </div>

                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Nº aluno: </label>
                        <input type="text" name="" id="modal-registro-Numero_Aluno" readonly="true" disabled value="">
                      </div>

                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Número de processo: </label><input type="text" name="" id="modal-registro-Numero_Processo" readonly="true" disabled value="">
                      </div>

                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Ano lectivo: </label><input type="text" name="" id="modal-registro-Ultimo_AnoLectivo" readonly="true" disabled value="">
                      </div>

                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Língua Poertuguesa: </label><input type="text" name="" id="modal-registro-Lingua_Portuguesa" readonly="true" disabled value="">
                      </div>

                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>1º Curso: </label><input type="text" name="" id="modal-registro-Cursos" readonly="true" disabled value="">
                      </div>

                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Matemática: </label><input type="text" name="" id="modal-registro-Matematica" readonly="true" disabled value="">
                      </div>

                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>2º Curso: </label><input type="text" name="" readonly="true" disabled value="Desenhador projetista - D.P">
                      </div>

                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Química: </label><input type="text" name="" id="modal-registro-Quimica" readonly="true" disabled value="">
                      </div>

                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>3º Curso: </label><input type="text" name="" readonly="true" disabled value="Técnico de Energia e Instalações Electricas">
                      </div>

                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col area-input form-group">
                        <label>Física: </label><input type="text" name="" id="modal-registro-Fisica" readonly="true" disabled value="">
                      </div>

                      <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>4º Curso: </label><input type="text" name="" readonly="true" disabled value="Técnico de Informática">
                      </div>

                    </div>
                  </div>

                  <div class="container">
                    <div class="row">
                      <div class="col form-group" style="padding: 10px; border-radius: 10px; background-color: #96abce;">
                        <label >Data Data de Inscrição:</label><input type="text" name="" id="modal-registro-Data_inscricao" readonly="true" disabled value=""> 
                      </div>
                    </div>
                  </div>

                </div>
            </div>

            <div class="footer-modal" style="text-align: center;">
              <a href="/editar-candidato" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
              <div class="jnt">
                <a href="#" class="btn" style="background-color: #070b17; color: #fff;">Retrocer aos inscritos</a>

                <a href="#ExtralargeModal" class="btn" style="background-color: #070b17; color: #fff;">Dados pessoais <i class="bi bi-arrow-up"></i></a>
              </div>
            </div>

          </form>
        </div>

      </div>
    </div>
  </div>

  <!--  / Termina a modal ver inscrito-->

</main>
@endsection
