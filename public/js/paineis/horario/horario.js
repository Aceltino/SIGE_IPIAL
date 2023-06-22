//Criar horário
    //Pegar os elementos para a validação da educação física 
    const divQuePodeDesaparecer1 = document.querySelector("#horario-div-que-pode-desaparecer-1");
    const divQuePodeDesaparecer2 = document.querySelector("#horario-div-que-pode-desaparecer-2");
    const selectTurma = document.querySelector("#horario-select-turma");
    const selectPrimeiroDiaDeEducacaoFisica = document.querySelector("#criar-horario-select-primeiro-dia-de-educacao-fisica");
    const selectSegundoDiaDeEducacaoFisica = document.querySelector("#criar-horario-select-segundo-dia-de-educacao-fisica");
    const horaDeInicioDaEducacaoFisicaNoPrimeiroDiaDeEducacaoFisicaDoCriarHorario = document.querySelector("#criar-horario-hora-de-inicio-da-educacao-fisica-no-primeiro-dia");
    const horaDeFimDaEducacaoFisicaNoPrimeiroDiaDeEducacaoFisicaDoCriarHorario = document.querySelector("#criar-horario-hora-de-fim-da-educacao-fisica-no-primeiro-dia");
    const horaDeInicioDaEducacaoFisicaNoSegundoDiaDeEducacaoFisicaDoCriarHorario = document.querySelector("#criar-horario-hora-de-inicio-da-educacao-fisica-no-segundo-dia");
    const horaDeFimDaEducacaoFisicaNoSegundoDiaDeEducacaoFisicaDoCriarHorario = document.querySelector("#criar-horario-hora-de-fim-da-educacao-fisica-no-segundo-dia");

    //Ao mudar a opção selecionada no select...
    selectTurma.addEventListener("change", ()=>{
        //Pegar o valor selecionado
        var turmaSelecionada = selectTurma.value;
        var vetorTurmaSelecionada = turmaSelecionada.split('');

        //Independente da inicial, se o antepenúltimo caracter for 2 ou 3, ou se a turma for do turno da noite esconde as divs
        if(vetorTurmaSelecionada[vetorTurmaSelecionada.length - 3] === "2" || vetorTurmaSelecionada[vetorTurmaSelecionada.length - 3] === "3" || vetorTurmaSelecionada[vetorTurmaSelecionada.length - 1] === "N"){
            divQuePodeDesaparecer1.classList.add("d-none");
            divQuePodeDesaparecer2.classList.add("d-none");
            //Resetar os valores
            selectPrimeiroDiaDeEducacaoFisica.value = "Nenhum";
            selectSegundoDiaDeEducacaoFisica.value = "Nenhum";
            horaDeInicioDaEducacaoFisicaNoPrimeiroDiaDeEducacaoFisicaDoCriarHorario.value = "00:00";
            horaDeFimDaEducacaoFisicaNoPrimeiroDiaDeEducacaoFisicaDoCriarHorario.value = "00:00";
            horaDeInicioDaEducacaoFisicaNoSegundoDiaDeEducacaoFisicaDoCriarHorario.value = "00:00";
            horaDeFimDaEducacaoFisicaNoSegundoDiaDeEducacaoFisicaDoCriarHorario.value = "00:00";
        }
        else{
            divQuePodeDesaparecer1.classList.remove("d-none");
            divQuePodeDesaparecer2.classList.remove("d-none");
        }
    });
//Fim do criar horário