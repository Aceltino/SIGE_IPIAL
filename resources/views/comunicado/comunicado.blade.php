@extends('layouts.main')

@section('title', 'Comunicados')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h2>Comunicados</h2>
    </div>
  </div>

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input id="pesquisa" placeholder='pesquise o comunicado pelo seu Título' type="text" name="" class="campo-pesq">
      <button type="submit" title="procurar"><i class="bi bi-search"></i></button>
    </form>
  </div>

  <!-- /  Inicio da tabela de inscritos -->
  <table class="table table-striped table-custom" id="matricula-tab">
    <thead>
    @foreach ($comunicados as $comunicado)
       <tr style=" text-align: center;">
          <th scope="col">{{ $comunicado->comunicado_id }}</th>
          <th scope="col">{{ $comunicado->titulo_com }}</th>
          <th scope="col">{{ $comunicado->conteudo_com  }}</th>
      </tr>
     @endforeach
       </thead>
    <tbody>
      <tr style=" text-align: center;">
          <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
          <a href="{{ route('comunicado.edit') }}"><i class="bi bi-pencil"></i></a>
          <i class="bi bi-trash-fill"></i>
          <i class="bi bi-check-square-fill"></i>
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
                  <h1>Dados do Comunicado</h1>
                </div>
              </div>
            </div>

            <div class="corpo-modal">
              <form class="form-inativo">
                <div class="dados-pessoais">
                    <div class="area-input form-group">
                        <label>Título do Comunicado: </label><input class="form-control" type="text" name="" value="Defesas dos Finalistas 2023" readonly disabled>
                    </div>
                </div>

                    <div class="row">
                        <div class="col">
                            <textarea class="form-control" style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100 "  rows="13" name="conteudo"  id="area" placeholder="Escreve aqui o conteúdo do Comunicado" readonly disabled>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi architecto placeat quidem sapiente quis ex porro laborum, delectus officiis, in debitis quibusdam blanditiis qui possimus maiores ipsum earum amet corporis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam beatae, accusantium modi fuga ratione itaque illo, adipisci suscipit pariatur non ut necessitatibus, dolore at unde voluptates eligendi natus tempore quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quae veniam animi magni quos, voluptatum porro? Accusantium blanditiis, tempora deleniti quidem repudiandae corporis adipisci voluptatem eos? Quis nihil consequatur quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat qui tenetur fuga distinctio a dolor esse sapiente ratione possimus quis aperiam numquam reprehenderit, autem quos laudantium sit eius excepturi consequuntur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem illo similique, placeat dolorum, quo consectetur eius ducimus nobis, inventore quisquam dolores! Illum, saepe voluptates. Eaque odit ex cum molestias nulla? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto fuga impedit magnam voluptates harum velit error quo optio distinctio ab nihil enim, id totam accusantium quod vel in? Sed, architecto!</textarea>
                        </div>
                    </div>


                      <div class="footer-modal" style="text-align: center;">

                        <div class="jnt">
                            <a href="#" class="btn" style="background-color: #070b17; color: #fff;">Retrocer aos Comunicados</a>

                            <a href="#" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
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
@for
