@extends('layouts.main')

@section('title', 'Criar Comunicado')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:10px;">
        <span class="step"></span>
        </div>

        <div class="tab">     

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CRIAR COMUNICADO</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input  Value="Inicio das Provas "type="text" style=" text-align: center;" placeholder="Título" name="" oninput="this.className = ''">
            </div>

            <div class="form-group" >
                <TExtarea Value=" eu fulano fulano venho por este meio informas que as provas trimestrais terão inicio amanhã" style=" text-align: center;" placeholder="Nome da turma" name="" oninput="this.className = ''" ></TExtarea>
            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="button" class="btn btn-success">Criar Turma</button>
                </div>
            </div>    
        </div>
    </form>
</main>
@endsection