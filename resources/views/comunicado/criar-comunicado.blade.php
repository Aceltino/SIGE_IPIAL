@extends('layouts.main')

@section('title', 'Criar Comunicado')

@section('conteudo')
<main id="main" class="main" >

    <form id="regForm" action="{{ route('comunicado.store') }}" method="POST" class="needs-validation" novalidate>

    @csrf
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
            <div class="row">
                <div class="form-group col">
                    <input type="text" style=" text-align: center;" value="" placeholder="Titulo do Comunicado" name="titulo" oninput="this.className = ''" required>
                    <div class="invalid-feedback">Por favor o comunicado deve conter um Titulo</div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none; padding: 20px;" class="w-100"  rows="13" name="conteudo"  id="area" placeholder="Escreve aqui o conteúdo do Comunicado" required></textarea>
                </div>
                <div class="invalid-feedback">Se for para enviar uma mensagem deve escrever alguma coisa</div>
            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Criar Comunicado</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection

