@extends('layouts.main')

@section('title', 'Boletim de Notas')

@section('conteudo')
<main id="main" class="main">


      <!-- /  Inicio da tabela de inscritos -->
      <table class="table table-custom table-escuro" style="margin-top: 20px;" id="Boletim">
        <thead>
          <tr>
            <th scope="col">Disciplina</th>
            <th scope="col">MAC</th>
            <th scope="col">NPP</th>
            <th scope="col">NPT</th>
            <th scope="col">MT1</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($disciplinar as $item)
            @php
              $getMAC1 = getMAC1($aluno->aluno_id, $item['disciplina']->disciplina_id);
              $getNPP1 = getNPP1($aluno->aluno_id, $item['disciplina']->disciplina_id);
              $getNPT1 = getNPT1($aluno->aluno_id, $item['disciplina']->disciplina_id);
              $getMT1 = getMT1($aluno->aluno_id, $item['disciplina']->disciplina_id);
            @endphp
            <tr>
              <th>
                {{ $item['disciplina']->nome_disciplina }}
              </th>
              @if ($getMAC1 <= 9)
                  <td style="color: red">
              @else
                  <td>
              @endif
                {{ getMAC1($aluno->aluno_id, $item['disciplina']->disciplina_id) }}
              </td>
              @if ($getNPP1 <= 9)
                  <td style="color: red">
              @else
                  <td>
              @endif
                {{ getNPP1($aluno->aluno_id, $item['disciplina']->disciplina_id) }}
              </td>
              @if ($getNPT1 <= 9)
                  <td style="color: red">
              @else
                  <td>
              @endif
                {{ getNPT1($aluno->aluno_id, $item['disciplina']->disciplina_id) }}
              </td>
              @if ($getMT1 <= 9)
                  <td style="color: red">
              @else
                  <td>
              @endif
                {{ getMT1($aluno->aluno_id, $item['disciplina']->disciplina_id) }}
              </td>
             
            </tr>
          @endforeach
        </tbody>
      </table>     
      
      <script>

        $(document).ready(function () {
          var $T= $("#Boletim").DataTable({
                pageLength: 6,
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
        

    </main>

@endsection