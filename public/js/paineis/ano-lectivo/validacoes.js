const descricaoDoAnoLectivo = document.querySelector("#descricao-ano-lectivo"); //Pegar a input da descrição
const dataDeInicioDoAnoLectivo = document.querySelector("#data-inicio-ano-lectivo"); //Pegar a input da data de início do ano lectivo
const dataDeFimDoAnoLectivo = document.querySelector("#data-fim-ano-lectivo"); //Pegar a input da data do fim do ano lectivo

//Variáveis para armazenar o início e o fim do ano lectivo respectivamente
var anoDeInicioDoAnoLectivo;
var anoDeFimDoAnoLectivo;

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

