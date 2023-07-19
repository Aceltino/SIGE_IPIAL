@extends('layouts.main')

@section('title', 'Configurações do ano lectivo')

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
    <form method="POST" action="{{route('configurar.ano.lectivo')}}" id="regForm" class="formulario-layout d-flex justify-content-center">
        @csrf
        <div class="w-75">
            <h2 class="text-uppercase text-center mt-3 mb-4 color-blue-principal">Configurações do ano lectivo</h2>


            <div class="row mb-5 mt-5">
                @foreach ($trimestres as $trimestre)

                    @if ($trimestre->data_fim === null)
                    @if ($trimestre->data_inicio === null)
                        <div class="col-6">
                            <button type="submit" name="trimestre{{$trimestre->trimestre}}" value="{{$trimestre->trimestre_id}}" class="btn btn-success our-green-bg w-100" ><i class="bi bi-power me-2" ></i>ABRIR {{$trimestre->trimestre}} TRIMESTRE</button>
                        </div>
                        @break
                    @else
                        @break
                    @endif
                @endif
                @endforeach
                
                @foreach ($trimestres as $trimestre)
                    @if ($trimestre->status === 1)
                        <div class="col-6">
                            <button type="submit" name="fechar_trimestre" value="{{$trimestre->trimestre_id}}" class="btn btn-danger w-100"><i class="bi bi-power me-2"></i>FECHAR {{$trimestre->trimestre}} TRIMESTRE</button>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="row mb-5">
                @foreach ($trimestres as $trimestre)
                    @if ($trimestre->trimestre === "3º" && $trimestre->status === 0 && $trimestre->data_fim !== null)
                        <div class="col-12">
                            <button type="submit" name="fechar_ano_lectivo" value="{{$ano_lectivo->ano_lectivo_id}}" class="btn btn-danger w-100"><i class="bi bi-power me-2"></i>Fechar Ano Lectivo</button>
                        </div>
                    @endif
                @endforeach
            </div>

            <div class="jnt d-flex justify-content-center mt-5">
                <a href="{{route('ano.lectivo')}}" class="btn bg-blue-principal" style="color: #fff;">Retroceder aos Anos Lectivos</a>
            </div>
        </div>
    </form>
</main>
@endsection
