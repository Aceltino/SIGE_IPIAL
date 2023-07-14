@extends('layouts.main')

@section('title', 'Área de formação')

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
          <h2>Salas</h2>
        </div>

         <div class="col-lg-4">
            <select class="btn-sel form-select" id="filtro3">
                <option selected disabled>Tipo de sala</option>
                <option value="e"></option>
           </select>
         </div>

      </div>

      <div class="procurar">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" type="text" name="" class="campo-pesq" placeholder="Digite a sala que pretendes">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div>

      <table class="table table-striped table table-custom table-escuro" id="matricula-tab">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Sala</th>
            <th scope="col">Tipo de sala</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
              <tr style=" text-align: center;">
                  <th scope="row">12</th>
                  <td>asdsfgdhjkr</td>
                  <td>
                    <section style="display: flex;">
                    <i class="bi bi-eye-fill"  data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
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
                          <h1>Dados Da Sala</h1>
                        </div>

                      </div>
                    </div>

                    <div class="corpo-modal">
                      <form class="form-inativo">
                        <div class="dados-pessoais">
                        <div class="area-input form-group" disabled>
                        <label>Sala: </label><input type="text" name="" disabled>
                        </div>


                    <div class="form-group">
                        <label for="">:</label>
                        <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select" disabled>
                            <option  disabled>Tipo de sala</option>
                           <option value="e"></option>
                        </select>
                    </div>

                    <div class="footer-modal" style="text-align: center;">

                        <div class="jnt">
                            <a href="#" class="btn" style="background-color: #070b17; color: #fff;">Retrocer as salas</a>
                        <a href="edit-sala" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                        </div>
                    </div>
                    </div>

                  </div>
                </div>
              </div>

        </tbody>
      </table>
    

    </main>
@endsection
