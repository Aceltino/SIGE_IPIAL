@extends('layouts.main')

@section('title', 'Editar dados do professor')

@section('conteudo')
<main id="main" class="main">
        <div class="d-flex align-items-center bg-blue-principal ms-4 border-radius-right py-2" style="padding-left: 56px;">
            <a class="d-flex align-items-center pe-0" href="#">
                <img src="img/foto.jpg" alt="perfil" class="mini-foto-perf mini-foto-perfil-2">
                <span class="d-flex align-items-center ps-2">
                    <div class="col-lg-3">
                        <a class="color-white" href="#"><strong>Disciplina(s)</strong></a>
                    </div>
                    <div class="col-lg-3">
                        <a class="color-white" href="#">Horário</a>
                    </div>
                    <div class="col-lg-3">
                        <a class="color-white" href="#">Avaliação</a>
                    </div>
                    <div class="col-lg-3">
                        <a class="color-white" href="#">Dados pessoais</a>
                    </div>
                </span>
            </a>
        </div>

        <div class="tab">
          <div class="row">
            <div class="col-sm-2">
                <button class="btn bg-green color-white my-3 w-100" title="Professor em actividade">Activo</button>
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
        </div>

        <div style="text-align:center;margin-top:40px;">
          <div>
            <button type="button" class="btn color-white bg-yellowish-green" id="nextBtn" onclick="nextPrev(1)">Editar dados</button>
          </div>
        </div>
      </form>


    </main>
@endsection