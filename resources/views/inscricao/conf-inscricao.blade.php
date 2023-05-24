@extends('layouts.main')

@section('title', 'Confirmar inscrições')

@section('conteudo')
<main id="main" class="main">
	<form>
		<i class="voltar bi bi-arrow-left-circle-fill"></i>
		<div class="row">
			<div class="col-lg-6"></div>
			<div class="col-lg-6" style="padding-bottom: 10px;">         		
				<select class="bi-select form-select">
					<option selected="">Bilhe de identidade</option>
				</select>
			</div>
		</div>
		<div class="row decidir-insc">
			<div class="col-lg-6">
				<div class="area-info-insc-conf">
					<ul>
						<li><span class="titulo">Nome completo: </span><span class="conteudo">Danilo Lopes</span></li>
						<li><span class="titulo">Nome do Pai: </span><span class="conteudo">Mauro Fernandes</span></li>
						<li><span class="titulo">Nome da Mãe: </span><span class="conteudo">Mili Fernandes</span></li>
						<li><span class="titulo">Nº do Bilhete: </span><span class="conteudo">0000000000KJ000</span></li>
						<li><span class="titulo">Sexo: </span><span class="conteudo">Masculino</span></li>
						<li><span class="titulo">Naturalidade: </span><span class="conteudo">Angolana</span></li>
						<li><span class="titulo">Morada: </span><span class="conteudo">Luanda, Luanda</span></li>
					</ul>
					
					<hr>

					<ul>
						<li><span class="titulo">Escola: </span><span class="conteudo">Escola Petrolifera de Luanda</span></li>
						<li><span class="titulo">Turno: </span><span class="conteudo">Manhã</span></li>
						<li><span class="titulo">Turma: </span><span class="conteudo">AM</span></li>
						<li><span class="titulo">Número: </span><span class="conteudo">16</span></li>
						<li><span class="titulo">Número de processo: </span><span class="conteudo">2312</span></li>
						<li><span class="titulo">Ano Lectivo: </span><span class="conteudo">2020 - 2021</span></li>
						<li>
							<div class="row">
								<div class="col-lg-6">
									<span class="titulo">Língua Portuguesa: </span><span class="conteudo">17</span>
								</div>	
								<div class="col-lg-6" style="display: flex; justify-content: flex-end; align-items: center;">
									<span class="titulo">Matemática: </span><span class="conteudo">18</span>
								</div>	
							</div>
						</li>
						<li>
							<div class="row">
								<div class="col-lg-6">
									<span class="titulo">Química: </span><span class="conteudo">13</span>
								</div>	
								<div class="col-lg-6" style="display: flex; justify-content: flex-end; align-items: center;">
									<span class="titulo">Física: </span><span class="conteudo">16</span>
								</div>	
							</div>
						</li>		
					</ul>

				</div>    
			</div>
		
			<div class="col-lg-6">
				<div class="area-foto-confirm">
					<img src="img/recibo.jpg">
				</div>
			</div> 
		</div>

		<div style="text-align: center; margin-top: 20px;">
			<button class="btn btn-danger">Rejeitar inscrição</button>
			<button class="btn btn-success" style="margin-left: 10px;">Validar inscrição</button>
		</div>
	</form>
	
</main>
@endsection