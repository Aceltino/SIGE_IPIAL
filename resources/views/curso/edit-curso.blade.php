@extends('layouts.main')

@section('title', 'Editar Curso')

@section('conteudo')
<main id="main" class="main">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
            <h1>Dados Do Curso</h1>      
        </div>
        
    </div>

    <form class="form-inativo">
        <div class="dados-pessoais">        
            <div class="area-input form-group">
                <label>Nome Do Curso: </label><input type="text" name="" value="Técnico de Informática">
            </div>

            <div class="area-input form-group">
                <label>Sigla do curso: </label><input type="text" name="" value="I">
            </div>
            <div class="form-group">
               <label for="">Area de Formação:</label> 
               <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option disabled>Area de Formação:</option>
                    <option value="Informática" selected>Informática</option>
                    <option value="Contrução civil">Contrução civil</option>
                    <option value="Eletronica">Eletronica</option>
                    <option value="Contrução civil">Contrução civil</option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Coordenador:</label>
                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select">
                    <option  disabled>Coordenador:</option>
                    <option value="Tom Brauny" selected>Tom Brauny</option>
                    <option value="João Miguel">João Miguel</option>
                    <option value="Braga Santos">Braga Santos</option>
                </select>
            </div>
                <div class="footer-modal" style="text-align: center; margin-top: 50px;">
                    <div class="jnt">
                        <a href="/cursos" class="btn" style="background-color: #070b17; color: #fff;">Cancelar edição</a>

                        <button type="submit" class="btn" style="background-color: #26dd35; color: #fff;">Atualizar</button>
                    </div>
                </div>
        
    </form> 
</main>
@endsection