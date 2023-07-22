axios.get('/api/matriculados')
        .then(function(response) {
            const registros = response.data;

            const tabelaRegistros = document.getElementById('matriculas');
            const tbody = tabelaRegistros.getElementsByTagName('tbody')[0];

            registros.forEach(function(registro) {
                const row = tbody.insertRow();
                let turma = registro.nomeTurma;
                let situacao = registro.situacao;
                let anoLectivo = registro.anoLectivo;
                let turno = registro.turno;
                let classe = registro.classe;
                let n_aluno = registro.n_aluno;

                if($.isEmptyObject(turma)){
                    turma = "Aguarde";
                    anoLectivo = "Aguarde";
                    turno = "Aguarde";
                    classe = "Aguarde";
                    n_aluno = "Aguarde";
                    situacao = "Aguarde";
                    Botao = `<a href="/matricula/readmitir-aluno/${registro.N_processo}/readmitir" name="" id="" class="btn btn-success"  role="button">Ativar</a>`;
                } else if(turma && situacao == 'Anulou a Matricula'){
                  Botao = `<a name="" id="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target=" #basicModalll${registro.N_processo}"  role="button">Eliminar</a>`;

                }else if(turma && situacao == 'Exame'){
                  Botao = `<a name="" id="" class="btn btn-dark" data-bs-toggle="modal" data-bs-target=" #basicModalll${registro.N_processo}"  role="button">exame</a>`;

                }else if(turma && situacao == 'Recurso'){
                  Botao = `<a  name="" id="" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#basicModal${registro.N_processo}"  role="button">inativar</a>

                  <a name="" id="" class="btn btn-dark" data-bs-toggle="modal" data-bs-target=" #basicModalll${registro.N_processo}" role="button">Recurso</a>
                  `;

                }
                else{
                  Botao = `<a  name="" id="" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#basicModal${registro.N_processo}"  role="button">inativar</a>`;

                }

                row.innerHTML = `
                    <td>${registro.N_processo}</td>
                    <td>${registro.nome}</td>
                    <td>${turma}</td>
                    <td>${registro.idade}</td>
                    <td class="no-print">${situacao}</td>
                    <td>${registro.curso} </td>
                    <td class="no-print">${Botao}</td>
                    <td class="no-print">
                    <i  class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal${registro.N_processo}"></i>
                    <a href="/matricula/editar-aluno/${registro.N_processo}/editar"><i class="bi bi-pencil"></i></a>
                    </td>



                `;

                //Modal para Visualizar os Dados do ALUNO

                const modall = `

                <div class="modal fade" id="ExtralargeModal${registro.N_processo}" tabindex="-1" data-bs-backdrop="false">
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
                          <h1>Dados pessoais</h1>
                        </div>

                        <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
                            <button class="btn-imprimir">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
                        </div>
                      </div>
                    </div>

                    <div class="corpo-modal">
                      <form class="form-inativo">
                        <div class="dados-pessoais">
                        <div class="area-input form-group">
                        <label>Nome Completo: </label><input type="text" name="" value="${registro.nome}" disabled>
                    </div>
                    <div class="area-input form-group">
                        <label>Nome do Pai: </label><input type="text" name="" value="${registro.pai}" disabled>
                    </div>
                    <div class="area-input form-group">
                        <label>Nome da Mãe: </label><input type="text" name="" value="${registro.mae}" disabled>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col area-input form-group">
                                <label>Data de nascimento: </label><input type="text" name="" value="${registro.data_nasc}" disabled>
                            </div>

                            <div class="col area-input form-group" style="margin-left: 10px;">
                                <label>Idade: </label><input type="text" class="form-control" readonly="true" disabled name="" value="${registro.idade}" disabled>

                            </div>

                            <div class="col area-input form-group" style="margin-left: 10px;">
                                <label>Gênero: </label><input type="text" name="" value="${registro.genero}" disabled>

                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class=" col area-input form-group" >
                                <label>Número do BI: </label><input type="text" class="form-control" readonly="true" disabled name="" value="${registro.num_bi}"disabled>
                            </div>

                            <div class="col area-input form-group" style="margin-left: 10px;">
                                <label>Naturalidade: </label><input type="text" name="" value="Falta passar a Naturalidade na API"disabled>

                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col area-input form-group">
                                <label>Telefone: </label><input type="text" name="" value="${registro.tel_aluno}"disabled>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                              <div class="col form-group" style="margin-left: 10px;">
                                <button class="btn-imprimir accordion-buttons collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne" style="border: none; padding: 5px; width: 230px; height: 40px;">
                                        Informações do Instituto: <i class="bi bi-arrow-down"></i>
                                      </button>
                              </div>
                            </div>
                          </div>

                              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="dados-academicos">
                              <div class="row">
                              <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
                                    <h1>Dados Da Escola De Proveniência</h1>
                                </div>

                            </div>

                            <br>

                            <div class="area-input form-group">
                                <label>Escola de proveniência: </label><input type="text" name="" value="${registro.escola_prov}" disabled>
                            </div>

                            <div class="container">
                                <div class="row">
                                <div class="col area-input form-group">
                            <label>Turno: </label><input type="text" name="" value="${registro.turno_prov}"disabled>

                            </div>
                            <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Turma: </label><input type="text" name="" value="${registro.turma_prov}"disabled>

                            </div>
                            <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Nº aluno: </label>
                            <input type="text" name="" value="${registro.N_aluno_prov}"disabled>
                        </div>
                        </div>
                        </div>

                        <div class="container">
                    <div class="row">
                            <div class="col area-input form-group" >
                            <label>Ano lectivo: </label><input type="text" class="form-control" readonly="true" disabled name="" value="${registro.ano_prov}">
                            </div>
                        </div>
                    </div>

                    <div class="col area-input form-group">
                            <label>Número de processo: </label><input type="text" class="form-control" readonly="true" disabled name="" value="${registro.processo_prov}">

                            </div>

                    <div class="row">
                        <div class="col" style="display: flex; justify-content: flex-start; align-items: center; margin-bottom: 15px;">
                            <h1>Dados académicos</h1>
                        </div>

                    </div>

                        <div class="container">
                            <div class="row">
                                <div class="col area-input form-group">
                                    <label>Código de Inscrição: </label><input type="text" class="form-control" readonly="true" disabled name="" value="${registro.cod_inscr}" >

                                </div>
                                <div class="col area-input form-group" style="margin-left: 10px;">
                                    <label>Número de processo: </label><input type="text" class="form-control" readonly="true" disabled name="" value="${registro.N_processo}">

                                </div>

                                    <div class="col area-input form-group" style="margin-left: 10px;">
                                    <label>Ano Lectivo: </label><input type="text" name="" value="${registro.anoLectivo}" disabled>

                                    </div>
                            </div>
                        </div>

                        <div class="container">
                        <div class="row">
                            <div class="col area-input form-group">
                            <label>Turno: </label><input type="text" name="" value="${registro.turno}" disabled>

                            </div>
                            <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Turma: </label><input type="text" name="" value="${registro.nomeTurma}" disabled>

                            </div>

                            <div class="col area-input form-group" style="margin-left: 10px;">
                            <label>Classe: </label><input type="text" name="" value="${registro.classe}" disabled>

                            </div>
                        </div>
                    </div>

                        <div class="container">
                        <div class="row">
                            <div class="col area-input form-group">
                                <label>Nº do Aluno: </label><input type="text" name="" value="${registro.N_aluno}" disabled>

                            </div>
                            <div class="col area-input form-group" style="margin-left: 10px;">
                                 <label>Sala: </label><input type="text" name="" value="Está a faltar a nota na API" disabled>

                            </div>
                        </div>
                    </div>

                        <div class="container">
                            <div class="row">

                                <div class="col area-input form-group">
                                    <label>${registro.enc_grau_1} Telefone: </label><input type="text" name="" value="${registro.tel_grau_1}" disabled>
                                </div>

                                <div class="col area-input form-group" style="margin-left: 10px;">
                                    <label>${registro.enc_grau_2} Telefone: </label><input type="text" name="" value="${registro.tel_grau_2}" disabled>
                                </div>

                                <div class="col area-input form-group" style="margin-left: 10px;">
                                    <label>${registro.enc_grau_3} Telefone: </label><input type="text" name="" value="${registro.tel_grau_3}" disabled>
                                </div>

                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col area-input form-group">
                                    <label>Curso: </label><input type="text" name="" value="${registro.curso}" disabled>

                                </div>
                            </div>
                        </div>
                              </div>

                              <div class="footer-modal" style="text-align: center;">
                                <a href="/matricula/editar-aluno/${registro.N_processo}/editar" class="btn" style="background-color: #d0ff00; color: #fff;">Editar dados</a>
                                <div class="jnt">
                                    <a href="/matricula/matriculas" class="btn" style="background-color: #070b17; color: #fff;">Retrocer as Matriculas</a>

                                    <a href="#ExtralargeModal${registro.N_processo}" class="btn" style="background-color: #070b17; color: #fff;">Dados pessoais <i class="bi bi-arrow-up"></i></a>
                                </div>
                              </div>

                      </form>
                    </div>

                  </div>
                </div>
              </div>

                `;
                document.body.insertAdjacentHTML('beforeend', modall);

                //Modal para confirmar a Inativação do ALUNO

                const modall2 =`

                <div class="modal fade" id="basicModal${registro.N_processo}" tabindex="-1">
                  <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                      <div class="modal-header" style="border: none;">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>

                      <div class="modal-body" style="text-transform: uppercase; text-align: center;">
                        <strong> Tem a certeza de que deseja Inativar o Aluno ${registro.nome} ?</strong>
                      </div>

                      <div class="modal-footer" style="border: none;">
                        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                        <a class="btn btn-danger" href="/matricula/inativar/${registro.N_processo}">Inativar</a>

                      </div>

                    </div>
                  </div>
                </div>
                `;
                 document.body.insertAdjacentHTML('beforeend', modall2);

                  //Modal para confirmar a Eliminação do ALUNO

                 const modall3 =`

                 <div class="modal fade" id="basicModalll${registro.N_processo}" tabindex="-1">
                 <div class="modal-dialog modal-dialog-centered">
                   <div class="modal-content">

                     <div class="modal-header" style="border: none;">
                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>

                     <div class="modal-body" style="text-transform: uppercase; text-align: center;">
                       <strong>  Tem a certeza de que deseja Eliminar o Aluno ${registro.nome} ?</strong>
                     </div>

                     <div class="modal-footer" style="border: none;">
                       <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cancelar</button>
                       <a class="btn btn-danger"href="/matricula/eliminar/${registro.N_processo}"">Eliminar</a>

                     </div>

                   </div>
                 </div>
               </div>


                 `;
                  document.body.insertAdjacentHTML('beforeend', modall3);

            });
            var $T= $("#matriculas").DataTable({

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

                $('#ImprimirMatricula').click(function() {
                  // Desabilitar o DataTables
                  $T.destroy();

                  // Ocultar elementos indesejados antes de imprimir
                  $('#conteudo .no-print').hide();


                  // Iniciar a impressão
                  window.print();
                });

                $(window).on('afterprint', function() {
                  // Restaurar a visibilidade dos elementos ocultos após a impressão
                  $('#conteudo .no-print').show();

                  // Reativar o DataTables e aplicar as configurações
                  $T = $("#matriculas").DataTable({
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
            console.log(error);
        });
