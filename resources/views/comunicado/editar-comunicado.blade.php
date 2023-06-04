@extends('layouts.main')

@section('title', 'Editar Comunicado')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" action="{{ route('comunicado-update',['id'=>$comunicados->comunicado_id]) }}" class="formulario-layout" method="POST">
    @csrf
    @method('PUT')
        <div style="text-align:center;margin-top:10px;">
        <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>Atualizar Dados do Comunicado</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="text" style=" text-align: center;" value="{{ $comunicados->titulo_com }}" placeholder="Titulo do Comunicado" name="titulo" oninput="this.className = ''">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100 "  rows="13" value="{{ $comunicados->conteudo_com }}" name="conteudo"  id="area" placeholder="Escreve aqui o conteúdo do Comunicado" ></textarea>
                </div>
            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Atualizar Comunicado</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection

