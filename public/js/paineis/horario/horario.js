//Criar horário
    //Pegar os elementos para a validação da educação física 
        const selectTurma = document.querySelector("#horario-select-turma");
        const optgroupDoSelectTurma = document.querySelector("#optgroup-turma");

        const divDisciplinasNoHorario = document.querySelector("#div-disciplinas-no-horario");
        const divProfessoresNoHorario = document.querySelector("#div-professores-no-horario");

        const selectSala = document.querySelector("#horario-select-sala");
        const optgroupDoSelectSala = document.querySelector("#optgroup-sala");
        
    //Consumo
        const urlDaApiDoHorario = "http://sige_ipial.test/api/dados-horario";
        
        fetch(urlDaApiDoHorario).then((dadoHorario)=>{
            return dadoHorario.json();
        }).then((dadoHorario)=>{
            //console.log(dadoHorario);
            console.log(dadoHorario.horarioInfo);
            console.log(dadoHorario.horarioInfo[0]);
            console.log(dadoHorario.horarioInfo[0].disciplinas);
            console.log(dadoHorario.horarioInfo[0].disciplinas[0]);
            console.log(dadoHorario.horarioInfo[0].disciplinas[0].disciplina_id
                );
                console.log(dadoHorario.horarioInfo[0].professores[0].disciplina_id
                    );
            //console.log(dadoHorario.horarioInfo.length);

            //Primeiro step
            var qtdDeTurmas = dadoHorario.horarioInfo.length;

            if (qtdDeTurmas !== 0 && qtdDeTurmas !== null){
                var opcao = new Array();
                
                for(let indice = 0; indice < qtdDeTurmas; indice++){
                    opcao[indice] = document.createElement("option");
                    opcao[indice].value = indice;
                    opcao[indice].innerText = dadoHorario.horarioInfo[indice].nome;
                    optgroupDoSelectTurma.appendChild(opcao[indice]);
                } 
            }

            //Segundo step

                //Disciplinas
                var inputDisciplina = new Array();
                var selectProfessor = new Array();
                var selectOptgroup = new Array();
                var optionProfessor = new Array();
                var idTurmaSelecionada = selectTurma.value;

                if (idTurmaSelecionada !== null){
                
                    for(let indice = 0; indice < dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas[indice].length; indice++){
                            var nameInputDisciplina = "disciplina"+ indice;
                            var nameSelectProfessor = "professor"+ indice;

                            inputDisciplina[indice] = document.createElement("input");
                            inputDisciplina[indice].value = dadoHorario.horarioInfo[indice].nome;
                            inputDisciplina[indice].classList.add("mb-2");
                            inputDisciplina[indice].disabled = true;
                            inputDisciplina[indice].setAttribute("name", nameInputDisciplina);

                            selectProfessor[indice] = document.createElement("select");
                            selectProfessor[indice].classList.add("mb-2");
                            inputDisciplina[indice].setAttribute("name", nameSelectProfessor);

                            selectOptgroup[indice] = document.createElement("optgroup");
                            selectOptgroup[indice].setAttribute("label", "Professor");
                            
                            for(let indice2 = 0; indice2 < dadoHorario.horarioInfo[idTurmaSelecionada].disciplinas.length; indice2++){
                                if(dadoHorario.horarioInfo[indice].disciplinas[indice].disciplina_id === dadoHorario.horarioInfo[indice2].professores[indice2].disciplina_id){
                                    optionProfessor[indice2] = document.createElement("option");
                                    optionProfessor[indice2].value = dadoHorario.horarioInfo[indice].professores[indice].nomeProfessor;
                                    
                                    selectOptgroup[indice].appendChild(optionProfessor[indice2])
                            ;
                                }
                            } 

                            selectProfessor[indice].appendChild(selectOptgroup[indice]);

                            divDisciplinasNoHorario.appendChild(inputDisciplina[indice])
                            ;

                            divProfessoresNoHorario.appendChild(selectProfessor[indice])
                            ;
                    } 
                }
        });

//Fim do criar horário