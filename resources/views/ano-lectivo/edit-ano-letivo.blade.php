@extends('layouts.main')

@section('title', 'Editar Ano Lectivo')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" action="" class="formulario-layout">

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">editar dados do ano lectivo</h2>
          <h4 class="text-uppercase text-center my-4 color-blue-principal">Informações gerais</h4>
          
            <div class="row" >
                <div class="col">
                    <p>Designação do ano lectivo<input type="text" class="form-control" value=" " name="" readonly="true" disabled></p>
                </div>
            </div>


            <div class="row" >
                <div class="col">
                    <p>Data de início do ano lectivo<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Data de fim do ano lectivo<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das inscrições<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Data de fim das inscrições<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início das matriculas<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Data de fim das matriculas<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row mb-4">
                <div class="col-6">
                    <input type="number" class="form-control" placeholder=" Número máximo de alunos nas turmas" min="0" name="" oninput="this.className = ''" required>
                </div>
    
                <div class="col-6">
                    <input type="number" class="form-control" placeholder=" Número máximo de salas" min="0" name="" oninput="this.className = ''" required>
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">sobre os trimestres</h4>
          
            <div class="row" >
                <div class="col">
                    <p>Data de início do 1º trimestre<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Data de fim do 1º trimestre<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 2º trimestre<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Data de fim do 2º trimestre<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Data de início do 3º trimestre<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Data de fim do 3º trimestre<input type="date" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">manhã</h4>
          
            <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" class="form-control" placeholder="Ex:50" min="0" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" class="form-control" placeholder="Ex:5" min="0" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" class="form-control" placeholder="Ex:15" min="0" name="" oninput="this.className = ''" required></p>
                </div>
            </div>


            <h4 class="text-uppercase text-center my-3 color-blue-principal">tarde</h4>
          
            <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" class="form-control" placeholder="Ex:50" min="0" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" class="form-control" placeholder="Ex:5" min="0" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" class="form-control" placeholder="Ex:15" min="0" name="" oninput="this.className = ''" required></p>
                </div>
            </div>
      

            <h4 class="text-uppercase text-center my-3 color-blue-principal">noite</h4>
          
            <div class="row" >
                <div class="col">
                    <p>Hora do início das aulas<input type="time" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Hora do fim das aulas<input type="time" class="form-control" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col">
                    <p>Duração de cada tempo (em minutos)<input type="number" class="form-control" placeholder="Ex:50" min="0" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" class="form-control" placeholder="Ex:5" min="0" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" class="form-control" placeholder="Ex:15" min="0" name="" oninput="this.className = ''" required></p>
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:10px;">
            <div class="mt-4">
                <a href="/ano-letivo" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>
                <button type="submit" class="btn btn-success">Atualizar Ano Lectivo</button>
            </div>
        </div>
    </form>
</main>
@endsection