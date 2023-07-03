const paragrafoDeValidacaoDasVagasRegistrarAluno = document.querySelector("#paragrafo-de-validacao-da-quantidade-de-vagas");

//Impedir de prosseguir se não houverem vagas
if (vagasInput.value === '0'){
    vagasInput.value = '';
    paragrafoDeValidacaoDasVagasRegistrarAluno.innerHTML = "Não há vagas disponíveis";
    paragrafoDeValidacaoDasVagasRegistrarAluno.classList.remove("d-none");
} else{
    if(!paragrafoDeValidacaoDasVagasRegistrarAluno.classList.contains("d-none")){
        paragrafoDeValidacaoDasVagasRegistrarAluno.classList.add("d-none");
    }
}

//Impedir de prosseguir se não houverem vagas ao mudar de curso
cursoSelect.addEventListener('change', ()=>{
    if (vagasInput.value === '0'){
        vagasInput.value = '';
        paragrafoDeValidacaoDasVagasRegistrarAluno.innerHTML = "Não há vagas disponíveis";
        paragrafoDeValidacaoDasVagasRegistrarAluno.classList.remove("d-none");
    } else{
        if(!paragrafoDeValidacaoDasVagasRegistrarAluno.classList.contains("d-none")){
            paragrafoDeValidacaoDasVagasRegistrarAluno.classList.add("d-none");
        }
    }
});

//Impedir de prosseguir se não houverem vagas ao mudar de classe
classeSelect.addEventListener('change', ()=>{
    if (vagasInput.value === '0'){
        vagasInput.value = '';
        paragrafoDeValidacaoDasVagasRegistrarAluno.innerHTML = "Não há vagas disponíveis";
        paragrafoDeValidacaoDasVagasRegistrarAluno.classList.remove("d-none");
    } else{
        if(!paragrafoDeValidacaoDasVagasRegistrarAluno.classList.contains("d-none")){
            paragrafoDeValidacaoDasVagasRegistrarAluno.classList.add("d-none");
        }
    }
});

//Impedir de prosseguir se não houverem vagas ao mudar de turno
turnoSelect.addEventListener('change', ()=>{
    if (vagasInput.value === '0'){
        vagasInput.value = '';
        paragrafoDeValidacaoDasVagasRegistrarAluno.innerHTML = "Não há vagas disponíveis";
        paragrafoDeValidacaoDasVagasRegistrarAluno.classList.remove("d-none");
    } else{
        if(!paragrafoDeValidacaoDasVagasRegistrarAluno.classList.contains("d-none")){
            paragrafoDeValidacaoDasVagasRegistrarAluno.classList.add("d-none");
        }
    }
});