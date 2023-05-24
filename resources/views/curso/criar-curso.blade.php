@extends('layouts.main')

@section('title', 'Criar Curso')

@section('conteudo')
<main id="main" class="main" >

    <form id="regFormh" action="" class="formulario-layout">

        <div style="text-align:center;margin-top:10px;">
            <span class="step"></span>
        </div>

        <div class="tab">     
        
            <div class="row" >
                <div class="col" style=" margin-top: 5px; margin-bottom: 5px;">

                    <div style="  text-align: center;">
                        <h2>CRIAR CURSO</h2>
                    </div>

                </div>
            </div>

            <div class="form-group">
                <input type="text" style=" text-align: center;" value="" placeholder="Nome do Curso" name="" oninput="this.className = ''">
            </div>

            <div class="row">
                <div class="col form-group">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Area de Formação:</option>
                        <option value="Informática">Informática</option>
                        <option value="Contrução civil">Contrução civil</option>
                        <option value="Eletronica">Eletronica</option>
                        <option value="Contrução civil">Contrução civil</option>
                    </select>
                </div>

                <div class=" col form-group">
                    <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                        <option selected disabled>Coordenador:</option>
                        <option value="Tom Brauny">Tom Brauny</option>
                        <option value="João Miguel">João Miguel</option>
                        <option value="Braga Santos">Braga Santos</option>
                    </select>
                </div>

            </div>
            
            <div class="form-group">
                <input type="text" style=" text-align: center;" value="" placeholder="Sigla do Curso" name="" oninput="this.className = ''" maxlength="4">
            </div>
   
            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Criar Curso</button>
                </div>
            </div>    
        </div>
    </form>
</main>
@endsection