@extends('layouts.main')

@section('title', 'Editar Comunicado')

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
                        <h2>Atualizar Dados do Comunicado</h2>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="form-group col">
                    <input type="text" style=" text-align: center;" value="Defesas Dos Finalistas 2023" placeholder="Titulo do Comunicado" name="" oninput="this.className = ''">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100 "  rows="13" name="conteudo"  id="area" placeholder="Escreve aqui o conteúdo do Comunicado" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi architecto placeat quidem sapiente quis ex porro laborum, delectus officiis, in debitis quibusdam blanditiis qui possimus maiores ipsum earum amet corporis! Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam beatae, accusantium modi fuga ratione itaque illo, adipisci suscipit pariatur non ut necessitatibus, dolore at unde voluptates eligendi natus tempore quam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quae veniam animi magni quos, voluptatum porro? Accusantium blanditiis, tempora deleniti quidem repudiandae corporis adipisci voluptatem eos? Quis nihil consequatur quod. Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat qui tenetur fuga distinctio a dolor esse sapiente ratione possimus quis aperiam numquam reprehenderit, autem quos laudantium sit eius excepturi consequuntur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem illo similique, placeat dolorum, quo consectetur eius ducimus nobis, inventore quisquam dolores! Illum, saepe voluptates. Eaque odit ex cum molestias nulla? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto fuga impedit magnam voluptates harum velit error quo optio distinctio ab nihil enim, id totam accusantium quod vel in? Sed, architecto!</textarea>
                </div>
            </div>

            <div style="text-align:center;margin-top:10px;">
                <div>
                    <button type="submit" class="btn btn-success">Atualizar Comunicado</button>
                </div>
            </div>    
        </div>
    </form>
</main>
@endsection