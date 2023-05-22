@extends('layouts.main')

@section('title', 'Mini-pautas')

@section('conteudo')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
            <div class="col">
                <h1>Mini-Pautas</h1>      
            </div>
        
            <div class="col-lg-2">
            <select class="btn-sel form-select" name="opcoes" id="filtro3" >
                <option disabled selected>Turma</option>
                <option value="I10AM">I10AM</option>
                <option value="I11AM">I11AM</option>
                <option value="I12AT">TI12AT</option>
                <option value="I13AT">I13AM</option>
            </select>
            </div> 
        
        </div>
    </div>

    <div class="procurar">
    <form class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Ano da Pauta que procuras" name="" class="campo-pesq">
        <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
    </form>
    </div>

    <!-- /  Inicio da tabela de inscritos -->
    <table  id="matricula-tab" class="table table-striped" style="margin-top: 20px;" >
      <thead  style=" text-align: center;">
          <tr>
          <th scope="col">ANO</th>
          <th scope="col">classe</th>
          <th scope="col">Turma</th>
          <th scope="col">Curso</th>
          <th scope="col">Periodo</th>
          <th scope="col"></th>
          </tr>
      </thead>
      <tbody>
          <tr  style=" text-align: center;">
          <th scope="row">2021-2022</th>
          <td>11ª</td>
          <td>I11AM</td>
          <td>Informática</td>
          <td>Manhã</td>
          <td>
          <a href="/ver-mini-pauta" class="btn btn-cor-sg-a">Ver Mini-pauta</a>
          </td>
          </tr>
          
          <tr  style=" text-align: center;">
          <th scope="row">2020-2021</th>
          <td>13ª</td>
          <td>I13BT</td>
          <td>Desenhador projetista</td>
          <td>Tarde</td>
          <td>
              <a href="/ver-mini-pauta" class="btn btn-cor-sg-a">Ver Mini-pauta</a>
          </td>
          </tr>
      </tbody>
    </table>
    <!-- Termina a tabela de inscritos -->
    
</main>
@endsection