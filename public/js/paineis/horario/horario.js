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
        const selectSegundaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#segunda-feira-disciplina-do-primeiro-tempo");

        const segundaFeiraSegundoTempo = document.querySelector("#segunda-feira-segundo-tempo");
        const selectSegundaFeiraDisciplinaDoSegundoTempo = document.querySelector("#segunda-feira-disciplina-do-segundo-tempo");

        const segundaFeiraTerceiroTempo = document.querySelector("#segunda-feira-terceiro-tempo");
        const selectSegundaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#segunda-feira-disciplina-do-terceiro-tempo");

        const segundaFeiraQuartoTempo = document.querySelector("#segunda-feira-quarto-tempo");
        const selectSegundaFeiraDisciplinaDoQuartoTempo = document.querySelector("#segunda-feira-disciplina-do-quarto-tempo");

        const segundaFeiraQuintoTempo = document.querySelector("#segunda-feira-quinto-tempo");
        const selectSegundaFeiraDisciplinaDoQuintoTempo = document.querySelector("#segunda-feira-disciplina-do-quinto-tempo");

        const segundaFeiraSextoTempo = document.querySelector("#segunda-feira-sexto-tempo");
        const selectSegundaFeiraDisciplinaDoSextoTempo = document.querySelector("#segunda-feira-disciplina-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const tercaFeiraPrimeiroTempo = document.querySelector("#terca-feira-primeiro-tempo");
        const selectTercaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#terca-feira-disciplina-do-primeiro-tempo");

        const tercaFeiraSegundoTempo = document.querySelector("#terca-feira-segundo-tempo");
        const selectTercaFeiraDisciplinaDoSegundoTempo = document.querySelector("#terca-feira-disciplina-do-segundo-tempo");

        const tercaFeiraTerceiroTempo = document.querySelector("#terca-feira-terceiro-tempo");
        const selectTercaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#terca-feira-disciplina-do-terceiro-tempo");

        const tercaFeiraQuartoTempo = document.querySelector("#terca-feira-quarto-tempo");
        const selectTercaFeiraDisciplinaDoQuartoTempo = document.querySelector("#terca-feira-disciplina-do-quarto-tempo");

        const tercaFeiraQuintoTempo = document.querySelector("#terca-feira-quinto-tempo");
        const selectTercaFeiraDisciplinaDoQuintoTempo = document.querySelector("#terca-feira-disciplina-do-quinto-tempo");

        const tercaFeiraSextoTempo = document.querySelector("#terca-feira-sexto-tempo");
        const selectTercaFeiraDisciplinaDoSextoTempo = document.querySelector("#terca-feira-disciplina-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const quartaFeiraPrimeiroTempo = document.querySelector("#quarta-feira-primeiro-tempo");
        const selectQuartaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#quarta-feira-disciplina-do-primeiro-tempo");

        const quartaFeiraSegundoTempo = document.querySelector("#quarta-feira-segundo-tempo");
        const selectQuartaFeiraDisciplinaDoSegundoTempo = document.querySelector("#quarta-feira-disciplina-do-segundo-tempo");

        const quartaFeiraTerceiroTempo = document.querySelector("#quarta-feira-terceiro-tempo");
        const selectQuartaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#quarta-feira-disciplina-do-terceiro-tempo");

        const quartaFeiraQuartoTempo = document.querySelector("#quarta-feira-quarto-tempo");
        const selectQuartaFeiraDisciplinaDoQuartoTempo = document.querySelector("#quarta-feira-disciplina-do-quarto-tempo");

        const quartaFeiraQuintoTempo = document.querySelector("#quarta-feira-quinto-tempo");
        const selectQuartaFeiraDisciplinaDoQuintoTempo = document.querySelector("#quarta-feira-disciplina-do-quinto-tempo");

        const quartaFeiraSextoTempo = document.querySelector("#quarta-feira-sexto-tempo");
        const selectQuartaFeiraDisciplinaDoSextoTempo = document.querySelector("#quarta-feira-disciplina-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const quintaFeiraPrimeiroTempo = document.querySelector("#quinta-feira-primeiro-tempo");
        const selectQuintaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#quinta-feira-disciplina-do-primeiro-tempo");

        const quintaFeiraSegundoTempo = document.querySelector("#quinta-feira-segundo-tempo");
        const selectQuintaFeiraDisciplinaDoSegundoTempo = document.querySelector("#quinta-feira-disciplina-do-segundo-tempo");

        const quintaFeiraTerceiroTempo = document.querySelector("#quinta-feira-terceiro-tempo");
        const selectQuintaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#quinta-feira-disciplina-do-terceiro-tempo");

        const quintaFeiraQuartoTempo = document.querySelector("#quinta-feira-quarto-tempo");
        const selectQuintaFeiraDisciplinaDoQuartoTempo = document.querySelector("#quinta-feira-disciplina-do-quarto-tempo");

        const quintaFeiraQuintoTempo = document.querySelector("#quinta-feira-quinto-tempo");
        const selectQuintaFeiraDisciplinaDoQuintoTempo = document.querySelector("#quinta-feira-disciplina-do-quinto-tempo");

        const quintaFeiraSextoTempo = document.querySelector("#quinta-feira-sexto-tempo");
        const selectQuintaFeiraDisciplinaDoSextoTempo = document.querySelector("#quinta-feira-disciplina-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const sextaFeiraPrimeiroTempo = document.querySelector("#sexta-feira-primeiro-tempo");
        const selectSextaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#sexta-feira-disciplina-do-primeiro-tempo");

        const sextaFeiraSegundoTempo = document.querySelector("#sexta-feira-segundo-tempo");
        const selectSextaFeiraDisciplinaDoSegundoTempo = document.querySelector("#sexta-feira-disciplina-do-segundo-tempo");

        const sextaFeiraTerceiroTempo = document.querySelector("#sexta-feira-terceiro-tempo");
        const selectSextaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#sexta-feira-disciplina-do-terceiro-tempo");

        const sextaFeiraQuartoTempo = document.querySelector("#sexta-feira-quarto-tempo");
        const selectSextaFeiraDisciplinaDoQuartoTempo = document.querySelector("#sexta-feira-disciplina-do-quarto-tempo");

        const sextaFeiraQuintoTempo = document.querySelector("#sexta-feira-quinto-tempo");
        const selectSextaFeiraDisciplinaDoQuintoTempo = document.querySelector("#sexta-feira-disciplina-do-quinto-tempo");

        const sextaFeiraSextoTempo = document.querySelector("#sexta-feira-sexto-tempo");
        const selectSextaFeiraDisciplinaDoSextoTempo = document.querySelector("#sexta-feira-disciplina-do-sexto-tempo");
        //Consumo
    const urlDaApiDoHorario = "http://sige_ipial.test/api/dados-horario";
    
    fetch(urlDaApiDoHorario).then((dadoHorario)=>{
        return dadoHorario.json();
    }).then((dadoHorario)=>{
        console.log(dadoHorario);
        console.log(dadoHorario.laboratorios);
        console.log(dadoHorario.laboratorios.length);
        //console.log(dadoHorario.horarioInfo[0].disciplinas);
        //console.log(dadoHorario.horarioInfo[0].disciplinas[0]);
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

        //Segundo step
            selectTurma.addEventListener("change", ()=>{
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

                function atribuirDisciplinasAoSelect(select){
                    var optionDisciplina = new Array();

                    for(let id = 0; id < dadoHorario.horarioInfo[selectTurma.value].disciplinas.length; id++){
                        optionDisciplina[id] = document.createElement("option");
                        optionDisciplina[id].value = dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas[id].disciplina_id;
                        optionDisciplina[id].innerText = dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas[id].nomeDisciplina;
                        select.appendChild(optionDisciplina[id]);
                    }
                }

                function atribuirSalaAoOption(option){
                    option.value = dadoHorario.horarioInfo[idTurmaSelecionada].sala.sala;
                    option.innerText = "Sala "+ dadoHorario.horarioInfo[idTurmaSelecionada].sala.sala;
                }

                function atribuirLaboratoriosAoOptgroup(optgroup){
                    var optionLaboratorio = new Array();
                    var indiceDoVetor = 0;

                    if(dadoHorario.laboratorios.length > 0){
                        while(indiceDoVetor < dadoHorario.laboratorios.length){
                            optionLaboratorio[indiceDoVetor] = document.createElement("option");
                            optionLaboratorio[indiceDoVetor].value = dadoHorario.laboratorios[indiceDoVetor].sala_id;
                            optionLaboratorio[indiceDoVetor].innerText = dadoHorario.laboratorios[indiceDoVetor].sala;
                            optgroup.appendChild(optionLaboratorio[indiceDoVetor]);
                            indiceDoVetor++;
                        }
                    }
                }

                //Terceiro step
                    atribuirHorarioDoTempoAoInput(segundaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(segundaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoSegundoTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoQuartoTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoQuintoTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoSextoTempo);
                //Quarto step
                    atribuirHorarioDoTempoAoInput(tercaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(tercaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoSegundoTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoQuartoTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoQuintoTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoSextoTempo);
                //Quinto step
                    atribuirHorarioDoTempoAoInput(quartaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(quartaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoSegundoTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoQuartoTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoQuintoTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoSextoTempo);
                //Sexto step
                    atribuirHorarioDoTempoAoInput(quintaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(quintaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoSegundoTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoQuartoTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoQuintoTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoSextoTempo);
                //Sétimo step
                    atribuirHorarioDoTempoAoInput(sextaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(sextaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoSegundoTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoQuartoTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoQuintoTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoSextoTempo);
            });
    });

//Fim do criar horário