@extends('layouts.main')

@section('title', 'Configurações do ano lectivo')

@section('conteudo')
<main id="main" class="main">
    <form method="POST" action="{{route('configurar.ano.lectivo')}}" id="regForm" class="formulario-layout d-flex justify-content-center">
        @csrf
        <div class="w-75">
            <h2 class="text-uppercase text-center mt-3 mb-4 color-blue-principal">Configurações do ano lectivo</h2>


            <div class="row mb-5 mt-5">
                @foreach ($trimestres as $trimestre)
                    @if ($trimestre->trimestre === "1º")
                        <div class="col-6">
                            <button type="submit" name="primeiro_trimestre" value="{{$trimestre->trimestre_id}}" class="btn btn-success our-green-bg w-100"><i class="bi bi-power me-2"></i>Abrir primeiro trimestre</button>
                        </div>
                    @endif
                @endforeach
                @foreach ($trimestres as $trimestre)
                    @if ($trimestre->trimestre === "2º")
                        <div class="col-6">
                            <button type="submit" name="segundo_trimestre" value="{{$trimestre->trimestre_id}}" class="btn btn-success our-green-bg w-100"><i class="bi bi-power me-2"></i>Abrir segundo trimestre</button>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="row mb-5">
                @foreach ($trimestres as $trimestre)
                    @if ($trimestre->trimestre === "3º")
                        <div class="col-6">
                            <button type="submit" name="terceiro_trimestre" value="{{$trimestre->trimestre_id}}" class="btn btn-success our-green-bg w-100"><i class="bi bi-power me-2"></i>Abrir terceiro trimestre</button>
                        </div>
                    @endif
                @endforeach
                @foreach ($trimestres as $trimestre)
                    @if ($trimestre->status === 1)
                        <div class="col-6">
                            <button type="submit" name="fechar_trimestre" value="{{$trimestre->trimestre_id}}" class="btn btn-danger w-100"><i class="bi bi-power me-2"></i>Fechar trimestre aberto</button>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="row mb-5">
                <div class="col-12">
                    <button type="submit" name="ano_lectivo" value="{{$ano_lectivo->ano_lectivo_id}}" class="btn btn-danger w-100"><i class="bi bi-power me-2"></i>Fechar Ano Lectivo</button>
                </div>
            </div>

            <div class="jnt d-flex justify-content-center mt-5">
                <a href="{{route('ano.lectivo')}}" class="btn bg-blue-principal" style="color: #fff;">Retroceder aos Anos Lectivos</a>
            </div>
        </div>
    </form>
</main>
@endsection
