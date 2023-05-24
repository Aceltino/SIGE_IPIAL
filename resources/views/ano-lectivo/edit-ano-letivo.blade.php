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
                        <h2>ATUALIZAR DADOS DO ANO LECTIVO</h2>
                    </div>

                </div>
            </div>

            <div class="row" style="margin-bottom: 5px;">
                <div class="col">
                    <input class="form-control" type="text" placeholder="Nome do Ano Lectivo" Value="ANO-Alda-2023" name="" oninput="this.className = ''" maxlength="15" minlength="15" style=" text-align: center;" >
                </div>
            </div>
            
            <div class="row" >
                <div class="col">
                    <p>Data de Início<input type="date" value="2000-04-01" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Data de Fim<input type="date" value="2000-04-01" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                        <p><input type="text" value="50" placeholder=" Número maximo de aluno nas turmas" name="" oninput="this.className = ''" required></p>
                </div>
    
                <div class="col-6">
                        <p><input type="text" value="20"placeholder=" Número maximo de Salas" name="" oninput="this.className = ''" required></p>
                </div>
            </div>
            <div class="row" >
                <div class="col">
                    <p>InÍcio das Incrições<input type="date" value="2021-04-01" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Fim das Incrições<input type="date" value="2021-05-01" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Início das Matriculas<input type="date" value="2021-07-01" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Fim das Matriculas<input type="date" value="2001-08-01" name="" oninput="this.className = ''" required></p>
                </div>
            </div>
        </div>
        <div style="text-align:center;margin-top:10px;">
            <div>
                <a href="/ano-letivo" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>
                <button type="submit" class="btn btn-success">Atualizar Ano Lectivo</button>
            </div>
        </div>
    </form>
</main>
@endsection