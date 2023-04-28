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












