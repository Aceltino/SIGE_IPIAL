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
                <input type="text" style=" text-align: center;" placeholder="Nome da turma" name="" oninput="this.className = ''">
            </div>

            <div class="form-group" id=" textarea" >
                <TExtarea style=" text-align: center;" id="area" placeholder="Nome da turma" name="" oninput="this.className = ''" ></TExtarea>
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