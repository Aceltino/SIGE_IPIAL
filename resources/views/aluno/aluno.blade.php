@extends('layouts.main')

@section('title', 'Inscritos via online')

@section('conteudo')
<main id="main" class="main">
    <div class="pagetitle">
        <div class="row">
       
        
            <div class="col-lg-2">
                <select class="btn-sel form-select">
                    <option selected>Rejeitados</option>
                    <option value="D.P">Desenhador projetista - D.P</option>
                    <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                    <option value="T.I">Técnico de Informática - T.I</option>
                    <option value="E.T">Electronica e Telecomunicação - E.T</option>
                </select>
            </div> 
            <div class="col-lg-2">
                <select class="btn-sel form-select">
                    <option selected>Rejeitados</option>
                    <option value="D.P">Desenhador projetista - D.P</option>
                    <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                    <option value="T.I">Técnico de Informática - T.I</option>
                    <option value="E.T">Electronica e Telecomunicação - E.T</option>
                </select>
            </div>

            <div class="col-lg-2">
                <select class="btn-sel form-select">
                    <option selected>Rejeitados</option>
                    <option value="D.P">Desenhador projetista - D.P</option>
                    <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                    <option value="T.I">Técnico de Informática - T.I</option>
                    <option value="E.T">Electronica e Telecomunicação - E.T</option>
                </select>
            </div>

            <div class="col-lg-2">
                <select class="btn-sel form-select">
                    <option selected>Rejeitados</option>
                    <option value="D.P">Desenhador projetista - D.P</option>
                    <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                    <option value="T.I">Técnico de Informática - T.I</option>
                    <option value="E.T">Electronica e Telecomunicação - E.T</option>
                </select>
            </div>

            <div class="col-lg-2">
                <select class="btn-sel form-select">
                    <option selected>Rejeitados</option>
                    <option value="D.P">Desenhador projetista - D.P</option>
                    <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                    <option value="T.I">Técnico de Informática - T.I</option>
                    <option value="E.T">Electronica e Telecomunicação - E.T</option>
                </select>
            </div>

            <div class="col-lg-2">
                <select class="btn-sel form-select">
                    <option selected>Rejeitados</option>
                    <option value="D.P">Desenhador projetista - D.P</option>
                    <option value="T.E.I.E">Técnico de Energia e Instalações Electricas - T.E.I.E</option>
                    <option value="T.I">Técnico de Informática - T.I</option>
                    <option value="E.T">Electronica e Telecomunicação - E.T</option>
                </select>
            </div>
        
        </div>
    </div>

    <div class="procurar">
    <form class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o código da inscrição ou o número do B.I do Candidato" name="" class="campo-pesq">
        <button id="pesquisa" type="submit" title="Search"><i class="bi bi-search"></i></button>   
    </form>
    </div>

    <!-- /  Inicio da tabela de inscritos -->
    <table  id="matricula-tab" class="table table-striped" style="margin-top: 20px;" >
      <thead  style=" text-align: center;">
          <tr>
          <th scope="col">Número de Processo</th>
          <th scope="col">Nome do Candidato</th>
          <th scope="col">Turma</th>
          <th scope="col">Média</th>
          <th scope="col">Idade</th>
          <th scope="col">Estado</th>
          <th scope="col">Período</th>
          <th scope="col"></th>
          </tr>
      </thead>
      <tbody>
          <tr  style=" text-align: center;">
          <th scope="row">0000000</th>
          <td>Fernando Exemplo</td>
          <td>I10AM</td>
          <td>16</td>
          <td>15</td>
          <td>Ativo</td>
          <td>Manhã</td>
          <td>
            @php
            $valor2='ativo'
            @endphp

            @if($valor2=='ativo')
                <a href="/aluno-inativo" class="btn btn-cor-sg-a">Ver inscrição</a>
            @endif
          <a href="#" class="btn btn-cor-sg-a" style="background-color: #941919; color: #fff;">Inativo</a>
          </td>
          </tr>
          
          <tr  style=" text-align: center;">
          <th scope="row">0000000</th>
          <td>Fernando Exemplo</td>
          <td>I12BT</td>
          <td>16</td>
          <td>15</td>
          <td>inativo</td>
          <td>Manhã</td>
          <td>
            @php
            $valor='inativo'
            @endphp
            
            @if($valor=='inativo')
                <a href="/aluno-ativo" class="btn btn-cor-sg-a">Ver inscrição</a>
            @elseif($valor=='ativo')
            <a href="/aluno-inativo" class="btn btn-cor-sg-a">Ver inscrição</a>
            @endif
              <a href="#" class="btn btn-cor-sg-a" style="background-color: #14eb01; color: #fff; " disabled>Ativo</a>

          </td>
          </tr>
      </tbody>
    </table>
    <!-- Termina a tabela de inscritos -->
    
</main>
@endsection