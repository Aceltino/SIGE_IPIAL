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
                        <h1>CRIAR COMUNICADO</h1>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="text" style=" text-align: center;" class="@error('titulo_com') is-invalid @enderror" value="{{ old('titulo_com') }}"  placeholder="Titulo do Comunicado"  name="titulo_com" oninput="this.className = ''" required>

                    @error('titulo_com')
                    <div class="alert alert-danger" style="margin-top: 10px;">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                    @enderror
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none; padding: 20px;" class="w-100 @error('conteudo_com') is-invalid @enderror"  rows="13" name="conteudo_com"  id="area" placeholder="Escreve aqui o conteúdo do Comunicado" value="{{ old('conteudo_com') }}" required></textarea>
                    @error('conteudo_com')
                    <div class="alert alert-danger">{{$message}}
                        <button class="botaofecharerro">
                            <i class="bi bi-x"></i>
                        </button>
                    </div>
                    @enderror
                </div>
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

