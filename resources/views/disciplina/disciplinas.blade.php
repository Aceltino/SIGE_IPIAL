@extends('layouts.main')

@section('title', 'disciplinas')

@section('conteudo')
    <main id="main" class="main">
        <div class="row">
            <div class="col">
                <h2>DISCIPLINAS</h2>
            </div>

            <div class="col-lg-2">
                <select class="btn-sel form-select " id="filtro5">
                    <option selected disabled>Curso</option>
                    <option value="Desenhador projetista">Desenhador projetista</option>
                    <option value="Técnico de Energia e Instalações Electricas">Técnico de Energia e Instalações Electricas
                    </option>
                    <option value="Técnico de Informática">Técnico de Informática</option>
                    <option value="Electronica e Telecomunicação">Electronica e Telecomunicação</option>
                </select>
            </div>
            <div class="col-lg-2">
                <select class="btn-sel form-select" id="filtro3">
                    <option selected disabled>Componetes</option>
                    <option value="Técnicas">Técnicas</option>
                    <option value="Socio-culturais">Socio-culturais</option>
                    <option value="Cientificas">Cientificas</option>
                </select>
            </div>



        </div>

        <div class="procurar">
            <form class="proc-form d-flex align-items-center" method="GET">
                <input id="pesquisa" placeholder='Digite o nome das disciplina' type="text" name="pesquisa"
                    class="campo-pesq">
                <button type="submit" title="procurar"><i class="bi bi-search"></i></button>
            </form>
        </div>

        @if (session('sucess'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('sucess') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('edit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle me-1"></i>
                {{ session('edit') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-octagon me-1"></i>
                {{ session('delete') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <!-- /  Inicio da tabela de disciplina -->
        <table class="table table-striped display table table-custom table-escuro " style="margin-top: 10px;"
            id="matricula-tab">
            <thead>
                <tr style=" text-align: center;">
                    <th scope="col">Nome da disciplina</th>
                    <th scope="col">Sigla</th>
                    <th scope="col">Compoente</th>
                    <th scope="col">Tempo de Prova</th>
                    <th scope="col">Curso</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody style="text-align: center;">

            @foreach ($disciplinas as $item)
                    
              <tr>
                <td>{{$item->nome_disciplina}}</td>
                <td>{{$item->sigla}}</td>
                <td>{{$item->componente}}</td>
                <td>{{$item->tempo_prova}}</td>
                <td>{{$item->curso->nome_curso}}</td>    

                <td style="display: flex; justify-content: center; align-items: center; gap:5px;">
                    <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
                    <a href="disciplina/edit-disciplina/5"><i class="bi bi-pencil"></i></a>
                    <form method="POST">
                        <button type="submit" class="bi bi-trash-fill" style="border: none; background: none;"></button>
                    </form>
                </td>
              </tr>

            @endforeach 
            
                <div class="modal fade" id="ExtralargeModal" tabindex="-1" data-bs-backdrop="false">
                    <div class="modal-dialog modal-xl">
                        <div class="modal-content">

                            <div class="provisorio">
                                <div
                                    class="card-icon-modal rounded-circle d-flex align-items-center justify-content-flex-end">

                                    <i class="bi bi-x-lg" data-bs-toggle="modal" aria-label="Close"
                                        data-bs-dismiss="modal"></i>
                                </div>
                            </div>


                            <div class="cabecalho-modal">
                                <div class="row">
                                    <div class="col"
                                        style="display: flex; justify-content: flex-start; align-items: center;">
                                        <h1>Dados da discplina</h1>
                                    </div>
                                    <div class="corpo-modal">
                                        <form class="form-inativo">
                                            <div class="dados da disciplina">
                                                <div class="area-input form-group" style="border: none;">
                                                    <label>Nome da disciplina: </label><input type="text" name=""
                                                        value="" disabled>
                                                </div>
                                                <div class="area-input form-group" style="border: none; ">
                                                    <label>Sigla: </label><input type="text" name=""
                                                        value="" disabled>
                                                </div>

                                                <div class="area-input form-group" style="border: none; ">
                                                    <label>Componete: </label><input type="text" name="socio-culturais"
                                                        value="" disabled>
                                                </div>
                                                <div class="area-input form-group" style="border: none; ">
                                                    <label>Classe: </label><input type="text" name="socio-culturais"
                                                        value="" disabled>
                                                </div>
                                                <div class="area-input form-group" style="border: none; ">
                                                    <label>Carga Horária: </label><input type="text"
                                                        name="socio-culturais" value="Tempo(s)" disabled>
                                                </div>
                                                <div class="area-input form-group" style="border: none; ">
                                                    <label>Tipo_disciplina: </label><input type="text"
                                                        name="Tipo_disciplina" value="" disabled>
                                                </div>
                                                <div class="area-input form-group" style="border: none; ">

                                                    <label>Curso: </label><input type="text" name=""
                                                        value="Todos os cursos" disabled>

                                                    <label>Curso: </label><input type="text" name=""
                                                        value="" disabled>

                                                </div>
                                                <div class="area-input form-group" style="border: none; ">
                                                    <label>Tempo de prova: </label><input type="text"
                                                        name="tempo_prova" value="" disabled>
                                                </div>
                                                <div class="footer-modal" style="text-align: center;">
                                                    <a href="disciplina/edit-disciplina/5" class="btn"
                                                        style="background-color: #d0ff00; color: #fff;">Editar dados</a>

                                                </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        </tr>
            </tbody>
        </table>

    </main>
@endsection
