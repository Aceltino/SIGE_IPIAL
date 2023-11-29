axios.get('/api/turmas')
        .then(function(response) {
            const registros = response.data;

            const tabelaRegistros = document.getElementById('Tabturmas');
            const tbody = tabelaRegistros.getElementsByTagName('tbody')[0];

            registros.forEach(function(tregistro) {

                const row = tbody.insertRow();
                let corBotao = '';

                if(tregistro.vagasTurma == 0){
                    corBotao = 'style="Color:red;"';

                }else{
                    corBotao = 'style="Color:green;"';

                }

                const botaoVisualizarTurma = `class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal${tregistro.IdTurma}"`;

                row.innerHTML = `
                    <td>${tregistro.nomeTurma}</td>
                    <td>${tregistro.classeTurma}</td>
                    <td>${tregistro.turnoTurma}</td>
                    <td ${corBotao}> ${tregistro.vagasTurma} </td>
                    <td>${tregistro.cursoTurma}</td>
                    <td>${tregistro.anolectivoTurma}</td>
                    <td class="no-print">
                    <i ${botaoVisualizarTurma}></i>
                    <a href="#" class="btn btn-success d-none">Ad coordenador</a>
                    </td>

                `;

                const modal = `
                <div class="modal fade" id="ExtralargeModal${tregistro.IdTurma}" tabindex="-1" data-bs-backdrop="false">
                    <div class="modal-dialog modal-xl">
                    <div class="modal-content">

                        <div class="provisorio">
                            <div class="card-icon-modal rounded-circle d-flex align-items-center justify-content-flex-end">
                                <i class="bi bi-x-lg" data-bs-toggle="modal" aria-label="Close" data-bs-dismiss="modal"></i>
                            </div>
                        </div>

                        <div class="cabecalho-modal">
                            <div class="row">
                                <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                                <h1>Dados Da Turma</h1>
                                </div>
                            </div>
                        </div>

                        <div class="corpo-modal">
                        <form class="form-inativo">
                            <div class="dados-pessoais">
                            <div class="area-input form-group">
                                <label>Nome Da Turma: </label><input class="form-control" type="text" name="" value="${tregistro.nomeTurma}"  disabled style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                            </div>

                            <div class="row">
                                <div class="col form-group gap-1 ">
                                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select"  disabled style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                                    <option  disabled>Classe:</option>
                                    <option value="${tregistro.classeTurma}" selected>${tregistro.classeTurma}</option>
                                </select>
                                </div>

                                <div class="col form-group gap-1 ">
                                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select"  disabled style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                                    <option disabled>Turno:</option>
                                    <option value="${tregistro.turnoTurma}" selected>${tregistro.turnoTurma}</option>
                                </select>
                                </div>

                                <div class="form-group col">
                                <select name="opcoes" id="opcoes" oninput="this.className = ''" class="form-select"  disabled style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                                    <option  disabled>CURSO</option>
                                    <option value ="${tregistro.cursoTurma}" selected>${tregistro.cursoTurma}</option>
                                </select>
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-3 form-group" style="margin-left: 10px;">
                                        <label for=""> Ano Lectivo:</label><input class="form-control" type="text" name="" value="${tregistro.anolectivoTurma}"  disabled style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                                    </div>

                                    <div class="col-4 form-group" style="margin-left: 10px;">
                                        <label for=""> Vagas:</label><input class="form-control" type="text" name="" value="${tregistro.vagasTurma}" disabled style="color: var(--cor-label-inativa);background-color: var(--cor-fundo-disable); text-align: center;">
                                    </div>

                                    <div class="col-4 form-group" style="margin-left: 10px;">
                                        <label for=""> Coordenador:</label>
                                        <select class="form-control" name=""  style="text-align: center;">
                                          <optgroup label="Selecione um coordenador">
                                            <option value="Professor Sivi">Professor Sivi</option>
                                            <option value="Professor Sivi">Professor Sivi</option>
                                            <option value="Professor Sivi">Professor Sivi</option>
                                          </optgroup>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="footer-modal" style="text-align: center;">
                                <a href="#" class="btn btn-success">Adicionar um coordenador</a>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>

                `;
                document.body.insertAdjacentHTML('beforeend', modal);

            });
            var $T= $("#Tabturmas").DataTable({

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
                $('#Imprimir').click(function() {
                  // Desabilitar o DataTables
                  $T.destroy();

                  // Ocultar elementos indesejados antes de imprimir
                  $('#turma-conteudo .no-print').hide();


                  // Iniciar a impressão
                  window.print();
                });

                $(window).on('afterprint', function() {
                  // Restaurar a visibilidade dos elementos ocultos após a impressão
                  $('#turma-conteudo .no-print').show();

                  // Reativar o DataTables e aplicar as configurações
                  $T = $("#Tabturmas").DataTable({
                    initComplete: function(settings, json) {
                      // Verifica a contagem de registros
                      if (totalRegistros > 15) {
                        // Ativa o DataTables
                        $T.draw();
                      }
                    },
                    // Resto das configurações do DataTables
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

        })
        .catch(function(error) {
            console.error(error);
        });
