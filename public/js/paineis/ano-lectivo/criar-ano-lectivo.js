//Pegar as inputs
        //Primeiro step (Informações do sistema)
            const descricaoDoAnoLectivo = document.querySelector("#descricao-do-ano-lectivo"); 
            const dataDeInicioDoAnoLectivo = document.querySelector("#data-de-inicio-do-ano-lectivo");
            const dataDeInicioDasInscricoes = document.querySelector("#data-de-inicio-das-inscricoes");
            const dataDeFimDasInscricoes = document.querySelector("#data-de-fim-das-inscricoes");
            const dataDeInicioDasMatriculas = document.querySelector("#data-de-inicio-das-matriculas");
            const dataDeFimDasMatriculas = document.querySelector("#data-de-fim-das-matriculas");
            const numeroMaximoDeAlunosNasTurmas = document.querySelector("#numero-maximo-de-alunos-nas-turmas");
            const numeroMaximoDeSalas = document.querySelector("#numero-maximo-de-salas");
        //Paragrafos de validação
            const paragrafoDeValidacaoDaDescricaoDoAnoLectivo = document.querySelector("#paragrafo-de-validacao-da-descricao-do-ano-lectivo");
            const paragrafoDeValidacaoDaDataDeInicioDasInscricoes = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-das-inscricoes");
            const paragrafoDeValidacaoDaDataDeFimDasInscricoes = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-das-inscricoes");
            const paragrafoDeValidacaoDaDataDeInicioDasMatriculas = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-das-matriculas");
            const paragrafoDeValidacaoDaDataDeFimDasMatriculas = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-das-matriculas");
            const paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas = document.querySelector("#paragrafo-de-validacao-do-numero-maximo-de-alunos-nas-turmas");
            const paragrafoDeValidacaoDoNumeroMaximoDeSalas = document.querySelector("#paragrafo-de-validacao-do-numero-maximo-de-salas");
    //Variável para armazenar o início do ano lectivo 
        var anoDeInicioDoAnoLectivo;
    //Váriavel da data actual
        const dataActual = new Date();
//Término da declaração de variáveis

    dataDeInicioDoAnoLectivo.value = retornarADataActual();

//Funções diversas
    //Função que retorna a data actual
        function retornarADataActual(){
            const ano = dataActual.getFullYear(); //Pegar o ano actual
            let mes = dataActual.getMonth() + 1; //Pegar o mês actual
            let dia = dataActual.getDate(); //Pegar o dia actual

            mes < 10 ? mes = '0' + mes : mes = mes;
            dia < 10 ? dia = '0' + dia : dia = dia;

            const dataFormatada = `${ano}-${mes}-${dia}`;

            return dataFormatada;
        }

    //Função para não permitir datas anteriores à data de hoje
        function naoPermitirDatasAnterioresADataDeHoje(inputTypeDate){
            inputTypeDate.setAttribute('min', retornarADataActual());
        }
    //Função para limitar os caracteres da input
        function limitarOsCaracteresDaInput(input, quantidadeMaximaDeCaracteres){
            if(input.value.length > quantidadeMaximaDeCaracteres){
                input.value = input.value.slice(0, quantidadeMaximaDeCaracteres);
            }
        }
    //Função para limitar os valores máximos e mínimos da input
        function limitarOsValoresMinimosEMaximosDaInput(input, valorMinimo, valorMaximo){
            if(input.value < valorMinimo){
                input.value = valorMinimo;
            }

            if(input.value > valorMaximo){
                input.value = valorMaximo;
            }
        }
    //Função para impedir que os intervalos menores sejam maiores que os intervalos maiores
    
    //Função para apresentar as mensagens de erro
        function apresentarMensagemDeErro(paragrafoDeValidacao, textoASerApresentado){
            paragrafoDeValidacao.innerHTML = textoASerApresentado;
            paragrafoDeValidacao.classList.remove("d-none");
        }
    //Função para ocultar as mensagens de erro
        function ocultarMensagemDeErro(paragrafoDeValidacao){
            paragrafoDeValidacao.classList.add("d-none");
        }

//Término das funções diversas

//Definições que devem ser tomadas de imediato
    
    //Não permitir datas passadas
        //Primeiro step
            naoPermitirDatasAnterioresADataDeHoje(dataDeInicioDoAnoLectivo);
            naoPermitirDatasAnterioresADataDeHoje(dataDeInicioDasInscricoes);
            naoPermitirDatasAnterioresADataDeHoje(dataDeFimDasInscricoes);
            naoPermitirDatasAnterioresADataDeHoje(dataDeInicioDasMatriculas);
            naoPermitirDatasAnterioresADataDeHoje(dataDeFimDasMatriculas);
    //Término da negação de datas passadas
    
    //Impedir a inserção da vírgula
        //Primeiro step
            impedirAInsercaoDaVirgulaNoInput(numeroMaximoDeAlunosNasTurmas);
            impedirAInsercaoDaVirgulaNoInput(numeroMaximoDeSalas);
    //Término do impedimento da inserção da vírgula

    //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(numeroMaximoDeAlunosNasTurmas, 2);
    //Impedir menos de 1 e mais de 55 alunos nas turmas
        limitarOsValoresMinimosEMaximosDaInput(numeroMaximoDeAlunosNasTurmas, 1, 55);
    //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(numeroMaximoDeSalas, 2);
    //Impedir menos de 1 mais de 30 salas
        limitarOsValoresMinimosEMaximosDaInput(numeroMaximoDeSalas, 1, 30);
        
    
//Término das definições que devem ser tomadas de imediato

//Funções para retorno
    //Retornar a data de início do Ano Lectivo
    function retornarADataDeInicioDoAnoLectivo(){
        //Transformar a string recebida como valor da input em Date
        var valorDoAnoLectivoInicio = new Date(dataDeInicioDoAnoLectivo.value);
        
        return valorDoAnoLectivoInicio;
    }
    //Término do retorno da data de início do Ano Lectivo

    //Retornar a data de início das inscrições
    function retornarADataDeInicioDasInscricoes(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeInicioDasInscricoes = new Date(dataDeInicioDasInscricoes.value);
        
        return valorDaDataDeInicioDasInscricoes;
    }
    //Término do retorno da data de início das inscrições

    //Retornar a data de fim das inscrições
    function retornarADataDeFimDasInscricoes(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeFimDasInscricoes = new Date(dataDeFimDasInscricoes.value);
        
        return valorDaDataDeFimDasInscricoes;
    }
    //Término do retorno da data de fim das inscrições

    //Retornar a data de início das matrículas
    function retornarADataDeInicioDasMatriculas(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeInicioDasMatriculas = new Date(dataDeInicioDasMatriculas.value);
        
        return valorDaDataDeInicioDasMatriculas;
    }
    //Término do retorno da data de início das matrículas

    //Retorno da data de fim das matrículas
    function retornarADataDeFimDasMatriculas(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeFimDasMatriculas = new Date(dataDeFimDasMatriculas.value);
        
        return valorDaDataDeFimDasMatriculas;
    }
    //Término do retorno da data de fim das matrículas
//Fim das funções diversas

//Funções para validações
    //Impedir a inserção da vírgula nos inputs type number
        function impedirAInsercaoDaVirgulaNoInput(input){
            input.addEventListener('keydown', function(event){
                if(event.keyCode === 188){
                    event.preventDefault();
                }
            })
        }
    //Término do impedimento da inserção da vírgula nos inputs type number
//Fim das funções para validações
//Validações - Primeiro step (Informações do sistema)
    //Ao alterar o valor da input da descrição do ano lectivo
    descricaoDoAnoLectivo.addEventListener("blur", ()=>{
        //Padrão desejado
        const padraoDaDescricao = /^\d{4}-\d{4}$/;
        
        //Verificar se o valor corresponde ao padrão desejado
        if(!padraoDaDescricao.test(descricaoDoAnoLectivo.value)){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDescricaoDoAnoLectivo, "O valor deve ter quatro dígitos numéricos antes e depois do hífen.");
            descricaoDoAnoLectivo.value = "";
        }else{
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDescricaoDoAnoLectivo);
        }
    });

    //Ao alterar o valor da input da data de início das inscrições
    dataDeInicioDasInscricoes.addEventListener("input", ()=>{  
        //Não permitir que a data de início do ano lectivo seja posterior à de início das inscrições
        if(retornarADataDeInicioDoAnoLectivo() !== '' && retornarADataDeInicioDasInscricoes() < retornarADataDeInicioDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasInscricoes, "A data de início das inscrições não pode ser anterior à data de início do ano lectivo");
            dataDeInicioDasInscricoes.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeInicioDasInscricoes() >= retornarADataDeInicioDoAnoLectivo()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasInscricoes);
        }

        //Não permitir que a data de término seja anterior à de início 
        if(retornarADataDeInicioDasInscricoes() !== '' && retornarADataDeFimDasInscricoes() <= retornarADataDeInicioDasInscricoes()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasInscricoes, "A data de término não pode ser anterior ou igual à data de início");
            dataDeFimDasInscricoes.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeFimDasInscricoes() > retornarADataDeInicioDasInscricoes()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasInscricoes);
        }
    });

    //Ao alterar o valor da input da data de fim das inscrições
    dataDeFimDasInscricoes.addEventListener("input", ()=>{  
        //Não permitir que a data de término seja anterior à de início do ano lectivo
        if(retornarADataDeInicioDasInscricoes() !== '' && retornarADataDeFimDasInscricoes() <= retornarADataDeInicioDasInscricoes()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasInscricoes, "A data de término não pode ser anterior ou igual à data de início");
            dataDeFimDasInscricoes.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeFimDasInscricoes() > retornarADataDeInicioDasInscricoes()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasInscricoes);
        }
    });

    //Ao alterar o valor da input da data de início das matrículas
    dataDeInicioDasMatriculas.addEventListener("input", ()=>{  
        //Não permitir que a data de início das matrículas seja anterior à de início do ano lectivo
        if(retornarADataDeInicioDoAnoLectivo() !== '' && retornarADataDeInicioDasMatriculas() <= retornarADataDeInicioDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasMatriculas, "As matrículas não podem começar antes ou no dia da abertura do ano lectivo");
            dataDeInicioDasMatriculas.value = "";
        }
        //Remover a mensagem de erro se a data de início das matrículas suceder à de início do ano lectivo 
        if(retornarADataDeInicioDasMatriculas() > retornarADataDeInicioDoAnoLectivo()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasMatriculas);
        } 
        //Não permitir que a data de início das matrículas seja anterior à de fim das inscrições
        if(retornarADataDeFimDasInscricoes() !== '' && retornarADataDeInicioDasMatriculas() <= retornarADataDeFimDasInscricoes()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasMatriculas, "As matrículas não podem começar antes das inscrições terminarem");
            dataDeInicioDasMatriculas.value = "";
        }
        //Remover a mensagem de erro se a data de início das matrículas suceder à de fim das inscrições
        if(retornarADataDeFimDasInscricoes() < retornarADataDeInicioDasMatriculas()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasMatriculas);
        } 

        //Não permitir que a data de término das matrículas seja anterior à de início das matrículas
        if(retornarADataDeFimDasMatriculas() !== '' && retornarADataDeFimDasMatriculas() <= retornarADataDeInicioDasMatriculas()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasMatriculas, "A data de término não pode ser anterior ou igual à data de início");
            dataDeInicioDasMatriculas.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeFimDasMatriculas() > retornarADataDeInicioDasMatriculas()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasMatriculas);
        } 
    });

    //Ao alterar o valor da input da data de fim das matrículas
    dataDeFimDasMatriculas.addEventListener("input", ()=>{  
        //Não permitir que a data de término seja anterior à de início 
        if(retornarADataDeInicioDasMatriculas() !== '' && retornarADataDeFimDasMatriculas() <= retornarADataDeInicioDasMatriculas()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasMatriculas, "A data de término não pode ser anterior ou igual à data de início");
            dataDeFimDasMatriculas.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeFimDasMatriculas() > retornarADataDeInicioDasMatriculas()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasMatriculas);
        }
    });

    numeroMaximoDeAlunosNasTurmas.addEventListener("blur", ()=>{
        if(parseInt(numeroMaximoDeAlunosNasTurmas.value) < 1){
            apresentarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas, "Não pode ter uma turma com menos de 1 aluno");
            numeroMaximoDeAlunosNasTurmas.value = "";
        }
        if(parseInt(numeroMaximoDeAlunosNasTurmas.value) > 50){
            apresentarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas, "A turma não pode ter mais de 50 alunos");
            numeroMaximoDeAlunosNasTurmas.value = "";
        }
        if(parseInt(numeroMaximoDeAlunosNasTurmas.value) >= 1 && parseInt(numeroMaximoDeAlunosNasTurmas.value) <= 50){
            ocultarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas);
        }
    });

    numeroMaximoDeSalas.addEventListener("blur", ()=>{
        if(parseInt(numeroMaximoDeSalas.value) < 1){
            apresentarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeSalas, "O ano lectivo tem de ter ao menos de 1 sala");
            numeroMaximoDeSalas.value = "";
        }
        if(parseInt(numeroMaximoDeSalas.value) > 30){
            apresentarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeSalas, "Não pode ter mais de 30 salas no momento");
            numeroMaximoDeSalas.value = "";
        }
        if(parseInt(numeroMaximoDeSalas.value) >= 1 && parseInt(numeroMaximoDeSalas.value) <= 30){
            ocultarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeSalas);
        }
    });