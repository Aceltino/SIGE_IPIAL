//Criar horário
    //Pegar os elementos para a validação da educação física 
        const selectTurma = document.querySelector("#horario-select-turma");
        const optgroupDoSelectTurma = document.querySelector("#optgroup-turma");

    //Consumo
        const urlDaApiDoHorario = "http://sige_ipial.test/api/dados-horario";
        
        fetch(urlDaApiDoHorario).then((dadoHorario)=>{
            return dadoHorario.json();
        }).then((dadoHorario)=>{
            console.log(dadoHorario);
            console.log(dadoHorario.horarioInfo);
            console.log(dadoHorario.horarioInfo[horarioInfo.length]);
            console.log(dadoHorario.horarioInfo[dadoHorario.horarioInfo.length]);
            
        });

//Fim do criar horário