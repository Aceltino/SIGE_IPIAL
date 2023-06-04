//Pegar os elementos para a validação da educação física
const divQuePodeDesaparecer1 = document.querySelector("#horario-div-que-pode-desaparecer-1");
const divQuePodeDesaparecer2 = document.querySelector("#horario-div-que-pode-desaparecer-2");
const selectTurma = document.querySelector("#horario-select-turma");

//Ao mudar a opção selecionada no select...
selectTurma.addEventListener("change", ()=>{
    //Pegar o valor selecionado
    var turmaSelecionada = selectTurma.value;
    var vetorTurmaSelecionada = turmaSelecionada.split('');

    //Independente da inicial, se depois vier 12 ou 13, ou ainda se a turma for do turno da noite
    if(vetorTurmaSelecionada[2] === "2" || vetorTurmaSelecionada[2] === "3" || vetorTurmaSelecionada[vetorTurmaSelecionada.length - 1] === "N"){
        divQuePodeDesaparecer1.classList.add("d-none");
        divQuePodeDesaparecer2.classList.add("d-none");
    }else{
        divQuePodeDesaparecer1.classList.remove("d-none");
        divQuePodeDesaparecer2.classList.remove("d-none");
    }
})