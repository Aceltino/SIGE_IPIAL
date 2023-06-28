//Javascript da tabela de inscrições views
var totalRegistros = 0;
$(document).ready(function () {
  var $T= $("#Inscricoes-").DataTable({
    initComplete: function(settings, json) {
      // Verifica a contagem de registros
      if (totalRegistros > 15) {
        // Ativa o DataTables
        $T.draw();
      }
    },
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
    

        $('.ellipsis').tooltipster({
          theme: 'tooltipster-shadow', // Estilo do tooltip (você pode escolher outro tema)
          contentAsHTML: true, // Permitir conteúdo HTML no tooltip
          interactive: true, // Permitir interação com o tooltip
          side: 'bottom', // Posicionamento do tooltip
          distance: 5 // Distância entre o tooltip e o elemento
      });
   

    $("#filtro").on("change", function() {
        var filtro = $(this).val(); 
        $T.column(5).search(filtro).draw(); // Filtra a tabela pela sexta coluna com o valor selecionado
      });
      $("#filtro1").on("change", function() {
        var filtro1 = $(this).val(); 
        $T.column(0).search(filtro1).draw(); // Filtra a tabela pela primeira coluna com o valor selecionado
      });
      $("#filtro2").on("change", function() {
        var filtro2 = $(this).val(); 
        $T.column(1).search(filtro2).draw(); // Filtra a tabela pela segundacoluna com o valor selecionado
      });
      $("#filtro3").on("change", function() {
        var filtro3 = $(this).val(); 
        $T.column(2).search(filtro3).draw(); // Filtra a tabela pela  terceira coluna com o valor selecionado
      });
      $("#filtro4").on("change", function() {
        var filtro4 = $(this).val(); 
        $T.column(3).search(filtro4).draw(); // Filtra a tabela pela quarta coluna com o valor selecionado
      });
      $("#filtro5").on("change", function() {
        var filtro5 = $(this).val(); 
        $T.column(4).search(filtro5).draw(); // Filtra a tabela pela quinta coluna com o valor selecionado
      });
      $("#filtro7").on("change", function() {
        var filtro7 = $(this).val(); 
        $T.column(6).search(filtro7).draw(); // Filtra a tabela pela sétima coluna com o valor selecionado
      });
      $("#filtro8").on("change", function() {
        var filtro8 = $(this).val(); 
        $T.column(7).search(filtro8).draw(); // Filtra a tabela pela oitava coluna com o valor selecionado
      });
      $("#filtro9").on("change", function() {
        var filtro9 = $(this).val(); 
        $T.column(8).search(filtro9).draw(); // Filtra a tabela pela Nona coluna com o valor selecionado
      });
      $("#filtro10").on("change", function() {
        var filtro10 = $(this).val(); 
        $T.column(9).search(filtro10).draw(); // Filtra a tabela pela Décima coluna com o valor selecionado
      });
      $("#filtro11").on("change", function() {
        var filtro11 = $(this).val(); 
        $T.column(10).search(filtro11).draw(); // Filtra a tabela pela Décima-Primeira coluna com o valor selecionado
      });
      $("#filtro12").on("change", function() {
        var filtro12 = $(this).val(); 
        $T.column(11).search(filtro12).draw(); // Filtra a tabela pela Décima-Segunda coluna com o valor selecionado
      });
      $("#filtro13").on("change", function() {
        var filtro13 = $(this).val(); 
        $T.column(12).search(filtro13).draw(); // Filtra a tabela pela Décima-terceira coluna com o valor selecionado
      });
      $("#filtro14").on("change", function() {
        var filtro14 = $(this).val(); 
        $T.column(13).search(filtro14).draw(); // Filtra a tabela pela Décima-quarta coluna com o valor selecionado
      });
      $("#filtro15").on("change", function() {
        var filtro15 = $(this).val(); 
        $T.column(14).search(filtro15).draw(); // Filtra a tabela pela Décima-quinta coluna com o valor selecionado
      });     
       $("#filtro16").on("change", function() {
        var filtro16 = $(this).val(); 
        $T.column(15).search(filtro16).draw(); // Filtra a tabela pela Décima-Sexta coluna com o valor selecionado
      });     
       $("#filtro17").on("change", function() {
        var filtro17 = $(this).val(); 
        $T.column(16).search(filtro17).draw(); // Filtra a tabela pela Décima-Sétima coluna com o valor selecionado
      });
    
$(".paginate_button").addClass("paginate_button");
$(".paginate").addClass("float-end");


$("#pesquisa").on("keyup", function () {
   $T.search(this.value).draw();
   
});
 
});

//Fim da tabela de inscrições


$(document).ready(function () {
  var $T= $("#matricula-tab").DataTable({
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
        select: true,
        columnDefs: [
          {
              targets: 1, // Índice da coluna que você deseja limitar
              render: function (data, type, row) {
                  if (type === 'display' && data.length > 40) { // Limite de 50 caracteres
                      return  data.substring(0, 9) + '...' ; // Adiciona reticências
                  }
                  return data;
              }
          }
      ]
        
    });

        $('.ellipsis').tooltipster({
          theme: 'tooltipster-noir', // Estilo do tooltip (você pode escolher outro tema)
          contentAsHTML: true, // Permitir conteúdo HTML no tooltip
          interactive: true, // Permitir interação com o tooltip
          side: 'bottom', // Posicionamento do tooltip
          distance: 5 // Distância entre o tooltip e o elemento
      });
   

    $("#filtro").on("change", function() {
        var filtro = $(this).val(); 
        $T.column(5).search(filtro).draw(); // Filtra a tabela pela sexta coluna com o valor selecionado
      });
      $("#filtro1").on("change", function() {
        var filtro1 = $(this).val(); 
        $T.column(0).search(filtro1).draw(); // Filtra a tabela pela primeira coluna com o valor selecionado
      });
      $("#filtro2").on("change", function() {
        var filtro2 = $(this).val(); 
        $T.column(1).search(filtro2).draw(); // Filtra a tabela pela segundacoluna com o valor selecionado
      });
      $("#filtro3").on("change", function() {
        var filtro3 = $(this).val(); 
        $T.column(2).search(filtro3).draw(); // Filtra a tabela pela  terceira coluna com o valor selecionado
      });
      $("#filtro4").on("change", function() {
        var filtro4 = $(this).val(); 
        $T.column(3).search(filtro4).draw(); // Filtra a tabela pela quarta coluna com o valor selecionado
      });
      $("#filtro5").on("change", function() {
        var filtro5 = $(this).val(); 
        $T.column(4).search(filtro5).draw(); // Filtra a tabela pela quinta coluna com o valor selecionado
      });
      $("#filtro7").on("change", function() {
        var filtro7 = $(this).val(); 
        $T.column(6).search(filtro7).draw(); // Filtra a tabela pela sétima coluna com o valor selecionado
      });
      $("#filtro8").on("change", function() {
        var filtro8 = $(this).val(); 
        $T.column(7).search(filtro8).draw(); // Filtra a tabela pela oitava coluna com o valor selecionado
      });
      $("#filtro9").on("change", function() {
        var filtro9 = $(this).val(); 
        $T.column(8).search(filtro9).draw(); // Filtra a tabela pela Nona coluna com o valor selecionado
      });
      $("#filtro10").on("change", function() {
        var filtro10 = $(this).val(); 
        $T.column(9).search(filtro10).draw(); // Filtra a tabela pela Décima coluna com o valor selecionado
      });
      $("#filtro11").on("change", function() {
        var filtro11 = $(this).val(); 
        $T.column(10).search(filtro11).draw(); // Filtra a tabela pela Décima-Primeira coluna com o valor selecionado
      });
      $("#filtro12").on("change", function() {
        var filtro12 = $(this).val(); 
        $T.column(11).search(filtro12).draw(); // Filtra a tabela pela Décima-Segunda coluna com o valor selecionado
      });
      $("#filtro13").on("change", function() {
        var filtro13 = $(this).val(); 
        $T.column(12).search(filtro13).draw(); // Filtra a tabela pela Décima-terceira coluna com o valor selecionado
      });
      $("#filtro14").on("change", function() {
        var filtro14 = $(this).val(); 
        $T.column(13).search(filtro14).draw(); // Filtra a tabela pela Décima-quarta coluna com o valor selecionado
      });
      $("#filtro15").on("change", function() {
        var filtro15 = $(this).val(); 
        $T.column(14).search(filtro15).draw(); // Filtra a tabela pela Décima-quinta coluna com o valor selecionado
      });     
       $("#filtro16").on("change", function() {
        var filtro16 = $(this).val(); 
        $T.column(15).search(filtro16).draw(); // Filtra a tabela pela Décima-Sexta coluna com o valor selecionado
      });     
       $("#filtro17").on("change", function() {
        var filtro17 = $(this).val(); 
        $T.column(16).search(filtro17).draw(); // Filtra a tabela pela Décima-Sétima coluna com o valor selecionado
      });
    
$(".paginate_button").addClass("paginate_button");
$(".paginate").addClass("float-end");


$("#pesquisa").on("keyup", function () {
   $T.search(this.value).draw();
   
});
 
});


$(document).ready(function () {
  var $T= $("#tabela").DataTable({
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
        $T.column(5).search(filtro).draw(); // Filtra a tabela pela sexta coluna com o valor selecionado
      });
      $("#filtro1").on("change", function() {
        var filtro1 = $(this).val(); 
        $T.column(0).search(filtro1).draw(); // Filtra a tabela pela primeira coluna com o valor selecionado
      });
      $("#filtro2").on("change", function() {
        var filtro2 = $(this).val(); 
        $T.column(1).search(filtro2).draw(); // Filtra a tabela pela segunda coluna com o valor selecionado
      });
      $("#filtro3").on("change", function() {
        var filtro3 = $(this).val(); 
        $T.column(2).search(filtro3).draw(); // Filtra a tabela pela  terceira coluna com o valor selecionado
      });
      $("#filtro4").on("change", function() {
        var filtro4 = $(this).val(); 
        $T.column(3).search(filtro4).draw(); // Filtra a tabela pela quarta coluna com o valor selecionado
      });
      $("#filtro5").on("change", function() {
        var filtro5 = $(this).val(); 
        $T.column(4).search(filtro5).draw(); // Filtra a tabela pela quinta coluna com o valor selecionado
      });
      $("#filtro7").on("change", function() {
        var filtro7 = $(this).val(); 
        $T.column(6).search(filtro7).draw(); // Filtra a tabela pela sétima coluna com o valor selecionado
      });
      $("#filtro8").on("change", function() {
        var filtro8 = $(this).val(); 
        $T.column(7).search(filtro8).draw(); // Filtra a tabela pela oitava coluna com o valor selecionado
      });
      $("#filtro9").on("change", function() {
        var filtro9 = $(this).val(); 
        $T.column(8).search(filtro9).draw(); // Filtra a tabela pela Nona coluna com o valor selecionado
      });
      $("#filtro10").on("change", function() {
        var filtro10 = $(this).val(); 
        $T.column(9).search(filtro10).draw(); // Filtra a tabela pela Décima coluna com o valor selecionado
      });
      $("#filtro11").on("change", function() {
        var filtro11 = $(this).val(); 
        $T.column(10).search(filtro11).draw(); // Filtra a tabela pela Décima-Primeira coluna com o valor selecionado
      });
      $("#filtro12").on("change", function() {
        var filtro12 = $(this).val(); 
        $T.column(11).search(filtro12).draw(); // Filtra a tabela pela Décima-Segunda coluna com o valor selecionado
      });
      $("#filtro13").on("change", function() {
        var filtro13 = $(this).val(); 
        $T.column(12).search(filtro13).draw(); // Filtra a tabela pela Décima-terceira coluna com o valor selecionado
      });
      $("#filtro14").on("change", function() {
        var filtro14 = $(this).val(); 
        $T.column(13).search(filtro14).draw(); // Filtra a tabela pela Décima-quarta coluna com o valor selecionado
      });
      $("#filtro15").on("change", function() {
        var filtro15 = $(this).val(); 
        $T.column(14).search(filtro15).draw(); // Filtra a tabela pela Décima-quinta coluna com o valor selecionado
      });     
       $("#filtro16").on("change", function() {
        var filtro16 = $(this).val(); 
        $T.column(15).search(filtro16).draw(); // Filtra a tabela pela Décima-Sexta coluna com o valor selecionado
      });     
       $("#filtro17").on("change", function() {
        var filtro17 = $(this).val(); 
        $T.column(16).search(filtro17).draw(); // Filtra a tabela pela Décima-Sétima coluna com o valor selecionado
      });
    
$(".paginate_button").addClass("paginate_button");
$(".paginate").addClass("float-end");


$("#pesquisa").on("keyup", function () {
   $T.search(this.value).draw();
   
});
 
});

$(document).ready(function () {
  var $T= $("#avaliacaotab").DataTable({
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
    applyInitialFilters();

    // Função para aplicar os filtros iniciais
    function applyInitialFilters() {
        var filtro1 = $("#filtro10").val();
        var filtro2 = $("#filtro11").val();
        var filtro3 = $("#filtro12").val();
        // Obter os valores selecionados dos demais selects

        // Aplicar os filtros iniciais
        $T.column(9).search(filtro1).draw(); 
        $T.column(10).search(filtro2).draw(); 
        $T.column(11).search(filtro3).draw(); 
        
    }
    $("#filtro").on("change", function() {
      var filtro = $(this).val(); 
      $T.column(5).search(filtro).draw(); // Filtra a tabela pela sexta coluna com o valor selecionado
    });
    $("#filtro1").on("change", function() {
      var filtro1 = $(this).val(); 
      $T.column(0).search(filtro1).draw(); // Filtra a tabela pela primeira coluna com o valor selecionado
    });
    $("#filtro2").on("change", function() {
      var filtro2 = $(this).val(); 
      $T.column(1).search(filtro2).draw(); // Filtra a tabela pela segunda coluna com o valor selecionado
    });
    $("#filtro3").on("change", function() {
      var filtro3 = $(this).val(); 
      $T.column(2).search(filtro3).draw(); // Filtra a tabela pela  terceira coluna com o valor selecionado
    });
    $("#filtro4").on("change", function() {
      var filtro4 = $(this).val(); 
      $T.column(3).search(filtro4).draw(); // Filtra a tabela pela quarta coluna com o valor selecionado
    });
    $("#filtro5").on("change", function() {
      var filtro5 = $(this).val(); 
      $T.column(4).search(filtro5).draw(); // Filtra a tabela pela quinta coluna com o valor selecionado
    });
    $("#filtro7").on("change", function() {
      var filtro7 = $(this).val(); 
      $T.column(6).search(filtro7).draw(); // Filtra a tabela pela sétima coluna com o valor selecionado
    });
    $("#filtro8").on("change", function() {
      var filtro8 = $(this).val(); 
      $T.column(7).search(filtro8).draw(); // Filtra a tabela pela oitava coluna com o valor selecionado
    });
    $("#filtro9").on("change", function() {
      var filtro9 = $(this).val(); 
      $T.column(8).search(filtro9).draw(); // Filtra a tabela pela Nona coluna com o valor selecionado
    });
    $("#filtro10").on("change", function() {
      var filtro10 = $(this).val(); 
      $T.column(9).search(filtro10).draw(); // Filtra a tabela pela Décima coluna com o valor selecionado
    });
    $("#filtro11").on("change", function() {
      var filtro11 = $(this).val(); 
      $T.column(10).search(filtro11).draw(); // Filtra a tabela pela Décima-Primeira coluna com o valor selecionado
    });
    $("#filtro12").on("change", function() {
      var filtro12 = $(this).val(); 
      $T.column(11).search(filtro12).draw(); // Filtra a tabela pela Décima-Segunda coluna com o valor selecionado
    });
    $("#filtro13").on("change", function() {
      var filtro13 = $(this).val(); 
      $T.column(12).search(filtro13).draw(); // Filtra a tabela pela Décima-terceira coluna com o valor selecionado
    });
    $("#filtro14").on("change", function() {
      var filtro14 = $(this).val(); 
      $T.column(13).search(filtro14).draw(); // Filtra a tabela pela Décima-quarta coluna com o valor selecionado
    });
    $("#filtro15").on("change", function() {
      var filtro15 = $(this).val(); 
      $T.column(14).search(filtro15).draw(); // Filtra a tabela pela Décima-quinta coluna com o valor selecionado
    });     
     $("#filtro16").on("change", function() {
      var filtro16 = $(this).val(); 
      $T.column(15).search(filtro16).draw(); // Filtra a tabela pela Décima-Sexta coluna com o valor selecionado
    });     
     $("#filtro17").on("change", function() {
      var filtro17 = $(this).val(); 
      $T.column(16).search(filtro17).draw(); // Filtra a tabela pela Décima-Sétima coluna com o valor selecionado
    });
    
$(".paginate_button").addClass("paginate_button");
$(".paginate").addClass("float-end");


$("#pesquisa").on("keyup", function () {
   $T.search(this.value).draw();
   
});
 
});