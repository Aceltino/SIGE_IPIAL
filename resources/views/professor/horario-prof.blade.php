@extends('layouts.main')

@section('title', 'Horário do professor')

@section('conteudo')
<main id="main" class="main">
    <div class="d-flex align-items-center justify-content-around bg-blue-principal ms-4 border-radius-right py-2" style="padding-left: 56px;">
        <a class="d-flex align-items-center  pe-0" href="#">
            <img src="img/foto.jpg" alt="perfil" class="mini-foto-perf mini-foto-perfil-2">
            <span class="d-flex align-items-center ps-2">
                <div class="col-lg-3">
                    <a class="color-white" href={{ route('professor.Editar', ['id' => $professor->professor_id]) }}>Disciplina(s)</a>
                </div>
                <div class="col-lg-3">
                    <a class="color-white" href={{ route('horarioProfessor', ['id' => $professor->professor_id]) }}><strong>Horário</strong></a>
                </div>
                <div class="col-lg-3">
                    <a class="color-white" href={{ route('professor.dados-pessoais', ['id' => $professor->professor_id]) }}>Dados pessoais</a>
                </div>
            </span>
        </a>
    </div>

    <form method="POST" action="">
        <div>
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <span class="btn bg-green color-white my-3 w-25"  title="Professor em actividade">Activo</span>
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
                    <!-- /  Inicio da tabela do horário -->
                    <table class="table table-striped align-middle text-center table-custom table-escuro" style="margin-top: 5px;">
                    <thead>
                        <tr>
                            <th scope="col-sm-4" class="text-uppercase">Hora</th>
                            <th scope="col-sm-2" class="text-uppercase">Tempo</th>
                            <th scope="col-sm-2" class="text-uppercase">Segunda</th>
                            <th scope="col-sm-2" class="text-uppercase">Sala</th>
                            <th scope="col-sm-2" class="text-uppercase">Terça</th>
                            <th scope="col-sm-2" class="text-uppercase">Sala</th>
                            <th scope="col-sm-2" class="text-uppercase">Quarta</th>
                            <th scope="col-sm-2" class="text-uppercase">Sala</th>
                            <th scope="col-sm-2" class="text-uppercase">Quinta</th>
                            <th scope="col-sm-2" class="text-uppercase">Sala</th>
                            <th scope="col-sm-2" class="text-uppercase">Sexta</th>
                            <th scope="col-sm-2" class="text-uppercase">Sala</th>
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
                                I10AM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10BM
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10CM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10DM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I11AM 
                            </td>
                            <td>
                                19A 
                            </td>
                        </tr>
                        
                        <tr>
                        <td scope="row">
                                08:10 <br>
                                08:55
                            </td>
                            <td>2º</td>
                            <td>
                                I10AM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10BM
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10CM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10DM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I11AM 
                            </td>
                            <td>
                                19A 
                            </td>
                        </tr>

                        <tr>
                        <td scope="row">
                                09:00 <br>
                                09:45
                            </td>
                            <td>3º</td>
                            <td>
                                I10AM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10BM
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10CM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10DM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I11AM 
                            </td>
                            <td>
                                19A 
                            </td>
                        </tr>

                        <tr>
                        <td scope="row">
                                09:50 <br>
                                10:35
                            </td>
                            <td>4º</td>
                            <td>
                                I10AM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10BM
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10CM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10DM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I11AM 
                            </td>
                            <td>
                                19A 
                            </td>
                        </tr>

                        <tr>
                        <td scope="row">
                                10:40 <br>
                                11:25
                            </td>
                            <td>5º</td>
                            <td>
                                I10AM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10BM
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10CM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10DM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I11AM 
                            </td>
                            <td>
                                19A 
                            </td>
                        </tr>

                        <tr>
                        <td scope="row">
                                11:30 <br>
                                12:15
                            </td>
                            <td>6º</td>
                            <td>
                                I10AM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10BM
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10CM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I10DM 
                            </td>
                            <td>
                                19A 
                            </td>
                            <td>
                                I11AM 
                            </td>
                            <td>
                                19A 
                            </td>
                        </tr>
                    </tbody>
                    </table>
                    <!-- Termina a tabela do horário -->
                </div>
            </div>

            <!-- Início da tabela de observações -->
            <table class="table border align-middle table-custom table-escuro mt-4">
                <thead>
                    <tr class="text-center">
                        <th scope="col-sm-12" class="text-uppercase" colspan="2">Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Redução da C. Horária</strong> - (Art 49º, Dec, Pres, nº 160/18, de 03 de Julho)</td>
                        <td><strong>Carga horária lectiva</strong>: 18 tempos</td>
                    </tr>
                    <tr>
                        <td><strong>Coordenação da turma ET10BM</strong>: 2 tempos</td>
                        <td><strong>Total</strong>: 20 tempos</td>
                    </tr>
                    <tr>
                        <td><strong>Contacto (Telem.)</strong>: 929 94 40 64</td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            <!-- Termina a tabela de observações -->
        </div>

        <div style="text-align:center;margin-top:30px;">
            <div>
                <button type="button" class="btn color-white bg-blue-principal" id="prevBtn" onclick="nextPrev(-1)">Retroceder</button>
            </div>
        </div>
    </form>

</main>
@endsection