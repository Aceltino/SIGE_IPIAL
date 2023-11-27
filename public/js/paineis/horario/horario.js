//Criar horário
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
        const optgroupSalaSegundaFeiraPrimeiroTempo = document.querySelector("#optgroup-segunda-feira-sala-do-primeiro-tempo");

        const segundaFeiraSegundoTempo = document.querySelector("#segunda-feira-segundo-tempo");
        const selectSegundaFeiraDisciplinaDoSegundoTempo = document.querySelector("#segunda-feira-disciplina-do-segundo-tempo");
        const optionSalaSegundaFeiraSegundoTempo = document.querySelector("#option-sala-segunda-feira-sala-do-segundo-tempo");
        const optgroupSalaSegundaFeiraSegundoTempo = document.querySelector("#optgroup-segunda-feira-sala-do-segundo-tempo");

        const segundaFeiraTerceiroTempo = document.querySelector("#segunda-feira-terceiro-tempo");
        const selectSegundaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#segunda-feira-disciplina-do-terceiro-tempo");
        const optionSalaSegundaFeiraTerceiroTempo = document.querySelector("#option-sala-segunda-feira-sala-do-terceiro-tempo");
        const optgroupSalaSegundaFeiraTerceiroTempo = document.querySelector("#optgroup-segunda-feira-sala-do-terceiro-tempo");

        const segundaFeiraQuartoTempo = document.querySelector("#segunda-feira-quarto-tempo");
        const selectSegundaFeiraDisciplinaDoQuartoTempo = document.querySelector("#segunda-feira-disciplina-do-quarto-tempo");
        const optionSalaSegundaFeiraQuartoTempo = document.querySelector("#option-sala-segunda-feira-sala-do-quarto-tempo");
        const optgroupSalaSegundaFeiraQuartoTempo = document.querySelector("#optgroup-segunda-feira-sala-do-quarto-tempo");

        const segundaFeiraQuintoTempo = document.querySelector("#segunda-feira-quinto-tempo");
        const selectSegundaFeiraDisciplinaDoQuintoTempo = document.querySelector("#segunda-feira-disciplina-do-quinto-tempo");
        const optionSalaSegundaFeiraQuintoTempo = document.querySelector("#option-sala-segunda-feira-sala-do-quinto-tempo");
        const optgroupSalaSegundaFeiraQuintoTempo = document.querySelector("#optgroup-segunda-feira-sala-do-quinto-tempo");

        const segundaFeiraSextoTempo = document.querySelector("#segunda-feira-sexto-tempo");
        const selectSegundaFeiraDisciplinaDoSextoTempo = document.querySelector("#segunda-feira-disciplina-do-sexto-tempo");
        const optionSalaSegundaFeiraSextoTempo = document.querySelector("#option-sala-segunda-feira-sala-do-sexto-tempo");
        const optgroupSalaSegundaFeiraSextoTempo = document.querySelector("#optgroup-segunda-feira-sala-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const tercaFeiraPrimeiroTempo = document.querySelector("#terca-feira-primeiro-tempo");
        const selectTercaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#terca-feira-disciplina-do-primeiro-tempo");
        const optionSalaTercaFeiraPrimeiroTempo = document.querySelector("#option-sala-terca-feira-sala-do-primeiro-tempo");
        const optgroupSalaTercaFeiraPrimeiroTempo = document.querySelector("#optgroup-sala-terca-feira-sala-do-primeiro-tempo");

        const tercaFeiraSegundoTempo = document.querySelector("#terca-feira-segundo-tempo");
        const selectTercaFeiraDisciplinaDoSegundoTempo = document.querySelector("#terca-feira-disciplina-do-segundo-tempo");
        const optionSalaTercaFeiraSegundoTempo = document.querySelector("#option-sala-terca-feira-sala-do-segundo-tempo");
        const optgroupSalaTercaFeiraSegundoTempo = document.querySelector("#optgroup-sala-terca-feira-sala-do-segundo-tempo");

        const tercaFeiraTerceiroTempo = document.querySelector("#terca-feira-terceiro-tempo");
        const selectTercaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#terca-feira-disciplina-do-terceiro-tempo");
        const optionSalaTercaFeiraTerceiroTempo = document.querySelector("#option-sala-terca-feira-sala-do-terceiro-tempo");
        const optgroupSalaTercaFeiraTerceiroTempo = document.querySelector("#optgroup-sala-terca-feira-sala-do-terceiro-tempo");

        const tercaFeiraQuartoTempo = document.querySelector("#terca-feira-quarto-tempo");
        const selectTercaFeiraDisciplinaDoQuartoTempo = document.querySelector("#terca-feira-disciplina-do-quarto-tempo");
        const optionSalaTercaFeiraQuartoTempo = document.querySelector("#option-sala-terca-feira-sala-do-quarto-tempo");
        const optgroupSalaTercaFeiraQuartoTempo = document.querySelector("#optgroup-sala-terca-feira-sala-do-quarto-tempo");

        const tercaFeiraQuintoTempo = document.querySelector("#terca-feira-quinto-tempo");
        const selectTercaFeiraDisciplinaDoQuintoTempo = document.querySelector("#terca-feira-disciplina-do-quinto-tempo");
        const optionSalaTercaFeiraQuintoTempo = document.querySelector("#option-sala-terca-feira-sala-do-quinto-tempo");
        const optgroupSalaTercaFeiraQuintoTempo = document.querySelector("#optgroup-sala-terca-feira-sala-do-quinto-tempo");

        const tercaFeiraSextoTempo = document.querySelector("#terca-feira-sexto-tempo");
        const selectTercaFeiraDisciplinaDoSextoTempo = document.querySelector("#terca-feira-disciplina-do-sexto-tempo");
        const optionSalaTercaFeiraSextoTempo = document.querySelector("#option-sala-terca-feira-sala-do-sexto-tempo");
        const optgroupSalaTercaFeiraSextoTempo = document.querySelector("#optgroup-sala-terca-feira-sala-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const quartaFeiraPrimeiroTempo = document.querySelector("#quarta-feira-primeiro-tempo");
        const selectQuartaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#quarta-feira-disciplina-do-primeiro-tempo");
        const optionSalaQuartaFeiraPrimeiroTempo = document.querySelector("#option-sala-quarta-feira-sala-do-primeiro-tempo");
        const optgroupSalaQuartaFeiraPrimeiroTempo = document.querySelector("#optgroup-sala-quarta-feira-sala-do-primeiro-tempo");

        const quartaFeiraSegundoTempo = document.querySelector("#quarta-feira-segundo-tempo");
        const selectQuartaFeiraDisciplinaDoSegundoTempo = document.querySelector("#quarta-feira-disciplina-do-segundo-tempo");
        const optionSalaQuartaFeiraSegundoTempo = document.querySelector("#option-sala-quarta-feira-sala-do-segundo-tempo");
        const optgroupSalaQuartaFeiraSegundoTempo = document.querySelector("#optgroup-sala-quarta-feira-sala-do-segundo-tempo");

        const quartaFeiraTerceiroTempo = document.querySelector("#quarta-feira-terceiro-tempo");
        const selectQuartaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#quarta-feira-disciplina-do-terceiro-tempo");
        const optionSalaQuartaFeiraTerceiroTempo = document.querySelector("#option-sala-quarta-feira-sala-do-terceiro-tempo");
        const optgroupSalaQuartaFeiraTerceiroTempo = document.querySelector("#optgroup-sala-quarta-feira-sala-do-terceiro-tempo");

        const quartaFeiraQuartoTempo = document.querySelector("#quarta-feira-quarto-tempo");
        const selectQuartaFeiraDisciplinaDoQuartoTempo = document.querySelector("#quarta-feira-disciplina-do-quarto-tempo");
        const optionSalaQuartaFeiraQuartoTempo = document.querySelector("#option-sala-quarta-feira-sala-do-quarto-tempo");
        const optgroupSalaQuartaFeiraQuartoTempo = document.querySelector("#optgroup-sala-quarta-feira-sala-do-quarto-tempo");

        const quartaFeiraQuintoTempo = document.querySelector("#quarta-feira-quinto-tempo");
        const selectQuartaFeiraDisciplinaDoQuintoTempo = document.querySelector("#quarta-feira-disciplina-do-quinto-tempo");
        const optionSalaQuartaFeiraQuintoTempo = document.querySelector("#option-sala-quarta-feira-sala-do-quinto-tempo");
        const optgroupSalaQuartaFeiraQuintoTempo = document.querySelector("#optgroup-sala-quarta-feira-sala-do-quinto-tempo");

        const quartaFeiraSextoTempo = document.querySelector("#quarta-feira-sexto-tempo");
        const selectQuartaFeiraDisciplinaDoSextoTempo = document.querySelector("#quarta-feira-disciplina-do-sexto-tempo");
        const optionSalaQuartaFeiraSextoTempo = document.querySelector("#option-sala-quarta-feira-sala-do-sexto-tempo");
        const optgroupSalaQuartaFeiraSextoTempo = document.querySelector("#optgroup-sala-quarta-feira-sala-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const quintaFeiraPrimeiroTempo = document.querySelector("#quinta-feira-primeiro-tempo");
        const selectQuintaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#quinta-feira-disciplina-do-primeiro-tempo");
        const optionSalaQuintaFeiraPrimeiroTempo = document.querySelector("#option-sala-quinta-feira-sala-do-primeiro-tempo");
        const optgroupSalaQuintaFeiraPrimeiroTempo = document.querySelector("#optgroup-sala-quinta-feira-sala-do-primeiro-tempo");

        const quintaFeiraSegundoTempo = document.querySelector("#quinta-feira-segundo-tempo");
        const selectQuintaFeiraDisciplinaDoSegundoTempo = document.querySelector("#quinta-feira-disciplina-do-segundo-tempo");
        const optionSalaQuintaFeiraSegundoTempo = document.querySelector("#option-sala-quinta-feira-sala-do-segundo-tempo");
        const optgroupSalaQuintaFeiraSegundoTempo = document.querySelector("#optgroup-sala-quinta-feira-sala-do-segundo-tempo");

        const quintaFeiraTerceiroTempo = document.querySelector("#quinta-feira-terceiro-tempo");
        const selectQuintaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#quinta-feira-disciplina-do-terceiro-tempo");
        const optionSalaQuintaFeiraTerceiroTempo = document.querySelector("#option-sala-quinta-feira-sala-do-terceiro-tempo");
        const optgroupSalaQuintaFeiraTerceiroTempo = document.querySelector("#optgroup-sala-quinta-feira-sala-do-terceiro-tempo");

        const quintaFeiraQuartoTempo = document.querySelector("#quinta-feira-quarto-tempo");
        const selectQuintaFeiraDisciplinaDoQuartoTempo = document.querySelector("#quinta-feira-disciplina-do-quarto-tempo");
        const optionSalaQuintaFeiraQuartoTempo = document.querySelector("#option-sala-quinta-feira-sala-do-quarto-tempo");
        const optgroupSalaQuintaFeiraQuartoTempo = document.querySelector("#optgroup-sala-quinta-feira-sala-do-quarto-tempo");

        const quintaFeiraQuintoTempo = document.querySelector("#quinta-feira-quinto-tempo");
        const selectQuintaFeiraDisciplinaDoQuintoTempo = document.querySelector("#quinta-feira-disciplina-do-quinto-tempo");
        const optionSalaQuintaFeiraQuintoTempo = document.querySelector("#option-sala-quinta-feira-sala-do-quinto-tempo");
        const optgroupSalaQuintaFeiraQuintoTempo = document.querySelector("#optgroup-sala-quinta-feira-sala-do-quinto-tempo");

        const quintaFeiraSextoTempo = document.querySelector("#quinta-feira-sexto-tempo");
        const selectQuintaFeiraDisciplinaDoSextoTempo = document.querySelector("#quinta-feira-disciplina-do-sexto-tempo");
        const optionSalaQuintaFeiraSextoTempo = document.querySelector("#option-sala-quinta-feira-sala-do-sexto-tempo");
        const optgroupSalaQuintaFeiraSextoTempo = document.querySelector("#optgroup-sala-quinta-feira-sala-do-sexto-tempo");

        //-----------------------------------------------------------------------------------------------------------

        const sextaFeiraPrimeiroTempo = document.querySelector("#sexta-feira-primeiro-tempo");
        const selectSextaFeiraDisciplinaDoPrimeiroTempo = document.querySelector("#sexta-feira-disciplina-do-primeiro-tempo");
        const optionSalaSextaFeiraPrimeiroTempo = document.querySelector("#option-sala-sexta-feira-sala-do-primeiro-tempo");
        const optgroupSalaSextaFeiraPrimeiroTempo = document.querySelector("#optgroup-sala-sexta-feira-sala-do-primeiro-tempo");

        const sextaFeiraSegundoTempo = document.querySelector("#sexta-feira-segundo-tempo");
        const selectSextaFeiraDisciplinaDoSegundoTempo = document.querySelector("#sexta-feira-disciplina-do-segundo-tempo");
        const optionSalaSextaFeiraSegundoTempo = document.querySelector("#option-sala-sexta-feira-sala-do-segundo-tempo");
        const optgroupSalaSextaFeiraSegundoTempo = document.querySelector("#optgroup-sala-sexta-feira-sala-do-segundo-tempo");

        const sextaFeiraTerceiroTempo = document.querySelector("#sexta-feira-terceiro-tempo");
        const selectSextaFeiraDisciplinaDoTerceiroTempo = document.querySelector("#sexta-feira-disciplina-do-terceiro-tempo");
        const optionSalaSextaFeiraTerceiroTempo = document.querySelector("#option-sala-sexta-feira-sala-do-terceiro-tempo");
        const optgroupSalaSextaFeiraTerceiroTempo = document.querySelector("#optgroup-sala-sexta-feira-sala-do-terceiro-tempo");

        const sextaFeiraQuartoTempo = document.querySelector("#sexta-feira-quarto-tempo");
        const selectSextaFeiraDisciplinaDoQuartoTempo = document.querySelector("#sexta-feira-disciplina-do-quarto-tempo");
        const optionSalaSextaFeiraQuartoTempo = document.querySelector("#option-sala-sexta-feira-sala-do-quarto-tempo");
        const optgroupSalaSextaFeiraQuartoTempo = document.querySelector("#optgroup-sala-sexta-feira-sala-do-quarto-tempo");

        const sextaFeiraQuintoTempo = document.querySelector("#sexta-feira-quinto-tempo");
        const selectSextaFeiraDisciplinaDoQuintoTempo = document.querySelector("#sexta-feira-disciplina-do-quinto-tempo");
        const optionSalaSextaFeiraQuintoTempo = document.querySelector("#option-sala-sexta-feira-sala-do-quinto-tempo");
        const optgroupSalaSextaFeiraQuintoTempo = document.querySelector("#optgroup-sala-sexta-feira-sala-do-quinto-tempo");

        const sextaFeiraSextoTempo = document.querySelector("#sexta-feira-sexto-tempo");
        const selectSextaFeiraDisciplinaDoSextoTempo = document.querySelector("#sexta-feira-disciplina-do-sexto-tempo");
        const optionSalaSextaFeiraSextoTempo = document.querySelector("#option-sala-sexta-feira-sala-do-sexto-tempo");
        const optgroupSalaSextaFeiraSextoTempo = document.querySelector("#optgroup-sala-sexta-feira-sala-do-sexto-tempo");
        //Consumo
    const urlDaApiDoHorario = "http://sige_ipial.test/api/dados-horario";
    
    fetch(urlDaApiDoHorario).then((dadoHorario)=>{
        return dadoHorario.json();
    }).then((dadoHorario)=>{
        //console.log(dadoHorario);
        //console.log(dadoHorario.laboratorios);
        //console.log(dadoHorario.laboratorios.length);
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
                    atribuirSalaAoOption(optionSalaSegundaFeiraPrimeiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSegundaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(segundaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraSegundoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSegundaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraTerceiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSegundaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraQuartoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSegundaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraQuintoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSegundaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(segundaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectSegundaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaSegundaFeiraSextoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSegundaFeiraSextoTempo);
                //Quarto step
                    atribuirHorarioDoTempoAoInput(tercaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoPrimeiroTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraPrimeiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaTercaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(tercaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraSegundoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaTercaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraTerceiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaTercaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraQuartoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaTercaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraQuintoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaTercaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(tercaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectTercaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaTercaFeiraSextoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaTercaFeiraSextoTempo);
                //Quinto step
                    atribuirHorarioDoTempoAoInput(quartaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoPrimeiroTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraPrimeiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuartaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(quartaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraSegundoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuartaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraTerceiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuartaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraQuartoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuartaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraQuintoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuartaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(quartaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectQuartaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaQuartaFeiraSextoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuartaFeiraSextoTempo);
                //Sexto step
                    atribuirHorarioDoTempoAoInput(quintaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoPrimeiroTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraPrimeiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuintaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(quintaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraSegundoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuintaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraTerceiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuintaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraQuartoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuintaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraQuintoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuintaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(quintaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectQuintaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaQuintaFeiraSextoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaQuintaFeiraSextoTempo);
                //Sétimo step
                    atribuirHorarioDoTempoAoInput(sextaFeiraPrimeiroTempo, 0);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoPrimeiroTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraPrimeiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSextaFeiraPrimeiroTempo);
                    
                    atribuirHorarioDoTempoAoInput(sextaFeiraSegundoTempo, 1);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoSegundoTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraSegundoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSextaFeiraSegundoTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraTerceiroTempo, 2);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoTerceiroTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraTerceiroTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSextaFeiraTerceiroTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraQuartoTempo, 3);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoQuartoTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraQuartoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSextaFeiraQuartoTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraQuintoTempo, 4);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoQuintoTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraQuintoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSextaFeiraQuintoTempo);

                    atribuirHorarioDoTempoAoInput(sextaFeiraSextoTempo, 5);
                    atribuirDisciplinasAoSelect(selectSextaFeiraDisciplinaDoSextoTempo);
                    atribuirSalaAoOption(optionSalaSextaFeiraSextoTempo);
                    atribuirLaboratoriosAoOptgroup(optgroupSalaSextaFeiraSextoTempo);
            });
    });

//Fim do criar horário