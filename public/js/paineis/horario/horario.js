//Criar horário
    //Pegar os elementos para a validação da educação física 
    const divQuePodeDesaparecer1 = document.querySelector("#horario-div-que-pode-desaparecer-1");
    const divQuePodeDesaparecer2 = document.querySelector("#horario-div-que-pode-desaparecer-2");
    const selectTurma = document.querySelector("#horario-select-turma");

    //Ao mudar a opção selecionada no select...
    selectTurma.addEventListener("change", ()=>{
        //Pegar o valor selecionado
        var turmaSelecionada = selectTurma.value;
        var vetorTurmaSelecionada = turmaSelecionada.split('');

        //Independente da inicial, se o antepenúltimo caracter for 2 ou 3, ou se a turma for do turno da noite esconde as divs
        if(vetorTurmaSelecionada[vetorTurmaSelecionada.length - 3] === "2" || vetorTurmaSelecionada[vetorTurmaSelecionada.length - 3] === "3" || vetorTurmaSelecionada[vetorTurmaSelecionada.length - 1] === "N"){
            divQuePodeDesaparecer1.classList.add("d-none");
            divQuePodeDesaparecer2.classList.add("d-none");
        }
        else{
            divQuePodeDesaparecer1.classList.remove("d-none");
            divQuePodeDesaparecer2.classList.remove("d-none");
        }
    })
//Fim do criar horário

//Editar horário
    //Pegar os elementos para a validação da educação física 
    const divQuePodeDesaparecer1Editar = document.querySelector("#editar-horario-div-que-pode-desaparecer-1");
    const divQuePodeDesaparecer2Editar = document.querySelector("#editar-horario-div-que-pode-desaparecer-2");
    const inputTurmaEditar = document.querySelector("#input-editar-horario-turma");

    var editarTurmaSelecionada = inputTurmaEditar.value;
    var vetorEditarTurmaSelecionada = editarTurmaSelecionada.split('');

    //Independente da inicial, se o antepenúltimo caracter for 2 ou 3, ou se a turma for do turno da noite esconde as divs
    if(vetorEditarTurmaSelecionada[vetorEditarTurmaSelecionada.length - 3] === "2" || vetorEditarTurmaSelecionada[vetorEditarTurmaSelecionada.length - 3] === "3" || vetorEditarTurmaSelecionada[vetorEditarTurmaSelecionada.length - 1] === "N"){
        divQuePodeDesaparecer1.classList.add("d-none");
        divQuePodeDesaparecer2.classList.add("d-none");
    }
//Fim do editar horário