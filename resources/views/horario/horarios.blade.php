@extends('layouts.main')

@section('title', 'Ver horários')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col">
            <h2 class="color-blue-principal text-uppercase">Horários</h2>
        </div>
    </div>

    <!--Inicío da tabela de ver horários-->
    <table id="matricula-tab" class="table table-striped mt-4 table-custom table-escuro">
        <thead>
            <tr style=" text-align: center;">
                <th scope="col">Curso</th>
                <th scope="col">Turma</th>
                <th scope="col">Ano lectivo</th>
                <th scope="col">Horário</th>
            </tr>
        </thead>
        <tbody>
            <tr style=" text-align: center;">
                <td>Informática</td>
                <td>I10AM</td>
                <td>2021-2022</td>
                <td class="d-flex justify-content-center">
                    <a href="/horario-turma" class="btn bg-blue-principal d-flex p-0 px-3" style="color:#FFF;">Ver horário</a>    
                </td>
            </tr>
        </tbody>
    </table>
    <!-- Termina a tabela de ver horários -->
</main>
@endsection