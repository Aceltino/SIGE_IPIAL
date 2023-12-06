//Criar horário
    const selectTurma = document.querySelector("#horario-select-turma");
    const optgroupDoSelectTurma = document.querySelector("#optgroup-turma");

    const divDisciplinasNoHorario = document.querySelector("#div-disciplinas-no-horario");
    const divProfessoresNoHorario = document.querySelector("#div-professores-no-horario");
    const divSalasNoHorario = document.querySelector("#div-salas-no-horario");

    const selectSala = document.querySelector("#horario-select-sala");
    const optgroupDoSelectSala = document.querySelector("#optgroup-sala");

    //Terceiro step
        const segundaFeiraPrimeiroTempo = document.querySelector("#segunda-feira-primeiro-tempo");
        const inputSegundaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#segunda-feira-disciplina-do-primeiro-tempo");

        const segundaFeiraSegundoTempo = document.querySelector("#segunda-feira-segundo-tempo");
        const inputSegundaFeiraDisciplinaDoSegundoTempo = document.querySelector("#segunda-feira-disciplina-do-segundo-tempo");

        const segundaFeiraTerceiroTempo = document.querySelector("#segunda-feira-terceiro-tempo");
        const inputSegundaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#segunda-feira-disciplina-do-terceiro-tempo");

        const segundaFeiraQuartoTempo = document.querySelector("#segunda-feira-quarto-tempo");
        const inputSegundaFeiraDisciplinaDoQuartoTempo = document.querySelector("#segunda-feira-disciplina-do-quarto-tempo");

        const segundaFeiraQuintoTempo = document.querySelector("#segunda-feira-quinto-tempo");
        const inputSegundaFeiraDisciplinaDoQuintoTempo = document.querySelector("#segunda-feira-disciplina-do-quinto-tempo");

        const segundaFeiraSextoTempo = document.querySelector("#segunda-feira-sexto-tempo");
        const inputSegundaFeiraDisciplinaDoSextoTempo = document.querySelector("#segunda-feira-disciplina-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const tercaFeiraPrimeiroTempo = document.querySelector("#terca-feira-primeiro-tempo");
        const inputTercaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#terca-feira-disciplina-do-primeiro-tempo");

        const tercaFeiraSegundoTempo = document.querySelector("#terca-feira-segundo-tempo");
        const inputTercaFeiraDisciplinaDoSegundoTempo = document.querySelector("#terca-feira-disciplina-do-segundo-tempo");

        const tercaFeiraTerceiroTempo = document.querySelector("#terca-feira-terceiro-tempo");
        const inputTercaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#terca-feira-disciplina-do-terceiro-tempo");

        const tercaFeiraQuartoTempo = document.querySelector("#terca-feira-quarto-tempo");
        const inputTercaFeiraDisciplinaDoQuartoTempo = document.querySelector("#terca-feira-disciplina-do-quarto-tempo");

        const tercaFeiraQuintoTempo = document.querySelector("#terca-feira-quinto-tempo");
        const inputTercaFeiraDisciplinaDoQuintoTempo = document.querySelector("#terca-feira-disciplina-do-quinto-tempo");

        const tercaFeiraSextoTempo = document.querySelector("#terca-feira-sexto-tempo");
        const inputTercaFeiraDisciplinaDoSextoTempo = document.querySelector("#terca-feira-disciplina-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const quartaFeiraPrimeiroTempo = document.querySelector("#quarta-feira-primeiro-tempo");
        const inputQuartaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#quarta-feira-disciplina-do-primeiro-tempo");

        const quartaFeiraSegundoTempo = document.querySelector("#quarta-feira-segundo-tempo");
        const inputQuartaFeiraDisciplinaDoSegundoTempo = document.querySelector("#quarta-feira-disciplina-do-segundo-tempo");

        const quartaFeiraTerceiroTempo = document.querySelector("#quarta-feira-terceiro-tempo");
        const inputQuartaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#quarta-feira-disciplina-do-terceiro-tempo");

        const quartaFeiraQuartoTempo = document.querySelector("#quarta-feira-quarto-tempo");
        const inputQuartaFeiraDisciplinaDoQuartoTempo = document.querySelector("#quarta-feira-disciplina-do-quarto-tempo");

        const quartaFeiraQuintoTempo = document.querySelector("#quarta-feira-quinto-tempo");
        const inputQuartaFeiraDisciplinaDoQuintoTempo = document.querySelector("#quarta-feira-disciplina-do-quinto-tempo");

        const quartaFeiraSextoTempo = document.querySelector("#quarta-feira-sexto-tempo");
        const inputQuartaFeiraDisciplinaDoSextoTempo = document.querySelector("#quarta-feira-disciplina-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const quintaFeiraPrimeiroTempo = document.querySelector("#quinta-feira-primeiro-tempo");
        const inputQuintaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#quinta-feira-disciplina-do-primeiro-tempo");

        const quintaFeiraSegundoTempo = document.querySelector("#quinta-feira-segundo-tempo");
        const inputQuintaFeiraDisciplinaDoSegundoTempo = document.querySelector("#quinta-feira-disciplina-do-segundo-tempo");

        const quintaFeiraTerceiroTempo = document.querySelector("#quinta-feira-terceiro-tempo");
        const inputQuintaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#quinta-feira-disciplina-do-terceiro-tempo");

        const quintaFeiraQuartoTempo = document.querySelector("#quinta-feira-quarto-tempo");
        const inputQuintaFeiraDisciplinaDoQuartoTempo = document.querySelector("#quinta-feira-disciplina-do-quarto-tempo");

        const quintaFeiraQuintoTempo = document.querySelector("#quinta-feira-quinto-tempo");
        const inputQuintaFeiraDisciplinaDoQuintoTempo = document.querySelector("#quinta-feira-disciplina-do-quinto-tempo");

        const quintaFeiraSextoTempo = document.querySelector("#quinta-feira-sexto-tempo");
        const inputQuintaFeiraDisciplinaDoSextoTempo = document.querySelector("#quinta-feira-disciplina-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const sextaFeiraPrimeiroTempo = document.querySelector("#sexta-feira-primeiro-tempo");
        const inputSextaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#sexta-feira-disciplina-do-primeiro-tempo");

        const sextaFeiraSegundoTempo = document.querySelector("#sexta-feira-segundo-tempo");
        const inputSextaFeiraDisciplinaDoSegundoTempo = document.querySelector("#sexta-feira-disciplina-do-segundo-tempo");

        const sextaFeiraTerceiroTempo = document.querySelector("#sexta-feira-terceiro-tempo");
        const inputSextaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#sexta-feira-disciplina-do-terceiro-tempo");

        const sextaFeiraQuartoTempo = document.querySelector("#sexta-feira-quarto-tempo");
        const inputSextaFeiraDisciplinaDoQuartoTempo = document.querySelector("#sexta-feira-disciplina-do-quarto-tempo");

        const sextaFeiraQuintoTempo = document.querySelector("#sexta-feira-quinto-tempo");
        const inputSextaFeiraDisciplinaDoQuintoTempo = document.querySelector("#sexta-feira-disciplina-do-quinto-tempo");

        const sextaFeiraSextoTempo = document.querySelector("#sexta-feira-sexto-tempo");
        const inputSextaFeiraDisciplinaDoSextoTempo = document.querySelector("#sexta-feira-disciplina-do-sexto-tempo");
        //Consumo
    const urlDaApiDoHorario = "http://sige_ipial.test/api/dados-horario";
    
    fetch(urlDaApiDoHorario).then((dadoHorario)=>{
        return dadoHorario.json();
    }).then((dadoHorario)=>{
        console.log(dadoHorario);
        //console.log(dadoHorario.laboratorios);
        //console.log(dadoHorario.laboratorios.length);
        console.log(dadoHorario.horarioInfo[0].disciplinas);
        console.log(dadoHorario.horarioInfo[0].disciplinas[0]);
        //console.log(dadoHorario.horarioInfo[0].professores[0]);
        //console.log(dadoHorario.horarioInfo[0].disciplinas[0].disciplina_id);1
        //console.log(dadoHorario.horarioInfo[0].professores[0].disciplina_id);1

        //Primeiro step
        var qtdDeTurmas = dadoHorario.horarioInfo.length;

        //Se existirem turmas
        if (qtdDeTurmas !== 0 && qtdDeTurmas !== null){
            var opcao = new Array();
            
            //Colocar as turmas como opções do primeiro select
            for(let indice = 0; indice < qtdDeTurmas; indice++){
                opcao[indice] = document.createElement("option");
                opcao[indice].value = indice;
                opcao[indice].innerText = dadoHorario.horarioInfo[indice].nome;
                optgroupDoSelectTurma.appendChild(opcao[indice]);
            } 
        }
        else{
            window.alert("Sem turmas disponíveis");
            window.location.replace("http://sige_ipial.test/");
        }

        //Segundo step
            selectTurma.addEventListener("change", ()=>{
                var selProf = window.document.getElementsByTagName("select")

                selectTurma.disabled = true;
                //Disciplinas
                var inputDisciplina = new Array();
                var selectProfessor = new Array();
                var selectOptgroup = new Array();
                var optionProfessor = new Array();
                var selectSala = new Array();
                var selectSalaOptgroup = new Array();
                var optionSala = new Array();
                var idTurmaSelecionada = selectTurma.value;

                if (!isNaN(selectTurma.value)){
                    for(let indice = 0; indice < dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas.length; indice++){
                        var nameInputDisciplina = "disciplina"+ indice;
                        var idInputDisciplinaStep2 = "disciplina"+ indice +"InputStep2";
                        var nameSelectProfessor = "professor"+ indice;
                        var idSelectProfessorStep2 = "professor"+ indice +"SelectStep2";
                        var nameSelectSala = "sala"+ indice;
                        var idSelectSala = "sala"+ indice;

                        inputDisciplina[indice] = document.createElement("input");
                        inputDisciplina[indice].value = dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas[indice].nomeDisciplina;
                        inputDisciplina[indice].classList.add("mb-2");
                        inputDisciplina[indice].classList.add("form-control");
                        inputDisciplina[indice].disabled = true;
                        inputDisciplina[indice].setAttribute("name", nameInputDisciplina);
                        inputDisciplina[indice].setAttribute("id", idInputDisciplinaStep2);

                        selectProfessor[indice] = document.createElement("select");
                        selectProfessor[indice].classList.add("mb-2");
                        selectProfessor[indice].classList.add("form-control");
                        selectProfessor[indice].setAttribute("name", nameSelectProfessor);
                        selectProfessor[indice].setAttribute("id", idSelectProfessorStep2);

                        selectOptgroup[indice] = document.createElement("optgroup");
                        selectOptgroup[indice].setAttribute("label", "Professor");
                        
                        selectSala[indice] = document.createElement("select");
                        selectSala[indice].classList.add("mb-2");
                        selectSala[indice].classList.add("form-control");
                        selectSala[indice].setAttribute("name", nameSelectSala);
                        selectSala[indice].setAttribute("id", idSelectSala);

                        selectSalaOptgroup[indice] = document.createElement("optgroup");
                        selectSalaOptgroup[indice].setAttribute("label", "Sala");

                        for(let indice2 = 0; indice2 < dadoHorario.horarioInfo[idTurmaSelecionada].professores.length; indice2++){
                            if(dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas[indice].disciplina_id === dadoHorario.horarioInfo[idTurmaSelecionada].professores[indice2].disciplina_id){
                                optionProfessor[indice2] = document.createElement("option");
                                optionProfessor[indice2].value = dadoHorario.horarioInfo[idTurmaSelecionada].professores[indice2].professor_id;                                    ;
                                optionProfessor[indice2].textContent = dadoHorario.horarioInfo[idTurmaSelecionada].professores[indice2].nomeProfessor;
                                selectOptgroup[indice].appendChild(optionProfessor[indice2]);
                            }
                        } 

                        for(let indiceSala = 0; indiceSala <= dadoHorario.laboratorios.length; indiceSala++){
                            optionSala[indiceSala] = document.createElement("option");
                            if(indiceSala === 0){
                                optionSala[indiceSala].value = dadoHorario.horarioInfo[idTurmaSelecionada].sala.sala;
                                optionSala[indiceSala].textContent = "Sala "+ dadoHorario.horarioInfo[idTurmaSelecionada].sala.sala;
                            }
                            else{
                                optionSala[indiceSala].value = dadoHorario.laboratorios[indiceSala-1].sala_id;
                                optionSala[indiceSala].textContent = dadoHorario.laboratorios[indiceSala-1].sala;
                            }

                            selectSalaOptgroup[indice].appendChild(optionSala[indiceSala]);
                        }

                        selectProfessor[indice].appendChild(selectOptgroup[indice]);
                        selectSala[indice].appendChild(selectSalaOptgroup[indice]);

                        divDisciplinasNoHorario.appendChild(inputDisciplina[indice]);
                        divProfessoresNoHorario.appendChild(selectProfessor[indice]);
                        divSalasNoHorario.appendChild(selectSala[indice]);
                    } 
                }

                function atribuirHorarioDoTempoAoInput(input, posicaoDoElemento){
                    input.value = dadoHorario.horarioInfo[selectTurma.value].tempo[posicaoDoElemento].hora;
                }

                ////Validação
                for(var cont = 1; cont <= dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas.length || selProf[cont].value === ''; cont++){
                    if(selProf[cont].value === ''){
                        window.alert(`Não é possível criar o horário da turma ${dadoHorario.horarioInfo[idTurmaSelecionada].nome}!\nHá uma ou mais disciplinas sem professor.`);
                        window.location.replace("http://sige_ipial.test/professor/cadastrar-professor");
                        break;
                    }
                }

                //Gerando o horário
                    //Botão gerar horário
                    const botaoGerarHorario = document.querySelector("#btn-gerar-horario");
                    botaoGerarHorario.onclick = GerarHorario;
                    //Função
                    function GerarHorario(){
                        var disciplina = [];
                        for(let contador = 0; contador < dadoHorario.horarioInfo[selectTurma.value].disciplinas.length; contador++){
                            for (let contador2 = 0; contador2 < dadoHorario.horarioInfo[selectTurma.value].disciplinas[contador].carga_horaria; contador2++) {
                                disciplina.push(dadoHorario.horarioInfo[selectTurma.value].disciplinas[contador].nomeDisciplina);
                            }
                        }

                        //Função para embaralhar
                        function shuffleArray(array) {
                            for (let i = array.length - 1; i > 0; i--) {
                              const j = Math.floor(Math.random() * (i + 1));
                              [array[i], array[j]] = [array[j], array[i]];
                            }
                        }

                        // Embaralhar o vetor:
                        shuffleArray(disciplina);

                        window.alert("Horário gerado!\n"+ disciplina.length +" tempos de aula.");
                          
                        //Segunda-Feira Disciplinas
                        inputSegundaFeiraDisciplinaDoPrimeiroTempo.value = disciplina[0];
                        inputSegundaFeiraDisciplinaDoSegundoTempo.value = disciplina[1];
                        inputSegundaFeiraDisciplinaDoTerceiroTempo.value = disciplina[2];
                        inputSegundaFeiraDisciplinaDoQuartoTempo.value = disciplina[3];
                        inputSegundaFeiraDisciplinaDoQuintoTempo.value = disciplina[4];
                        inputSegundaFeiraDisciplinaDoSextoTempo.value = disciplina[5];
                        //Terça-Feira Disciplinas
                        inputTercaFeiraDisciplinaDoPrimeiroTempo.value = disciplina[6];
                        inputTercaFeiraDisciplinaDoSegundoTempo.value = disciplina[7];
                        inputTercaFeiraDisciplinaDoTerceiroTempo.value = disciplina[8];
                        inputTercaFeiraDisciplinaDoQuartoTempo.value = disciplina[9];
                        inputTercaFeiraDisciplinaDoQuintoTempo.value = disciplina[10];
                        inputTercaFeiraDisciplinaDoSextoTempo.value = disciplina[11];
                        //Quarta-Feira Disciplinas
                        inputQuartaFeiraDisciplinaDoPrimeiroTempo.value = disciplina[12];
                        inputQuartaFeiraDisciplinaDoSegundoTempo.value = disciplina[13];
                        inputQuartaFeiraDisciplinaDoTerceiroTempo.value = disciplina[14];
                        inputQuartaFeiraDisciplinaDoQuartoTempo.value = disciplina[15];
                        inputQuartaFeiraDisciplinaDoQuintoTempo.value = disciplina[16];
                        inputQuartaFeiraDisciplinaDoSextoTempo.value = disciplina[17];
                        //Quinta-Feira Disciplinas
                        inputQuintaFeiraDisciplinaDoPrimeiroTempo.value = disciplina[18];
                        inputQuintaFeiraDisciplinaDoSegundoTempo.value = disciplina[19];
                        inputQuintaFeiraDisciplinaDoTerceiroTempo.value = disciplina[20];
                        inputQuintaFeiraDisciplinaDoQuartoTempo.value = disciplina[21];
                        inputQuintaFeiraDisciplinaDoQuintoTempo.value = disciplina[22];
                        inputQuintaFeiraDisciplinaDoSextoTempo.value = disciplina[23];
                        //Sexta-Feira Disciplinas
                        inputSextaFeiraDisciplinaDoPrimeiroTempo.value = disciplina[24];
                        inputSextaFeiraDisciplinaDoSegundoTempo.value = disciplina[25];
                        inputSextaFeiraDisciplinaDoTerceiroTempo.value = disciplina[26];
                        inputSextaFeiraDisciplinaDoQuartoTempo.value = disciplina[27];
                        inputSextaFeiraDisciplinaDoQuintoTempo.value = disciplina[28];
                        inputSextaFeiraDisciplinaDoSextoTempo.value = disciplina[29];

                        console.log(disciplina);
                    }

                //Terceiro step
                    atribuirHorarioDoTempoAoInput(segundaFeiraPrimeiroTempo, 0);
                    
                    atribuirHorarioDoTempoAoInput(segundaFeiraSegundoTempo, 1);

                    atribuirHorarioDoTempoAoInput(segundaFeiraTerceiroTempo, 2);

                    atribuirHorarioDoTempoAoInput(segundaFeiraQuartoTempo, 3);

                    atribuirHorarioDoTempoAoInput(segundaFeiraQuintoTempo, 4);

                    atribuirHorarioDoTempoAoInput(segundaFeiraSextoTempo, 5);

                //Quarto step
                    atribuirHorarioDoTempoAoInput(tercaFeiraPrimeiroTempo, 0);
                    
                    atribuirHorarioDoTempoAoInput(tercaFeiraSegundoTempo, 1);

                    atribuirHorarioDoTempoAoInput(tercaFeiraTerceiroTempo, 2);

                    atribuirHorarioDoTempoAoInput(tercaFeiraQuartoTempo, 3);

                    atribuirHorarioDoTempoAoInput(tercaFeiraQuintoTempo, 4);

                    atribuirHorarioDoTempoAoInput(tercaFeiraSextoTempo, 5);
                //Quinto step
                    atribuirHorarioDoTempoAoInput(quartaFeiraPrimeiroTempo, 0);
                    
                    atribuirHorarioDoTempoAoInput(quartaFeiraSegundoTempo, 1);

                    atribuirHorarioDoTempoAoInput(quartaFeiraTerceiroTempo, 2);

                    atribuirHorarioDoTempoAoInput(quartaFeiraQuartoTempo, 3);

                    atribuirHorarioDoTempoAoInput(quartaFeiraQuintoTempo, 4);

                    atribuirHorarioDoTempoAoInput(quartaFeiraSextoTempo, 5);
                //Sexto step
                    atribuirHorarioDoTempoAoInput(quintaFeiraPrimeiroTempo, 0);
                    
                    atribuirHorarioDoTempoAoInput(quintaFeiraSegundoTempo, 1);

                    atribuirHorarioDoTempoAoInput(quintaFeiraTerceiroTempo, 2);

                    atribuirHorarioDoTempoAoInput(quintaFeiraQuartoTempo, 3);

                    atribuirHorarioDoTempoAoInput(quintaFeiraQuintoTempo, 4);

                    atribuirHorarioDoTempoAoInput(quintaFeiraSextoTempo, 5);
                //Sétimo step
                    atribuirHorarioDoTempoAoInput(sextaFeiraPrimeiroTempo, 0);
                    
                    atribuirHorarioDoTempoAoInput(sextaFeiraSegundoTempo, 1);

                    atribuirHorarioDoTempoAoInput(sextaFeiraTerceiroTempo, 2);

                    atribuirHorarioDoTempoAoInput(sextaFeiraQuartoTempo, 3);

                    atribuirHorarioDoTempoAoInput(sextaFeiraQuintoTempo, 4);

                    atribuirHorarioDoTempoAoInput(sextaFeiraSextoTempo, 5);
            });
    });

//Fim do criar horário