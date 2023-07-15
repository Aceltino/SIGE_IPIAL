@extends('layouts.main')

@section('title', 'Editar Comunicado')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" method="POST" action="{{ route('comunicado.update', ['comunicado_id' => $comunicados->comunicado_id]) }}" class="formulario-layout">
    @csrf
    @method('PUT')
        <div style="text-align:center;margin-top:10px;">
        <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h1>Atualizar Dados do Comunicado</h1>
                    </div>

                </div>
            </div> 
            <div class="row">
            <div class="form-group col">
                    <input type="text" style=" text-align: center;" value="{{ $comunicados->titulo_com}}" class="@error('titulo_com') is-invalid @enderror"  placeholder="Titulo do Comunicado"  name="titulo_com" oninput="this.className = ''" >
                    @error('titulo_com')
                <div class="alert alert-danger">{{$message}}
                  <button class="botaofecharerro">
                    <i class="bi bi-x"></i>
                  </button></div>
            @enderror
                </div>
            </div>
            <div class="row">
            <div class="col">
                    <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none; padding: 20px;" class="w-100 @error('conteudo_com') is-invalid @enderror"  rows="13" name="conteudo_com"  id="area" placeholder="Escreve aqui o conteúdo do Comunicado">{{ $comunicados->conteudo_com }}</textarea>
                    @error('conteudo_com')
                <div class="alert alert-danger">{{$message}}
                  <button class="botaofecharerro">
                    <i class="bi bi-x"></i>
                  </button></div>
            @enderror
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

