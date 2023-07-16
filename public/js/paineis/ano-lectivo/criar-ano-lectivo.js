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
            const paragrafoDeValidacaoDaDataDeInicioDoAnoLectivo = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-do-ano-lectivo");
            const paragrafoDeValidacaoDaDataDeInicioDasInscricoes = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-das-inscricoes");
            const paragrafoDeValidacaoDaDataDeFimDasInscricoes = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-das-inscricoes");
            const paragrafoDeValidacaoDaDataDeInicioDasMatriculas = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-das-matriculas");
            const paragrafoDeValidacaoDaDataDeFimDasMatriculas = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-das-matriculas");
            const paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas = document.querySelector("#paragrafo-do-validacao-de-numero-maximo-de-alunos-nas-turmas");
            const paragrafoDeValidacaoDoNumeroMaximoDeSalas = document.querySelector("#paragrafo-de-validacao-do-numero-maximo-de-salas");
    //Segundo step (Manhã)
        const horaDeInicioDasAulasNoPeriodoDaManha = document.querySelector("#hora-de-inicio-das-aulas-no-periodo-da-manha");
        const horaDeFimDasAulasNoPeriodoDaManha = document.querySelector("#hora-de-fim-das-aulas-no-periodo-da-manha");
        const duracaoDoTempoDeAulaNoPeriodoDaManha = document.querySelector("#duracao-do-tempo-de-aula-no-periodo-da-manha");
        const duracaoDoIntervaloMenorNoPeriodoDaManha = document.querySelector("#duracao-do-intervalo-menor-no-periodo-da-manha");
        const duracaoDoIntervaloMaiorNoPeriodoDaManha = document.querySelector("#duracao-do-intervalo-maior-no-periodo-da-manha");
        //Paragrafos de validação
            const paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaManha = document.querySelector("#paragrafo-de-validacao-da-hora-de-inicio-das-aulas-no-periodo-da-manha");
            const paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaManha = document.querySelector("#paragrafo-de-validacao-da-hora-de-fim-das-aulas-no-periodo-da-manha");
            const paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaManha = document.querySelector("#paragrafo-de-validacao-da-duracao-do-tempo-de-aula-no-periodo-da-manha");
            const paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaManha = document.querySelector("#paragrafo-de-validacao-da-duracao-do-intervalo-menor-no-periodo-da-manha");
            const paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha = document.querySelector("#paragrafo-de-validacao-da-duracao-do-intervalo-maior-no-periodo-da-manha");
        //Terceiro step (Tarde)
        const horaDeInicioDasAulasNoPeriodoDaTarde = document.querySelector("#hora-de-inicio-das-aulas-no-periodo-da-tarde");
        const horaDeFimDasAulasNoPeriodoDaTarde = document.querySelector("#hora-de-fim-das-aulas-no-periodo-da-tarde");
        const duracaoDoTempoDeAulaNoPeriodoDaTarde = document.querySelector("#duracao-do-tempo-de-aula-no-periodo-da-tarde");
        const duracaoDoIntervaloMenorNoPeriodoDaTarde = document.querySelector("#duracao-do-intervalo-menor-no-periodo-da-tarde");
        const duracaoDoIntervaloMaiorNoPeriodoDaTarde = document.querySelector("#duracao-do-intervalo-maior-no-periodo-da-tarde"); 
        //Paragrafos de validação
            const paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaTarde = document.querySelector("#paragrafo-de-validacao-da-hora-de-inicio-das-aulas-no-periodo-da-tarde");
            const paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaTarde = document.querySelector("#paragrafo-de-validacao-da-hora-de-fim-das-aulas-no-periodo-da-tarde");
            const paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaTarde = document.querySelector("#paragrafo-de-validacao-da-duracao-do-tempo-de-aula-no-periodo-da-tarde");
            const paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaTarde = document.querySelector("#paragrafo-de-validacao-da-duracao-do-intervalo-menor-no-periodo-da-tarde");
            const paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde = document.querySelector("#paragrafo-de-validacao-da-duracao-do-intervalo-maior-no-periodo-da-tarde");
        //Quarto step (Tarde)
        const horaDeInicioDasAulasNoPeriodoDaNoite = document.querySelector("#hora-de-inicio-das-aulas-no-periodo-da-noite");
        const horaDeFimDasAulasNoPeriodoDaNoite = document.querySelector("#hora-de-fim-das-aulas-no-periodo-da-noite");
        const duracaoDoTempoDeAulaNoPeriodoDaNoite = document.querySelector("#duracao-do-tempo-de-aula-no-periodo-da-noite");
        const duracaoDoIntervaloMenorNoPeriodoDaNoite = document.querySelector("#duracao-do-intervalo-menor-no-periodo-da-noite");
        const duracaoDoIntervaloMaiorNoPeriodoDaNoite = document.querySelector("#duracao-do-intervalo-maior-no-periodo-da-noite"); 
        //Paragrafos de validação
            const paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaNoite = document.querySelector("#paragrafo-de-validacao-da-hora-de-inicio-das-aulas-no-periodo-da-noite");
            const paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaNoite = document.querySelector("#paragrafo-de-validacao-da-hora-de-fim-das-aulas-no-periodo-da-noite");
            const paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaNoite = document.querySelector("#paragrafo-de-validacao-da-duracao-do-tempo-de-aula-no-periodo-da-noite");
            const paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaNoite = document.querySelector("#paragrafo-de-validacao-da-duracao-do-intervalo-menor-no-periodo-da-noite");
            const paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite = document.querySelector("#paragrafo-de-validacao-da-duracao-do-intervalo-maior-no-periodo-da-noite");
    //Variáveis para armazenar o início e o fim do ano lectivo respectivamente
        var anoDeInicioDoAnoLectivo;
    //Váriavel da data actual
        const dataActual = new Date();
//Término da declaração de variáveis

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
        //Terceiro step
            impedirAInsercaoDaVirgulaNoInput(duracaoDoTempoDeAulaNoPeriodoDaManha);
            impedirAInsercaoDaVirgulaNoInput(duracaoDoIntervaloMenorNoPeriodoDaManha);
            impedirAInsercaoDaVirgulaNoInput(duracaoDoIntervaloMaiorNoPeriodoDaManha);
        //Quarto step
            impedirAInsercaoDaVirgulaNoInput(duracaoDoTempoDeAulaNoPeriodoDaTarde);
            impedirAInsercaoDaVirgulaNoInput(duracaoDoIntervaloMenorNoPeriodoDaTarde);
            impedirAInsercaoDaVirgulaNoInput(duracaoDoIntervaloMaiorNoPeriodoDaTarde);
        //Quinto step
            impedirAInsercaoDaVirgulaNoInput(duracaoDoTempoDeAulaNoPeriodoDaNoite);
            impedirAInsercaoDaVirgulaNoInput(duracaoDoIntervaloMenorNoPeriodoDaNoite);
            impedirAInsercaoDaVirgulaNoInput(duracaoDoIntervaloMaiorNoPeriodoDaNoite);
    //Término do impedimento da inserção da vírgula
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(numeroMaximoDeAlunosNasTurmas, 2);
        //Impedir menos de 1 e mais de 55 alunos nas turmas
        limitarOsValoresMinimosEMaximosDaInput(numeroMaximoDeAlunosNasTurmas, 1, 55);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(numeroMaximoDeSalas, 2);
        //Impedir menos de 1 mais de 30 salas
        limitarOsValoresMinimosEMaximosDaInput(numeroMaximoDeSalas, 1, 30);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoTempoDeAulaNoPeriodoDaManha, 2);
        //Impedir menos de 1 e mais de 60 minutos de tempo de aula no período da manhã
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoTempoDeAulaNoPeriodoDaManha, 1, 60);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMenorNoPeriodoDaManha, 2);
        //Impedir menos de 1 e mais de 10 minutos de tempo de intervalo menor no período da manhã
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMenorNoPeriodoDaManha, 0, 10);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMaiorNoPeriodoDaManha, 2);
        //Impedir menos de 1 e mais de 30 minutos de tempo de intervalo maior no período da manhã
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMaiorNoPeriodoDaManha, 0, 30);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoTempoDeAulaNoPeriodoDaTarde, 2);
        //Impedir menos de 1 e mais de 60 minutos de tempo de aula no período da tarde
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoTempoDeAulaNoPeriodoDaTarde, 1, 60);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMenorNoPeriodoDaTarde, 2);
        //Impedir menos de 1 e mais de 10 minutos de tempo de intervalo menor no período da tarde
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMenorNoPeriodoDaTarde, 0, 10);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMaiorNoPeriodoDaTarde, 2);
        //Impedir menos de 1 e mais de 30 minutos de tempo de intervalo maior no período da tarde
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMaiorNoPeriodoDaTarde, 0, 30);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoTempoDeAulaNoPeriodoDaNoite, 2);
        //Impedir menos de 1 e mais de 60 minutos de tempo de aula no período da noite
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoTempoDeAulaNoPeriodoDaNoite, 1, 60);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMenorNoPeriodoDaNoite, 2);
        //Impedir menos de 1 e mais de 10 minutos de tempo de intervalo menor no período da noite
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMenorNoPeriodoDaNoite, 0, 10);
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMaiorNoPeriodoDaNoite, 2);
        //Impedir menos de 1 e mais de 30 minutos de tempo de intervalo maior no período da noite
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMaiorNoPeriodoDaNoite, 0, 30);
    //Máximos e mínimos (Number)

    //Fim dos Máximos e mínimos (Number)
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
    //Validar a data de início do Ano Lectivo
    function validarADataDeInicioDoAnoLectivo(){
        dataDeInicioDoAnoLectivo.setAttribute("min", retornarADataActual());
        //Transformar a string recebida como valor da input em Date
        //var valorDoAnoLectivoInicio = new Date(dataDeInicioDoAnoLectivo.value);

        //Armazenar o ano de início do ano lectivo
        //anoDeInicioDoAnoLectivo = valorDoAnoLectivoInicio.getFullYear();

        //Apresentar descrição
        //descricaoDoAnoLectivo.value = anoDeInicioDoAnoLectivo;
    }
    //Término da validação da data de início do Ano Lectivo
    
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
    //Ao alterar o valor da input da data de início do ano lectivo
    dataDeInicioDoAnoLectivo.addEventListener("input", validarADataDeInicioDoAnoLectivo);

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
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasMatriculas);
        } 
        //Não permitir que a data de início das matrículas seja anterior à de fim das inscrições
        if(retornarADataDeFimDasInscricoes() !== '' && retornarADataDeInicioDasMatriculas() <= retornarADataDeFimDasInscricoes()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasMatriculas, "As matrículas não podem começar antes das inscrições terminarem");
            dataDeInicioDasMatriculas.value = "";
        }
        //Remover a mensagem de erro se a data de início das matrículas suceder à de fim das inscrições
        if(retornarADataDeFimDasMatriculas() > retornarADataDeInicioDasMatriculas()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasMatriculas);
        } 

        //Não permitir que a data de término das matrículas seja anterior à de início das matrículas
        if(retornarADataDeFimDasMatriculas() !== '' && retornarADataDeFimDasMatriculas() <= retornarADataDeInicioDasMatriculas()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasMatriculas, "A data de término não pode ser anterior ou igual à data de início");
            dataDeFimDasMatriculas.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeFimDasMatriculas() > retornarADataDeInicioDasMatriculas()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasMatriculas);
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
        if(parseInt(numeroMaximoDeAlunosNasTurmas) < 1){
            apresentarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas, "Não pode ter uma turma com menos de 1 aluno");
            numeroMaximoDeAlunosNasTurmas.value = "";
        }
        if(parseInt(numeroMaximoDeAlunosNasTurmas) > 55){
            apresentarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas, "A turma não pode ter mais de 55 alunos");
            numeroMaximoDeAlunosNasTurmas.value = "";
        }
        if(parseInt(numeroMaximoDeAlunosNasTurmas) >= 1 || parseInt(numeroMaximoDeAlunosNasTurmas) <= 55){
            ocultarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas);
        }
    });

    numeroMaximoDeSalas.addEventListener("blur", ()=>{
        if(parseInt(numeroMaximoDeSalas) < 1){
            apresentarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeSalas, "O ano lectivo tem de ter ao menos de 1 sala");
            numeroMaximoDeSalas.value = "";
        }
        if(parseInt(numeroMaximoDeSalas) > 50){
            apresentarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeSalas, "Não pode ter mais de 50 salas no momento");
            numeroMaximoDeSalas.value = "";
        }
        if(parseInt(numeroMaximoDeSalas) >= 1 || parseInt(numeroMaximoDeSalas) <= 50){
            ocultarMensagemDeErro(paragrafoDeValidacaoDoNumeroMaximoDeSalas);
        }
    });

//Validações - Segundo step (Manhã)
    //Ao alterar o valor da input de hora de início das aulas
    horaDeInicioDasAulasNoPeriodoDaManha.addEventListener("input", ()=>{
        if(horaDeInicioDasAulasNoPeriodoDaManha.value < '05:00' || horaDeInicioDasAulasNoPeriodoDaManha.value > '09:00'){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaManha, horaDeInicioDasAulasNoPeriodoDaManha.validationMessage);
            horaDeInicioDasAulasNoPeriodoDaManha.value = "";
        }else{
            ocultarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaManha);
        }
    });

    //Ao alterar o valor da input de hora de fim das aulas
    horaDeFimDasAulasNoPeriodoDaManha.addEventListener("input", ()=>{
        if(horaDeFimDasAulasNoPeriodoDaManha.value < '11:00' || horaDeFimDasAulasNoPeriodoDaManha.value > '13:00'){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaManha, horaDeFimDasAulasNoPeriodoDaManha.validationMessage);
            horaDeFimDasAulasNoPeriodoDaManha.value = "";
        }else{
            ocultarMensagemDeErro(paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaManha);
        }
    });

    duracaoDoTempoDeAulaNoPeriodoDaManha.addEventListener("blur", ()=>{
        if(parseInt(duracaoDoTempoDeAulaNoPeriodoDaManha) < 30){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaManha, "O tempo de aula não pode durar menos de 30 minutos");
            duracaoDoTempoDeAulaNoPeriodoDaManha.value = "";
        }
        if(parseInt(duracaoDoTempoDeAulaNoPeriodoDaManha) > 60){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaManha, "O tempo de aula não pode durar mais de 60 minutos");
            duracaoDoTempoDeAulaNoPeriodoDaManha.value = "";
        }
        if(parseInt(duracaoDoTempoDeAulaNoPeriodoDaManha) >= 30 || parseInt(duracaoDoTempoDeAulaNoPeriodoDaManha) <= 60){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaManha);
        }
    });

    //Ao alterar o valor da input de duração do tempo de intervalo menor no período da manhã
    duracaoDoIntervaloMenorNoPeriodoDaManha.addEventListener("blur", ()=>{
        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMaiorNoPeriodoDaManha.value !== "" && (parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) <= parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value))){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaManha, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMenorNoPeriodoDaManha.value = "";
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaManha.value !== "" && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) > parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value) && (parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value) >= 0 && parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value) <= 10)){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaManha);
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaManha.value === "" && (parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value) >= 0 && parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value) <= 10)){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaManha);
        }
        if(parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value) < 0 || parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value) > 10){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaManha, "Tem de ser de 0 à 10 minutos");
            duracaoDoIntervaloMenorNoPeriodoDaManha.value = "";
        }
    });

    //Ao alterar o valor da input de duração do tempo de intervalo maior no período da manhã
    duracaoDoIntervaloMaiorNoPeriodoDaManha.addEventListener("blur", ()=>{
        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMenorNoPeriodoDaManha.value !== "" && (parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) <= parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value))){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMaiorNoPeriodoDaManha.value = "";
        }
        if(duracaoDoIntervaloMenorNoPeriodoDaManha.value !== "" && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) > parseInt(duracaoDoIntervaloMenorNoPeriodoDaManha.value) && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) >= 0 && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) <= 30){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha);
        }
        if(duracaoDoIntervaloMenorNoPeriodoDaManha.value === "" && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) >= 0 && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) <= 30){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha);
        }
        if(parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) < 0 || parseInt(duracaoDoIntervaloMaiorNoPeriodoDaManha.value) > 30){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha, "Tem de ser de 0 à 30 minutos");
            duracaoDoIntervaloMaiorNoPeriodoDaManha.value = "";
        }
    });

//Validações - Terceiro step (Tarde)
    //Ao alterar o valor da input de hora de início das aulas
    horaDeInicioDasAulasNoPeriodoDaTarde.addEventListener("input", ()=>{
        if(horaDeInicioDasAulasNoPeriodoDaTarde.value < '12:00' || horaDeInicioDasAulasNoPeriodoDaTarde.value > '13:30'){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaTarde, horaDeInicioDasAulasNoPeriodoDaTarde.validationMessage);
            horaDeInicioDasAulasNoPeriodoDaTarde.value = "";
        }else{
            ocultarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaTarde);
        }

        if(horaDeInicioDasAulasNoPeriodoDaTarde.value <= horaDeFimDasAulasNoPeriodoDaManha.value){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaTarde, "A hora do início das aulas no turno da tarde não pode ser inferior ou igual à de termino do turno da manhã");
            horaDeInicioDasAulasNoPeriodoDaTarde.value = "";
        }else{
            ocultarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaTarde);
        }
    });

    //Ao alterar o valor da input de hora de fim das aulas
    horaDeFimDasAulasNoPeriodoDaTarde.addEventListener("input", ()=>{
        if(horaDeFimDasAulasNoPeriodoDaTarde.value < '17:00' || horaDeFimDasAulasNoPeriodoDaTarde.value > '18:50'){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaTarde, horaDeFimDasAulasNoPeriodoDaTarde.validationMessage);
            horaDeFimDasAulasNoPeriodoDaTarde.value = "";
        }else{
            ocultarMensagemDeErro(paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaTarde);
        }
    });

    duracaoDoTempoDeAulaNoPeriodoDaTarde.addEventListener("blur", ()=>{
        if(parseInt(duracaoDoTempoDeAulaNoPeriodoDaTarde) < 30){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaTarde, "O tempo de aula não pode durar menos de 30 minutos");
            duracaoDoTempoDeAulaNoPeriodoDaTarde.value = "";
        }
        if(parseInt(duracaoDoTempoDeAulaNoPeriodoDaTarde) > 60){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaTarde, "O tempo de aula não pode durar mais de 60 minutos");
            duracaoDoTempoDeAulaNoPeriodoDaTarde.value = "";
        }
        if(parseInt(duracaoDoTempoDeAulaNoPeriodoDaTarde) >= 30 || parseInt(duracaoDoTempoDeAulaNoPeriodoDaTarde) <= 60){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaTarde);
        }
    });
    
    //Ao alterar o valor da input de duração do tempo de intervalo menor no período da tarde
    duracaoDoIntervaloMenorNoPeriodoDaTarde.addEventListener("blur", ()=>{
        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value !== "" && (parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) <= parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value))){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaTarde, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMenorNoPeriodoDaTarde.value = "";
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value !== "" && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) > parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value) && (parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value) >= 0 && parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value) <= 10)){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaTarde);
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value === "" && (parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value) >= 0 && parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value) <= 10)){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaTarde);
        }
        if(parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value) < 0 || parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value) > 10){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaTarde, "Tem de ser de 0 à 10 minutos");
            duracaoDoIntervaloMenorNoPeriodoDaTarde.value = "";
        }
    });

    //Ao alterar o valor da input de duração do tempo de intervalo maior no período da tarde
    duracaoDoIntervaloMaiorNoPeriodoDaTarde.addEventListener("blur", ()=>{
        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMenorNoPeriodoDaTarde.value !== "" && (parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) <= parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value))){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMaiorNoPeriodoDaTarde.value = "";
        }
        if(duracaoDoIntervaloMenorNoPeriodoDaTarde.value !== "" && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) > parseInt(duracaoDoIntervaloMenorNoPeriodoDaTarde.value) && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) >= 0 && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) <= 30){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde);
        }
        if(duracaoDoIntervaloMenorNoPeriodoDaTarde.value === "" && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) >= 0 && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) <= 30){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde);
        }
        if(parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) < 0 || parseInt(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value) > 30){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde, "Tem de ser de 0 à 30 minutos");
            duracaoDoIntervaloMaiorNoPeriodoDaTarde.value = "";
        }
    });
//Validações - Quarto step (Noite)
    //Ao alterar o valor da input de hora de início das aulas
    horaDeInicioDasAulasNoPeriodoDaNoite.addEventListener("input", ()=>{
        if(horaDeInicioDasAulasNoPeriodoDaNoite.value < '17:00' || horaDeInicioDasAulasNoPeriodoDaNoite.value > '19:00'){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaNoite, horaDeInicioDasAulasNoPeriodoDaNoite.validationMessage);
            horaDeInicioDasAulasNoPeriodoDaNoite.value = "";
        }else{
            ocultarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaNoite);
        }

        if(horaDeInicioDasAulasNoPeriodoDaNoite.value <= horaDeFimDasAulasNoPeriodoDaTarde.value){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaNoite, "A hora do início das aulas no turno da noite não pode ser inferior ou igual à de termino do turno da tarde");
            horaDeInicioDasAulasNoPeriodoDaNoite.value = "";
        }else{
            ocultarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaNoite);
        }
    });

    //Ao alterar o valor da input de hora de fim das aulas
    horaDeFimDasAulasNoPeriodoDaNoite.addEventListener("input", ()=>{
        if(horaDeFimDasAulasNoPeriodoDaNoite.value < '21:00' || horaDeFimDasAulasNoPeriodoDaNoite.value > '23:00'){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaNoite, horaDeFimDasAulasNoPeriodoDaNoite.validationMessage);
            horaDeFimDasAulasNoPeriodoDaNoite.value = "";
        }else{
            ocultarMensagemDeErro(paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaNoite);
        }
    });

    duracaoDoTempoDeAulaNoPeriodoDaNoite.addEventListener("blur", ()=>{
        if(parseInt(duracaoDoTempoDeAulaNoPeriodoDaNoite) < 30){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaNoite, "O tempo de aula não pode durar menos de 30 minutos");
            duracaoDoTempoDeAulaNoPeriodoDaNoite.value = "";
        }
        if(parseInt(duracaoDoTempoDeAulaNoPeriodoDaNoite) > 60){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaNoite, "O tempo de aula não pode durar mais de 60 minutos");
            duracaoDoTempoDeAulaNoPeriodoDaNoite.value = "";
        }
        if(parseInt(duracaoDoTempoDeAulaNoPeriodoDaNoite) >= 30 || parseInt(duracaoDoTempoDeAulaNoPeriodoDaNoite) <= 60){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaNoite);
        }
    });

    //Ao alterar o valor da input de duração do tempo de intervalo menor no período da noite
    duracaoDoIntervaloMenorNoPeriodoDaNoite.addEventListener("blur", ()=>{
        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value !== "" && (parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) <= parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value))){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaNoite, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMenorNoPeriodoDaNoite.value = "";
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value !== "" && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) > parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value) && (parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value) >= 0 && parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value) <= 10)){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaNoite);
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value === "" && (parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value) >= 0 && parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value) <= 10)){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaNoite);
        }
        if(parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value) < 0 || parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value) > 10){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaNoite, "Tem de ser de 0 à 10 minutos");
            duracaoDoIntervaloMenorNoPeriodoDaNoite.value = "";
        }
    });

    //Ao alterar o valor da input de duração do tempo de intervalo maior no período da noite
    duracaoDoIntervaloMaiorNoPeriodoDaNoite.addEventListener("blur", ()=>{
        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMenorNoPeriodoDaNoite.value !== "" && (parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) <= parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value))){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMaiorNoPeriodoDaNoite.value = "";
        }
        if(duracaoDoIntervaloMenorNoPeriodoDaNoite.value !== "" && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) > parseInt(duracaoDoIntervaloMenorNoPeriodoDaNoite.value) && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) >= 0 && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) <= 30){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite);
        }
        if(duracaoDoIntervaloMenorNoPeriodoDaNoite.value === "" && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) >= 0 && parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) <= 30){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite);
        }
        if(parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) < 0 || parseInt(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value) > 30){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite, "Tem de ser de 0 à 30 minutos");
            duracaoDoIntervaloMaiorNoPeriodoDaNoite.value = "";
        }
    });