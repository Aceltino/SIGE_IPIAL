@extends('layouts.main')

@section('title', 'Horário do professor')

@section('conteudo')
<main id="main" class="main">
        <div class="d-flex align-items-center bg-blue-principal ms-4 border-radius-right py-2" style="padding-left: 56px;">
            <a class="d-flex align-items-center pe-0" href="#">
                <img src="img/foto.jpg" alt="perfil" class="mini-foto-perf mini-foto-perfil-2">
                <span class="d-flex align-items-center ps-2">
                    <div class="col-sm-3">
                        <a class="color-white" href="/editar-dados-professor">Disciplina(s)</a>
                    </div>
                    <div class="col-sm-3">
                        <a class="color-white" href="/horario-professor"><strong>Horário</strong></a>
                    </div>
                    <div class="col-sm-3">
                        <a class="color-white" href="/avaliacao-professor">Avaliação</a>
                    </div>
                    <div class="col-sm-3">
                        <a class="color-white" href="/editar-dados-pessoais-professor">Dados pessoais</a>
                    </div>
                </span>
            </a>
        </div>

        <div >
          <div class="row">
            <div class="col-sm-6 col-md-8">
                <button class="btn bg-green color-white my-3 w-25" title="Professor em actividade">Activo</button>
            </div>
            <div class="col-sm-6 col-md-4 d-flex">
                <select class="form-select bg-blue-principal color-white my-3 w-50 ms-auto" title="Professor em actividade">
                    <optgroup label="Ano lectivo">
                        <option>2022 - 2023</option>
                        <option>2023 - 2024</option>
                    </optgroup>
                </select>
            </div>
          </div>
          
          <div class="form-group">
            <input type="text" placeholder="Nome do professor" value="Sivi Lando" name="" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Turno" value="Manhã" name="" oninput="this.className = ''">
          </div>

          <div class="row">
            <div class="col-lg-12">
                <!-- /  Inicio da tabela de inscritos -->
            <table class="table table-striped align-middle text-center" style="margin-top: 5px;">
            <thead>
                <tr>
                    <th scope="col-sm-4">Hora</th>
                    <th scope="col-sm-2">Tempo</th>
                    <th scope="col-sm-2">Segunda</th>
                    <th scope="col-sm-2">Terça</th>
                    <th scope="col-sm-2">Quarta</th>
                    <th scope="col-sm-2">Quinta</th>
                    <th scope="col-sm-2">Sexta</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row">
                        07:20 <br>
                        08:05
                    </td>
                    <td>1º</td>
                    <td>
                        I10AM <br>
                        TLP
                    </td>
                    <td>
                        I10BM <br>
                        TLP
                    <td>
                        I10CM <br>
                        TLP
                    </td>
                    <td>
                        I10DM <br>
                        TLP
                    <td>
                        I11AM <br>
                        TLP
                    </td>
                </tr>
                
                <tr>
                <td scope="row">
                        08:10 <br>
                        08:55
                    </td>
                    <td>2º</td>
                    <td>
                        I10AM <br>
                        TLP
                    </td>
                    <td>
                        I10BM <br>
                        TLP
                    <td>
                        I10CM <br>
                        TLP
                    </td>
                    <td>
                        I10DM <br>
                        TLP
                    <td>
                        I11AM <br>
                        TLP
                    </td>
                </tr>

                <tr>
                <td scope="row">
                        09:00 <br>
                        09:45
                    </td>
                    <td>3º</td>
                    <td>
                        I10AM <br>
                        TLP
                    </td>
                    <td>
                        I10BM <br>
                        TLP
                    <td>
                        I10CM <br>
                        TLP
                    </td>
                    <td>
                        I10DM <br>
                        TLP
                    <td>
                        I11AM <br>
                        TLP
                    </td>
                </tr>

                <tr>
                <td scope="row">
                        09:50 <br>
                        10:35
                    </td>
                    <td>4º</td>
                    <td>
                        I10AM <br>
                        TLP
                    </td>
                    <td>
                        I10BM <br>
                        TLP
                    <td>
                        I10CM <br>
                        TLP
                    </td>
                    <td>
                        I10DM <br>
                        TLP
                    <td>
                        I11AM <br>
                        TLP
                    </td>
                </tr>

                <tr>
                <td scope="row">
                        10:40 <br>
                        11:25
                    </td>
                    <td>5º</td>
                    <td>
                        I10AM <br>
                        TLP
                    </td>
                    <td>
                        I10BM <br>
                        TLP
                    <td>
                        I10CM <br>
                        TLP
                    </td>
                    <td>
                        I10DM <br>
                        TLP
                    <td>
                        I11AM <br>
                        TLP
                    </td>
                </tr>

                <tr>
                <td scope="row">
                        11:30 <br>
                        12:15
                    </td>
                    <td>6º</td>
                    <td>
                        I10AM <br>
                        TLP
                    </td>
                    <td>
                        I10BM <br>
                        TLP
                    <td>
                        I10CM <br>
                        TLP
                    </td>
                    <td>
                        I10DM <br>
                        TLP
                    <td>
                        I11AM <br>
                        TLP
                    </td>
                </tr>
            </tbody>
            </table>
            <!-- Termina a tabela de inscritos -->
            </div>
          </div>

          
        </div>

        <div style="text-align:center;margin-top:30px;">
          <div>
            <button type="button" class="btn color-white bg-blue-principal" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            <button type="button" class="btn color-white bg-yellowish-green" id="nextBtn" onclick="nextPrev(1)">Editar dados</button>
          </div>
        </div>
      </form>


    </main>
@endsection