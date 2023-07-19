@extends('layouts.main')

@section('title', 'Ver tempos')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col">
            <h2 class="color-blue-principal text-uppercase">Tempos de aula</h2>
        </div>
    </div>   

    <div class="row">
        <!--Inicío da tabela de ver tempos-->
        <table class="table table-striped mt-4 table-custom table-escuro">
            <thead>
                <tr class="text-center w-100">
                    <th scope="col" class="w-50">Turno</th>
                    <th scope="col" class="w-50">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center">
                    <td>Manhã</td>
                    <td>
                        <a href="/visualizar-tempos-definidos" class="btn btn-primary py-0"><i class="bi bi-eye-fill me-2"></i>Ver tempos</a>
                        <a href="/editar-tempos" class="btn btn-success py-0"><i class="bi bi-pencil me-2"></i>Editar tempos</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- Termina a tabela de ver ano lectivo -->
    </div>
</main>
@endsection