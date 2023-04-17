@extends('layouts.main')

@section('title', 'Página inicial')


@section('sidebar')
  <!-- /	Sidebar -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

    	<!-- /	Nav Pagina inicial-->
      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-ui-radios"></i>
          <span>Página inicial</span>
        </a>
      </li>

        <!-- /	Nav Inscricoes-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#inscriacao-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-pen"></i><span>Inscrição</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="inscriacao-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Inscrever candidato</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Inscrições</span>
            </a>
          </li>

        </ul>
      </li>

    	<!-- /	Nav Matricula-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#matricula-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Matrícula</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="matricula-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Matricular aluno</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Matriculas</span>
            </a>
          </li>
 
        </ul>
      </li>

    	<!-- /	Nav Professor-->      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#professor-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-person-lines-fill"></i><span>Professor</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="professor-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Cadastrar Professores</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Professores</span>
            </a>
          </li>
        </ul>
      </li>

    	<!-- /	Nav Turma-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#turma-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-clipboard"></i><span>Turma</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="turma-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Criar turma</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Turmas</span>
            </a>
          </li>
        </ul>
      </li>

    	<!-- /	Nav Curso-->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#curso-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book"></i><span>Curso</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="curso-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Criar curso</span>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Cursos</span>
            </a>
          </li>
        </ul>
      </li>

    	<!-- /	Nav Comunicado-->
     	<li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#comunicado-nav" data-bs-toggle="collapse" href="#">
	          <i class="bi bi-map"></i><span>Comunicado</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="comunicado-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
	          <li>
	            <a href="#">
	              <i class="bi bi-circle"></i><span>Criar comunicado</span>
	            </a>
	          </li>
	          <li>
	            <a href="#">
	              <i class="bi bi-circle"></i><span>Comunicados</span>
	            </a>
	          </li>
	        </ul>
	    </li>

    	<!-- /	Nav Ano lectivo-->
	    <li class="nav-item">
	        <a class="nav-link collapsed" data-bs-target="#ano-nav" data-bs-toggle="collapse" href="#">
	          <i class="bi bi-calendar-event"></i><span>Ano lectivo</span><i class="bi bi-chevron-down ms-auto"></i>
	        </a>
	        <ul id="ano-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
	          <li>
	            <a href="#">
	              <i class="bi bi-circle"></i><span>Criar ano lectivo</span>
	            </a>
	          </li>
	          <li>
	            <a href="#">
	              <i class="bi bi-circle"></i><span>Ano lectivo</span>
	            </a>
	          </li>
	        </ul>
	    </li>

    	<!-- /	Nav Perfil-->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#">
          <i class="bi bi-person"></i>
          <span>Perfil</span>
        </a>
      </li>

    

    </ul>

  </aside><!-- Termina Sidebar-->
@endsection


@section('conteudo')
<main id="main" class="main">
   	<!-- /	Titulo-->  	
  	<div class="pagetitle">
      <h1>Dashboard</h1>
      <span class="breadcrumb">12-02-2023</span>
    </div>

	<!-- /	seccao do dashboard-->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6 mt-4">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span class="total">6634</span>
              <p>INSCRITOS</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4">
            <div class="count-box">
              <i class="bi bi-person"></i>
              <span class="total">232</span>
              <p>ADMITIDOS</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4">
            <div class="count-box">
              <i class="bi bi-check2-square"></i>
              <span class="total">45</span>
              <p>NÃO ADMITIDOS</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4">
            <div class="count-box">
              <i class="bi bi-clipboard"></i>
              <span class="total">4</span>
              <p>MATRICULADOS</p>
            </div>
          </div>
          
          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box">
              <i class="bi bi-arrow-90deg-down"></i>
              <span class="total">498</span>
              <p>PROFESSORES</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box">
              <i class="bi bi-person-check"></i>
              <span class="total">13</span>
              <p>TURMAS</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span class="total">6</span>
              <p>VAGAS</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span class="total">6</span>
              <p>CURSOS</p>
            </div>
          </div>
          
                        
        </div>

      </div>
    </section><!-- Termina seccao do dashboard -->


	    
    <!-- /	Area do grafico-->
	<div id="barChart" style="min-height: 400px;" class="echart"></div>

		<script>
		    document.addEventListener("DOMContentLoaded", () => {
		      echarts.init(document.querySelector("#barChart")).setOption({
		        xAxis: {
		          type: 'category',
		          data: ['Inscritos', 'Admitidos', 'não admit', 'Matriculados', 'Professores', 'Turmas', 'Cursos', 'Vagas']
		        },
		        yAxis: {
		          type: 'value'
		        },
		        series: [{
		          data: [120, 200, 150, 80, 70, 110, 130, 300],
		          type: 'bar'
		        }]
		      });
		    });
	  	</script>
    </div><!-- Termina Area do grafico -->
  
  </main>
@endsection












