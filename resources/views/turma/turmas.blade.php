@extends('layouts.APIturma')

@section('title', 'Turmas')

@section('conteudo')
<main id="main" class="main">
  <div class="row">
    <div class="col">
      <h1>TURMAS</h1>      
    </div>
  
    <div class="col-lg-2">
      <select class="btn-sel form-select" id="filtro5">
        <option selected disabled>curso</option>
        <option value="Desenhador projetista">Desenhador projetista</option>
        <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
        <option value="Informática">Informática</option>
        <option value="Telecomunicação">Telecomunicação</option>
      </select>
    </div> 

  </div>

  <div class="procurar">
    <form class="proc-form d-flex align-items-center">
      <input  id="pesquisa" type="text" name="" class="campo-pesq" placeholder="Digite os dados da Turma que procuras">
      <button type="button" title="Search"><i class="bi bi-search"></i></button>   
    </form>
  </div>

  {{-- /  Inicio da tabela de inscritos --}}
  <table class="table table-custom table-escuro" style="margin-top: 10px; text-align: center;"  id="Tabturmas">
    <thead id="turma-conteudo">
      <tr style=" text-align: center;">
        <th scope="col">Nome da Turma</th>
        <th scope="col">Classe</th>
        <th scope="col">Turno</th>
        <th scope="col">Vagas</th>
        <th scope="col">Curso</th>  
        <th scope="col">Ano</th>
        <th class="no-print" scope="col">Ações</th>
      </tr>
    </thead>
    <tbody id="turma-conteudo">
    </tbody>
  </table>

</main>
@endsection