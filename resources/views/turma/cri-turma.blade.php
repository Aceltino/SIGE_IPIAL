@extends('layouts.main')

@section('title', 'Criar Turma')

@section('conteudo')
<main id="main" class="main" >
            @if(session()->has('Sucesso'))
            <div class="alert alert-success">
            {{session('Sucesso')}}
        </div>
            @endif
    <form method="POST" action="{{route('turma-store')}}" id="formT" method="POST" class="formulario-layout">
        @csrf
        <div style="text-align:center;margin-top:10px;">

        </div>

        <div class="tabs">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h1>CRIAR TURMA</h1>
                    </div>

                </div>
            </div>


            <div class="form-group ">
                <input class="form-control" id="vagas-input" type="hidden" name="turmaRestante" style=" text-align: center;" placeholder="Vagas Disóniveis" disabled readonly=true style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                @error('turmaRestante')
                <div class="alert alert-danger">{{$message}}</div>
            @enderror
            </div>


            <div class="row">

                <div class="form-group col">
                    <select name="curso" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Curso</option>
                        @foreach($cursos as $curso)
                        <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso }}</option>
                        @endforeach
                    </select>
                    @error('curso')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>

                <div class="col form-group gap-1">
                    <select name="turno" id="turnoSelect" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Turno:</option>
                        <option value="1">Manhã</option>
                        <option value="2">Tarde</option>
                        <option value="3">Noite</option>
                    </select>
                    @error('turno')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Criar Turma</button>
                </div>
            </div>
        </div>
    </form>
   <script>
    const turnoSelect = document.getElementById('turnoSelect');
    const vagasInput = document.getElementById('vagas-input');

    turnoSelect.addEventListener('change', updateVagasInput);

    function updateVagasInput() {
        const turnoId = turnoSelect.value;

            const vagas =  @json($vagas);
            let totalVagas = 0;

            for (let i = 0; i < vagas.length; i++) {
                if (vagas[i].turnoId == turnoId) {
                    totalVagas = vagas[i].totalVagas;
                    break;
                }
            }

            vagasInput.value = totalVagas;
    }
</script>
</main>
@endsection
