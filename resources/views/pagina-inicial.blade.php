@extends('layouts.main')

@section('title', 'Página inicial')


@section('conteudo')
<main id="main" class="main">
{{-- Administrador ou Subdirector Pedagogico ----- / Inicio do Administrador ou Subdirector Pedagogico --}}
@if(Auth::user()->cargo_usuario == "Administrador" || Auth::user()->cargo_usuario == "Subdirector")
  <div class="area-admin-subd">
    <!-- /	Titulo-->  	
     <div class="pagetitle">
      <div class="row">
        <div class="col">
          <h1>Página inicial</h1>      
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
  </div><!-- Fim da dashboard Admin e Subdireção -->
  
  {{-- DIRETOR GERAL ----- / Inicio do Diretor Geral --}}
  @elseif(Auth::user()->cargo_usuario == "Director")
    <div class="area-dgeral">
      <!-- /	Titulo-->  	
      <div class="pagetitle">
        <div class="row">
          <div class="col">
            <h1>Página inicial</h1>      
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
    </div><!-- Fim da dashboard Diretor Geral -->

  {{-- SECRETARIA PEDAGÓGICA -----   / Inicio de secretrio Pedagógico --}}
  @elseif(Auth::user()->cargo_usuario == "Secretaria")
    <div class="area-sec-peda">
      <!-- /	Titulo-->  	
      <div class="pagetitle">
        <div class="row">
          <div class="col">
            <h1>Página inicial</h1>      
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
            
            <div class="col-lg-3 col-md-6 mt-4">
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
    </div><!-- Fim da dashboard Secretaria Pedagogica -->

  {{-- COORDENADOR -----  /  Inicio de Coordenador de curso --}}
  @elseif(Auth::user()->cargo_usuario == "Coordenacao")    
    <div class="area-coordenador">
      <!-- /	Titulo-->  	
      <div class="pagetitle">
        <div class="row">
          <div class="col">
            <h1>Página inicial</h1>      
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
            
            <div class="col-lg-3 col-md-6 mt-4">
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
    </div><!-- Fim da dashboard Coordenador -->

  {{-- PROFESSOR ----- / Inicio de Professor --}}
  @elseif(Auth::user()->cargo_usuario == "Professor")
    <div class="area-prof">
      <!-- /	Titulo-->  	
      <div class="pagetitle">
        <div class="row">
          <div class="col">
            <h1>Página inicial</h1>      
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

            <div class="col-lg-3 col-md-6">
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
    </div><!-- Fim da dashboard Professor -->   
    
  {{-- ALUNO ----- / Inicio de Aluno --}}
  @elseif(Auth::user()->cargo_usuario == "Aluno")    
    <div class="area-aluno">
     	<!-- /	Titulo-->  	
    	<div class="pagetitle">
        <div class="row">
          <div class="col">
            <h1>Página inicial</h1>      
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

      <div class="row">
        <!-- Div assd, ano lect, calendario e horario /Lado esquerdo -->
        <div class="col-lg-8">
          
          <div class="row">

            <!-- Assiduidade -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card" style="box-shadow: none; border-top: 1px solid #ccc;">

                <div class="card-body">
                  <h5 class="card-title">Assiduidades</h5>

                  <div class="row">
                    <div class="col-lg-3">
                      <h6>5</h6>
                      <span class="text-muted small pt-2 ps-1" style="font-size: 12px;">Normais</span>
                    </div>

                    <div class="col-lg-4">
                      <h6>0</h6>
                      <span class="text-danger small pt-2 ps-1" style="font-size: 12px;">Vermelhas</span>
                    </div>

                    <div class="col-lg-5">
                      <h6>2</h6>
                      <span class="text-muted small pt-2 ps-1" style="font-size: 12px;">Por materias</span>
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Termina Assiduidade-->

            <!-- Anolectivo Trimestre -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card" style="box-shadow: none; border-top: 1px solid #ccc;">

                <div class="card-body">
                  <h5 class="card-title">Ano lectivo <span>| Trimestre</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="ps-3" style="border-right: 1px solid #ccc; padding-right: 7px;">
                      <h6 style="font-size: 37px;">2022-2023</h6>

                    </div>
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                       IIIº
                    </div>
                  </div>
                </div>

              </div>
            </div><!-- Termina Anolectivo Trimestre -->

            <!-- Card Calendario de prova-->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Calendário de Provas <span>| I10AM</span></h5>

                  Ainda não esta em fase de provas

                </div>
              </div>

            </div><!-- Fim do Card Calendario de prova -->

            <!-- Card Horaio de aula -->
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Horário <span>| I10AM</span></h5>

                  <div class="corpo-horario">
                    <div class="row">
                      <div class="col-sm-6">
                          <p><strong>Área de formação: </strong>Informática</p>
                      </div>
                      <div class="col-sm-6 d-flex justify-content-end">
                          <p><strong>Curso: </strong>Técnico de Informática</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-sm-12">
                          <p><strong>Horário da turma: I10AM</strong> (Regime Diurno) / 10ª Classe_2023-2024</p>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-lg-12">
                        <!-- /  Inicio da tabela do horário -->
                        <table class="table table-striped align-middle text-center" style="margin-top: 5px;">
                          <thead>
                              <tr>
                                  <th scope="col-sm-4" class="text-uppercase">Hora</th>
                                  <th scope="col-sm-2" class="text-uppercase">Tempo</th>
                                  <th scope="col-sm-2" class="text-uppercase">Segunda</th>
                                  <th scope="col-sm-2" class="text-uppercase">Terça</th>
                                  <th scope="col-sm-2" class="text-uppercase">Quarta</th>
                                  <th scope="col-sm-2" class="text-uppercase">Quinta</th>
                                  <th scope="col-sm-2" class="text-uppercase">Sexta</th>
                              </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <td scope="row">
                                      07:20 <br>
                                      08:05
                                  </td>
                                  <td>1º</td>
                                  <td>
                                      I10AM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10BM <br>
                                      TLP
                                  <td>
                                      I10CM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10DM <br>
                                      TLP
                                  <td>
                                      I11AM <br>
                                      TLP
                                  </td>
                              </tr>
                              
                              <tr>
                              <td scope="row">
                                      08:10 <br>
                                      08:55
                                  </td>
                                  <td>2º</td>
                                  <td>
                                      I10AM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10BM <br>
                                      TLP
                                  <td>
                                      I10CM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10DM <br>
                                      TLP
                                  <td>
                                      I11AM <br>
                                      TLP
                                  </td>
                              </tr>

                              <tr>
                              <td scope="row">
                                      09:00 <br>
                                      09:45
                                  </td>
                                  <td>3º</td>
                                  <td>
                                      I10AM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10BM <br>
                                      TLP
                                  <td>
                                      I10CM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10DM <br>
                                      TLP
                                  <td>
                                      I11AM <br>
                                      TLP
                                  </td>
                              </tr>

                              <tr>
                              <td scope="row">
                                      09:50 <br>
                                      10:35
                                  </td>
                                  <td>4º</td>
                                  <td>
                                      I10AM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10BM <br>
                                      TLP
                                  <td>
                                      I10CM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10DM <br>
                                      TLP
                                  <td>
                                      I11AM <br>
                                      TLP
                                  </td>
                              </tr>

                              <tr>
                              <td scope="row">
                                      10:40 <br>
                                      11:25
                                  </td>
                                  <td>5º</td>
                                  <td>
                                      I10AM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10BM <br>
                                      TLP
                                  <td>
                                      I10CM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10DM <br>
                                      TLP
                                  <td>
                                      I11AM <br>
                                      TLP
                                  </td>
                              </tr>

                              <tr>
                              <td scope="row">
                                      11:30 <br>
                                      12:15
                                  </td>
                                  <td>6º</td>
                                  <td>
                                      I10AM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10BM <br>
                                      TLP
                                  <td>
                                      I10CM <br>
                                      TLP
                                  </td>
                                  <td>
                                      I10DM <br>
                                      TLP
                                  <td>
                                      I11AM <br>
                                      TLP
                                  </td>
                              </tr>
                          </tbody>
                        </table>
                          <!-- Termina a tabela do horário -->
                      </div>
                    </div>

                    <!-- Início da tabela de observações -->
                    <table class="table border align-middle mt-4">
                      <thead>
                        <tr>
                            <th scope="col-sm-12" class="text-uppercase">Disciplinas</th>
                            <th scope="col-sm-12" class="text-uppercase">Nomes dos professores</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Língua Portuguesa (PORT)</td>
                          <td>Lucrécia Miguel</td>
                        </tr>
                        <tr>
                          <td>Língua Portuguesa (PORT)</td>
                          <td>Lucrécia Miguel</td>
                        </tr>
                        <tr>
                          <td>Língua Portuguesa (PORT)</td>
                          <td>Lucrécia Miguel</td>
                        </tr>
                        <tr>
                          <td>Matemática (MAT)</td>
                          <td>José Kombo</td>
                        </tr>
                        <tr>
                          <td>Matemática (MAT)</td>
                          <td>José Kombo</td>
                        </tr>
                        <tr>
                          <td>Matemática (MAT)</td>
                          <td>José Kombo</td>
                        </tr>
                        <tr>
                          <td>Sistemas de Exploração e Arquitectura de Computadores (SEAC)</td>
                          <td>Rosa António</td>
                        </tr>
                        <tr>
                          <td>Sistemas de Exploração e Arquitectura de Computadores (SEAC)</td>
                          <td>Rosa António</td>
                        </tr>
                        <tr>
                          <td>Sistemas de Exploração e Arquitectura de Computadores (SEAC)</td>
                          <td>Rosa António</td>
                        </tr>
                        <tr>
                          <td>Técnicas e Linguagens de Programação (TLP)</td>
                          <td>Sungo Afonso</td>
                        </tr>
                        <tr>
                          <td>Técnicas e Linguagens de Programação (TLP)</td>
                          <td>Sungo Afonso</td>
                        </tr>
                        <tr>
                          <td>Técnicas e Linguagens de Programação (TLP)</td>
                          <td>Sungo Afonso</td>
                        </tr>
                        <tr>
                          <td><strong>Delegado da Turma</strong></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td><strong>Director de Turma</strong></td>
                          <td>Sungo Afonso</td>
                        </tr>
                        <tr>
                          <td><strong>Coordenador de Área / Coordenador de Curso</strong></td>
                          <td><strong>Sivi Lando / Anatoli Lussati</strong></td>
                        </tr>
                      </tbody>
                    </table>
                    <!-- Termina a tabela de observações -->
                  </div>                  

                </div>

              </div>
            </div><!-- Card Horaio de aula -->

          </div>
        </div><!-- Fim Div assd, ano lect, calendario e horario /Lado esquerdo -->

        <!-- Div do Comunicado /Lado direito -->
        <div class="col-lg-4">
        
          <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                Mensagem importante!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <!-- Card do comunicado -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hoje <span>| 13h:02</span></h5>

              <div class="activity" style="text-align: justify;">

                <h5 class="card-title" style="text-align: center;">Titulo do Comunicado</h5>

                 <p>Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado-nav Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicadoAqui o Texto do comunicado v Aqui o Texto do comunicado Aqui o Texto do comunicado</p> 
              </div>

            </div>
          </div><!-- Fim do card do comunicado -->



        </div><!-- Div do Comunicado /Lado direito -->

      </div>
      
    </div><!-- Fim da dashboard Aluno --> 

  {{-- Usuario - Inscrição ----- / Inicio de Usuario - Inscrição --}}
  @elseif(Auth::user()->cargo_usuario == "insc_user")    
    <div class="area-use-inscri">
      <!-- /	Titulo-->  	
      <div class="pagetitle">
        <div class="row">
          <div class="col">
            <h1>Página inicial</h1>      
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
    </div><!-- Fim da dashboard Usuario - Inscrição --> 

  {{-- Usuario - Matricula ----- / Inicio de Usuario - Matricula --}}
  @elseif(Auth::user()->cargo_usuario == "matri_user")  
  <div class="area-use-matr">
      <!-- /	Titulo-->  	
      <div class="pagetitle">
        <div class="row">
          <div class="col">
            <h1>Página inicial</h1>      
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
    </div><!-- Fim da dashboard Usuario - Matr --> 
  @else

  @endif
</main>
@endsection












