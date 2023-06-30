@extends('layouts.main')

@section('title', 'Criar Turma')

@section('conteudo')
<main id="main" class="main" >

    <form id="formT" method="POST" class="formulario-layout">
        <div style="text-align:center;margin-top:10px;">
       
        </div>

        <div class="tabs">     

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CRIAR TURMA</h2>
                    </div>

                </div>
            </div>
             

            <div class="form-group">
                <input class="form-control" id="vagas-input" type="number" style=" text-align: center;" placeholder="Vagas Disóniveis" disabled>
                
            </div>


            <div class="row">

                <div class="form-group col">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>CURSO</option>
                        @foreach($cursos as $curso)
                        <option value="{{ $curso->curso_id }}">{{ $curso->nome_curso }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="col form-group gap-1 ">
                    <select name="opcoes" id="turnoSelect" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Turno:</option>
                        @foreach($turnos as $turno)
                        <option value="{{ $turno->turno_id }}">{{ $turno->nome_turno }}</option>
                        @endforeach
                    </select>
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
            const vagas = @json($vagas);
    
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