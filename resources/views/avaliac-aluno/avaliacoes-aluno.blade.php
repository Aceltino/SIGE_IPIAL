@extends('layouts.main')

@section('title', 'Avaliar Aluno')

@section('conteudo')
<main id="main" class="main">
    @if (session()->has('erro'))
    <div class="alert alert-danger">
        {{session('erro')}}
        <button class="botaofecharerro">
          <i class="bi bi-x"></i>
        </button>
    </div>
    @endif
    @if (session()->has('sucesso'))
    <div class="alert alert-success">
        {{session('sucesso')}}
        <button class="botaofechasucesso">
          <i class="bi bi-x"></i>
        </button>
    </div>
    @endif

  <div class="pagetitle">
    <div class="row">
          <div class="col">
              <h1>Avaliação de Aluno</h1>
          </div>








          <div class="col-lg-2">
            <select  class="btn-sel form-select" id="filtro9" >
              @foreach ($cursos as $curso)
                <option value="{{$curso}}">{{$curso}}</option>
              @endforeach
            </select>
          </div>






          <div class="col-lg-2">
            <select  class="btn-sel form-select" id="filtro10" >
              @if (isset($nome_disciplina))
                @foreach ($nome_disciplina as $disciplina)
                    <option value="{{$disciplina}}">{{$disciplina}}</option>
                @endforeach
              @endif
            </select>
          </div>






          <div class="col-lg-2">
            <select  class="btn-sel form-select" id="filtro11">
              @if (isset($nome_turma))
                @foreach ($nome_turma as $turma)
                    <option value="{{$turma}}" selected>{{$turma}}</option>
                @endforeach
              @endif
            </select>
          </div>
    </div>

    <div class="procurar">
    <div class="proc-form d-flex align-items-center">
        <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="" class="campo-pesq">
        <button  title="Search"><i class="bi bi-search"></i></button>
    </div>
    </div>
  </div>
  <form method="POST" action="{{route('avaliar.aluno')}}">
    @csrf
    <div class="form-group" style="display: flex; justify-content: end; margin-top: 4px;">
      <button class="btn botaoazul" name="tipo_prova" value="ac" type="submit" style="margin-right: 3px;">AC</button>
      <button class="btn botaoazul" name="tipo_prova" value="Prova Professor" type="submit" style="margin-right: 3px;">NPP</button>
      <button class="btn botaoazul" name="tipo_prova" value="Prova Trimestre"  type="submit" style="margin-right: 3px;">NPT</button>
      <button class="btn botaoazul" name="tipo_prova" value="Exame" type="submit" style="margin-right: 3px;">Exame</button>
      <button class="btn botaoazul" name="tipo_prova" value="pap" type="submit" style="margin-right: 3px;">PAP</button>
      <button class="btn botaoazul" name="tipo_prova" value="nota_estagio" type="submit"  style="margin-right: 3px;">Nota do Estágio</button>
      <a class="btn botaoazul"  value="nota_administrativa" data-bs-toggle="modal" data-bs-target="#modal_nota_estagio"  style="margin-right: 3px;">Nota Administrativa</a>
    </div>

    <div class="bortabela" style="box-shadow: 0 5px 15px 0 rgba(82, 63, 105, 0.2); border: 1px solid white; border-radius: 3px; padding: 2px;">
      <div class="pagetitle">
          <div class="row">
              <div class="col" style="padding-left: 25px; padding-top: 15px;">
                  <h1 style="text-align: center; font-size: 25px; ">Data: {{date('d/m/Y')}}</h1>
              </div>
          </div>
      </div>
      <!-- /  Inicio da tabela  -->
      <table id="avali" class="table table-custom table-escuro display" style="margin-top: 20px; width: 100%;" >
        <thead style="text-align: center">
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Nome do Aluno</th>
            <th scope="col">MAC</th>
            <th scope="col">NPP</th>
            <th scope="col">NPT</th>
            <th scope="col">Exame</th>
            <th scope="col">Avaliar</th>
            <th scope="col">Histórico</th>
            <th scope="col" hidden>curso</th>
            <th scope="col" hidden>Disciplina</th>
            <th scope="col" hidden >Turma</th>
            <th scope="col" hidden >id_Aluno</th>
          </tr>
        </thead>
        <tbody>
          @if (!empty($aluno))
            @foreach ($aluno as $chave1 => $valor1)

              @foreach ($valor1 as $chave2 => $valor2)

                  @foreach ($valor2 as $chave3 => $valor3)



                      <tr style="text-align: center;">
                          <th scope="row">{{$valor3['numero_aluno']}}</th>
                          <td>{{$valor3['nome']}}</td>

                          @if ($valor3['mac']<10)
                          <td style="color: rgb(255, 8, 8)">{{$valor3['mac']}}</td>
                          @else
                          <td style="color: rgb(10, 10, 255)">{{$valor3['mac']}}</td>
                          @endif

                          @if ($valor3['npp']<10)
                          <td style="color: rgb(255, 8, 8)">{{$valor3['npp']}}</td>
                          @else
                          <td style="color: rgb(10, 10, 255)">{{$valor3['npp']}}</td>
                          @endif

                          @if ($valor3['npt']<10)
                          <td style="color: rgb(255, 8, 8)">{{$valor3['npt']}}</td>
                          @else
                          <td style="color: rgb(10, 10, 255)">{{$valor3['npt']}}</td>
                          @endif

                          @if ($valor3['exame']<10)
                          <td style="color: rgb(255, 8, 8)">{{$valor3['exame']}}</td>
                          @else
                          <td style="color: rgb(10, 10, 255)">{{$valor3['exame']}}</td>
                          @endif

                          <td style="text-align: center">
                          <input class="form-control innota"  type="text" name="nota_aluno[]" maxlength="4" id="notaimput">
                          <input class="form-control innota"  type="text" name="aluno_id[]" value="{{$valor3['aluno_id']}}" maxlength="4" id="notaimput" hidden>
                          <input class="form-control innota"  type="text" name="disciplina_id[]" value="{{$valor3['disciplina_id']}}" maxlength="4" id="notaimput" hidden>

                          </td>
                          <td style="text-align: center">
                          <a href="{{route('editar.avaliacao.aluno', [$valor3['aluno_id'], $valor3['disciplina_id']])}}" class="btn linkeditar">Avaliações Aluno</a>
                          </td>
                          <td hidden >{{$valor3['curso']}}</td>
                          <td hidden>{{$valor3['nome_disciplina']}}</td>
                          <td hidden>{{$valor3['nome_turma']}}</td>
                          <td hidden>{{$valor3['aluno_id']}}</td>

                      </tr>
                  <!-- Início da Modal -->

            <!-- Fím da modal -->
                  @endforeach
              @endforeach
            @endforeach

          </tbody>
      </table>
  </form>
  

    <form method="POST" action="{{route('avaliar.aluno', $valor3['disciplina_id'])}}">
        @csrf
      <div class="modal" id="modal_nota_estagio00" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog modal-xl">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Adicionar nota de Estágio</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">

              <div class="row">
                <div class="col">
                  <select  class="btn-sel form-select" >
                    <option value="#" selected>Tipo De PROVA</option>
                    <option value="#" >AC</option>
                    <option value="#" >NPP</option>
                    <option value="#" >NPT</option>
                    <option value="#" >EXAME</option>
                  </select>
               </div>

                <div class="col">

                  <select  class="btn-sel form-select" >
                          <option value="#" selected>I10AM</option>
                  </select>
                    

                </div>
          
              </div>

              
            </div>
          </div>
          <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
              <button type="button" class="btn botaovermelhonota" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" name="aluno_id" class="btn botaoazulnota" value="{{$valor3['aluno_id']}}" >Adicionar Nota</button>
          </div>
          </div>
      </div>
      </div>
    </form>
   


  <form method="POST" action="{{route('avaliar.aluno', $valor3['disciplina_id'])}}">
      @csrf
    <div class="modal"id="modal_nota_estagio" tabindex="-1" data-bs-backdrop="false" >
        <div class="modal-dialog modal-xl">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Avaliar Aluno</h5>
            <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <div class="row">
            <div class="col">
              <select  class="btn-sel form-select" >
                <option value="#" selected>Tipo De PROVA</option>
                <option value="#" >AC</option>
                <option value="#" >NPP</option>
                <option value="#" >NPT</option>
                <option value="#" >EXAME</option>
              </select>
           </div>

            <div class="col">

              <select  class="btn-sel form-select" >
                      <option value="#" selected>Turma</option>
                      <option value="#" s>I10AM</option>
              </select>
                

            </div>
      
          </div>
          <div class="bortabelasemscroll">
            <!-- /  Inicio da tabela  -->
            <table class="table table-custom table-escuro display" style="margin-top: 20px; width: 100%;" >
              <thead style="text-align: center">
                <tr>
                  <th scope="col"> Inseri aqui a Nota Administrativa</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><input class="form-control innota" type="text" name="ac" maxlength="4" id="notaimput"></td>
            
                </tr>
              </tbody>
            </table>
          </div>

        </div>
        <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
            <button type="button" class="btn botaovermelhonota" data-bs-dismiss="modal">Cancelar</button>
            <button type="subimit" name="aluno_id" class="btn botaoazulnota" value="{{$valor3['aluno_id']}}" >Adicionar Nota</button>
        </div>
        </div>
    </div>
    </div>
  </form>
 


@foreach ($aluno as $chave1 => $valor1)

@foreach ($valor1 as $chave2 => $valor2)

    @foreach ($valor2 as $chave3 => $valor3)

<form method="POST" action="{{route('avaliar.aluno', $valor3['disciplina_id'])}}">
    @csrf
  <div class="modal" id="modal_assiduidadeee{{$valor3['aluno_id']}}{{$valor3['disciplina_id']}}" tabindex="-1" data-bs-backdrop="false" >
      <div class="modal-dialog modal-xl">
      <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title">Avaliar Aluno</h5>
          <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <div class="row">
            <div class="col-lg-10">
                <div class="nomenumeroalunoinfo">
                    <h5 style="margin-left: 3px;"> <b>Nome:</b>{{$valor3['nome']}}</h5>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="nofimnomenumeroaluno">
                    <h5 class="nomenumeroalunoinfo"> <b>Nº:</b>{{$valor3['numero_aluno']}}</h5>
                </div>
            </div>
          </div>
        <div class="bortabelasemscroll">
          <!-- /  Inicio da tabela  -->
          <table class="table table-custom table-escuro display" style="margin-top: 20px; width: 100%;" >
            <thead style="text-align: center">
              <tr>
                <th scope="col">Nota de PT</th>
                <th scope="col">Nota da PAP</th>
                <th scope="col">Nota dO Estágio</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><input class="form-control innota" type="text" name="ac" maxlength="4" id="notaimput"></td>
                <td><input class="form-control innota" type="text" name="npp" maxlength="4" id="notaimput"></td>
                <td><input class="form-control innota" type="text" name="ac" maxlength="4" id="notaimput"></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row" style="margin-top: 5px;">
          <div class="col">
              <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none"  class="w-100"  rows="8" name="conteudo" id="area" placeholder="Dê uma Breve descrição sobre a Nota Adicionada(Opcional)"></textarea>
          </div>
        </div>
      </div>
      <div class="modal-footer" style="display: flex; justify-content: center; align-items: center;">
          <button type="button" class="btn botaovermelhonota" data-bs-dismiss="modal">Cancelar</button>
          <button type="subimit" name="aluno_id" class="btn botaoazulnota" value="{{$valor3['aluno_id']}}" >Avaliar Aluno</button>
      </div>
      </div>
  </div>
  </div>
</form>
@endforeach
@endforeach
@endforeach
  </div>

  @endif

  <script>

$(document).ready(function () {
  var $T= $("#avali").DataTable({
        pageLength: 50,
        "dom": '<"top"i>rt<"bottom"lp><"clear">',
        lengthChange: false,
        ordering: false,
        language:{

                "sEmptyTable": "Nenhum registro encontrado",
                "sInfo": "",
                "sInfoEmpty": "",
                "sInfoFiltered": "",
                "sInfoPostFix": "",
                "sInfoThousands": ".",
                "sLengthMenu": "MENU resultados por página",
                "sLoadingRecords": "Carregando...",
                "sProcessing": "Processando...",
                "sZeroRecords": "Nenhum registro encontrado",
                "sSearch": "Pesquisar",
                "oPaginate": {
                  "sNext": "Próximo",
                  "sPrevious": "Anterior",
                  "sFirst": "Primeiro",
                  "sLast": "Último"
                }
        },
        select: true
    });

        $("#filtro").on("change", function() {
        var filtro = $(this).val();
        if (filtro === 'Todos') {
          $T.column(5).search('').draw(); // Remove a filtragem da sexta coluna
        } else {
          $T.column(5).search(filtro).draw();  // Filtra a tabela pela sexta coluna com o valor selecionado
        }
      });
      $("#filtro1").on("change", function() {
        var filtro1 = $(this).val();
        if (filtro1 === 'Todos') {
          $T.column(0).search('').draw(); // Remove a filtragem da primeira coluna
        } else {
          $T.column(0).search(filtro1).draw();  // Filtra a tabela pela primeira coluna com o valor selecionado
        }
      });
      $("#filtro2").on("change", function() {
        var filtro2 = $(this).val();
        if (filtro2 === 'Todos') {
          $T.column(1).search('').draw(); // Remove a filtragem da segunda coluna
        } else {
          $T.column(1).search(filtro2).draw();  // Filtra a tabela pela segunda coluna com o valor selecionado
        }
      });
      $("#filtro3").on("change", function() {
        var filtro3 = $(this).val();
        if (filtro3 === 'Todos') {
          $T.column(2).search('').draw(); // Remove a filtragem da terceira coluna
        } else {
          $T.column(2).search(filtro3).draw(); // Filtrar a tabela pela terceira coluna com o valor selecionado
        }
      });
      $("#filtro4").on("change", function() {
        var filtro4 = $(this).val();
        if (filtro4 === 'Todos') {
          $T.column(3).search('').draw(); // Remove a filtragem da quarta coluna
        } else {
          $T.column(3).search(filtro4).draw(); // Filtra a tabela pela quarta coluna com o valor selecionado
        }
      });
      $("#filtro5").on("change", function() {
        var filtro5 = $(this).val();
        if (filtro5 === 'Todos') {
          $T.column(4).search('').draw(); // Remove a filtragem da quinta coluna
        } else {
          $T.column(4).search(filtro5).draw(); // Filtra a tabela pela quinta coluna com o valor selecionado
        }
      });
      $("#filtro7").on("change", function() {
        var filtro7 = $(this).val();
        if (filtro7 === 'Todos') {
          $T.column(6).search('').draw(); // Remove a filtragem da sétima coluna
        } else {
          $T.column(6).search(filtro7).draw(); // Filtra a tabela pela sétima coluna com o valor selecionado
        }
      });
      $("#filtro8").on("change", function() {
        var filtro8 = $(this).val();
        if (filtro8 === 'Todos') {
          $T.column(7).search('').draw(); // Remove a filtragem da oitava coluna
        } else {
          $T.column(7).search(filtro8).draw(); // Filtra a tabela pela oitava coluna com o valor selecionado
        }
      });
      $("#filtro9").on("change", function() {
        var filtro9 = $(this).val();
        if (filtro9 === 'Todos') {
          $T.column(8).search('').draw(); // Remove a filtragem da Nona coluna
        } else {
          $T.column(8).search(filtro9).draw(); // Filtra a tabela pela Nona coluna com o valor selecionado
        }

      });
      $("#filtro10").on("change", function() {
        var filtro10 = $(this).val();
        if (filtro10 === 'Todos') {
          $T.column(9).search('').draw(); // Remove a filtragem da  Décima coluna
        } else {
          $T.column(9).search(filtro10).draw(); // Filtra a tabela pela Décima coluna com o valor selecionado
        }
      });
      $("#filtro11").on("change", function() {
        var filtro11 = $(this).val();
        if (filtro11 === 'Todos') {
          $T.column(10).search('').draw(); // Remove a filtragem da  Décima-Primeira
        } else {
          $T.column(10).search(filtro11).draw(); // Filtra a tabela pela Décima-Primeira coluna com o valor selecionado
        }
      });
      $("#filtro12").on("change", function() {
        var filtro12 = $(this).val();
        if (filtro12 === 'Todos') {
          $T.column(11).search('').draw(); // Remove a filtragem da  Décima-Segunda
        } else {
          $T.column(11).search(filtro12).draw(); // Filtra a tabela pela Décima-Segunda coluna com o valor selecionado
        }
      });
      $("#filtro13").on("change", function() {
        var filtro13 = $(this).val();
        if (filtro13 === 'Todos') {
          $T.column(12).search('').draw(); // Remove a filtragem da  Décima-terceira
        } else {
          $T.column(12).search(filtro13).draw(); // Filtra a tabela pela Décima-terceira coluna com o valor selecionado
        }
      });
      $("#filtro14").on("change", function() {
        var filtro14 = $(this).val();
        if (filtro14 === 'Todos') {
          $T.column(13).search('').draw(); // Remove a filtragem da  Décima-quarta
        } else {
          $T.column(13).search(filtro14).draw(); // Filtra a tabela pela Décima-quarta coluna com o valor selecionado
        }

      });
      $("#filtro15").on("change", function() {
        var filtro15 = $(this).val();
        if (filtro15 === 'Todos') {
          $T.column(14).search('').draw(); // Remove a filtragem da  Décima-quinta
        } else {
          $T.column(14).search(filtro15).draw(); // Filtra a tabela pela Décima-quinta coluna com o valor selecionado
        }

      });
        $("#filtro16").on("change", function() {
        var filtro16 = $(this).val();
        if (filtro16 === 'Todos') {
          $T.column(15).search('').draw(); // Remove a filtragem da  Décima-Sexta
        } else {
          $T.column(15).search(filtro16).draw(); // Filtra a tabela pela Décima-Sexta coluna com o valor selecionado
        }

      });
        $("#filtro17").on("change", function() {
        var filtro17 = $(this).val();
        if (filtro17 === 'Todos') {
          $T.column(16).search('').draw(); // Remove a filtragem da  Décima-Sétima
        } else {
          $T.column(16).search(filtro17).draw(); // Filtra a tabela pela Décima-Sétima coluna com o valor selecionado
        }

      });

    $("#filtro9").trigger("change");
    $("#filtro10").trigger("change");
    $("#filtro11").trigger("change");





$(".paginate_button").addClass("paginate_button");
$(".paginate").addClass("float-end");

// Função para Pesquisar os dados apartir da barra de pesquisas
$("#pesquisa").on("keyup", function () {
   $T.search(this.value).draw();

});

 // Recuperar os valores dos selects do localStorage e selecionar as opções correspondentes
 $("#filtro9").val(getSelectedOption("filtro9"));
 $("#filtro10").val(getSelectedOption("filtro10"));
 $("#filtro11").val(getSelectedOption("filtro11"));

});
  </script>

  <!-- Termina a tabela -->
</main>
@endsection
