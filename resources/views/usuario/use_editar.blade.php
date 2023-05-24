@extends('layouts.main')

@section('title', 'Editar dados do usuário')

@section('conteudo')
<main id="main" class="main">

        <div >
          <div class="row">
            <div class="col-sm-8">
                <button class="btn bg-green color-white my-3 w-25" title="usuario">Activo</button>
            </div>
         
          
          <div class="form-group">
            <input type="text" placeholder="Nome do usuario" value="Nome: Maria Paulo André" name="" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="E-mail" value="E-mail:MariaPauloAndré@gmail.com" name="" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Sexo" value="Sexo: Masculino" name="" oninput="this.className = ''">
          </div>

          <div class="form-group">
            <input type="text" placeholder="Cargo" value="Cargo:professora" name="" oninput="this.className = ''">
          </div>
          <label for="imagem_usuario"><span class="btn btn-warning btn-sm" title="Atualizar_imagem"><i class="bi bi-upload"></i></span></label>
          <input type="file" id="imagem_usuario" hidden>
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