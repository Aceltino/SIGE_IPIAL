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
          <h2>CURSOS</h2>
        </div>

         <div class="col-lg-4">
           <select class="btn-sel form-select" id="filtro3">
              <option selected disabled>Area de Formação</option>
              @foreach ($areaFormacao as $af)
                <option value="{{$af->nome_area_formacao}}">{{$af->nome_area_formacao}}</option>
              @endforeach

           </select>
         </div>


      </div>

      <div class="procurar">
        <form class="proc-form d-flex align-items-center">
          <input id="pesquisa" type="text" name="" class="campo-pesq" placeholder="Digite o Curso que estás a procurar">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div>

      <!-- /  Inicio da tabela de inscritos -->
      <table class="table table-striped" id="matricula-tab">
        <thead>
          <tr style=" text-align: center;">
            <th scope="col">Nome do Curso</th>
            <th scope="col">Sigla</th>
            <th scope="col">Area de Formação</th>
            <th scope="col">Coordenador do Curso</th>

            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < count($cursos); $i++)
              <tr style=" text-align: center;">
                  <th scope="row">{{$cursos[$i]->nome_curso}}</th>
                  <td>{{$cursos[$i]->sigla}}</td>
                  <td>{{$cursos[$i]->areaFormacao->nome_area_formacao}}</td>
                  @if ($cursos[$i]->coordenador)
                    <td>{{$cursos[$i]->coordenador->pessoa->nome_completo}}</td>
                    @else
                    <td>Sem Coordenador</td>
                  @endif

                  <td>
                    <section style="display: flex;">
                    <i class="bi bi-eye-fill"  data-bs-toggle="modal" data-bs-target="#ExtralargeModal{{$cursos[$i]->curso_id}}"></i>
                    <a style="margin-left: 6px;"  href="{{route('editar.curso', $cursos[$i]->curso_id)}}" class="bi bi-pencil"></a>
                    <form  method="POST"action="{{route('apagar.curso', $cursos[$i]->curso_id)}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="bi bi-trash-fill" style="border: none; background: none;"></button>
                    </form>
                    </section>
                  </td>
              </tr>

              @endfor

              
              @for ($i = 0; $i < count($cursos); $i++)
              <div class="modal fade" id="ExtralargeModal{{$cursos[$i]->curso_id}}" tabindex="-1" data-bs-backdrop="false">
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
                          <h1>Dados Do Curso</h1>
                        </div>

                      </div>
                    </div>

                    <div class="corpo-modal">
                      <form class="form-inativo">
                        <div class="dados-pessoais">
                        <div class="area-input form-group" disabled>
                        <label>Nome do Curso: </label><input type="text" name="" value="{{$cursos[$i]->nome_curso}}" disabled>
                        </div>
                        <div class="area-input form-group" disabled>
                        <label>Sigla do Curso: </label><input type="text" name="" value="{{$cursos[$i]->sigla}}" disabled>
                        </div>



                    <div class="form-group">
                       <label for="">Area de Formação:</label>
                       <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select" disabled>
                            <option disabled>Area de Formação:</option>
                            <option value="{{$cursos[$i]->areaFormacao->nome_area_formacao}}" selected>{{$cursos[$i]->areaFormacao->nome_area_formacao}}</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Coordenador:</label>
                        <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select" disabled>
                            <option  disabled>Coordenador:</option>

                            @if ($cursos[$i]->coordenador)
                                <option value="{{$cursos[$i]->coordenador->pessoa->nome_completo}}" selected>{{$cursos[$i]->coordenador->pessoa->nome_completo}}</option>
                                @else
                                <option value="" selected>Sem Coordenador</option>
                            @endif
                        </select>
                    </div>

                        <div class="footer-modal" style="text-align: center;">

                          <div class="jnt">
                              <a href="/curso/cursos" class="btn" style="background-color: #070b17; color: #fff;">Retrocer aos Cursos</a>
                            <a href="{{route('editar.curso', $cursos[$i]->curso_id)}}" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                          </div>
                        </div>
                    </div>

                  </div>
                </div>
              </div>

            @endfor

        </tbody>
      </table>
      <!-- Termina a tabela de matriculas -->

      <!--Inicio da modal ver inscrito-->



      <!--  / Termina a modal ver inscrito-->

    </main>
@endsection
