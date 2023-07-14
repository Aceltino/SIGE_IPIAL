//DATATABLES JAVASCRIPT JQUERY
$(document).ready(function () {
  //Ativa o Javascript com jquery e add umas configurações basicas que elimina as cenas que já vêm com ele
  var $T= $("#Pauta").DataTable({
        pageLength: 22, //Número de Paginação na Views
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
    // Fim de inicialização

        $('.ellipsis').tooltipster({
          theme: 'tooltipster-noir', // Estilo do tooltip (você pode escolher outro tema)
          contentAsHTML: true, // Permitir conteúdo HTML no tooltip
          interactive: true, // Permitir interação com o tooltip
          side: 'bottom', // Posicionamento do tooltip
          distance: 5 // Distância entre o tooltip e o elemento
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


$(".paginate_button").addClass("paginate_button");
$(".paginate").addClass("float-end");


$("#pesquisa").on("keyup", function () {
   $T.search(this.value).draw();

});

});

//Fim da tabela de inscrições





























//**************************************************************************************************** ****************/

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


$(".paginate_button").addClass("paginate_button");
$(".paginate").addClass("float-end");


$("#pesquisa").on("keyup", function () {
   $T.search(this.value).draw();

});

});


//**************************************************************************************************** ****************/















































//**************************************************************************************************** ****************/


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


$(".paginate_button").addClass("paginate_button");
$(".paginate").addClass("float-end");


$("#pesquisa").on("keyup", function () {
   $T.search(this.value).draw();

});

});
