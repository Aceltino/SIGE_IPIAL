@extends('layouts.main')

@section('title', 'Boletim de Notas')

@section('conteudo')
<main id="main" class="main">
      <div class="row header-ficha">
        <div class="col">
          <span>Dados académicos</span>      
        </div>
      
         <div class="col-lg-2">
           <select class="btn-sel form-select">
              <option selected>Avaliação</option>
              <option value="D.P">Ver boletim</option>
              <option value="T.E.I.E">Ficha biográfica</option>
           </select>
         </div>
         
      </div>

      <div class="container" style="padding-top: 10px; margin-bottom: 20px">
        <div class="row">
          <div class="bordado col">
            <span class="t-negrito">Nome: </span><span class="t-normal">{{ $user->pessoa->nome_completo }} - {{ $disciplinas[0]->nome_disciplina }} </span>
          </div>

          <div class="bordado col-lg-2" style="display: flex; justify-content: flex-start; align-items: center;">
            <span class="t-negrito">Processo: </span><span class="t-normal">{{$aluno->aluno_id}}</span>
          </div>
        </div>
        
        
      </div>

      <div class="row" style="margin-top: 20px;">
        <div class="col-lg-2">
          <select class="btn-sel form-select">
            <option selected>2022 - 2023</option>
          </select>
        </div>

        <div class="col-lg-2">
          <select class="btn-sel form-select">
            <option selected>1º Trimestre</option>
            <option value="2021-2022">2º Trimestre</option>
            <option value="2021-2022">3º Trimestre</option>
          </select>
        </div>

        <div class="col-lg-8" style="display: flex; justify-content: flex-end; align-items: center;">
          <span class="btn" style="background-color: #070b17; color: #fff; margin-right: 10px;"></span>
          <span class="btn" style="background-color: #070b17; color: #fff;">10ª Classe</span>
        </div>
      </div>

      <!-- /  Inicio da tabela de inscritos -->
      <table class="tabela-c tabela-c-striped" style="margin-top: 20px;">
        <thead>
          <tr>
            <th scope="col">Disciplina</th>
            <th scope="col">MAC</th>
            <th scope="col">NPP</th>
            <th scope="col">NPT</th>
            <th scope="col">MT1</th>
            <th scope="col">FNJ</th>
            <th scope="col">FJ</th>
            <th scope="col">TF</th>
            <th scope="col">MFD</th>
            <th scope="col">MF</th>
            <th scope="col">Resultado</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Língua Portuguesa</th>
            <td>14</td>
            <td>14</td>
            <td>14</td>
            <td>14</td>
            <td>0</td>
            <td>3</td>
            <td>3</td>
            <td>14</td>
            <td>14</td>
            <td>Apto</td>
            <td>
              <a href="#" class="btn btn-cor-sg-b">Ver assiduidade</a>
            </td>
          </tr>

          
          <tr>
            <th scope="row">Língua Portuguesa</th>
            <td>14</td>
            <td>14</td>
            <td>14</td>
            <td>14</td>
            <td>0</td>
            <td>3</td>
            <td>3</td>
            <td>14</td>
            <td>14</td>
            <td>Apto</td>
            <td>
              <a href="#" class="btn btn-cor-sg-b">Ver assiduidade</a>
            </td>
          </tr>
        </tbody>
      </table>
      <!-- Termina a tabela de inscritos -->

      <div class="footer-modal" style="text-align: center;">
        
        <div class="jnt">
            <a href="#" class="btn" style="background-color: #070b17; color: #fff;"><i class="bi bi-arrow-left"></i> Retroceder</a>

            <button class="btn" style="background-color: #070b17; color: #fff;">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
        </div>

      </div>   

    </main>

@endsection