//Editar horário
    //Pegar os elementos para a validação da educação física 
    const divQuePodeDesaparecer1Editar = document.querySelector("#editar-horario-div-que-pode-desaparecer-1");
    const divQuePodeDesaparecer2Editar = document.querySelector("#editar-horario-div-que-pode-desaparecer-2");
    const inputTurmaEditar = document.querySelector("#input-editar-horario-turma");

    const editarValorDaTurma = inputTurmaEditar.value;
    var vetorEditarValorDaTurma = editarValorDaTurma.split('');

    //Independente da inicial, se o antepenúltimo caracter for 2 ou 3, ou se a turma for do turno da noite esconde as divs
    if(vetorEditarValorDaTurma[vetorEditarValorDaTurma.length - 3] === "2" || vetorEditarValorDaTurma[vetorEditarValorDaTurma.length - 3] === "3" || vetorEditarValorDaTurma[vetorEditarValorDaTurma.length - 1] === "N"){
            divQuePodeDesaparecer1Editar.classList.add("d-none");
            divQuePodeDesaparecer2Editar.classList.add("d-none");
    }
    else{
        divQuePodeDesaparecer1Editar.classList.remove("d-none");
        divQuePodeDesaparecer2Editar.classList.remove("d-none");
    }
//Fim do editar horário
