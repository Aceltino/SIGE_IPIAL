@extends('layouts.main')

@section('title', 'Criar Ano Lectivo')

@section('conteudo')
<main id="main" class="main">
      <form method="POST" action="" id="regForm" action="" class="formulario-layout">
        <div style="text-align:center;margin-top:40px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">informações gerais</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>
          
          <div class="row" >
                <div class="col">
                    <p>Designação do ano lectivo<input type="text" class="form-control" readonly="true" value=" " name="" disabled></p>
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


            <div class="row">
                <div class="col-6">
                    <input type="number" class="form-control" placeholder=" Número máximo de alunos nas turmas" min="0" name="" oninput="this.className = ''" required>
                </div>
    
                <div class="col-6">
                    <input type="number" class="form-control" placeholder=" Número máximo de salas" min="0" name="" oninput="this.className = ''" required>
                </div>
            </div>
        </div>

        <div class="tab">
          <h2 class="text-uppercase text-center my-3 color-blue-principal">sobre os trimestres</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>
          
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
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">manhã</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>
          
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
                    <p>Duração de cada tempo (em minutos)<input type="number" class="form-control" min="0" placeholder="Ex:50" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" class="form-control" min="0" placeholder="Ex:5" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" class="form-control" min="0" placeholder="Ex:15" name="" oninput="this.className = ''" required></p>
                </div>
            </div>
        </div>

        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">tarde</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>
          
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
                    <p>Duração de cada tempo (em minutos)<input type="number" class="form-control" min="0" placeholder="Ex:50" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" class="form-control" min="0" placeholder="Ex:5" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" class="form-control" min="0" placeholder="Ex:15" name="" oninput="this.className = ''" required></p>
                </div>
            </div>
        </div>
        
        <div class="tab">
        <h2 class="text-uppercase text-center my-3 color-blue-principal">noite</h2>
          <h6 class="text-uppercase text-center my-4 color-blue-principal">preencha atentamente os campos abaixo.</h6>
          
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
                    <p>Duração de cada tempo (em minutos)<input type="number" class="form-control" min="0" placeholder="Ex:50" name="" oninput="this.className = ''" required></p>
                </div>

                <div class="col">
                    <p>Duração do intervalo menor (em minutos)<input type="number" class="form-control" min="0" placeholder="Ex:5" name="" oninput="this.className = ''" required></p>
                </div>
            </div>

            <div class="row" >
                <div class="col-6">
                    <p>Duração do intervalo maior (em minutos)<input type="number" class="form-control" min="0" placeholder="Ex:15" name="" oninput="this.className = ''" required></p>
                </div>
            </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn btn-danger" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn btn-success our-green-bg" id="nextBtn" onclick="nextPrev(1)">Avançar</button>
          </div>
        </div>
      </form>


    </main>
@endsection