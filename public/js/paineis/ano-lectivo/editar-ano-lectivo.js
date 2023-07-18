//Pegar as inputs
    //Primeiro step (Informações do sistema)
        const editarDescricaoDoAnoLectivo = document.querySelector("#editar-descricao-do-ano-lectivo"); 
        const editarDataDeInicioDoAnoLectivo = document.querySelector("#editar-data-de-inicio-do-ano-lectivo");
        const editarDataDeInicioDasInscricoes = document.querySelector("#editar-data-de-inicio-das-inscricoes");
        const editarDataDeFimDasInscricoes = document.querySelector("#editar-data-de-fim-das-inscricoes");
        const editarDataDeInicioDasMatriculas = document.querySelector("#editar-data-de-inicio-das-matriculas");
        const editarDataDeFimDasMatriculas = document.querySelector("#editar-data-de-fim-das-matriculas");
        const editarNumeroMaximoDeAlunosNasTurmas = document.querySelector("#editar-numero-maximo-de-alunos-nas-turmas");
        const editarNumeroMaximoDeSalas = document.querySelector("#editar-numero-maximo-de-salas");
    //Paragrafos de validação
        const paragrafoDeValidacaoDoEditarDescricaoDoAnoLectivo = document.querySelector("#paragrafo-de-validacao-do-editar-descricao-do-ano-lectivo");
        const paragrafoDeValidacaoDoEditarDataDeInicioDasInscricoes = document.querySelector("#paragrafo-de-validacao-do-editar-data-de-inicio-das-inscricoes");
        const paragrafoDeValidacaoDoEditarDataDeFimDasInscricoes = document.querySelector("#paragrafo-de-validacao-do-editar-data-de-fim-das-inscricoes");
        const paragrafoDeValidacaoDoEditarDataDeInicioDasMatriculas = document.querySelector("#paragrafo-de-validacao-do-editar-data-de-inicio-das-matriculas");
        const paragrafoDeValidacaoDoEditarDataDeFimDasMatriculas = document.querySelector("#paragrafo-de-validacao-do-editar-data-de-fim-das-matriculas");
        const paragrafoDeValidacaoDoEditarNumeroMaximoDeAlunosNasTurmas = document.querySelector("#paragrafo-de-validacao-do-editar-numero-maximo-de-alunos-nas-turmas");
        const paragrafoDeValidacaoDoEditarNumeroMaximoDeSalas = document.querySelector("#paragrafo-de-validacao-do-editar-numero-maximo-de-salas");
//Definições que devem ser tomadas de imediato

//Impedir a inserção da vírgula
    //Primeiro step
        impedirAInsercaoDaVirgulaNoInput(editarNumeroMaximoDeAlunosNasTurmas);
        impedirAInsercaoDaVirgulaNoInput(editarNumeroMaximoDeSalas);
//Término do impedimento da inserção da vírgula

//Impedir mais de 2 caracteres na input
    limitarOsCaracteresDaInput(editarNumeroMaximoDeAlunosNasTurmas, 2);
//Impedir menos de 1 e mais de 55 alunos nas turmas
    limitarOsValoresMinimosEMaximosDaInput(editarNumeroMaximoDeAlunosNasTurmas, 1, 55);
//Impedir mais de 2 caracteres na input
    limitarOsCaracteresDaInput(editarNumeroMaximoDeSalas, 2);
//Impedir menos de 1 mais de 30 salas
    limitarOsValoresMinimosEMaximosDaInput(editarNumeroMaximoDeSalas, 1, 30);
//Término das definições que devem ser tomadas de imediato

//Funções para retorno
    //Retornar a data de início do Ano Lectivo
    function editarRetornarADataDeInicioDoAnoLectivo(){
        //Transformar a string recebida como valor da input em Date
        var valorDoAnoLectivoInicioEditar = new Date(editarDataDeInicioDoAnoLectivo.value);
        
        return valorDoAnoLectivoInicioEditar;
    }
    //Término do retorno da data de início do Ano Lectivo

    //Retornar a data de início das inscrições
    function editarRetornarADataDeInicioDasInscricoes(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeInicioDasInscricoesEditar = new Date(editarDataDeInicioDasInscricoes.value);
        
        return valorDaDataDeInicioDasInscricoesEditar;
    }
    //Término do retorno da data de início das inscrições

    //Retornar a data de fim das inscrições
    function editarRetornarADataDeFimDasInscricoes(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeFimDasInscricoesEditar = new Date(editarDataDeFimDasInscricoes.value);
        
        return valorDaDataDeFimDasInscricoesEditar;
    }
    //Término do retorno da data de fim das inscrições

    //Retornar a data de início das matrículas
    function editarRetornarADataDeInicioDasMatriculas(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeInicioDasMatriculasEditar = new Date(editarDataDeInicioDasMatriculas.value);
        
        return valorDaDataDeInicioDasMatriculasEditar;
    }
    //Término do retorno da data de início das matrículas

    //Retorno da data de fim das matrículas
    function editarRetornarADataDeFimDasMatriculas(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeFimDasMatriculasEditar = new Date(editarDataDeFimDasMatriculas.value);
        
        return valorDaDataDeFimDasMatriculasEditar;
    }
    //Término do retorno da data de fim das matrículas
//Fim das funções diversas

//Validações - Primeiro step (Informações do sistema)
//Ao alterar o valor da input da descrição do ano lectivo
editarDescricaoDoAnoLectivo.addEventListener("blur", ()=>{
    //Padrão desejado
    const padraoDaDescricao = /^\d{4}-\d{4}$/;
    
    //Verificar se o valor corresponde ao padrão desejado
    if(!padraoDaDescricao.test(editarDescricaoDoAnoLectivo.value)){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarDescricaoDoAnoLectivo, "O valor deve ter quatro dígitos numéricos antes e depois do hífen.");
        editarDescricaoDoAnoLectivo.value = "";
    }else{
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarDescricaoDoAnoLectivo);
    }
});

//Ao alterar o valor da input da data de início das inscrições
editarDataDeInicioDasInscricoes.addEventListener("input", ()=>{  
    //Não permitir que a data de início do ano lectivo seja posterior à de início das inscrições
    if(editarDataDeInicioDoAnoLectivo.value !== '' && editarDataDeInicioDasInscricoes.value < editarDataDeInicioDoAnoLectivo.value){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeInicioDasInscricoes, "A data de início das inscrições não pode ser anterior à data de início do ano lectivo");
        editarDataDeInicioDasInscricoes.value = "";
    }
    //Remover a mensagem de erro se a data de fim suceder à de início
    if(editarDataDeInicioDasInscricoes.value >= editarDataDeInicioDoAnoLectivo.value){
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeInicioDasInscricoes);
    }

    //Não permitir que a data de término seja anterior à de início 
    if(editarRetornarADataDeFimDasInscricoes() !== '' && editarRetornarADataDeFimDasInscricoes() <= editarRetornarADataDeInicioDasInscricoes()){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeFimDasInscricoes, "A data de término não pode ser anterior ou igual à data de início");
        editarDataDeFimDasInscricoes.value = "";
    }
    //Remover a mensagem de erro se a data de fim suceder à de início
    if(editarRetornarADataDeFimDasInscricoes() > editarRetornarADataDeInicioDasInscricoes()){
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeFimDasInscricoes);
    }
});

//Ao alterar o valor da input da data de fim das inscrições
editarDataDeFimDasInscricoes.addEventListener("input", ()=>{  
    //Não permitir que a data de término seja anterior à de início do ano lectivo
    if(editarRetornarADataDeInicioDasInscricoes() !== '' && editarRetornarADataDeFimDasInscricoes() <= editarRetornarADataDeInicioDasInscricoes()){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeFimDasInscricoes, "A data de término não pode ser anterior ou igual à data de início");
        editarDataDeFimDasInscricoes.value = "";
    }
    //Remover a mensagem de erro se a data de fim suceder à de início
    if(editarRetornarADataDeFimDasInscricoes() > editarRetornarADataDeInicioDasInscricoes()){
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeFimDasInscricoes);
    }
});

//Ao alterar o valor da input da data de início das matrículas
editarDataDeInicioDasMatriculas.addEventListener("input", ()=>{  
    //Não permitir que a data de início das matrículas seja anterior à de início do ano lectivo
    if(editarRetornarADataDeInicioDoAnoLectivo() !== '' && editarRetornarADataDeInicioDasMatriculas() <= editarRetornarADataDeInicioDoAnoLectivo()){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeInicioDasMatriculas, "As matrículas não podem começar antes ou no dia da abertura do ano lectivo");
        editarDataDeInicioDasMatriculas.value = "";
    }
    //Remover a mensagem de erro se a data de início das matrículas suceder à de início do ano lectivo 
    if(editarRetornarADataDeInicioDasMatriculas() > editarRetornarADataDeInicioDoAnoLectivo()){
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeInicioDasMatriculas);
    } 
    //Não permitir que a data de início das matrículas seja anterior à de fim das inscrições
    if(editarRetornarADataDeFimDasInscricoes() !== '' && editarRetornarADataDeInicioDasMatriculas() <= editarRetornarADataDeFimDasInscricoes()){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeInicioDasMatriculas, "As matrículas não podem começar antes das inscrições terminarem");
        editarDataDeInicioDasMatriculas.value = "";
    }
    //Remover a mensagem de erro se a data de início das matrículas suceder à de fim das inscrições
    if(editarRetornarADataDeFimDasInscricoes() < editarRetornarADataDeInicioDasMatriculas()){
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeInicioDasMatriculas);
    } 

    //Não permitir que a data de término das matrículas seja anterior à de início das matrículas
    if(editarRetornarADataDeFimDasMatriculas() !== '' && editarRetornarADataDeFimDasMatriculas() <= editarRetornarADataDeInicioDasMatriculas()){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeInicioDasMatriculas, "A data de término não pode ser anterior ou igual à data de início");
        editarDataDeInicioDasMatriculas.value = "";
    }
    //Remover a mensagem de erro se a data de fim suceder à de início
    if(editarRetornarADataDeFimDasMatriculas() > editarRetornarADataDeInicioDasMatriculas()){
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeInicioDasMatriculas);
    } 
});

//Ao alterar o valor da input da data de fim das matrículas
editarDataDeFimDasMatriculas.addEventListener("input", ()=>{  
    //Não permitir que a data de término seja anterior à de início 
    if(editarRetornarADataDeInicioDasMatriculas() !== '' && editarRetornarADataDeFimDasMatriculas() <= editarRetornarADataDeInicioDasMatriculas()){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeFimDasMatriculas, "A data de término não pode ser anterior ou igual à data de início");
        editarDataDeFimDasMatriculas.value = "";
    }
    //Remover a mensagem de erro se a data de fim suceder à de início
    if(editarRetornarADataDeFimDasMatriculas() > editarRetornarADataDeInicioDasMatriculas()){
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarDataDeFimDasMatriculas);
    }
});

editarNumeroMaximoDeAlunosNasTurmas.addEventListener("blur", ()=>{
    if(parseInt(editarNumeroMaximoDeAlunosNasTurmas.value) < 1){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarNumeroMaximoDeAlunosNasTurmas, "Não pode ter uma turma com menos de 1 aluno");
        editarNumeroMaximoDeAlunosNasTurmas.value = "";
    }
    if(parseInt(editarNumeroMaximoDeAlunosNasTurmas.value) > 50){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarNumeroMaximoDeAlunosNasTurmas, "A turma não pode ter mais de 50 alunos");
        editarNumeroMaximoDeAlunosNasTurmas.value = "";
    }
    if(parseInt(editarNumeroMaximoDeAlunosNasTurmas.value) >= 1 && parseInt(editarNumeroMaximoDeAlunosNasTurmas.value) <= 50){
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarNumeroMaximoDeAlunosNasTurmas);
    }
});

editarNumeroMaximoDeSalas.addEventListener("blur", ()=>{
    if(parseInt(editarNumeroMaximoDeSalas.value) < 1){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarNumeroMaximoDeSalas, "O ano lectivo tem de ter ao menos de 1 sala");
        editarNumeroMaximoDeSalas.value = "";
    }
    if(parseInt(editarNumeroMaximoDeSalas.value) > 30){
        apresentarMensagemDeErro(paragrafoDeValidacaoDoEditarNumeroMaximoDeSalas, "Não pode ter mais de 30 salas no momento");
        editarNumeroMaximoDeSalas.value = "";
    }
    if(parseInt(editarNumeroMaximoDeSalas.value) >= 1 && parseInt(editarNumeroMaximoDeSalas.value) <= 30){
        ocultarMensagemDeErro(paragrafoDeValidacaoDoEditarNumeroMaximoDeSalas);
    }
});