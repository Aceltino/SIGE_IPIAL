//Criar horário
    //Botão
    const btnLastShot = document.querySelector("button.last-shot");

    //
  //           Início da  Validação
//

    /*btnLastShot.addEventListener("mouseover", function() {
        alert("Mouse passou por cima do botão!");
    });*/

                                                            //
            /*Início da  Validação                        //
                                                        //*/

    const selectTurma = document.querySelector("#horario-select-turma");
    const optgroupDoSelectTurma = document.querySelector("#optgroup-turma");

    const divDisciplinasNoHorario = document.querySelector("#div-disciplinas-no-horario");
    const divProfessoresNoHorario = document.querySelector("#div-professores-no-horario");

    const selectSala = document.querySelector("#horario-select-sala");
    const optgroupDoSelectSala = document.querySelector("#optgroup-sala");

    //Terceiro step
        const segundaFeiraPrimeiroTempo = document.querySelector("#segunda-feira-primeiro-tempo");
        const selectSegundaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#segunda-feira-disciplina-do-primeiro-tempo");
        const optionSalaSegundaFeiraPrimeiroTempo = document.querySelector("#option-sala-segunda-feira-sala-do-primeiro-tempo");
        const optionLabSegundaFeiraPrimeiroTempo = document.querySelector("#option-lab-select-1");

        const segundaFeiraSegundoTempo = document.querySelector("#segunda-feira-segundo-tempo");
        const selectSegundaFeiraDisciplinaDoSegundoTempo = document.querySelector("#segunda-feira-disciplina-do-segundo-tempo");
        const optionSalaSegundaFeiraSegundoTempo = document.querySelector("#option-sala-segunda-feira-sala-do-segundo-tempo");
        const optionLabSegundaFeiraSegundoTempo = document.querySelector("#option-lab-select-2");

        const segundaFeiraTerceiroTempo = document.querySelector("#segunda-feira-terceiro-tempo");
        const selectSegundaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#segunda-feira-disciplina-do-terceiro-tempo");
        const optionSalaSegundaFeiraTerceiroTempo = document.querySelector("#option-sala-segunda-feira-sala-do-terceiro-tempo");
        const optionLabSegundaFeiraTerceiroTempo = document.querySelector("#option-lab-select-3");

        const segundaFeiraQuartoTempo = document.querySelector("#segunda-feira-quarto-tempo");
        const selectSegundaFeiraDisciplinaDoQuartoTempo = document.querySelector("#segunda-feira-disciplina-do-quarto-tempo");
        const optionSalaSegundaFeiraQuartoTempo = document.querySelector("#option-sala-segunda-feira-sala-do-quarto-tempo");
        const optionLabSegundaFeiraQuartoTempo = document.querySelector("#option-lab-select-4");

        const segundaFeiraQuintoTempo = document.querySelector("#segunda-feira-quinto-tempo");
        const selectSegundaFeiraDisciplinaDoQuintoTempo = document.querySelector("#segunda-feira-disciplina-do-quinto-tempo");
        const optionSalaSegundaFeiraQuintoTempo = document.querySelector("#option-sala-segunda-feira-sala-do-quinto-tempo");
        const optionLabSegundaFeiraQuintoTempo = document.querySelector("#option-lab-select-5");

        const segundaFeiraSextoTempo = document.querySelector("#segunda-feira-sexto-tempo");
        const selectSegundaFeiraDisciplinaDoSextoTempo = document.querySelector("#segunda-feira-disciplina-do-sexto-tempo");
        const optionSalaSegundaFeiraSextoTempo = document.querySelector("#option-sala-segunda-feira-sala-do-sexto-tempo");
        const optionLabSegundaFeiraSextoTempo = document.querySelector("#option-lab-select-6");

        //-----------------------------------------------------------------------------------------------------------

        const tercaFeiraPrimeiroTempo = document.querySelector("#terca-feira-primeiro-tempo");
        const selectTercaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#terca-feira-disciplina-do-primeiro-tempo");
        const optionSalaTercaFeiraPrimeiroTempo = document.querySelector("#option-sala-terca-feira-sala-do-primeiro-tempo");
        const optionLabTercaFeiraPrimeiroTempo = document.querySelector("#option-lab-select-7");

        const tercaFeiraSegundoTempo = document.querySelector("#terca-feira-segundo-tempo");
        const selectTercaFeiraDisciplinaDoSegundoTempo = document.querySelector("#terca-feira-disciplina-do-segundo-tempo");
        const optionSalaTercaFeiraSegundoTempo = document.querySelector("#option-sala-terca-feira-sala-do-segundo-tempo");
        const optionLabTercaFeiraSegundoTempo = document.querySelector("#option-lab-select-8");

        const tercaFeiraTerceiroTempo = document.querySelector("#terca-feira-terceiro-tempo");
        const selectTercaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#terca-feira-disciplina-do-terceiro-tempo");
        const optionSalaTercaFeiraTerceiroTempo = document.querySelector("#option-sala-terca-feira-sala-do-terceiro-tempo");
        const optionLabTercaFeiraTerceiroTempo = document.querySelector("#option-lab-select-9");

        const tercaFeiraQuartoTempo = document.querySelector("#terca-feira-quarto-tempo");
        const selectTercaFeiraDisciplinaDoQuartoTempo = document.querySelector("#terca-feira-disciplina-do-quarto-tempo");
        const optionSalaTercaFeiraQuartoTempo = document.querySelector("#option-sala-terca-feira-sala-do-quarto-tempo");
        const optionLabTercaFeiraQuartoTempo = document.querySelector("#option-lab-select-10");

        const tercaFeiraQuintoTempo = document.querySelector("#terca-feira-quinto-tempo");
        const selectTercaFeiraDisciplinaDoQuintoTempo = document.querySelector("#terca-feira-disciplina-do-quinto-tempo");
        const optionSalaTercaFeiraQuintoTempo = document.querySelector("#option-sala-terca-feira-sala-do-quinto-tempo");
        const optionLabTercaFeiraQuintoTempo = document.querySelector("#option-lab-select-11");

        const tercaFeiraSextoTempo = document.querySelector("#terca-feira-sexto-tempo");
        const selectTercaFeiraDisciplinaDoSextoTempo = document.querySelector("#terca-feira-disciplina-do-sexto-tempo");
        const optionSalaTercaFeiraSextoTempo = document.querySelector("#option-sala-terca-feira-sala-do-sexto-tempo");
        const optionLabTercaFeiraSextoTempo = document.querySelector("#option-lab-select-12");

        //-----------------------------------------------------------------------------------------------------------

        const quartaFeiraPrimeiroTempo = document.querySelector("#quarta-feira-primeiro-tempo");
        const selectQuartaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#quarta-feira-disciplina-do-primeiro-tempo");
        const optionSalaQuartaFeiraPrimeiroTempo = document.querySelector("#option-sala-quarta-feira-sala-do-primeiro-tempo");
        const optionLabQuartaFeiraPrimeiroTempo = document.querySelector("#option-lab-select-13");

        const quartaFeiraSegundoTempo = document.querySelector("#quarta-feira-segundo-tempo");
        const selectQuartaFeiraDisciplinaDoSegundoTempo = document.querySelector("#quarta-feira-disciplina-do-segundo-tempo");
        const optionSalaQuartaFeiraSegundoTempo = document.querySelector("#option-sala-quarta-feira-sala-do-segundo-tempo");
        const optionLabQuartaFeiraSegundoTempo = document.querySelector("#option-lab-select-14");

        const quartaFeiraTerceiroTempo = document.querySelector("#quarta-feira-terceiro-tempo");
        const selectQuartaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#quarta-feira-disciplina-do-terceiro-tempo");
        const optionSalaQuartaFeiraTerceiroTempo = document.querySelector("#option-sala-quarta-feira-sala-do-terceiro-tempo");
        const optionLabQuartaFeiraTerceiroTempo = document.querySelector("#option-lab-select-15");

        const quartaFeiraQuartoTempo = document.querySelector("#quarta-feira-quarto-tempo");
        const selectQuartaFeiraDisciplinaDoQuartoTempo = document.querySelector("#quarta-feira-disciplina-do-quarto-tempo");
        const optionSalaQuartaFeiraQuartoTempo = document.querySelector("#option-sala-quarta-feira-sala-do-quarto-tempo");
        const optionLabQuartaFeiraQuartoTempo = document.querySelector("#option-lab-select-16");

        const quartaFeiraQuintoTempo = document.querySelector("#quarta-feira-quinto-tempo");
        const selectQuartaFeiraDisciplinaDoQuintoTempo = document.querySelector("#quarta-feira-disciplina-do-quinto-tempo");
        const optionSalaQuartaFeiraQuintoTempo = document.querySelector("#option-sala-quarta-feira-sala-do-quinto-tempo");
        const optionLabQuartaFeiraQuintoTempo = document.querySelector("#option-lab-select-17");

        const quartaFeiraSextoTempo = document.querySelector("#quarta-feira-sexto-tempo");
        const selectQuartaFeiraDisciplinaDoSextoTempo = document.querySelector("#quarta-feira-disciplina-do-sexto-tempo");
        const optionSalaQuartaFeiraSextoTempo = document.querySelector("#option-sala-quarta-feira-sala-do-sexto-tempo");
        const optionLabQuartaFeiraSextoTempo = document.querySelector("#option-lab-select-18");

        //-----------------------------------------------------------------------------------------------------------

        const quintaFeiraPrimeiroTempo = document.querySelector("#quinta-feira-primeiro-tempo");
        const selectQuintaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#quinta-feira-disciplina-do-primeiro-tempo");
        const optionSalaQuintaFeiraPrimeiroTempo = document.querySelector("#option-sala-quinta-feira-sala-do-primeiro-tempo");
        const optionLabQuintaFeiraPrimeiroTempo = document.querySelector("#option-lab-select-19");

        const quintaFeiraSegundoTempo = document.querySelector("#quinta-feira-segundo-tempo");
        const selectQuintaFeiraDisciplinaDoSegundoTempo = document.querySelector("#quinta-feira-disciplina-do-segundo-tempo");
        const optionSalaQuintaFeiraSegundoTempo = document.querySelector("#option-sala-quinta-feira-sala-do-segundo-tempo");
        const optionLabQuintaFeiraSegundoTempo = document.querySelector("#option-lab-select-20");

        const quintaFeiraTerceiroTempo = document.querySelector("#quinta-feira-terceiro-tempo");
        const selectQuintaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#quinta-feira-disciplina-do-terceiro-tempo");
        const optionSalaQuintaFeiraTerceiroTempo = document.querySelector("#option-sala-quinta-feira-sala-do-terceiro-tempo");
        const optionLabQuintaFeiraTerceiroTempo = document.querySelector("#option-lab-select-21");

        const quintaFeiraQuartoTempo = document.querySelector("#quinta-feira-quarto-tempo");
        const selectQuintaFeiraDisciplinaDoQuartoTempo = document.querySelector("#quinta-feira-disciplina-do-quarto-tempo");
        const optionSalaQuintaFeiraQuartoTempo = document.querySelector("#option-sala-quinta-feira-sala-do-quarto-tempo");
        const optionLabQuintaFeiraQuartoTempo = document.querySelector("#option-lab-select-22");

        const quintaFeiraQuintoTempo = document.querySelector("#quinta-feira-quinto-tempo");
        const selectQuintaFeiraDisciplinaDoQuintoTempo = document.querySelector("#quinta-feira-disciplina-do-quinto-tempo");
        const optionSalaQuintaFeiraQuintoTempo = document.querySelector("#option-sala-quinta-feira-sala-do-quinto-tempo");
        const optionLabQuintaFeiraQuintoTempo = document.querySelector("#option-lab-select-23");

        const quintaFeiraSextoTempo = document.querySelector("#quinta-feira-sexto-tempo");
        const selectQuintaFeiraDisciplinaDoSextoTempo = document.querySelector("#quinta-feira-disciplina-do-sexto-tempo");
        const optionSalaQuintaFeiraSextoTempo = document.querySelector("#option-sala-quinta-feira-sala-do-sexto-tempo");
        const optionLabQuintaFeiraSextoTempo = document.querySelector("#option-lab-select-24");

        //-----------------------------------------------------------------------------------------------------------

        const sextaFeiraPrimeiroTempo = document.querySelector("#sexta-feira-primeiro-tempo");
        const selectSextaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#sexta-feira-disciplina-do-primeiro-tempo");
        const optionSalaSextaFeiraPrimeiroTempo = document.querySelector("#option-sala-sexta-feira-sala-do-primeiro-tempo");
        const optionLabSextaFeiraPrimeiroTempo = document.querySelector("#option-lab-select-25");

        const sextaFeiraSegundoTempo = document.querySelector("#sexta-feira-segundo-tempo");
        const selectSextaFeiraDisciplinaDoSegundoTempo = document.querySelector("#sexta-feira-disciplina-do-segundo-tempo");
        const optionSalaSextaFeiraSegundoTempo = document.querySelector("#option-sala-sexta-feira-sala-do-segundo-tempo");
        const optionLabSextaFeiraSegundoTempo = document.querySelector("#option-lab-select-26");

        const sextaFeiraTerceiroTempo = document.querySelector("#sexta-feira-terceiro-tempo");
        const selectSextaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#sexta-feira-disciplina-do-terceiro-tempo");
        const optionSalaSextaFeiraTerceiroTempo = document.querySelector("#option-sala-sexta-feira-sala-do-terceiro-tempo");
        const optionLabSextaFeiraTerceiroTempo = document.querySelector("#option-lab-select-27");

        const sextaFeiraQuartoTempo = document.querySelector("#sexta-feira-quarto-tempo");
        const selectSextaFeiraDisciplinaDoQuartoTempo = document.querySelector("#sexta-feira-disciplina-do-quarto-tempo");
        const optionSalaSextaFeiraQuartoTempo = document.querySelector("#option-sala-sexta-feira-sala-do-quarto-tempo");
        const optionLabSextaFeiraQuartoTempo = document.querySelector("#option-lab-select-28");

        const sextaFeiraQuintoTempo = document.querySelector("#sexta-feira-quinto-tempo");
        const selectSextaFeiraDisciplinaDoQuintoTempo = document.querySelector("#sexta-feira-disciplina-do-quinto-tempo");
        const optionSalaSextaFeiraQuintoTempo = document.querySelector("#option-sala-sexta-feira-sala-do-quinto-tempo");
        const optionLabSextaFeiraQuintoTempo = document.querySelector("#option-lab-select-29");

        const sextaFeiraSextoTempo = document.querySelector("#sexta-feira-sexto-tempo");
        const selectSextaFeiraDisciplinaDoSextoTempo = document.querySelector("#sexta-feira-disciplina-do-sexto-tempo");
        const optionSalaSextaFeiraSextoTempo = document.querySelector("#option-sala-sexta-feira-sala-do-sexto-tempo");
        const optionLabSextaFeiraSextoTempo = document.querySelector("#option-lab-select-30");
        //Consumo
    const urlDaApiDoHorario = "http://sige_ipial.test/api/dados-horario";
    
    fetch(urlDaApiDoHorario).then((dadoHorario)=>{
        return dadoHorario.json();
    }).then((dadoHorario)=>{
        console.log(dadoHorario);
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
                var idTurmaSelecionada = selectTurma.value;

                if (!isNaN(selectTurma.value)){
                    for(let indice = 0; indice < dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas.length; indice++){
                        var nameInputDisciplina = "disciplina"+ indice;
                        var idInputDisciplinaStep2 = "disciplina"+ indice +"InputStep2";
                        var nameSelectProfessor = "professor"+ indice;
                        var idSelectProfessorStep2 = "professor"+ indice +"SelectStep2";

                        inputDisciplina[indice] = document.createElement("input");
                        inputDisciplina[indice].value = dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas[indice].nomeDisciplina;
                        inputDisciplina[indice].classList.add("mb-2");
                        inputDisciplina[indice].classList.add("form-control");
                        inputDisciplina[indice].disabled = true;
                        inputDisciplina[indice].setAttribute("name", nameInputDisciplina);
                        inputDisciplina[indice].setAttribute("id", idInputDisciplinaStep2);

                        selectProfessor[indice] = document.createElement("select");
                        selectProfessor[indice].classList.add("mb-2");
                        selectProfessor[indice].setAttribute("name", nameSelectProfessor);
                        selectProfessor[indice].setAttribute("id", idSelectProfessorStep2);

                        selectOptgroup[indice] = document.createElement("optgroup");
                        selectOptgroup[indice].setAttribute("label", "Professor");
                        
                        for(let indice2 = 0; indice2 < dadoHorario.horarioInfo[idTurmaSelecionada].professores.length; indice2++){
                            if(dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas[indice].disciplina_id === dadoHorario.horarioInfo[idTurmaSelecionada].professores[indice2].disciplina_id){
                                optionProfessor[indice2] = document.createElement("option");
                                optionProfessor[indice2].value = dadoHorario.horarioInfo[idTurmaSelecionada].professores[indice2].professor_id;                                    ;
                                optionProfessor[indice2].textContent = dadoHorario.horarioInfo[idTurmaSelecionada].professores[indice2].nomeProfessor;
                                selectOptgroup[indice].appendChild(optionProfessor[indice2]);
                            }
                        } 

                        selectProfessor[indice].appendChild(selectOptgroup[indice]);

                        divDisciplinasNoHorario.appendChild(inputDisciplina[indice]);

                        divProfessoresNoHorario.appendChild(selectProfessor[indice]);

                    } 
                    //Tentativa mal sucedida
                    /*for(let indice = 0; indice < dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas.length; indice++){
                        if(selectProfessor[indice].value == ''){
                            document.alert("Há uma ou mais disciplinas com professor(es) em falta! Será direcionado/a à página de cadastro de professores.");
      
                            // Redirecionar para a outra página após clicar em "OK" no alerta
                            window.location.href = "http://sige_ipial.test/professor/cadastrar-professor";
                        }
                    }*/
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

                //Gerar o número aleatório
                const numeroAleatorio = Math.floor(Math.random() * (dadoHorario.laboratorios.length-1));
                function atribuirLaboratorioAoOption(option){
                    option.value = dadoHorario.laboratorios[numeroAleatorio].sala_id;
                    option.innerText = dadoHorario.laboratorios[numeroAleatorio].sala;
                }

                //Terceiro step
                    atribuirHorarioDoTempoAoInput(segundaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoPrimeiroTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraPrimeiroTempo);
                    atribuirLaboratorioAoOption(optionLabSegundaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(segundaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraSegundoTempo);
                    atribuirLaboratorioAoOption(optionLabSegundaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraTerceiroTempo);
                    atribuirLaboratorioAoOption(optionLabSegundaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraQuartoTempo);
                    atribuirLaboratorioAoOption(optionLabSegundaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraQuintoTempo);
                    atribuirLaboratorioAoOption(optionLabSegundaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraSextoTempo);
                    atribuirLaboratorioAoOption(optionLabSegundaFeiraSextoTempo);
                //Quarto step
                    atribuirHorarioDoTempoAoInput(tercaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoPrimeiroTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraPrimeiroTempo);
                    atribuirLaboratorioAoOption(optionLabTercaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(tercaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraSegundoTempo);
                    atribuirLaboratorioAoOption(optionLabTercaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraTerceiroTempo);
                    atribuirLaboratorioAoOption(optionLabTercaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraQuartoTempo);
                    atribuirLaboratorioAoOption(optionLabTercaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraQuintoTempo);
                    atribuirLaboratorioAoOption(optionLabTercaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraSextoTempo);
                    atribuirLaboratorioAoOption(optionLabTercaFeiraSextoTempo);
                //Quinto step
                    atribuirHorarioDoTempoAoInput(quartaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoPrimeiroTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraPrimeiroTempo);
                    atribuirLaboratorioAoOption(optionLabQuartaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(quartaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraSegundoTempo);
                    atribuirLaboratorioAoOption(optionLabQuartaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraTerceiroTempo);
                    atribuirLaboratorioAoOption(optionLabQuartaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraQuartoTempo);
                    atribuirLaboratorioAoOption(optionLabQuartaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraQuintoTempo);
                    atribuirLaboratorioAoOption(optionLabQuartaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraSextoTempo);
                    atribuirLaboratorioAoOption(optionLabQuartaFeiraSextoTempo);
                //Sexto step
                    atribuirHorarioDoTempoAoInput(quintaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoPrimeiroTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraPrimeiroTempo);
                    atribuirLaboratorioAoOption(optionLabQuintaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(quintaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraSegundoTempo);
                    atribuirLaboratorioAoOption(optionLabQuintaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraTerceiroTempo);
                    atribuirLaboratorioAoOption(optionLabQuintaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraQuartoTempo);
                    atribuirLaboratorioAoOption(optionLabQuintaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraQuintoTempo);
                    atribuirLaboratorioAoOption(optionLabQuintaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraSextoTempo);
                    atribuirLaboratorioAoOption(optionLabQuintaFeiraSextoTempo);
                //Sétimo step
                    atribuirHorarioDoTempoAoInput(sextaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoPrimeiroTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraPrimeiroTempo);
                    atribuirLaboratorioAoOption(optionLabSextaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(sextaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraSegundoTempo);
                    atribuirLaboratorioAoOption(optionLabSextaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraTerceiroTempo);
                    atribuirLaboratorioAoOption(optionLabSextaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraQuartoTempo);
                    atribuirLaboratorioAoOption(optionLabSextaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraQuintoTempo);
                    atribuirLaboratorioAoOption(optionLabSextaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraSextoTempo);
                    atribuirLaboratorioAoOption(optionLabSextaFeiraSextoTempo);
            });
    });

//Fim do criar horário