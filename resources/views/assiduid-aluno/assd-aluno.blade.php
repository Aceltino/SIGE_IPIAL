@extends('layouts.main')

@section('title', 'Assiduidade De Aluno')

@section('conteudo')
<main id="main" class="main">

    @if (session()->has('erro'))
    <div class="alert alert-danger">
      <i class="bi bi-exclamation-octagon me-1"></i>
        {{session('erro')}}
        <button class="botaofecharerro">
          <i class="bi bi-x"></i>
        </button>
    </div>
    @endif
    @if (session()->has('sucesso'))
    <div class="alert alert-success">
      <i class="bi bi-check-circle me-1"></i>
        {{session('sucesso')}}
        <button class="botaofechasucesso">
          <i class="bi bi-x"></i>
        </button>
    </div>
    @endif
  <div class="pagetitle">
    <div class="row">
          <div class="col">
              <h1>Assiduidade De Aluno</h1>
          </div>

          <div class="col-lg-2">
            <select  class="btn-sel form-select" id="filtro8">
              @foreach ($cursos as $curso)
                <option value="{{$curso}}">{{$curso}}</option>
              @endforeach
            </select>
          </div>






          <div class="col-lg-2">
            <select  class="btn-sel form-select" id="filtro9">
              @foreach ($nome_disciplina as $disciplina)
                <option value="{{$disciplina}}">{{$disciplina}}</option>
              @endforeach
            </select>
          </div>


          <div class="col-lg-2">
            <select  class="btn-sel form-select" id="filtro10" >
              @foreach ($nome_turma as $turma)
                <option value="{{$turma}}">{{$turma}}</option>
              @endforeach
            </select>
          </div>
    </div>

  <div class="procurar">
  <div class="proc-form d-flex align-items-center">
      <input id="pesquisa" type="text" placeholder="Digite o Número ou o Nome do Aluno que Procuras" name="" class="campo-pesq">
      <button  title="Search"><i class="bi bi-search"></i></button>
  </div>
  </div>
  <form method="POST" action="{{route('marcar.falta')}}">
    @csrf
    <div class="row" style="display: flex
    " >
    <div class="col-4" style="display: flex; justify-content: start margin-top: 4px;" >

        <div class="ola" style="margin-top: 4px; width: 50%;">
            <select  class="btn-sel form-select" id="filtro10" name="tempo">
              @foreach ($tempos as $tempo)
                <option  value="{{$tempo->tempo_id}}">{{$tempo->tempo}} TEMPO</option>
              @endforeach
            </select>
          </div>
    </div>
    <div class="col" style=" display: flex; justify-content: end;  margin-top: 4px;">

        <div class="form-group" >
          <button class="btn botaoazul" name="tipo_falta" value="presencial"  type="submit" style="margin-right: 3px;">Presencial</button>
          <button class="btn botaovermelho" name="tipo_falta" value="disciplinar" type="submit" style="margin-right: 3px;">Disciplinar</button>
          <button class="btn botaopreto" name="tipo_falta" value="material" style="background-color: rgb(92, 75, 20)" type="submit" style="margin-right: 3px;">Material</button>
        </div>
    </div>


    </div>



  <div class="bortabela" style="box-shadow: 0 5px 15px 0 rgba(82, 63, 105, 0.2); border: 1px solid white; border-radius: 3px; padding: 2px;">
    <div class="pagetitle">
        <div class="row">
            <div class="col datatabelapeddin">
              <h1 style="text-align: center; font-size: 25px; ">Data: {{date('d/m/Y')}}</h1>
            </div>
        </div>
    </div>


      <!-- /  Inicio da tabela  -->
      <table id="assid" class=" table table-custom table-escuro " style="margin-top: 20px; width: 100%;" >
        <thead style="text-align: center">
          <tr>
            <th scope="col">Nº</th>
            <th scope="col">Nome do Aluno</th>
            <th scope="col">F.Presencial</th>
            <th scope="col">F.Disciplinar</th>
            <th scope="col">f.Material</th>
            <th scope="col">Marcar Falta</th>
            <th scope="col">Histórico</th>
            <th scope="col" hidden>curso</th>
            <th scope="col" hidden>Disciplina</th>
            <th scope="col" hidden>Turma</th>
            <th scope="col" hidden>disciplina</th>
            <th scope="col" hidden>turma</th>
            <th scope="col" hidden>professordisciplina</th>
          </tr>
        </thead>
        <tbody>
          @if (!empty($alunos))
            @foreach ($alunos as $chave1 => $valor1)

              @foreach ($valor1 as $chave2 => $valor2)

                  @foreach ($valor2 as $chave3 => $valor3)


                      <tr style="text-align: center;">
                          <th scope="row">{{$valor3['numero_aluno']}}</th>
                          <td>{{$valor3['nome']}}</td>
                          <td>{{$valor3['falta_presencial']}}</td>
                          <td>{{$valor3['falta_disciplinar']}}</td>
                          <td>{{$valor3['falta_material']}}</td>
                          <td>
                            <div class="btn-group-toggle" data-toggle="buttons">
                                <input style="width: 20px; height: 20px;" type="checkbox" name="aluno[]"  value="{{$valor3['aluno_id']}}">
                            </div>

                            </td>
                            <td style="text-align: center">
                              <a href="{{route('editar.assiduidade', [$valor3['aluno_id'], $valor3['disciplina_id']])}}" class="btn linkeditar">Hiatórico</a>
                            </td>

                          <td hidden>{{$valor3['curso']}}</td>
                          <td hidden>{{$valor3['nome_disciplina']}}</td>
                          <td hidden>{{$valor3['nome_turma']}}</td>
                          <td hidden><input type="text" name="disciplina[]" value="{{$valor3['disciplina_id']}}"></td>
                          <td hidden><input type="text" name="turma[]" value="{{$valor3['turma_id']}}"></td>
                          <td hidden><input type="text" name="professor_disciplina[]" value="{{$professor[$chave1]['professor_disciplina_id']}}"></td>
                      </tr>
                  @endforeach
              @endforeach
          @endforeach
      </tbody>
    </table>
    </form>

  </div>
  <!-- Termina a tabela -->

  @foreach ($alunos as $chave1 => $valor1)

  @foreach ($valor1 as $chave2 => $valor2)

      @foreach ($valor2 as $chave3 => $valor3)

    <!-- Início da Modal -->
    <form method="POST" action="{{route('marcar.falta', [$valor3['aluno_id'], $valor3['disciplina_id'], $valor3['turma_id'], $professor[$chave1]['professor_disciplina_id']])}}">
        @csrf
      <div class="modal" id="modal_assiduidade{{$valor3['aluno_id']}}{{$valor3['disciplina_id']}}" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Marcar Falta</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="alert alert-warning" role="alert">
                      <h6>Atenção: Estás a Marcar uma falta <b style="color: rgb(132, 132, 255)">Presencial</b> ao Aluno(a) !! </h6><h6> Estás prestes a inserir uma falta no dia {{date('d/m/Y')}} ao Aluno(a) {{$valor3['nome']}}</h6>
                      <h5>Deseja Realmente Continuar?</h5>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100"  rows="5" name="conteudo"  id="area" placeholder="Descreve ou não a causa da Marcação da Falta"></textarea>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" class="btn btn-primary" name="tipo_falta" value="Presencial">Confirmar</button>
          </div>
          </div>
      </div>
      </div>
  </form>
  @endforeach
  @endforeach
@endforeach
<!-- Fím da modal -->

 <!-- Início da Modal Falta vermelha -->
 @foreach ($alunos as $chave1 => $valor1)

 @foreach ($valor1 as $chave2 => $valor2)

     @foreach ($valor2 as $chave3 => $valor3)

   <!-- Início da Modal -->
   <form method="POST" action="{{route('marcar.falta', [$valor3['aluno_id'], $valor3['disciplina_id'], $valor3['turma_id'], $professor[$chave1]['professor_disciplina_id']])}}">
       @csrf
     <div class="modal" id="modal_assiduidadee{{$valor3['aluno_id']}}{{$valor3['disciplina_id']}}" tabindex="-1" data-bs-backdrop="false" >
         <div class="modal-dialog">
         <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title">Marcar Falta</h5>
             <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <div class="row">
                 <div class="alert alert-warning" role="alert">
                     <h6>Atenção: Estás a Marcar uma falta <b style="color: rgb(255, 11, 11)">Disciplinar</b> ao Aluno(a) !! </h6><h6> Estás prestes a inserir uma falta no dia {{date('d/m/Y')}} ao Aluno(a) {{$valor3['nome']}}</h6>
                     <h5>Deseja Realmente Continuar?</h5>
                 </div>
             </div>
             <div class="row">
                 <div class="col">
                     <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100"  rows="5" name="conteudo"  id="area" placeholder="Descreve ou não a causa da Marcação da Falta"></textarea>
                 </div>
             </div>
         </div>
         <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
             <button type="subimit" class="btn btn-primary" name="tipo_falta" value="Disciplinar">Confirmar</button>
         </div>
         </div>
     </div>
     </div>
 </form>
 @endforeach
 @endforeach
@endforeach

 <!-- Início da Modal Falta vermelha FIM -->


 <!-- Início da Modal Falta Materiais -->

 @foreach ($alunos as $chave1 => $valor1)

  @foreach ($valor1 as $chave2 => $valor2)

      @foreach ($valor2 as $chave3 => $valor3)

    <form method="POST" action="{{route('marcar.falta', [$valor3['aluno_id'], $valor3['disciplina_id'], $valor3['turma_id'], $professor[$chave1]['professor_disciplina_id']])}}">
        @csrf
      <div class="modal" id="modal_assiduidadeee{{$valor3['aluno_id']}}{{$valor3['disciplina_id']}}" tabindex="-1" data-bs-backdrop="false" >
          <div class="modal-dialog">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title">Marcar Falta</h5>
              <button type="button" class="btn-close"data-bs-toggle="modal" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                  <div class="alert alert-warning" role="alert">
                      <h6>Atenção: Estás a Marcar uma falta de <b style="color: rgb(10, 10, 10)">Materiais</b> ao Aluno(a) !! </h6><h6> Estás prestes a inserir uma falta no dia {{date('d/m/Y')}} ao Aluno(a) {{$valor3['nome']}}</h6>
                      <h5>Deseja Realmente Continuar?</h5>
                  </div>
              </div>
              <div class="row">
                  <div class="col">
                      <textarea style="border: 1px solid; border-color: rgb(204, 204, 204); border-radius: 5px; outline: none" class="w-100"  rows="5" name="conteudo"  id="area" placeholder="Descreve ou não a causa da Marcação da Falta"></textarea>
                  </div>
              </div>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
              <button type="subimit" class="btn btn-primary" name="tipo_falta" value="Material">Confirmar</button>
          </div>
          </div>
      </div>
      </div>
  </form>
  @endforeach
  @endforeach
@endforeach
 <!-- Início da Modal Falta Materiais FIM -->
@endif

<script>

//**************************************************************************************************** ****************/


$(document).ready(function () {
    var $T= $("#assid").DataTable({
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
          select: true,
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



      $("#filtro8").trigger("change");
      $("#filtro9").trigger("change");
      $("#filtro10").trigger("change");



  $(".paginate_button").addClass("paginate_button");
  $(".paginate").addClass("float-end");

  // Função para Pesquisar os dados apartir da barra de pesquisas
  $("#pesquisa").on("keyup", function () {
     $T.search(this.value).draw();

  });


    // Recuperar os valores dos selects do localStorage e selecionar as opções correspondentes
    $("#filtro8").val(getSelectedOption("filtro8"));
    $("#filtro9").val(getSelectedOption("filtro9"));
    $("#filtro10").val(getSelectedOption("filtro10"));

  });
</script>
</main>
@endsection
