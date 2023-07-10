@extends('layouts.main')

@section('title', 'Cursos')

@section('conteudo')
<main id="main" class="main">
    @if (session()->has('erro'))
    <div class="alert alert-danger">
    {{session('erro')}}
    </div>
    @endif
    @if (session()->has('sucesso'))
    <div class="alert alert-success">
        {{session('sucesso')}}
    </div>
    @endif
      <div class="row">
        <div class="col">
          <h2>Áreas de formação</h2>
        </div>

         <div class="col-lg-4">
            <select class="btn-sel form-select" id="filtro3">
                <option selected disabled>Area de Formação</option>
                <option value="e">Area de formação</option>
           </select>
         </div>

         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro4">
            <option selected disabled>Coordenador</option>
            <option value="e">Nome coordenador</option>
           </select>
         </div>

      </div>

      <div class="procurar">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" type="text" name="" class="campo-pesq" placeholder="Digite a area de formação que pretende que estás a procurar">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div>

      <!-- /  Inicio da tabela de inscritos -->
      <table class="table table-striped" id="matricula-tab">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Area de Formação</th>
            <th scope="col">Coordenador</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
              <tr style=" text-align: center;">
                  <th scope="row">Nome da area de formação</th>
                  <td>Nome do Professor</td>
                  <td>
                    <section style="display: flex;">
                    <i class="bi bi-eye-fill"  data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
                    <a style="margin-left: 6px;"  href="#" class="bi bi-pencil"></a>
                    <form  method="POST"action="">
                        @csrf

                        <button type="submit" class="bi bi-trash-fill" style="border: none; background: none;"></button>
                    </form>
                    </section>
                  </td>
              </tr>

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
                          <h1>Dados Da Area de formação</h1>
                        </div>

                      </div>
                    </div>

                    <div class="corpo-modal">
                      <form class="form-inativo">
                        <div class="dados-pessoais">
                        <div class="area-input form-group" disabled>
                        <label>Nome da area de formação: </label><input type="text" name="" disabled>
                        </div>


                    <div class="form-group">
                        <label for="">Coordenador:</label>
                        <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select" disabled>
                            <option  disabled>Coordenador:</option>
                           <option value="e">Nome do Prof</option>
                        </select>
                    </div>

                    <div class="footer-modal" style="text-align: center;">

                        <div class="jnt">
                            <a href="#" class="btn" style="background-color: #070b17; color: #fff;">Retrocer aos Cursos</a>
                        <a href="#" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                        </div>
                    </div>
                    </div>

                  </div>
                </div>
              </div>

        </tbody>
      </table>
      <!-- Termina a tabela de matriculas -->

      <!--Inicio da modal ver inscrito-->



      <!--  / Termina a modal ver inscrito-->

    </main>
@endsection
