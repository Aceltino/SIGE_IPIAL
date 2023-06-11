//Pegar as inputs
    //Primeiro step
        const descricaoDoAnoLectivo = document.querySelector("#descricao-do-ano-lectivo"); 
        const dataDeInicioDoAnoLectivo = document.querySelector("#data-de-inicio-do-ano-lectivo");
        const dataDeFimDoAnoLectivo = document.querySelector("#data-de-fim-do-ano-lectivo");
        const dataDeInicioDasInscricoes = document.querySelector("#data-de-inicio-das-inscricoes");
        const dataDeFimDasInscricoes = document.querySelector("#data-de-fim-das-inscricoes");
        const dataDeInicioDasMatriculas = document.querySelector("#data-de-inicio-das-matriculas");
        const dataDeFimDasMatriculas = document.querySelector("#data-de-fim-das-matriculas");
        const numeroMaximoDeAlunosNasTurmas = document.querySelector("#numero-maximo-de-alunos-nas-turmas");
        const numeroMaximoDeSalas = document.querySelector("#numero-maximo-de-salas");
    //Segundo step
        const dataDeInicioDoPrimeiroTrimestre = document.querySelector("#data-de-inicio-do-primeiro-trimestre");
        const dataDeFimDoPrimeiroTrimestre = document.querySelector("#data-de-fim-do-primeiro-trimestre");
        const dataDeInicioDoSegundoTrimestre = document.querySelector("#data-de-inicio-do-segundo-trimestre");
        const dataDeFimDoSegundoTrimestre = document.querySelector("#data-de-fim-do-segundo-trimestre");
        const dataDeInicioDoTerceiroTrimestre = document.querySelector("#data-de-inicio-do-terceiro-trimestre");
        const dataDeFimDoTerceiroTrimestre = document.querySelector("#data-de-fim-do-terceiro-trimestre");
    //Variáveis para armazenar o início e o fim do ano lectivo respectivamente
        var anoDeInicioDoAnoLectivo;
        var anoDeFimDoAnoLectivo;
//Término da declaração de variáveis

//Função para não permitir datas anteriores à data de hoje
function naoPermitirDatasAnterioresADataDeHoje(inputTypeDate){
    const dataActual = new Date();

    const ano = dataActual.getFullYear(); //Pegar o ano actual
    let mes = dataActual.getMonth() + 1; //Pegar o mês actual
    let dia = dataActual.getDate(); //Pegar o dia actual

    mes < 10 ? mes = '0' + mes : mes = mes;
    dia < 10 ? dia = '0' + dia : dia = dia;

    const dataFormatada = `${ano}-${mes}-${dia}`;

    inputTypeDate.setAttribute('min', dataFormatada);
}

//Não permitir datas passadas
    //Primeiro step
        naoPermitirDatasAnterioresADataDeHoje(dataDeInicioDoAnoLectivo);
        naoPermitirDatasAnterioresADataDeHoje(dataDeFimDoAnoLectivo);
        naoPermitirDatasAnterioresADataDeHoje(dataDeInicioDasInscricoes);
        naoPermitirDatasAnterioresADataDeHoje(dataDeFimDasInscricoes);
        naoPermitirDatasAnterioresADataDeHoje(dataDeInicioDasMatriculas);
        naoPermitirDatasAnterioresADataDeHoje(dataDeFimDasMatriculas);
    //Segundo step
        naoPermitirDatasAnterioresADataDeHoje(dataDeInicioDoPrimeiroTrimestre);
        naoPermitirDatasAnterioresADataDeHoje(dataDeFimDoPrimeiroTrimestre);
        naoPermitirDatasAnterioresADataDeHoje(dataDeInicioDoSegundoTrimestre);
        naoPermitirDatasAnterioresADataDeHoje(dataDeFimDoSegundoTrimestre);
        naoPermitirDatasAnterioresADataDeHoje(dataDeInicioDoTerceiroTrimestre);
        naoPermitirDatasAnterioresADataDeHoje(dataDeFimDoTerceiroTrimestre);



//Ao alterar o valor da input da data de início do ano lectivo
dataDeInicioDoAnoLectivo.addEventListener("input",()=>{
    //Transformar a string recebida como valor da input em Date
    var valorDoAnoLectivoInicio = new Date(dataDeInicioDoAnoLectivo.value);

    //Armazenar o início do ano lectivo
    anoDeInicioDoAnoLectivo = valorDoAnoLectivoInicio.getFullYear();

    //Apresentar descrição
    descricaoDoAnoLectivo.value = dataDeFimDoAnoLectivo.value === "" ? anoDeInicioDoAnoLectivo: anoDeInicioDoAnoLectivo +"-"+ anoDeFimDoAnoLectivo;
});

//Ao alterar o valor da input da data de fim do ano lectivo
dataDeFimDoAnoLectivo.addEventListener("input",()=>{

    //Transformar a string recebida como valor da input em Date
    var valorDoAnoLectivoFim = new Date(dataDeFimDoAnoLectivo.value);

    //Armazenar o fim do ano lectivo
    anoDeFimDoAnoLectivo = valorDoAnoLectivoFim.getFullYear();

    //Apresentar descrição
    descricaoDoAnoLectivo.value = dataDeInicioDoAnoLectivo.value === "" ? anoDeFimDoAnoLectivo: anoDeInicioDoAnoLectivo +"-"+ anoDeFimDoAnoLectivo;
});

//Ao alterar o valor da input de número máximo de alunos nas turmas
numeroMaximoDeAlunosNasTurmas.addEventListener("input", ()=>{
    //Impedir mais de 2 caracteres na input
    if(numeroMaximoDeAlunosNasTurmas.value.length > 2){
        numeroMaximoDeAlunosNasTurmas.value = numeroMaximoDeAlunosNasTurmas.value.slice(0, 2);
    }
    //Impedir mais de 55 alunos nas turmas
    if(numeroMaximoDeAlunosNasTurmas.value > 55){
        numeroMaximoDeAlunosNasTurmas.value = 55;
    }
});

//Ao alterar o valor da input de número máximo de salas
numeroMaximoDeSalas.addEventListener("input", ()=>{
    //Impedir mais de 2 caracteres na input
    if(numeroMaximoDeSalas.value.length > 2){
        numeroMaximoDeSalas.value = numeroMaximoDeSalas.value.slice(0, 2);
    }
    //Impedir mais de 30 salas
    if(numeroMaximoDeSalas.value > 30){
        numeroMaximoDeSalas.value = 30;
    }
});