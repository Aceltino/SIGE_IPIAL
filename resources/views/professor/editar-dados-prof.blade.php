@extends('layouts.main')

@section('title', 'Editar dados do professor')

@section('conteudo')
<main id="main" class="main">
        <div class="d-flex align-items-center bg-blue-principal ms-4 border-radius-right py-2" style="padding-left: 56px;">
            <a class="d-flex align-items-center pe-0" href="#">
                <img src="img/foto.jpg" alt="perfil" class="mini-foto-perf mini-foto-perfil-2">
                <span class="d-flex align-items-center ps-2">
                    <div class="col-lg-3">
                        <a class="color-white" href="/editar-dados-professor"><strong>Disciplina(s)</strong></a>
                    </div>
                    <div class="col-lg-3">
                        <a class="color-white" href="/horario-professor">Horário</a>
                    </div>
                    <div class="col-lg-3">
                        <a class="color-white" href="/avaliacao-professor">Avaliação</a>
                    </div>
                    <div class="col-lg-3">
                        <a class="color-white" href="/editar-dados-pessoais-professor">Dados pessoais</a>
                    </div>
                </span>
            </a>
        </div>

        <div class="tab">
          <div class="row">
            <div class="col-sm-8">
                <button class="btn bg-green color-white my-3 w-25" title="Professor em actividade">Activo</button>
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
            <input type="text" placeholder="Nome do professor" value="Nome: Sungo Afonso" name="" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Curso" value="Curso: Informática" name="" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Turno" value="Turno: Tarde" name="" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Ano lectivo" value="Ano lectivo: Terminado" name="" oninput="this.className = ''">
          </div>

          <div class="form-group d-flex align-items-center">
            <input type="text" placeholder="Disciplina 1" value="TLP - 11ª, 12ª" name="" oninput="this.className = ''">
            <button class="btn">
                <i class="bi bi-dash-circle h2"></i>
            </button>
          </div>

          <div class="form-group d-flex align-items-center">
            <input type="text" placeholder="Disciplina 2" value="TIC - 10ª" name="" oninput="this.className = ''">
            <button class="btn">
                <i class="bi bi-plus-circle h2"></i>
            </button>
          </div>
        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn color-white bg-yellowish-green" id="nextBtn" onclick="nextPrev(1)">Editar dados</button>
          </div>
        </div>
      </form>


    </main>
@endsection