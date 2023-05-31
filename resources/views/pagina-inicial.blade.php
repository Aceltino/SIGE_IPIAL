@extends('layouts.main')

@section('title', 'Página inicial')



@section('conteudo')
<main id="main" class="main">
    <!-- /	Titulo-->  	
     <div class="pagetitle">
      <div class="row">
        <div class="col">
          <h1>DASHBOARD</h1>      
        </div>
        
        <div class="col-lg-2">
          <span class="breadcrumb">
            <select class="btn-sel form-select">
              <option selected>2022 - 2023</option>
              <option value="2021-2022">2021 - 2022</option>
            </select>
          </span>      
        </div>
      </div>
    </div>

	<!-- /	seccao do dashboard-->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6 mt-4" >
            <div class="count-box" id="boxx">
              <i class="bi bi-people"></i>
              <span class="total">472</span>
              <p>INSCRITOS</p>
            </div>

            <div class="box" id="box">
                <ul class=" lista">

                  <li class="clista">
                    <span>Inscritos 10ª :</span>
                    <span>10</span>
                  </li>
                  <li class="clista">
                    <span>Inscritos 11ª :</span>
                    <span>10</span>
                  </li>
                  <li class="clista">
                    <span>Inscritos 12ª :</span>
                    <span>10</span>
                  </li>
                  <li class="clista">
                    <span>Inscritos 13ª :</span>
                    <span>10</span>
                  </li>
                </ul>
            </div>
          </div>



          <div class="col-lg-3 col-md-6 mt-4" >
            <div class="count-box" id="boxx1" >
              <i class="bi bi-person"></i>
              <span class="total">572</span>
              <p>ADMITIDOS</p>
            </div>
            <div class="box1" id="box1">
              <ul class=" lista">

                <li class="clista">
                  <span>Inscritos 10ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 11ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 12ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 13ª :</span>
                  <span>10</span>
                </li>
                

              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4">
            <div class="count-box" id="boxx2" >
              <i class="bi bi-check2-square"></i>
              <span class="total">772</span>
              <p>NÃO ADMITIDOS</p>
            </div>
            <div class="box2" id="box2">
              <ul class=" lista">

                <li class="clista">
                  <span>Inscritos 10ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 11ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 12ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 13ª :</span>
                  <span>10</span>
                </li>
                

              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4">
            <div class="count-box" id="boxx3">
              <i class="bi bi-clipboard"></i>
              <span class="total">562</span>
              <p>MATRICULADOS</p>
            </div>
            <div class="box3" id="box3">
              <ul class=" lista">

                <li class="clista">
                  <span>Inscritos 10ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 11ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 12ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 13ª :</span>
                  <span>10</span>
                </li>
                

              </ul>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box" id="boxx4">
              <i class="bi bi-arrow-90deg-down"></i>
              <span class="total">33</span>
              <p>PROFESSORES</p>
            </div>
            <div class="box4" id="box4">
              <ul class=" lista">

                <li class="clista">
                  <span>Inscritos 10ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 11ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 12ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 13ª :</span>
                  <span>10</span>
                </li>
                

              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box" id="boxx5">
              <i class="bi bi-person-check"></i>
              <span class="total">64</span>
              <p>TURMAS</p>
            </div>
            <div class="box5" id="box5">
              <ul class=" lista">

                <li class="clista">
                  <span>Inscritos 10ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 11ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 12ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 13ª :</span>
                  <span>10</span>
                </li>
                

              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box" id="boxx6">
              <i class="bi bi-people"></i>
              <span class="total">800</span>
              <p>VAGAS</p>
            </div>
            <div class=" box6" id="box6">
              <ul class=" lista">

                <li class="clista">
                  <span>Inscritos 10ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 11ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 12ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 13ª :</span>
                  <span>10</span>
                </li>
                

              </ul>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box" id="boxx7">
              <i class="bi bi-people"></i>
              <span class="total">3</span>
              <p>CURSOS</p>
            </div>
            <div class="box7" id="box7">
              <ul class=" lista">

                <li class="clista">
                  <span>Inscritos 10ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 11ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 12ª :</span>
                  <span>10</span>
                </li>
                <li class="clista">
                  <span>Inscritos 13ª :</span>
                  <span>10</span>
                </li>
                

              </ul>
            </div>

          </div>
          
                        
        </div>

      </div>
    </section><!-- Termina seccao do dashboard -->
	    
    <!-- /	Area do grafico-->

<div>
  <canvas id="grafico"></canvas>
</div>






<script>
  $(document).ready(function() {
  // Dados iniciais do gráfico
  var data = {
    labels: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho','Agosto', 'Setembro', 'Outubro','Novembro','Dezembro'],
    datasets: [{
      label: 'Assiduidade Escolar',
      data: [7,13,77,20,30,40,50,60,70,80,90,100],
      backgroundColor: 'rgba(54, 162, 235, 0.5)',
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth: 1
    }],
 
  };

  // Configurações do gráfico
  var options = {
    responsive: true,
    scales: {
      y: {
        min: 0,
        max: 100,
        ticks: {
          stepSize: 10,
            callback: function (value, index, values) {
              return value + '%'; // Personalize os rótulos como desejar
            }
          }
  }
    }
  };

  // Criação do gráfico
  var ctx = $('#grafico')
  var myChart = new Chart(ctx, {
    type: 'bar',
    data: data,
    options: options
  });
 
    // Redimensiona o gráfico quando a janela for redimensionada
    $(window).on('resize', function() {
    myChart.resize();
    });

});
</script>

    <!-- Termina Area do grafico -->
  
</main>
@endsection












