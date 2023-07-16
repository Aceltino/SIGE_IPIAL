@extends('layouts.main')

@section('title', 'Configurações do ano lectivo')

@section('conteudo')
<main id="main" class="main">
    <form method="POST" action="" id="regForm" action="" class="formulario-layout d-flex justify-content-center">
        <div class="w-75">
            <h2 class="text-uppercase text-center mt-3 mb-4 color-blue-principal">Configurações do ano lectivo</h2>

            <div class="row mb-5 mt-5">
                <div class="col-6">
                    <button type="submit" class="btn btn-success our-green-bg w-100"><i class="bi bi-power me-2"></i>Abrir primeiro trimestre</button>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-success our-green-bg w-100"><i class="bi bi-power me-2"></i>Abrir segundo trimestre</button>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-6">
                    <button type="submit" class="btn btn-success our-green-bg w-100"><i class="bi bi-power me-2"></i>Abrir terceiro trimestre</button>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-danger w-100"><i class="bi bi-power me-2"></i>Fechar trimestre aberto</button>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <button type="submit" class="btn btn-danger w-100"><i class="bi bi-power me-2"></i>Fechar Ano Lectivo</button>
                </div>
            </div>

            <div class="jnt d-flex justify-content-center mt-5">
                <a href="ano-lectivo/ano-letivo/" class="btn bg-blue-principal" style="color: #fff;">Retroceder aos Anos Lectivos</a>
            </div>
        </div>
    </form>
</main>
@endsection