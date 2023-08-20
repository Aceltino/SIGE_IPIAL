@extends('layouts.main')

@section('title', 'Instituição')

@section('conteudo')
<main id="main" class="main" >

    <form id="regForm" action="" method="POST" class="needs-validation" novalidate>
    @csrf
        <div style="text-align:center;margin-top:10px;">
        <span class="step"></span>
        </div>

        <div class="tab">

            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h1>Informações sobre a instituição</h1>
                    </div>

                </div>
            </div><br>

            <div class="row">
                <br>
                <div class="col-lg-6">
                    <div class="form-group">
                        <input type="text" style=" text-align: center;" id="letra" placeholder="Nome completo da instituição" value="Instituto politécnico industrial alda lara" required>
                        <div class="invalid-feedback">Por favor insere o nome da Instituição!</div>

                    </div>
                </div>
                
                {{-- @error('nome')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror--}}
                
                <br>
                <div class="col-lg-6">

                    <div class="form-group">
                    <input type="text" style=" text-align: center;" id="letra2" placeholder="Sigla ou acrônimo" value="ipial"  required>
                    <div class="invalid-feedback">Por favor insere a sigla ou acrônimo!</div>
                    </div>
                </div>
                
                {{-- @error('sobre_nome')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror --}}
                
         </div><br>
         
            <div class="row">
                <div class="col" style="text-align: center;">
                    <h5>Logotipo</h5>
                </div>
                <div class="col">
                    <input type="file" class="form-control" id="bi_input" required>
                    <div class="invalid-feedback">Selecione uma imagem par o logotipo da instituição!</div>
                    {{--@error('num_bi')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror--}}
                </div>
            </div> 

            <div style="text-align:center;margin-top:30px;">
                <div>
                    <button type="submit" class="btn btn-success">Atualizar informações</button>
                </div>
            </div>
        </div>
    </form>
</main>
@endsection

