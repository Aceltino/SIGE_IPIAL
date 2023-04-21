@extends('layouts.main')

@section('title', 'Confirmar inscrições')

@section('conteudo')
<main id="main" class="main">
    	<i class="voltar bi bi-arrow-left-circle-fill"></i>
    	<div class="row">
    		<div class="col-lg-6"></div>
    		<div class="col-lg-6" style="padding-bottom: 10px;">         		
    			<select class="bi-select form-select">
         			<option selected="">Bilhe de identidade</option>
         		</select>
         	</div>
    	</div>
      <div class="row">
        <div class="col-lg-6">
        	<div class="area-info-insc">
        		<ul>
        			<li><span class="titulo">Nome completo </span><span class="conteudo">Nome Dealguem Gordo</span></li>
        		</ul>
        	</div>    
        </div>
      
         <div class="col-lg-6">
         	<div class="area-foto-confirm">
         		<img src="/img/recibo.jpg">
         	</div>
           </select>
         </div> 
      
      </div>



    </main>
@endsection