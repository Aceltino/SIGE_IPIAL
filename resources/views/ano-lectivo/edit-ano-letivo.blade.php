@extends('layouts.main')

@section('title', 'Editar Ano Lectivo')

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
                        <h2>Atualizar DADOS DO ANO LECTIVO</h2>
                    </div>

                </div>
            </div>
            
            <div class="row" >
                <div class="col">
                    <p>Data de Início<input type="date" value="2000-04-01" name="" oninput="this.className = ''"></p>
                </div>

                <div class="col">
                    <p>Data de Fim<input type="date" value="2000-04-01" name="" oninput="this.className = ''"></p>
                </div>
            </div>

            <div class="col-5">
                <p><input type="text" value="50" placeholder=" Número maximo de aluno nas turmas" name="" oninput="this.className = ''"></p>
            </div>
        </div>
        <div style="text-align:center;margin-top:10px;">
            <div>
                <button type="button" class="btn btn-success">Atualizar Ano Lectivo</button>
            </div>
        </div>
    </form>
</main>
@endsection