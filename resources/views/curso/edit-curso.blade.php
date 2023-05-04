@extends('layouts.main')

@section('title', 'Editar Curso')

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
                        <h2>ATUALIZAR DADOS DO CURSO</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" value="Contrução civil" placeholder="Nome do Curso" name="" oninput="this.className = ''">
            </div>
                            
            <div class="form-group">
                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option disabled>Area de Formação:</option>
                    <option value="Informática">Informática</option>
                    <option value="Contrução civil" selected >Contrução civil</option>
                    <option value="Eletronica">Eletronica</option>
                    <option value="Contrução civil">Contrução civil</option>
                </select>
            </div>

            <div class="form-group">
                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option disabled>Coordenador:</option>
                    <option value="Tom Brauny">Tom Brauny</option>
                    <option value="João Miguel" selected >João Miguel</option>
                    <option value="Noite">Noite</option>
                </select>
            </div>
                
            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="button" class="btn btn-success">Atualizar Turma</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection