@extends('layouts.main')

@section('title', 'Página inicial')


@section('conteudo')
<main id="main" class="main">
{{-- Administrador ou Subdirector Pedagogico ----- / Inicio do Administrador ou Subdirector Pedagogico --}}
{{--@if(Auth::user()->cargo_usuario == "Administrador" || Auth::user()->cargo_usuario == "Subdirector")--}}
  <div class="area-admin-subd">
    @if(Auth::user()->cargo_usuario != "Aluno")
    <!-- /	Titulo-->  	
    <div class="pagetitle pagetitle-escuro">
      <div class="row">
        <div class="col">
          <h1>Página inicial</h1>      
        </div>

        <div class="col-lg-3" >
          <div style="background-color: #96abce; border-radius: 10px; padding: 10px;">
            <span class="ano-l" style="font-size: 16px; font-weight: 700;"><strong>{{$anolectivoInicio}}</strong> | </span><span class="trimestre" style="font-size: 16px;">{{$trimestreInicio}} Trimestre</span>
                
          </div>
        </div>
      
      </div>
    </div>
    <section id="counts" class="counts counts-escuro">
      <div class="container">
        
        <div class="row" data-aos="fade-up">

        @if(Auth::user()->cargo_usuario == "insc_user")
        <div class="col-lg-3 col-md-6 mt-4">
          
            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-people"></i>
                
                @if ($data['Inscritos'] == 0)
                <span class="total">{{$data['Inscritos']}}</span>
                @else
                <span class="total">{{$TotalCandidatos}}</span>
                @endif
                <p>INSCRITOS</p>
              </div>

             

              <div class="card-legenda">
                <ul>
                  @if ($data['Inscritos'] == 0)
                  <li> Sem Alunos inscritos </li>
                  @else
                  @foreach ( $data['Inscritos'] as $dados )
                  <li>{{$dados['sigla']}} : {{$dados['candidatos']}} </li> 
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4">

            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-person"></i>
                <span class="total">{{$TotalAdmitidos}}</span>
                
                <p>ADMITIDOS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  @if ($data['Admitidos'] == 0)
                  <li> Sem Alunos Admitidos </li>
                  @else
                  @foreach ( $data['Admitidos'] as $dados )
                  <li>{{$dados['sigla']}} : {{$dados['candidatos']}} </li> 
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 mt-4">

            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-check2-square"></i>                
                <span class="total">{{$TotalNAdmitidos}}</span>
                <p>NÃO ADMITIDOS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  @if ($data['NAdmitidos'] == 0)
                  <li> Sem Alunos Não Admitidos </li>
                  @else
                  @foreach ( $data['NAdmitidos'] as $dados )
                  <li>{{$dados['sigla']}} : {{$dados['candidatos']}} </li> 
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>

          </div>
        @endif

        @if(Auth::user()->cargo_usuario == "matri_user")
        <div class="col-lg-3 col-md-6 mt-4">
          <div class="figura-card">
            <div class="count-box count-box-escuro">
              <i class="bi bi-clipboard"></i>
                <span class="total">{{$TotalMatriculados}}</span>
              <p>MATRICULADOS</p>
            </div>

            
            <div class="card-legenda">
              <ul>
                @if ($data['Matriculados'] == 0)
                <li> Sem Alunos Matriculados </li>
                @else
                @foreach ( $data['Matriculados'] as $dados )
                <li>{{$dados['sigla']}} : {{$dados['alunos']}} </li> 
                @endforeach
                @endif
              </ul>
            </div>
          </div>

        </div>
        @endif

        @if(Auth::user()->cargo_usuario != "Coordenacao" && Auth::user()->cargo_usuario != "Professor" && Auth::user()->cargo_usuario != "insc_user" && Auth::user()->cargo_usuario != "matri_user")
          <div class="col-lg-3 col-md-6 mt-4">
          
            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-people"></i>
                
                @if ($data['Inscritos'] == 0)
                <span class="total">{{$data['Inscritos']}}</span>
                @else
                <span class="total">{{$TotalCandidatos}}</span>
                @endif
                <p>INSCRITOS</p>
              </div>

             

              <div class="card-legenda">
                <ul>
                  @if ($data['Inscritos'] == 0)
                  <li> Sem Alunos inscritos </li>
                  @else
                  @foreach ( $data['Inscritos'] as $dados )
                  <li>{{$dados['sigla']}} : {{$dados['candidatos']}} </li> 
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4">

            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-person"></i>
                <span class="total">{{$TotalAdmitidos}}</span>
                
                <p>ADMITIDOS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  @if ($data['Admitidos'] == 0)
                  <li> Sem Alunos Admitidos </li>
                  @else
                  @foreach ( $data['Admitidos'] as $dados )
                  <li>{{$dados['sigla']}} : {{$dados['candidatos']}} </li> 
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 mt-4">

            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-check2-square"></i>                
                <span class="total">{{$TotalNAdmitidos}}</span>
                <p>NÃO ADMITIDOS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  @if ($data['NAdmitidos'] == 0)
                  <li> Sem Alunos Não Admitidos </li>
                  @else
                  @foreach ( $data['NAdmitidos'] as $dados )
                  <li>{{$dados['sigla']}} : {{$dados['candidatos']}} </li> 
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>

          </div>
          
          
          <div class="col-lg-3 col-md-6 mt-4">

            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-clipboard"></i>
                  <span class="total">{{$TotalMatriculados}}</span>
                <p>MATRICULADOS</p>
              </div>

              
              <div class="card-legenda">
                <ul>
                  @if ($data['Matriculados'] == 0)
                  <li> Sem Alunos Matriculados </li>
                  @else
                  @foreach ( $data['Matriculados'] as $dados )
                  <li>{{$dados['sigla']}} : {{$dados['alunos']}} </li> 
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>

          </div>

        @endif
          
          @if(Auth::user()->cargo_usuario != "Coordenacao" && Auth::user()->cargo_usuario != "Professor"  && Auth::user()->cargo_usuario != "insc_user" && Auth::user()->cargo_usuario != "matri_user")
          <div class="col-lg-3 col-md-6 mt-5">
            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-people"></i>
                <span class="total">{{$totalCursos}}</span>
                <p>CURSOS</p>
              </div>

              <div class="card-legenda">
                <ul>
                  @foreach($cusosInicio as $totalcurso)
                    <li>{{$totalcurso->sigla}}</li>
                  @endforeach
                  </ul>
              </div>

            </div>
          </div>
          @endif

          @if(Auth::user()->cargo_usuario != "insc_user" && Auth::user()->cargo_usuario != "matri_user")
          <div class="col-lg-3 col-md-6 mt-5">

            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-person"></i>
                @if ($data['TotalTurmasCurso'] == 0)
                <span class="total">{{$data['TotalTurmasCurso']}}</span>
                @else
                <span class="total">{{$TotalTurmas}}</span>
                @endif
                <p>TURMAS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  @if ($data['TotalTurmasCurso'] == 0)
                  <li> Sem Alunos Matriculados </li>
                  @else
                  @foreach ( $data['TotalTurmasCurso'] as $dados )
                  <li>{{$dados['curso']}} : {{$dados['turmas']}} </li> 
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>
          </div>
          @endif

          <!--<div class="col-lg-3 col-md-6 mt-5">

            <div class="figura-card">
              <div class="count-box count-box-escuro">
                <i class="bi bi-people"></i>
                @if ($data['Vagas'] == 0)
                <span class="total">{{$data['Vagas']}}</span>
                @else
                <span class="total">500</span>
                @endif
                <p>VAGAS</p>
              </div>
              
              <div class="card-legenda">
                <ul>
                  @if ($data['Vagas'] == 0)
                  <li> Sem Alunos Matriculados </li>
                  @else
                  @foreach ( $data['Vagas'] as $dados)
                  <li>{{$dados['sigla']}} : {{$dados['turno']}}  : {{$dados['totalVagas']}}  </li>
                  @endforeach
                  @endif
                </ul>
              </div>
            </div>
          </div>-->
          @if(Auth::user()->cargo_usuario != "Coordenacao" && Auth::user()->cargo_usuario != "Professor"  && Auth::user()->cargo_usuario != "insc_user" && Auth::user()->cargo_usuario != "matri_user")
          <div class="col-lg-3 col-md-6 mt-5">

            <!--<div class="figura-card">-->
              <div class="count-box count-box-escuro" style="cursor: pointer;">
                <i class="bi bi-arrow-90deg-down"></i>
                <span class="total">{{$TotalProfs}}</span>
                <p>PROFESSORES</p>
              </div>
              
              <!--<div class="card-legenda">
                <ul>
                  <li>T.I: 63</li>
                  <li>D.P: 50</li>
                  <li>T.E.I.E: 50</li>
                  <li>E.T: 70</li>
                </ul>
              </div>-->
            <!--</div>-->
          </div>
          @endif
                        
        </div>

      </div>
    </section><!-- Termina seccao do dashboard -->
    
    <br><br>

    <div class="row">
      <!-- Coluna da direita -->
      <div class="col-lg-8">
        @if($comunicados == "")
        <div class="card card-comincado-escuro">
            <div class="card-body">
              Aguarde aqui os comunicados!
            </div>
          </div><!-- Fim Card comunicado -->
        @else
          @foreach($comunicados as $comunicado)
            <!-- Card comunicado -->
            <div class="card card-comincado-escuro">
              <div class="card-body">
                <h5 class="card-title">Publicado em <span>| {{$comunicado->created_at}}</span></h5>

                <div class="activity" style="text-align: justify;">

                  <h5 class="card-title" style="text-align: center;">{{$comunicado->titulo_com}}</h5>

                  <p>{{$comunicado->conteudo_com}}</p> 
                  
                  
                  
                </div>

              </div>
            </div><!-- Fim Card comunicado -->
          @endforeach
          {{$comunicados->links()}}
          
        @endif

      </div><!-- Fim Coluna da direita -->
    </div>

    @if(Auth::user()->cargo_usuario == "Administrador")
    <div class="row">
      <div class="col-lg-8">
        <div class="card-grafico-escuro">
          <div class="card-body">
            <h5 class="card-title">{{$titulografAlunos}}</h5>
  
            @if($titulografAlunos == "")
            <h5 class="card-title">{{$titulografAlunos2}}</h5>
            <br>
            @else
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
            @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card-grafico-escuro">
          <div class="card-body">
            <h5 class="card-title">{{$titulografUsuarios}} </h5>
            @if($titulografUsuarios == "")
            <h5 class="card-title">{{$titulografUsuarios2}}</h5>
            <br>
            @else
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
                          label: 'Total de usuários',
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
            @endif
          </div>
        </div>
      </div>

    </div>
    @endif

    @elseif(Auth::user()->cargo_usuario == "Aluno")
    <div class="row">
      <!-- Coluna da esquerda -->
      <!-- Anolectivo Trimestre -->
      <div class="col-lg-4">
        <div class="card info-card" style="box-shadow: none; border-top: 1px solid #ccc;">

          <div class="card-body">
            <h5 class="card-title text-center">Ano lectivo <span>| Trimestre</span></h5>

            <div class="d-flex justify-content-center align-items-center">
              <div class="ps-3" style="border-right: 1px solid #ccc; padding-right: 7px;">
                <h6 style="font-size: 37px;">{{$anolectivoInicio}}</h6>

              </div>
              <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              {{$trimestreInicio}}
              </div>
            </div>
          </div>

        </div>
      </div><!-- Termina Anolectivo Trimestre -->
    
      
      <!-- Coluna do meio -->
      <!-- Assiduidade -->
      <div class="col-lg-4 col-md-6">
        <div class="card info-card" style="box-shadow: none; border-top: 1px solid #ccc;">

          <div class="card-body">
            <h5 class="card-title text-center">Controle de faltas</h5>

            <div class="row">
              <div class="col-lg-3 text-center">
                <h6>5</h6>
                <span class="text-muted small pt-2" style="font-size: 12px;">Normais</span>
              </div>

              <div class="col-lg-4 text-center">
                <h6 class="text-danger">0</h6>
                <span class="text-danger small pt-2" style="font-size: 12px;">Vermelhas</span>
              </div>

              <div class="col-lg-5 text-center">
                <h6>2</h6>
                <span class="text-muted small pt-2" style="font-size: 12px;">Por materiais</span>
              </div>
            </div>
          </div>

        </div>
      </div><!-- Termina Assiduidade-->

      <!-- Média -->
      <div class="col-lg-4 col-md-6">
        <div class="card info-card" style="box-shadow: none; border-top: 1px solid #ccc;">

          <div class="card-body">
            <h5 class="card-title text-center">Média</h5>

            <div class="row justify-content-center ">
              <div class="col-lg-3 text-center">
                <h6>17</h6>
                <span class="text-muted small pt-2" style="font-size: 12px;">Valores</span>
              </div>
            </div>
          </div>

        </div>
      </div><!-- Termina Média-->

      <!-- Informações básicas -->
      <div class="col-lg-4 col-md-4">
        <div class="card info-card" style="box-shadow: none; border-top: 1px solid #ccc;">

          <div class="card-body">
            <h5 class="card-title text-center">Informações pessoais</h5>

            <div class="row justify-content-center ">
              <div class="w-100 text-center">
                <p class="color-blue-principal fw-bold">Aceltino Kiaku Mateus Quianvo</p>

                <div class="d-flex justify-content-center">
                  <p class="color-blue-principal me-4">Nº Proc: <span class="fw-bold">35337</span></p>
                  <p class="color-blue-principal">Turma: <span class="fw-bold">I10BM</span></p>
                </div>
                <div class="d-flex justify-content-center">
                  <p class="color-blue-principal me-5">Sala: <span class="fw-bold">2</span></p>
                  <p class="color-blue-principal ms-5">Número: <span class="fw-bold">1</span></p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div><!-- Termina Informações básicas-->

      <!-- Informações básicas -->
      <div class="col-lg-4 col-md-4">
        <div class="card info-card" style="box-shadow: none; border-top: 1px solid #ccc;">

          <div class="card-body">
            <h5 class="card-title text-center">Informações do curso</h5>

            <div class="row justify-content-center ">
              <div class="w-100 text-center">
                <p class="color-blue-principal">Área de formação: <span class="fw-bold">Informática</span></p>
                <p class="color-blue-principal">Cordenador: <span class="fw-bold">Sivi Lando</span></p>
                <p class="color-blue-principal">Curso: <span class="fw-bold">Técnico de Informática</span></p>
                <p class="color-blue-principal">Cordenador: <span class="fw-bold">Anatoli Lussaty</span></p>

              </div>
            </div>
          </div>

        </div>
      </div><!-- Termina Informações básicas-->
      

      <div class="col-lg-4">
          @if($comunicados == "")
          <div class="card card-comincado-escuro">
              <div class="card-body">
                Aguarde aqui os comunicados!
              </div>
            </div><!-- Fim Card comunicado -->
          @else
            @foreach($comunicados as $comunicado)
              <!-- Card comunicado -->
              <div class="card card-comincado-escuro">
                <div class="card-body">
                  <h5 class="card-title">Publicado em <span>| {{$comunicado->created_at}}</span></h5>

                  <div class="activity" style="text-align: justify;">

                    <h5 class="card-title" style="text-align: center;">{{$comunicado->titulo_com}}</h5>

                    <p>{{$comunicado->conteudo_com}}</p> 
                    
                    
                    
                  </div>

                </div>
              </div><!-- Fim Card comunicado -->
            @endforeach
            {{$comunicados->links()}}
            
          @endif

        </div><!-- Fim Coluna da direita -->
    </div>
    
    

    @elseif(Auth::user()->cargo_usuario != "Aluno")
    <div class="row">
      <!-- Coluna da direita -->
      <div class="col-lg-8">
        @if($comunicados == "")
        <div class="card card-comincado-escuro">
            <div class="card-body">
              Aguarde aqui os comunicados!
            </div>
          </div><!-- Fim Card comunicado -->
        @else
          @foreach($comunicados as $comunicado)
            <!-- Card comunicado -->
            <div class="card card-comincado-escuro">
              <div class="card-body">
                <h5 class="card-title">Publicado em <span>| {{$comunicado->created_at}}</span></h5>

                <div class="activity" style="text-align: justify;">

                  <h5 class="card-title" style="text-align: center;">{{$comunicado->titulo_com}}</h5>

                  <p>{{$comunicado->conteudo_com}}</p> 
                  
                  
                  
                </div>

              </div>
            </div><!-- Fim Card comunicado -->
          @endforeach
          {{$comunicados->links()}}
          
        @endif

      </div><!-- Fim Coluna da direita -->
    </div>


    <div class="row">
      <div class="col-lg-8">
        <div class="card-grafico-escuro">
          <div class="card-body">
            <h5 class="card-title">{{$titulografAlunos}}</h5>
  
            @if($titulografAlunos == "")
            <h5 class="card-title">{{$titulografAlunos2}}</h5>
            <br>
            @else
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
            @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card-grafico-escuro">
          <div class="card-body">
            <h5 class="card-title">{{$titulografUsuarios}} </h5>
            @if($titulografUsuarios == "")
            <h5 class="card-title">{{$titulografUsuarios2}}</h5>
            <br>
            @else
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
                          label: 'Total de usuários',
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
            @endif
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      {{--
      <!-- Coluna da esquerda -->
      <div class="col-lg-8">
        <div class="row">

          <!-- Card Alunos -->
          <div class="col-lg-12">

            <div class="card info-card card-aluno-escuro">

              <div class="card-body">
                <h5 class="card-title">Alunos <span>| 2022 - 2023</span></h5>
                <table class="table table-escuro" style="font-size: 15px;">
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

            <div class="card info-card card-turma-escuro">

              <div class="card-body">
                <h5 class="card-title">Turmas <span>| 2022 - 2023</span></h5>
                <table class="table table-escuro" style="font-size: 15px;">
                  <thead>
                    <tr style="text-transform: uppercase;">
                      <th scope="col">Cursos</th>
                      <th scope="col">Manhã</th>
                      <th scope="col">Tarde</th>
                      <th scope="col">Noite</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ( $data['TotalTurmasCurso'] as $turmas )
                    <tr>  
                      <td><span>{{$turmas['curso']}}</span></td>
                      <td>8</td>
                      <td>6</td>
                      <td>6</td>
                    </tr>
                    @endforeach
       
                  </tbody>
                </table>

              </div>
            </div>

          </div><!-- Fim Card Turmas -->

        </div>
      </div><!-- Fim Coluna da esquerda -->--}}

      

    </div>    
    <br><br><br>
  </div><!-- Fim da dashboard Admin e Subdireção -->
  @endif
  
</main>
@endsection












