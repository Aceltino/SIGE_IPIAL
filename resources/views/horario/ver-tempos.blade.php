@extends('layouts.main')

@section('title', 'Ver tempos')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col">
            <h2 class="color-blue-principal text-uppercase">Anos lectivos</h2>
        </div>
    </div>   

    <div class="row">
        <!--Inicío da tabela de ver ano lectivo-->
        <table id="matricula-tab" class="table table-striped mt-4 table-custom table-escuro">
            <thead>
                <tr style=" text-align: center;">
                    <th scope="col">Turno</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr style=" text-align: center;">
                    <td>Manhã</td>
                    <td class="d-flex justify-content-between align-items-center">
                        Teste<i class="bi bi-eye-fill"></i>
                        <a href="/editar-tempos"><i class="bi bi-pencil"></i></a>
                        <a href="#" class="btn btn-danger d-flex align-items-center p-0"><i class="bi bi-close" ></i></a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Termina a tabela de ver ano lectivo -->
    </div>
</main>
@endsection