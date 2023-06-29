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

        <div class="col-lg-3" >
          <div style="background-color: #96abce; border-radius: 10px; padding: 10px;">
            <span class="ano-l" style="font-size: 16px; font-weight: 700;"><strong>2022 - 2023</strong> | </span><span class="trimestre" style="font-size: 16px;">IIIº Trimestre</span>
                
          </div>
        </div>
        
        <div class="col-lg-2">
          <span class="breadcrumb">
            <select class="btn-sel form-select" style="padding: 10px;">
              <option selected>2022 - 2023</option>
              <option value="2021-2022">2021 - 2022</option>
            </select>
          </span>      
        </div>
      </div>
    </div>
	  
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6 mt-4">
          
            <div class="figura-card">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span class="total">500</span>
                <p>INSCRITOS</p>
              </div>

              <div class="card-legenda">
                <ul>
                  <li>T.I: 23</li>
                  <li>D.P: 100</li>
                  <li>T.E.I.E: 50</li>
                  <li>E.T: 122</li>
                </ul>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 mt-4">

            <div class="figura-card">
              <div class="count-box">
                <i class="bi bi-person"></i>
                <span class="total">500</span>
                <p>ADMITIDOS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  <li>T.I: 200</li>
                  <li>D.P: 200</li>
                  <li>T.E.I.E: 50</li>
                  <li>E.T: 122</li>
                </ul>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 mt-4">

            <div class="figura-card">
              <div class="count-box">
                <i class="bi bi-check2-square"></i>
                <span class="total">500</span>
                <p>NÃO ADMITIDOS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  <li>T.I: 300</li>
                  <li>D.P: 200</li>
                  <li>T.E.I.E: 150</li>
                  <li>E.T: 122</li>
                </ul>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 mt-4">

            <div class="figura-card">
              <div class="count-box">
                <i class="bi bi-clipboard"></i>
                <span class="total">500</span>
                <p>MATRICULADOS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  <li>T.I: 200</li>
                  <li>D.P: 150</li>
                  <li>T.E.I.E: 100</li>
                  <li>E.T: 132</li>
                </ul>
              </div>
            </div>

          </div>
          
          <div class="col-lg-3 col-md-6 mt-5">

            <div class="figura-card">
              <div class="count-box">
                <i class="bi bi-arrow-90deg-down"></i>
                <span class="total">500</span>
                <p>PROFESSORES</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  <li>T.I: 63</li>
                  <li>D.P: 50</li>
                  <li>T.E.I.E: 50</li>
                  <li>E.T: 70</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5">

            <div class="figura-card">
              <div class="count-box">
                <i class="bi bi-person-check"></i>
                <span class="total">500</span>
                <p>TURMAS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  <li>T.I: 20</li>
                  <li>D.P: 20</li>
                  <li>T.E.I.E: 16</li>
                  <li>E.T: 10</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5">

            <div class="figura-card">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span class="total">500</span>
                <p>VAGAS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  <li>T.I: 200</li>
                  <li>D.P: 100</li>
                  <li>T.E.I.E: 300</li>
                  <li>E.T: 200</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span class="total">500</span>
              <p>CURSOS</p>
            </div>
          </div>
          
                        
        </div>

      </div>
    </section><!-- Termina seccao do dashboard -->
    
    <br><br>
    
    <div class="row">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Cargos de Usarios </h5>

            <!-- inicio grafico de consulta de usuarios -->
            <div id="radialBarChart"></div>
            
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#radialBarChart"), {
                  series: [{{$cargoTotal}}],
                  chart: {
                    height: 350,
                    type: 'radialBar',
                    toolbar: {
                      show: true
                    }
                  },
                  plotOptions: {
                    radialBar: {
                      dataLabels: {
                        name: {
                          fontSize: '22px',
                        },
                        value: {
                          fontSize: '16px',
                        },
                        total: {
                          show: true,
                          label: 'Total',
                          formatter: function(w) {
                            // By default this function returns the average of all series. The below is just an example to show the use of custom formatter function
                            return {{$totalUs}}
                          }
                        }
                      }
                    }
                  },
                  labels: [{!!$cargoNome!!}],
                }).render();
              });
            </script>
            <!-- Fim grafico de consulta de usuarios -->

          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Alunos por ano</h5>
  
            <!-- inicio grafico de consulta -->
            <div id="lineChart"></div>
  
            <script>
              document.addEventListener("DOMContentLoaded", () => {
                new ApexCharts(document.querySelector("#lineChart"), {
                  series: [{
                    name: "{{$titulo}}",
                    data: [{{$alunoTotal}}]
                  }],
                  chart: {
                    height: 350,
                    type: 'line',
                    zoom: {
                      enabled: false
                    }
                  },
                  dataLabels: {
                    enabled: false
                  },
                  stroke: {
                    curve: 'straight'
                  },
                  grid: {
                    row: {
                      colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
                      opacity: 0.5
                    },
                  },
                  xaxis: {
                    categories: [{{$alunoAno}}],
                  }
                }).render();
              });
            </script>
            <!-- Fim grafico de consulta -->
  
          </div>
        </div>
      </div>
    </div>

    <div class="row">

      <!-- Coluna da esquerda -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Card Alunos -->
          <div class="col-lg-12">

            <div class="card info-card">

              <div class="card-body">
                <h5 class="card-title">Alunos <span>| 2022 - 2023</span></h5>
                <table class="table table-striped">
                  <thead>
                    <tr style="text-transform: uppercase;">
                      <th scope="col">Cursos</th>
                      <th scope="col">Manhã</th>
                      <th scope="col">Tarde</th>
                      <th scope="col">Noite</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span>Técnico de Informática</span></td>
                      <td>64</td>
                      <td>90</td>
                      <td>48</td>
                    </tr>
                    <tr>
                      <td><span>Desenhador Projetista</span></td>
                      <td>79</td>
                      <td>41</td>
                      <td>39</td>
                    </tr>
                    <tr>
                      <td><span>Técnico de Energia e Instalações Electricas</span></td>
                      <td>79</td>
                      <td>41</td>
                      <td>39</td>
                    </tr>
                    <tr>
                      <td><span>Electronica e Telecomunicação</span></td>
                      <td>79</td>
                      <td>41</td>
                      <td>39</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>

          </div><!-- Fim Card Alunos -->

          <!-- Card Turmas -->
          <div class="col-lg-12">

            <div class="card info-card">

              <div class="card-body">
                <h5 class="card-title">Turmas <span>| 2022 - 2023</span></h5>
                <table class="table table-striped">
                  <thead>
                    <tr style="text-transform: uppercase;">
                      <th scope="col">Cursos</th>
                      <th scope="col">Manhã</th>
                      <th scope="col">Tarde</th>
                      <th scope="col">Noite</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span>Técnico de Informática</span></td>
                      <td>8</td>
                      <td>6</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td><span>Desenhador Projetista</span></td>
                      <td>6</td>
                      <td>8</td>
                      <td>6</td>
                    </tr>
                    <tr>
                      <td><span>Técnico de Energia e Instalações Electricas</span></td>
                      <td>6</td>
                      <td>5</td>
                      <td>5</td>
                    </tr>
                    <tr>
                      <td><span>Electronica e Telecomunicação</span></td>
                      <td>3</td>
                      <td>4</td>
                      <td>3</td>
                    </tr>
                  </tbody>
                </table>

              </div>
            </div>

          </div><!-- Fim Card Turmas -->

        </div>
      </div><!-- Fim Coluna da esquerda -->

      <!-- Coluna da direita -->
      <div class="col-lg-4">
      
        <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
              Mensagem importante!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <!-- Card comunicado -->
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Hoje <span>| 13h:02</span></h5>

            <div class="activity" style="text-align: justify;">

              <h5 class="card-title" style="text-align: center;">Comunicado</h5>

               <p>Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado-nav Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicadoAqui o Texto do comunicado v Aqui o Texto do comunicado Aqui o Texto do comunicado</p> 
            </div>

          </div>
        </div><!-- Fim Card comunicado -->

      </div><!-- Fim Coluna da direita -->

    </div>    
    <br><br><br>
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

          <div class="col-lg-3" >
            <div style="background-color: #96abce; border-radius: 10px; padding: 10px;">
              <span class="ano-l" style="font-size: 16px; font-weight: 700;"><strong>2022 - 2023</strong> | </span><span class="trimestre" style="font-size: 16px;">IIIº Trimestre</span>
                  
            </div>
          </div>
          
          <div class="col-lg-2">
            <span class="breadcrumb">
              <select class="btn-sel form-select" style="padding: 10px;">
                <option selected>2022 - 2023</option>
                <option value="2021-2022">2021 - 2022</option>
              </select>
            </span>      
          </div>
        </div>
      </div>
	  
      <section id="counts" class="counts">
        <div class="container">

          <div class="row" data-aos="fade-up">

            <div class="col-lg-3 col-md-6 mt-4">
            
              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-people"></i>
                  <span class="total">472</span>
                  <p>INSCRITOS</p>
                </div>

                <div class="card-legenda">
                  <ul>
                    <li>T.I: 200</li>
                    <li>D.P: 100</li>
                    <li>T.E.I.E: 50</li>
                    <li>E.T: 122</li>
                  </ul>
                </div>
              </div>

            </div>

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-person"></i>
                  <span class="total">572</span>
                  <p>ADMITIDOS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 200</li>
                    <li>D.P: 200</li>
                    <li>T.E.I.E: 50</li>
                    <li>E.T: 122</li>
                  </ul>
                </div>
              </div>

            </div>

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-check2-square"></i>
                  <span class="total">772</span>
                  <p>NÃO ADMITIDOS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 300</li>
                    <li>D.P: 200</li>
                    <li>T.E.I.E: 150</li>
                    <li>E.T: 122</li>
                  </ul>
                </div>
              </div>

            </div>

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-clipboard"></i>
                  <span class="total">562</span>
                  <p>MATRICULADOS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 200</li>
                    <li>D.P: 150</li>
                    <li>T.E.I.E: 100</li>
                    <li>E.T: 132</li>
                  </ul>
                </div>
              </div>

            </div>
            
            <div class="col-lg-3 col-md-6 mt-5">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-arrow-90deg-down"></i>
                  <span class="total">233</span>
                  <p>PROFESSORES</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 63</li>
                    <li>D.P: 50</li>
                    <li>T.E.I.E: 50</li>
                    <li>E.T: 70</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-person-check"></i>
                  <span class="total">66</span>
                  <p>TURMAS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 20</li>
                    <li>D.P: 20</li>
                    <li>T.E.I.E: 16</li>
                    <li>E.T: 10</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-people"></i>
                  <span class="total">800</span>
                  <p>VAGAS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 200</li>
                    <li>D.P: 100</li>
                    <li>T.E.I.E: 300</li>
                    <li>E.T: 200</li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 mt-5">
              <div class="count-box">
                <i class="bi bi-people"></i>
                <span class="total">4</span>
                <p>CURSOS</p>
              </div>
            </div>
            
                          
          </div>

        </div>
      </section><!-- Termina seccao do dashboard -->

      <br><br>

      <div class="row">

        <!-- Coluna esquerda -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Card Alunos -->
            <div class="col-lg-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Alunos <span>| 2022 - 2023</span></h5>
                  <table class="table table-striped">
                    <thead>
                      <tr style="text-transform: uppercase;">
                        <th scope="col">Cursos</th>
                        <th scope="col">Manhã</th>
                        <th scope="col">Tarde</th>
                        <th scope="col">Noite</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span>Técnico de Informática</span></td>
                        <td>64</td>
                        <td>90</td>
                        <td>48</td>
                      </tr>
                      <tr>
                        <td><span>Desenhador Projetista</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                      <tr>
                        <td><span>Técnico de Energia e Instalações Electricas</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                      <tr>
                        <td><span>Electronica e Telecomunicação</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

            </div><!-- Fim Card Alunos -->

            <!-- Card Turmas -->
            <div class="col-lg-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Turmas <span>| 2022 - 2023</span></h5>
                  <table class="table table-striped">
                    <thead>
                      <tr style="text-transform: uppercase;">
                        <th scope="col">Cursos</th>
                        <th scope="col">Manhã</th>
                        <th scope="col">Tarde</th>
                        <th scope="col">Noite</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span>Técnico de Informática</span></td>
                        <td>8</td>
                        <td>6</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td><span>Desenhador Projetista</span></td>
                        <td>6</td>
                        <td>8</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td><span>Técnico de Energia e Instalações Electricas</span></td>
                        <td>6</td>
                        <td>5</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td><span>Electronica e Telecomunicação</span></td>
                        <td>3</td>
                        <td>4</td>
                        <td>3</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

            </div><!-- Fim Card Turmas -->

          </div>
        </div><!-- Fim Coluna da esquerda -->

        <!-- Coluna da direita -->
        <div class="col-lg-4">
        
          <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                Mensagem importante!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <!-- Card comunicado -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hoje <span>| 13h:02</span></h5>

              <div class="activity" style="text-align: justify;">

                <h5 class="card-title" style="text-align: center;">Comunicado</h5>

                <p>Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado-nav Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicadoAqui o Texto do comunicado v Aqui o Texto do comunicado Aqui o Texto do comunicado</p> 
              </div>

            </div>
          </div><!-- Fim Card comunicado -->

        </div><!-- Fim Coluna da direita -->

      </div>    
      <br><br><br>
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

          <div class="col-lg-3" >
            <div style="background-color: #96abce; border-radius: 10px; padding: 10px;">
              <span class="ano-l" style="font-size: 16px; font-weight: 700;"><strong>2022 - 2023</strong> | </span><span class="trimestre" style="font-size: 16px;">IIIº Trimestre</span>
                  
            </div>
          </div>
        
          <div class="col-lg-2">
            <span class="breadcrumb">
              <select class="btn-sel form-select" style="padding: 10px;">
                <option selected>2022 - 2023</option>
                <option value="2021-2022">2021 - 2022</option>
              </select>
            </span>      
          </div>
        </div>
      </div>
	  
      <section id="counts" class="counts">
        <div class="container">

          <div class="row" data-aos="fade-up">

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-clipboard"></i>
                  <span class="total">562</span>
                  <p>MATRICULADOS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 200</li>
                    <li>D.P: 150</li>
                    <li>T.E.I.E: 100</li>
                    <li>E.T: 132</li>
                  </ul>
                </div>
              </div>

            </div>
            

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-person-check"></i>
                  <span class="total">66</span>
                  <p>TURMAS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 20</li>
                    <li>D.P: 20</li>
                    <li>T.E.I.E: 16</li>
                    <li>E.T: 10</li>
                  </ul>
                </div>
              </div>
            </div>
            
                          
          </div>

        </div>
      </section><!-- Termina seccao do dashboard -->

      <br><br>

      <div class="row">

        <!-- Coluna da esquerda -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Card Alunos -->
            <div class="col-lg-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Alunos <span>| 2022 - 2023</span></h5>
                  <table class="table table-striped">
                    <thead>
                      <tr style="text-transform: uppercase;">
                        <th scope="col">Cursos</th>
                        <th scope="col">Manhã</th>
                        <th scope="col">Tarde</th>
                        <th scope="col">Noite</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span>Técnico de Informática</span></td>
                        <td>64</td>
                        <td>90</td>
                        <td>48</td>
                      </tr>
                      <tr>
                        <td><span>Desenhador Projetista</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                      <tr>
                        <td><span>Técnico de Energia e Instalações Electricas</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                      <tr>
                        <td><span>Electronica e Telecomunicação</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

            </div><!-- Fim Card Alunos -->

            <!-- Card Turmas -->
            <div class="col-lg-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Turmas <span>| 2022 - 2023</span></h5>
                  <table class="table table-striped">
                    <thead>
                      <tr style="text-transform: uppercase;">
                        <th scope="col">Cursos</th>
                        <th scope="col">Manhã</th>
                        <th scope="col">Tarde</th>
                        <th scope="col">Noite</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span>Técnico de Informática</span></td>
                        <td>8</td>
                        <td>6</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td><span>Desenhador Projetista</span></td>
                        <td>6</td>
                        <td>8</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td><span>Técnico de Energia e Instalações Electricas</span></td>
                        <td>6</td>
                        <td>5</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td><span>Electronica e Telecomunicação</span></td>
                        <td>3</td>
                        <td>4</td>
                        <td>3</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

            </div><!-- Fim Card Turmas -->

          </div>
        </div><!-- Fim Coluna da esquerda -->

        <!-- Coluna da direita -->
        <div class="col-lg-4">
        
          <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                Mensagem importante!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <!-- Card comunicado -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hoje <span>| 13h:02</span></h5>

              <div class="activity" style="text-align: justify;">

                <h5 class="card-title" style="text-align: center;">Comunicado</h5>

                <p>Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado-nav Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicadoAqui o Texto do comunicado v Aqui o Texto do comunicado Aqui o Texto do comunicado</p> 
              </div>

            </div>
          </div><!-- Fim Card comunicado -->

        </div><!-- Fim Coluna da direita -->

      </div>    
      <br><br><br>
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

          <div class="col-lg-3" >
            <div style="background-color: #96abce; border-radius: 10px; padding: 10px;">
              <span class="ano-l" style="font-size: 16px; font-weight: 700;"><strong>2022 - 2023</strong> | </span><span class="trimestre" style="font-size: 16px;">IIIº Trimestre</span>
                  
            </div>
          </div>
        
          <div class="col-lg-2">
            <span class="breadcrumb">
              <select class="btn-sel form-select" style="padding: 10px;">
                <option selected>2022 - 2023</option>
                <option value="2021-2022">2021 - 2022</option>
              </select>
            </span>      
          </div>
        </div>
      </div>
	  
      <section id="counts" class="counts">
        <div class="container">

          <div class="row" data-aos="fade-up">

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-clipboard"></i>
                  <span class="total">562</span>
                  <p>MATRICULADOS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 200</li>
                    <li>D.P: 150</li>
                    <li>T.E.I.E: 100</li>
                    <li>E.T: 132</li>
                  </ul>
                </div>
              </div>

            </div>
            

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-person-check"></i>
                  <span class="total">66</span>
                  <p>TURMAS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 20</li>
                    <li>D.P: 20</li>
                    <li>T.E.I.E: 16</li>
                    <li>E.T: 10</li>
                  </ul>
                </div>
              </div>
            </div>
            
                          
          </div>

        </div>
      </section><!-- Termina seccao do dashboard -->

      <br><br>

      <div class="row">

        <!-- Coluna da esquerda -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Card Alunos -->
            <div class="col-lg-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Alunos <span>| 2022 - 2023</span></h5>
                  <table class="table table-striped">
                    <thead>
                      <tr style="text-transform: uppercase;">
                        <th scope="col">Cursos</th>
                        <th scope="col">Manhã</th>
                        <th scope="col">Tarde</th>
                        <th scope="col">Noite</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span>Técnico de Informática</span></td>
                        <td>64</td>
                        <td>90</td>
                        <td>48</td>
                      </tr>
                      <tr>
                        <td><span>Desenhador Projetista</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                      <tr>
                        <td><span>Técnico de Energia e Instalações Electricas</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                      <tr>
                        <td><span>Electronica e Telecomunicação</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

            </div><!-- Fim Card Alunos -->

            <!-- Card Turmas -->
            <div class="col-lg-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Turmas <span>| 2022 - 2023</span></h5>
                  <table class="table table-striped">
                    <thead>
                      <tr style="text-transform: uppercase;">
                        <th scope="col">Cursos</th>
                        <th scope="col">Manhã</th>
                        <th scope="col">Tarde</th>
                        <th scope="col">Noite</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span>Técnico de Informática</span></td>
                        <td>8</td>
                        <td>6</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td><span>Desenhador Projetista</span></td>
                        <td>6</td>
                        <td>8</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td><span>Técnico de Energia e Instalações Electricas</span></td>
                        <td>6</td>
                        <td>5</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td><span>Electronica e Telecomunicação</span></td>
                        <td>3</td>
                        <td>4</td>
                        <td>3</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

            </div><!-- Fim Card Turmas -->

          </div>
        </div><!-- Fim Coluna da esquerda -->

        <!-- Coluna da direita -->
        <div class="col-lg-4">
        
          <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                Mensagem importante!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <!-- Card comunicado -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hoje <span>| 13h:02</span></h5>

              <div class="activity" style="text-align: justify;">

                <h5 class="card-title" style="text-align: center;">Comunicado</h5>

                <p>Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado-nav Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicadoAqui o Texto do comunicado v Aqui o Texto do comunicado Aqui o Texto do comunicado</p> 
              </div>

            </div>
          </div><!-- Fim Card comunicado -->

        </div><!-- Fim Coluna da direita -->

      </div>    
      <br><br><br>
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

          <div class="col-lg-3" >
            <div style="background-color: #96abce; border-radius: 10px; padding: 10px;">
              <span class="ano-l" style="font-size: 16px; font-weight: 700;"><strong>2022 - 2023</strong> | </span><span class="trimestre" style="font-size: 16px;">IIIº Trimestre</span>
                  
            </div>
          </div>
        
          <div class="col-lg-2">
            <span class="breadcrumb">
              <select class="btn-sel form-select" style="padding: 10px;">
                <option selected>2022 - 2023</option>
                <option value="2021-2022">2021 - 2022</option>
              </select>
            </span>      
          </div>
        </div>
      </div>
	  
      <section id="counts" class="counts">
        <div class="container">

          <div class="row" data-aos="fade-up">

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-person-check"></i>
                  <span class="total">66</span>
                  <p>TURMAS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 20</li>
                    <li>D.P: 20</li>
                    <li>T.E.I.E: 16</li>
                    <li>E.T: 10</li>
                  </ul>
                </div>
              </div>
            </div>
            
                          
          </div>

        </div>
      </section><!-- Termina seccao do dashboard -->

      <br><br>

      <div class="row">

        <!-- Coluna da esquerda -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Card Turmas -->
            <div class="col-lg-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Turmas <span>| 2022 - 2023</span></h5>
                  <table class="table table-striped">
                    <thead>
                      <tr style="text-transform: uppercase;">
                        <th scope="col">Cursos</th>
                        <th scope="col">Manhã</th>
                        <th scope="col">Tarde</th>
                        <th scope="col">Noite</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span>Técnico de Informática</span></td>
                        <td>8</td>
                        <td>6</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td><span>Desenhador Projetista</span></td>
                        <td>6</td>
                        <td>8</td>
                        <td>6</td>
                      </tr>
                      <tr>
                        <td><span>Técnico de Energia e Instalações Electricas</span></td>
                        <td>6</td>
                        <td>5</td>
                        <td>5</td>
                      </tr>
                      <tr>
                        <td><span>Electronica e Telecomunicação</span></td>
                        <td>3</td>
                        <td>4</td>
                        <td>3</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

            </div><!-- Fim Card Turmas -->

          </div>
        </div><!-- Fim Coluna da esquerda -->

        <!-- Coluna da direita -->
        <div class="col-lg-4">
        
          <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                Mensagem importante!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <!-- Card comunicado -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hoje <span>| 13h:02</span></h5>

              <div class="activity" style="text-align: justify;">

                <h5 class="card-title" style="text-align: center;">Comunicado</h5>

                <p>Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado-nav Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicadoAqui o Texto do comunicado v Aqui o Texto do comunicado Aqui o Texto do comunicado</p> 
              </div>

            </div>
          </div><!-- Fim Card comunicado -->

        </div><!-- Fim Coluna da direita -->

      </div>    
      <br><br><br>
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
            <div class="col-lg-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Calendário de Provas <span>| I10AM</span></h5>

                  Ainda não esta em fase de provas

                </div>
              </div>

            </div><!-- Fim do Card Calendario de prova -->

            <!-- Card Horaio de aula -->
            <div class="col-lg-12">
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

          <div class="col-lg-3" >
            <div style="background-color: #96abce; border-radius: 10px; padding: 10px;">
              <span class="ano-l" style="font-size: 16px; font-weight: 700;"><strong>2022 - 2023</strong> | </span><span class="trimestre" style="font-size: 16px;">IIIº Trimestre</span>
                  
            </div>
          </div>
        
          <div class="col-lg-2">
            <span class="breadcrumb">
              <select class="btn-sel form-select" style="padding: 10px;">
                <option selected>2022 - 2023</option>
                <option value="2021-2022">2021 - 2022</option>
              </select>
            </span>      
          </div>
        </div>
      </div>
	  
      <section id="counts" class="counts">
        <div class="container">

          <div class="row" data-aos="fade-up">

            <div class="col-lg-3 col-md-6 mt-4">
            
              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-people"></i>
                  <span class="total">472</span>
                  <p>INSCRITOS</p>
                </div>

                <div class="card-legenda">
                  <ul>
                    <li>T.I: 200</li>
                    <li>D.P: 100</li>
                    <li>T.E.I.E: 50</li>
                    <li>E.T: 122</li>
                  </ul>
                </div>
              </div>

            </div>

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-person"></i>
                  <span class="total">572</span>
                  <p>ADMITIDOS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 200</li>
                    <li>D.P: 200</li>
                    <li>T.E.I.E: 50</li>
                    <li>E.T: 122</li>
                  </ul>
                </div>
              </div>

            </div>

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-check2-square"></i>
                  <span class="total">772</span>
                  <p>NÃO ADMITIDOS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 300</li>
                    <li>D.P: 200</li>
                    <li>T.E.I.E: 150</li>
                    <li>E.T: 122</li>
                  </ul>
                </div>
              </div>

            </div>
                          
          </div>

        </div>
      </section><!-- Termina seccao do dashboard -->

      <br><br>

      <div class="row">

        <!-- Coluna da esquerda -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Card Alunos -->
            <div class="col-lg-12">
              <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                  Mensagem importante!
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>

              <!-- Card comunicado -->
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Hoje <span>| 13h:02</span></h5>

                  <div class="activity" style="text-align: justify;">

                    <h5 class="card-title" style="text-align: center;">Comunicado</h5>

                    <p>Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado-nav Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicadoAqui o Texto do comunicado v Aqui o Texto do comunicado Aqui o Texto do comunicado</p> 
                  </div>

                </div>
              </div><!-- Fim Card comunicado -->
            </div><!-- Fim Card Alunos -->

          </div>
        </div><!-- Fim Coluna da esquerda -->

      </div>    
      <br><br><br>
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

          <div class="col-lg-3" >
            <div style="background-color: #96abce; border-radius: 10px; padding: 10px;">
              <span class="ano-l" style="font-size: 16px; font-weight: 700;"><strong>2022 - 2023</strong> | </span><span class="trimestre" style="font-size: 16px;">IIIº Trimestre</span>
                  
            </div>
          </div>
        
          <div class="col-lg-2">
            <span class="breadcrumb">
              <select class="btn-sel form-select" style="padding: 10px;">
                <option selected>2022 - 2023</option>
                <option value="2021-2022">2021 - 2022</option>
              </select>
            </span>      
          </div>
        </div>
      </div>
	  
      <section id="counts" class="counts">
        <div class="container">

          <div class="row" data-aos="fade-up">

            <div class="col-lg-3 col-md-6 mt-4">

              <div class="figura-card">
                <div class="count-box">
                  <i class="bi bi-clipboard"></i>
                  <span class="total">562</span>
                  <p>MATRICULADOS</p>
                </div>
                
                <div class="card-legenda">
                  <ul>
                    <li>T.I: 200</li>
                    <li>D.P: 150</li>
                    <li>T.E.I.E: 100</li>
                    <li>E.T: 132</li>
                  </ul>
                </div>
              </div>

            </div>            
                          
          </div>

        </div>
      </section><!-- Termina seccao do dashboard -->

      <br><br>

      <div class="row">

        <!-- Coluna da esquerda -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Card Alunos -->
            <div class="col-lg-12">

              <div class="card info-card">

                <div class="card-body">
                  <h5 class="card-title">Alunos <span>| 2022 - 2023</span></h5>
                  <table class="table table-striped">
                    <thead>
                      <tr style="text-transform: uppercase;">
                        <th scope="col">Cursos</th>
                        <th scope="col">Manhã</th>
                        <th scope="col">Tarde</th>
                        <th scope="col">Noite</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><span>Técnico de Informática</span></td>
                        <td>64</td>
                        <td>90</td>
                        <td>48</td>
                      </tr>
                      <tr>
                        <td><span>Desenhador Projetista</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                      <tr>
                        <td><span>Técnico de Energia e Instalações Electricas</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                      <tr>
                        <td><span>Electronica e Telecomunicação</span></td>
                        <td>79</td>
                        <td>41</td>
                        <td>39</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>

            </div><!-- Fim Card Alunos -->

          </div>
        </div><!-- Fim Coluna da esquerda -->

        <!-- Coluna da direita -->
        <div class="col-lg-4">
        
          <div class="alert alert-warning bg-warning border-0 alert-dismissible fade show" role="alert">
                Mensagem importante!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          <!-- Card comunicado -->
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Hoje <span>| 13h:02</span></h5>

              <div class="activity" style="text-align: justify;">

                <h5 class="card-title" style="text-align: center;">Comunicado</h5>

                <p>Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicado-nav Aqui o Texto do comunicado Aqui o Texto do comunicado Aqui o Texto do comunicadoAqui o Texto do comunicado v Aqui o Texto do comunicado Aqui o Texto do comunicado</p> 
              </div>

            </div>
          </div><!-- Fim Card comunicado -->

        </div><!-- Fim Coluna da direita -->

      </div>    
      <br><br><br>    
    </div><!-- Fim da dashboard Usuario - Matr --> 
  @else

  @endif
</main>
@endsection












