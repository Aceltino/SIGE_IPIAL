@extends('layouts.main')

@section('title', 'Alunos Matriculados')

@section('conteudo')

<main id="main" class="main">

    @if(session()->has('ErroMatricula'))
    <div class="alert alert-danger">
    {{session('ErroMatricula')}}
    </div>
    @endif

    @if(session()->has('Sucesso'))
    <div class="alert alert-success">
    {{session('Sucesso')}}
    </div>
    @endif
    

  <div class="row">
    <div class="col">
      <h2>Matriculas</h2>
    </div>

      <div class="col-lg-2">
        <select class="btn-sel form-select">
          <option selected>Estado</option>
        </select>
      </div>

      <div class="col-lg-2">
        <select class="btn-sel form-select">
          <option selected>Turma</option>
        </select>
      </div>

      <div class="col-lg-2">
        <select class="btn-sel form-select">
          <option selected>Média</option>
        </select>
      </div>


  </div>

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" placeholder='Digite o numéro de processo' type="text" name="" class="campo-pesq">
      <button type="submit" title="procurar"><i class="bi bi-search"></i></button>
    </form>
  </div>

  <div style="display: flex; justify-content: flex-end; align-items: center;">
    <button class="btn-imprimir">Imprimir <i class="bi bi-file-earmark-pdf-fill"></i></button>
  </div>
  <div >
    <a href="{{ route('matricula-validarTurma') }}" class="bth btnadmitir">Distribuir turma</a>
  </div>

  <!-- /  Inicio da tabela de inscritos -->
  <table class="table table-striped table-custom" id="matricula-tab">
    <thead>
      <tr style=" text-align: center;">
          <th scope="col">N do Processo</th>
          <th scope="col">Nome do Aluno</th>
          <th scope="col">Turma</th>
          <th scope="col">Média</th>
          <th scope="col">Idade</th>
          <th scope="col">Estado</th>
          <th scope="col">Ações</th>
          <th scope="col"></th>
      </tr>
    </thead>
    <tbody>

      <tr style=" text-align: center;">
        <th scope="row">393839</th>
        <td>Fernando </td>
        <td>I12BT</td>
        <td>16</td>
        <td>15</td>
        <td>Inativo</td>
        <td><a href="#" name="" id="" class="btn btn-success"  role="button">Ativar</a></td>
        <td>
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
          <a href="/editar-registro"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
        </td>
      </tr>

      <tr style=" text-align: center;">
        <th scope="row">393839</th>
        <td>Fernando </td>
        <td>I12BT</td>
        <td>16</td>
        <td>15</td>
        <td>Ativo</td>
        <td><a href="#" name="" id="" class="btn btn-danger"  role="button">Inativar</a></td>
        <td>
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
          <a href="/editar-registro"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
        </td>
      </tr>
    </tbody>
  </table>
  <!-- Termina a tabela de matriculas -->

      <!--Inicio da modal ver inscrito-->
      <div class="modal fade" id="ExtralargeModal" tabindex="-1" data-bs-backdrop="false">
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
                <label>Nome Completo: </label><input type="text" name="" value="Bruno dos Santos Manuel">
            </div>
            <div class="area-input form-group">
                <label>Nome do Pai: </label><input type="text" name="" value="Bruno dos Santos Manuel">
            </div>
            <div class="area-input form-group">
                <label>Nome da Mãe: </label><input type="text" name="" value="Fernanda MIiles Manuel">
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Data de nascimento: </label><input type="text" name="" value="05/04/2023">

                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Idade: </label><input type="text" class="form-control" readonly="true" disabled name="" value="16">

                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Gênero: </label><input type="text" name="" value="Masculino">

                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class=" col area-input form-group" >
                        <label>Número do BI: </label><input type="text" class="form-control" readonly="true" disabled name="" value="0002505QL014">
                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Naturalidade: </label><input type="text" name="" value="Masculino">

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Tel-1: </label><input type="text" name="" value="998 766 656">

                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                        <label>Tel-2: </label><input type="text" name="" value="998 766 656">

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Tel-3: </label><input type="text" name="" value="998 766 656">
                    </div>
                      <div class="col form-group" style="margin-left: 10px;">
                        <button class="btn-imprimir accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border: none; padding: 5px; width: 230px; height: 40px;">
                                Informações do Instituto: <i class="bi bi-arrow-down"></i>
                              </button>
                      </div>
                    </div>
                  </div>

                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="dados-academicos">
                      <div class="row">
                      <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                            <h1>Dados Da Escola De Proveniência</h1>
                        </div>

                    </div>

                    <br>

                    <div class="area-input form-group">
                        <label>Escola de proveniência: </label><input type="text" name="" value="Escola Pública">
                    </div>

                    <div class="container">
                        <div class="row">
                        <div class="col area-input form-group">
                    <label>Turno: </label><input type="text" name="" value="Manhã">

                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Turma: </label><input type="text" name="" value="IJ12">

                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Nº aluno: </label>
                    <input type="text" name="" value="21">
                </div>
                </div>
                </div>

                <div class="container">
            <div class="row">
                    <div class="col area-input form-group" >
                    <label>Ano lectivo: </label><input type="text" class="form-control" readonly="true" disabled name="" value="2022-2023">
                    </div>
                </div>
            </div>

            <div class="col area-input form-group">
                    <label>Número de processo: </label><input type="text" class="form-control" readonly="true" disabled name="" value="76656">

                    </div>

            <div class="row">
                <div class="col" style="display: flex; justify-content: flex-start; align-items: center; margin-bottom: 15px;">
                    <h1>Dados académicos</h1>
                </div>

            </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Código de Inscrição: </label><input type="text" class="form-control" readonly="true" disabled name="" value="49656">

                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Número de processo: </label><input type="text" class="form-control" readonly="true" disabled name="" value="56656">

                        </div>

                            <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Ano Lectivo: </label><input type="text" name="" value="2020-2021">

                            </div>
                    </div>
                </div>

                <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                    <label>Turno: </label><input type="text" name="" value="Manhã">

                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Turma: </label><input type="text" name="" value="I12BT">

                    </div>

                    <div class="col area-input form-group" style="margin-left: 10px;">
                    <label>Classe: </label><input type="text" name="" value="12ª">

                    </div>
                </div>
            </div>

                <div class="container">
                <div class="row">
                    <div class="col area-input form-group">
                        <label>Nº do Aluno: </label><input type="text" name="" value="14">

                    </div>
                    <div class="col area-input form-group" style="margin-left: 10px;">
                         <label>Sala: </label><input type="text" name="" value="09">

                    </div>
                </div>
            </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Pai Tel-1: </label><input type="text" name="" value="920303030">

                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Pai Tel-2: </label><input type="text" name="" value="920303030">

                        </div>

                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Pai Tel-3: </label><input type="text" name="" value="920303030">

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Mãe Tel-1: </label><input type="text" name="" value="16">

                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Mãe Tel-2: </label><input type="text" name="" value="920303030">

                        </div>

                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Mãe Tel-3: </label><input type="text" name="" value="920303030">

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Outro Tel-1: </label><input type="text" name="" value="920303030">

                        </div>
                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Outro Tel-2: </label><input type="text" name="" value="920303030">

                        </div>

                        <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Outro Tel-3: </label><input type="text" name="" value="920303030">

                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="row">
                        <div class="col area-input form-group">
                            <label>Curso: </label><input type="text" name="" value="Técnico de Informática">

                        </div>
                    </div>
                </div>
                      </div>

                      <div class="footer-modal" style="text-align: center;">
                        <a href="/editar-matricula" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                        <div class="jnt">
                            <a href="/matriculas" class="btn" style="background-color: #070b17; color: #fff;">Retrocer as Matriculas</a>

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
