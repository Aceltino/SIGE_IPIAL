
//PEGANDO A API LOCAL E POR PADRÃO PEGANDO O METÓDO GET
fetch('/api/candidatos')
            //RECEBENDO O OBEJTO JSON DA API E CONDICIONANDO SE DAR TUDO CERTO A RECEPÇÃO DA API
            .then(response => response.json())
            //CASO POSITIVO O JSON VAI PARA A VARIAVEL OS REGISTROS
            .then(registros => {
                const tabela = document.getElementById('Inscric');
                const tbody = tabela.getElementsByTagName('tbody')[0];
                //criando o foreach para cada registro da API
                registros.forEach(registro => {
                    const tr = document.createElement('tr');
                    const tdId = document.createElement('td');
                    const tdNome = document.createElement('td');
                    const tdMedia = document.createElement('td');
                    const tdIdade = document.createElement('td');
                    const tdCurso = document.createElement('td');
                    const tdSituacao = document.createElement('td');
                    const tdAcao = document.createElement('td');
                    const tdIcones = document.createElement('td');
                    const botaoEditar = document.createElement('button');
                    const linkIcone1 = document.createElement('a');
                    const linkIcone2 = document.createElement('a');
                    //atribundo os valores da API
                    tdId.innerText = registro.NumeroBI;
                    tdNome.innerText = registro.Nome;
                    tdMedia.innerText =registro.Media;
                    tdIdade.innerText =registro.Idade;
                    tdCurso.innerText =registro.Curso;
                    tdSituacao.innerText =registro.Situacao;
                    //ATRIBUINDO O CSS E OUTOS
                    botaoEditar.innerText = 'Matricular';
                    botaoEditar.classList.add('btn', 'btn-success',);
                    botaoEditar.addEventListener('click', () => {
                        // Redirecionar para a página de edição do registro
                        window.location.href = `/editar/${registro.Id_inscricao}`;
                    });
                    tdId.classList.add('texto');
                    tdNome.classList.add('texto');
                    tdMedia.classList.add('texto');
                    tdIdade.classList.add('texto');
                    tdCurso.classList.add('texto');
                    tdSituacao.style.textAlign = 'center';
                    //Condicionando a apresentação dos dados de acordo com as condições necessárias 10%  "Add como ultimo parametro para poder abrir a matricula" ->matricular
                    if(registro.Situacao === 'Admitido'){
                        tdSituacao.style.color = 'green';
                    }else if(registro.Situacao === 'Não admitido'){
                        tdSituacao.style.color = 'red';
                    }
                    tdAcao.classList.add('texto1');
                    tdIcones.classList.add('texto2');
                    //chamando a Modal das Inscrições Visualização
                    linkIcone1.classList.add('bi', 'bi-eye-fill');
                    linkIcone1.addEventListener('click', (event) => {
                        event.stopPropagation(); // Evita que o clique seja propagado para a linha da tabela

                    //passando os valores para a modal
                      const nome =  document.querySelector('#modal-registro-nome');
                      nome.value =registro.Nome;
                      const nomepai =  document.querySelector('#modal-registro-pai');
                      nomepai.value =registro.Pai;
                      const nomemae =  document.querySelector('#modal-registro-mae');
                      nomemae.value =registro.Mae;
                      const datanasc =  document.querySelector('#modal-registro-datanasc');
                      datanasc.value =registro.Data_Nascimento;
                      const Genero =  document.querySelector('#modal-registro-Genero');
                      Genero.value =registro.Genero;
                      const Idade =  document.querySelector('#modal-registro-Idade');
                      Idade.value =registro.Idade;
                      const NumeroBI =  document.querySelector('#modal-registro-NumeroBI');
                      NumeroBI.value =registro.NumeroBI;
                      const Numerotel =  document.querySelector('#modal-registro-Numerotel');
                      Numerotel.value =registro.Telefone;
                      const escolaprov =  document.querySelector('#modal-registro-escolaprov');
                      escolaprov.value =registro.Escola;
                      const Turno =  document.querySelector('#modal-registro-Turno');
                      Turno.value =registro.Turno;
                      const Turma =  document.querySelector('#modal-registro-Turma');
                      Turma.value =registro.Turma;
                      const Numero_Aluno =  document.querySelector('#modal-registro-Numero_Aluno');
                      Numero_Aluno.value =registro.Numero_Aluno;
                      const Numero_Processo =  document.querySelector('#modal-registro-Numero_Processo');
                      Numero_Processo.value =registro.Numero_Processo;
                      const Ultimo_AnoLectivo =  document.querySelector('#modal-registro-Ultimo_AnoLectivo');
                      Ultimo_AnoLectivo.value =registro.Ultimo_AnoLectivo;
                      const Lingua_Portuguesa =  document.querySelector('#modal-registro-Lingua_Portuguesa');
                      Lingua_Portuguesa.value =registro.Lingua_Portuguesa;
                      const Matematica =  document.querySelector('#modal-registro-Matematica');
                      Matematica.value =registro.Matematica;
                      const Fisica =  document.querySelector('#modal-registro-Fisica');
                      Fisica.value =registro.Fisica;
                      const Quimica =  document.querySelector('#modal-registro-Quimica');
                      Quimica.value =registro.Quimica;
                      const Cursos=  document.querySelector('#modal-registro-Cursos');
                      Cursos.value =registro.Cursos;
                      const Data_inscricao =  document.querySelector('#modal-registro-Data_inscricao');
                      Data_inscricao.value =registro.Data_inscricao;
                     // const Turma =  document.querySelector('#modal-registro-Turma');
                     // Turma.value =registro.Turma;
                      //const Turma =  document.querySelector('#modal-registro-Turma');
                      //Turma.value =registro.Turma;
                      //const Turma =  document.querySelector('#modal-registro-Turma');
                      //Turma.value =registro.Turma;

                    //passando os valores para a modadl Fim

                        // Exibir a modal
                        const modal = new bootstrap.Modal(document.getElementById('Modalinscricao'));
                        modal.show();
                    });
                      //chamando a Modal das Inscrições Visualização FIM
                    linkIcone2.href = `editar-candidato/${registro.Id_inscricao}`;
                    linkIcone2.classList.add('bi', 'bi-pencil','tto');
                    //entregando o td ao tr e os botoes e os linksicones aos td
                    tdAcao.appendChild(botaoEditar);
                    tdIcones.appendChild(linkIcone1);
                    tdIcones.appendChild(linkIcone2);
                    tr.appendChild(tdId);
                    tr.appendChild(tdNome);
                    tr.appendChild(tdMedia);
                    tr.appendChild(tdIdade);
                    tr.appendChild(tdCurso);
                    tr.appendChild(tdSituacao);
                    tr.appendChild(tdAcao);
                    tr.appendChild(tdIcones);
                    tbody.appendChild(tr);
                });
            })
            //CASO NEGATIVO MENSAGEM DE ERRO AINDA NÃO DEFINIDA CORRETAMENTE
            .catch(error => {
                console.error('Erro ao obter os registros da API:', error);
            });
