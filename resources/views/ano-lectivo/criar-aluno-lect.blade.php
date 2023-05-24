@extends('layouts.main')

@section('title', 'Criar Ano Lectivo')

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
                        <h2>CRIAR ANO LECTIVO</h2>
                    </div>

                </div>
            </div>

            <div class="row" style="margin-bottom: 5px;">
                <div class="col">
                    <input class="form-control" type="text" placeholder="Nome do Ano Lectivo" name="" oninput="this.className = ''" maxlength="15" minlength="15" style=" text-align: center;" >
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de Início<input type="date" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Data de Fim <input type="date" name="" oninput="this.className = ''" required></p>
                </div>
            </div>
            <div class="row" >
                <div class="col">
                    <p>Início das Incrições<input type="date" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Fim das Incrições<input type="date" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Início das Matriculas<input type="date" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Fim das Matriculas<input type="date" name="" oninput="this.className = ''" required></p>
                </div>
            </div>


            <div class="row">
                <div class="col-6">
                        <p><input type="number" placeholder=" Número maximo de aluno nas turmas" name="" oninput="this.className = ''" required></p>
                </div>
    
                <div class="col-6">
                        <p><input type="number" placeholder=" Número maximo de Salas" name="" oninput="this.className = ''" required></p>
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:10px;">
            <div>
                <button type="submit" class="btn btn-success">Criar Ano Lectivo</button>
            </div>
        </div>
    </form>
</main>
@endsection