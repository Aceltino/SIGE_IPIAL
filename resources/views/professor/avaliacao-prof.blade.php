@extends('layouts.main')

@section('title', 'Avaliação do professor')

@section('conteudo')
<main id="main" class="main">
        <div class="d-flex align-items-center bg-blue-principal ms-4 border-radius-right py-2" style="padding-left: 56px;">
            <a class="d-flex align-items-center pe-0" href="#">
                <img src="img/foto.jpg" alt="perfil" class="mini-foto-perf mini-foto-perfil-2">
                <span class="d-flex align-items-center ps-2">
                    <div class="col-lg-3">
                        <a class="color-white" href="/editar-dados-professor">Disciplina(s)</a>
                    </div>
                    <div class="col-lg-3">
                        <a class="color-white" href="/horario-professor">Horário</a>
                    </div>
                    <div class="col-lg-3">
                        <a class="color-white" href="/avaliacao-professor"><strong>Avaliação</strong></a>
                    </div>
                    <div class="col-lg-3">
                        <a class="color-white" href="/editar-dados-pessoais-professor">Dados pessoais</a>
                    </div>
                </span>
            </a>
        </div>

        <div >
          <div class="row">
            <div class="col-sm-8">
                <button class="btn bg-red color-white my-3 w-25" title="Professor em actividade">Inactivo</button>
            </div>
            <div class="col-sm-4 d-flex">
                <select class="form-select bg-blue-principal color-white my-3 w-50 ms-auto" title="Professor em actividade">
                    <optgroup label="Ano lectivo">
                        <option>2022 - 2023</option>
                        <option>2023 - 2024</option>
                    </optgroup>
                </select>
            </div>
          </div>
          
          <div class="form-group">
            <input type="text" placeholder="Nome do professor" value="Nome: Sivi Lando" name="" oninput="this.className = ''">
          </div>

          <div class="row">
            <div class="col-lg-12">
                <!-- /  Inicio da tabela de inscritos -->
            <table class="table table-striped" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th scope="col-sm-4">Critério de avaliação</th>
                    <th scope="col-sm-2">1ºT</th>
                    <th scope="col-sm-2">2ºT</th>
                    <th scope="col-sm-2">3ºT</th>
                    <th scope="col-sm-2">CF</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">Qualidade do processo de ensino e aprendizagem</td>
                    <td>14</td>
                    <td>14</td>
                    <td>14</td>
                    <td>14</td>
                </tr>
                
                <tr>
                <td scope="row">Qualidade do processo de ensino e aprendizagem</td>
                    <td>14</td>
                    <td>14</td>
                    <td>14</td>
                    <td>14</td>
                </tr>
            </tbody>
            </table>
            <!-- Termina a tabela de inscritos -->
            </div>
          </div>

          
        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn color-white bg-blue-principal" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn color-white bg-yellowish-green" id="nextBtn" onclick="nextPrev(1)">Editar dados</button>
          </div>
        </div>
      </form>


    </main>
@endsection