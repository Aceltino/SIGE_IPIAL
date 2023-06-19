//Pegar as inputs
    //Primeiro step (Informações do sistema)
        const descricaoDoAnoLectivo = document.querySelector("#descricao-do-ano-lectivo"); 
        const dataDeInicioDoAnoLectivo = document.querySelector("#data-de-inicio-do-ano-lectivo");
        const dataDeFimDoAnoLectivo = document.querySelector("#data-de-fim-do-ano-lectivo");
        const dataDeInicioDasInscricoes = document.querySelector("#data-de-inicio-das-inscricoes");
        const dataDeFimDasInscricoes = document.querySelector("#data-de-fim-das-inscricoes");
        const dataDeInicioDasMatriculas = document.querySelector("#data-de-inicio-das-matriculas");
        const dataDeFimDasMatriculas = document.querySelector("#data-de-fim-das-matriculas");
        const numeroMaximoDeAlunosNasTurmas = document.querySelector("#numero-maximo-de-alunos-nas-turmas");
        const numeroMaximoDeSalas = document.querySelector("#numero-maximo-de-salas");
        //Paragrafos de validação
            const paragrafoDeValidacaoDaDataDeInicioDoAnoLectivo = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-do-ano-lectivo");
            const paragrafoDeValidacaoDaDataDeFimDoAnoLectivo = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-do-ano-lectivo");
            const paragrafoDeValidacaoDaDataDeInicioDasInscricoes = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-das-inscricoes");
            const paragrafoDeValidacaoDaDataDeFimDasInscricoes = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-das-inscricoes");
            const paragrafoDeValidacaoDaDataDeInicioDasMatriculas = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-das-matriculas");
            const paragrafoDeValidacaoDaDataDeFimDasMatriculas = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-das-matriculas");
            const paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas = document.querySelector("#paragrafo-do-validacao-de-numero-maximo-de-alunos-nas-turmas");
            const paragrafoDeValidacaoDoNumeroMaximoDeSalas = document.querySelector("#paragrafo-de-validacao-do-numero-maximo-de-salas");
    //Segundo step (Trimestres)
        const dataDeInicioDoPrimeiroTrimestre = document.querySelector("#data-de-inicio-do-primeiro-trimestre");
        const dataDeFimDoPrimeiroTrimestre = document.querySelector("#data-de-fim-do-primeiro-trimestre");
        const dataDeInicioDoSegundoTrimestre = document.querySelector("#data-de-inicio-do-segundo-trimestre");
        const dataDeFimDoSegundoTrimestre = document.querySelector("#data-de-fim-do-segundo-trimestre");
        const dataDeInicioDoTerceiroTrimestre = document.querySelector("#data-de-inicio-do-terceiro-trimestre");
        const dataDeFimDoTerceiroTrimestre = document.querySelector("#data-de-fim-do-terceiro-trimestre");
        //Paragrafos de validação
            const paragrafoDeValidacaoDaDataDeInicioDoPrimeiroTrimestre = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-do-primeiro-trimestre");
            const paragrafoDeValidacaoDaDataDeFimDoPrimeiroTrimestre = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-do-primeiro-trimestre");
            const paragrafoDeValidacaoDaDataDeInicioDoSegundoTrimestre = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-do-segundo-trimestre");
            const paragrafoDeValidacaoDaDataDeFimDoSegundoTrimestre = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-do-segundo-trimestre");
            const paragrafoDeValidacaoDaDataDeInicioDoTerceiroTrimestre = document.querySelector("#paragrafo-de-validacao-da-data-de-inicio-do-terceiro-trimestre");
            const paragrafoDeValidacaoDaDataDeFimDoTerceiroTrimestre = document.querySelector("#paragrafo-de-validacao-da-data-de-fim-do-terceiro-trimestre");
    //Terceiro step (Manhã)
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
        //Quarto step (Tarde)
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
        //Quinto step (Tarde)
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
        var anoDeFimDoAnoLectivo;
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
//Término das definições que devem ser tomadas de imediato

//Funções para retorno
    //Retornar a data de início do Ano Lectivo
    function retornarADataDeInicioDoAnoLectivo(){
        //Transformar a string recebida como valor da input em Date
        var valorDoAnoLectivoInicio = new Date(dataDeInicioDoAnoLectivo.value);
        
        return valorDoAnoLectivoInicio;
    }
    //Término do retorno da data de início do Ano Lectivo
    //Retornar a data de fim do Ano Lectivo
    function retornarADataDeFimDoAnoLectivo(){
        //Transformar a string recebida como valor da input em Date
        var valorDoAnoLectivoFim = new Date(dataDeFimDoAnoLectivo.value);
        
        return valorDoAnoLectivoFim;
    }
    //Término do retorno da data de fim do Ano Lectivo

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

    //Retornar a data de início do primeiro trimestre
    function retornarADataDeInicioDoPrimeiroTrimestre(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeInicioDoPrimeiroTrimestre = new Date(dataDeInicioDoPrimeiroTrimestre.value);
        
        return valorDaDataDeInicioDoPrimeiroTrimestre;
    }
    //Término do retorno da data do primeiro trimestre
    //Retorno da data de fim do primeiro trimestre
    function retornarADataDeFimDoPrimeiroTrimestre(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeFimDoPrimeiroTrimestre = new Date(dataDeFimDoPrimeiroTrimestre.value);
        
        return valorDaDataDeFimDoPrimeiroTrimestre;
    }
    //Término do retorno da data de fim do primeiro trimestre

    //Retornar a data de início do segundo trimestre
    function retornarADataDeInicioDoSegundoTrimestre(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeInicioDoSegundoTrimestre = new Date(dataDeInicioDoSegundoTrimestre.value);
        
        return valorDaDataDeInicioDoSegundoTrimestre;
    }
    //Término do retorno da data do segundo trimestre
    //Retorno da data de fim do segundo trimestre
    function retornarADataDeFimDoSegundoTrimestre(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeFimDoSegundoTrimestre = new Date(dataDeFimDoSegundoTrimestre.value);
        
        return valorDaDataDeFimDoSegundoTrimestre;
    }
    //Término do retorno da data de fim do segundo trimestre

    //Retornar a data de início do terceiro trimestre
    function retornarADataDeInicioDoTerceiroTrimestre(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeInicioDoTerceiroTrimestre = new Date(dataDeInicioDoTerceiroTrimestre.value);
        
        return valorDaDataDeInicioDoTerceiroTrimestre;
    }
    //Término do retorno da data do terceiro trimestre
    //Retorno da data de fim do terceiro trimestre
    function retornarADataDeFimDoTerceiroTrimestre(){
        //Transformar a string recebida como valor da input em Date
        var valorDaDataDeFimDoTerceiroTrimestre = new Date(dataDeFimDoTerceiroTrimestre.value);
        
        return valorDaDataDeFimDoTerceiroTrimestre;
    }
    //Término do retorno da data de fim do terceiro trimestre
//Fim das funções para retorno

//Funções para validações
    //Validar a data de início do Ano Lectivo
    function validarADataDeInicioDoAnoLectivo(){
        dataDeInicioDoAnoLectivo.setAttribute("min", retornarADataActual());
        //Transformar a string recebida como valor da input em Date
        var valorDoAnoLectivoInicio = new Date(dataDeInicioDoAnoLectivo.value);

        //Armazenar o ano de início do ano lectivo
        anoDeInicioDoAnoLectivo = valorDoAnoLectivoInicio.getFullYear();

        //Apresentar descrição
        descricaoDoAnoLectivo.value = dataDeFimDoAnoLectivo.value === "" ? anoDeInicioDoAnoLectivo : anoDeInicioDoAnoLectivo +"-"+ anoDeFimDoAnoLectivo;
        
        //Não permitir que a data de término seja anterior à de início do ano lectivo
        if(retornarADataDeInicioDoAnoLectivo() !== '' && retornarADataDeFimDoAnoLectivo() <= retornarADataDeInicioDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoAnoLectivo, "A data de término não pode ser anterior ou igual à data de início");
            dataDeFimDoAnoLectivo.value = "";
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoAnoLectivo);
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeFimDoAnoLectivo() > retornarADataDeInicioDoAnoLectivo()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoAnoLectivo);
        }
    }
    //Término da validação da data de início do Ano Lectivo
    //Validar a data de fim do Ano Lectivo
    function validarADataDeFimDoAnoLectivo(){
        //Transformar a string recebida como valor da input em Date
        var valorDoAnoLectivoFim = new Date(dataDeFimDoAnoLectivo.value);

        //Armazenar o ano de fim do ano lectivo
        anoDeFimDoAnoLectivo = valorDoAnoLectivoFim.getFullYear();

        //Apresentar descrição
        descricaoDoAnoLectivo.value = dataDeInicioDoAnoLectivo.value === "" ? anoDeFimDoAnoLectivo : anoDeInicioDoAnoLectivo +"-"+ anoDeFimDoAnoLectivo;
        
        //Não permitir que a data de término seja anterior à de início do ano lectivo
        if(retornarADataDeInicioDoAnoLectivo() !== '' && valorDoAnoLectivoFim <= retornarADataDeInicioDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoAnoLectivo, "A data de término não pode ser anterior ou igual à data de início");
            dataDeFimDoAnoLectivo.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeFimDoAnoLectivo() > retornarADataDeInicioDoAnoLectivo()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoAnoLectivo);
        }
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

    //Ao alterar o valor da input da data de fim do ano lectivo
    dataDeFimDoAnoLectivo.addEventListener("input", validarADataDeFimDoAnoLectivo);

    //Ao alterar o valor da input da data de início das inscrições
    dataDeInicioDasInscricoes.addEventListener("input", ()=>{  
        //Não permitir que a data de início do ano lectivo seja posterior à de início das inscrições
        if(retornarADataDeInicioDoAnoLectivo() !== '' && retornarADataDeInicioDasInscricoes() < retornarADataDeInicioDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasInscricoes, "A data de início das inscrições não pode ser anterior à data de início do ano lectivo");
            dataDeInicioDasInscricoes.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeInicioDasInscricoes() > retornarADataDeInicioDoAnoLectivo()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasInscricoes);
        }

        //Não permitir que a data de início das inscrições seja após a data de fim do ano lectivo
        if(retornarADataDeFimDoAnoLectivo() !== '' && retornarADataDeFimDoAnoLectivo() < retornarADataDeInicioDasInscricoes()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasInscricoes, "As inscrições não podem começar após o fim do ano lectivo");
            dataDeInicioDasInscricoes.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeInicioDasInscricoes() < retornarADataDeFimDoAnoLectivo()){
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
        //Não permitir que a data de início das inscrições seja após a data de fim do ano lectivo
        if(retornarADataDeFimDoAnoLectivo() !== '' && retornarADataDeFimDoAnoLectivo() < retornarADataDeFimDasInscricoes()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasInscricoes, "As inscrições não podem terminar após o fim do ano lectivo");
            dataDeFimDasInscricoes.value = "";
        }
        //Remover a mensagem de erro se a data de fim suceder à de início
        if(retornarADataDeFimDasInscricoes() < retornarADataDeFimDoAnoLectivo()){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasInscricoes);
        }

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

        //Não permitir que a data de início das matrículas seja após à de fim do ano lectivo
        if(retornarADataDeFimDoAnoLectivo() !== '' && retornarADataDeInicioDasMatriculas() >= retornarADataDeFimDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasMatriculas, "As matrículas não podem começar no dia ou após o término do ano lectivo");
            dataDeInicioDasMatriculas.value = "";
        }
        //Remover a mensagem de erro se a data de início das matrículas anteceder à de término do ano lectivo
        if(retornarADataDeInicioDasMatriculas() < retornarADataDeFimDoAnoLectivo() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDasMatriculas);
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
        //Não permitir que a data de fim das matrículas seja após à de fim do ano lectivo
        if(retornarADataDeFimDoAnoLectivo() !== '' && retornarADataDeFimDasMatriculas() >= retornarADataDeFimDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasMatriculas, "As matrículas não podem terminar no dia ou após do término do ano lectivo");
            dataDeFimDasMatriculas.value = "";
        }
        //Remover a mensagem de erro se a data de início das matrículas suceder à de início do ano lectivo e anteceder à de término
        if(retornarADataDeFimDasMatriculas() < retornarADataDeFimDoAnoLectivo() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDasMatriculas);
        } 

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

    //Ao alterar o valor da input de número máximo de alunos nas turmas
    numeroMaximoDeAlunosNasTurmas.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(numeroMaximoDeAlunosNasTurmas, 2);
        //Impedir menos de 1 e mais de 55 alunos nas turmas
        limitarOsValoresMinimosEMaximosDaInput(numeroMaximoDeAlunosNasTurmas, 1, 55);
    });

    //Ao alterar o valor da input de número máximo de salas
    numeroMaximoDeSalas.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(numeroMaximoDeSalas, 2);
        //Impedir menos de 1 mais de 30 salas
        limitarOsValoresMinimosEMaximosDaInput(numeroMaximoDeSalas, 1, 30);
    });

//Validações - Segundo step (Trimestres)
    //Ao alterar o valor da input da data de início do primeiro trimestre
    dataDeInicioDoPrimeiroTrimestre.addEventListener('input',()=>{
        //Não permitir que a data de início do primeiro trimestre seja anterior à de término das matrículas
        if(retornarADataDeInicioDoPrimeiroTrimestre() <= retornarADataDeFimDasMatriculas()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoPrimeiroTrimestre, "O primeiro trimestre não pode começar antes ou na data do término das matrículas");
            dataDeInicioDoPrimeiroTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de início do primeiro trimestre suceder à de término das matrículas
        if(retornarADataDeInicioDoPrimeiroTrimestre() > retornarADataDeFimDasMatriculas() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoPrimeiroTrimestre);
        } 

        //Não permitir que a data de início do primeiro trimestre seja após à de fim do ano lectivo
        if(retornarADataDeInicioDoPrimeiroTrimestre() >= retornarADataDeFimDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoPrimeiroTrimestre, "O primeiro trimestre não pode começar no dia ou após do término do ano lectivo");
            dataDeInicioDoPrimeiroTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de início do primeiro trimestre anteceder à de término
        if(retornarADataDeInicioDoPrimeiroTrimestre() < retornarADataDeFimDoAnoLectivo() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoPrimeiroTrimestre);
        } 
    });

    //Ao alterar o valor da input da data de fim do primeiro trimestre
    dataDeFimDoPrimeiroTrimestre.addEventListener('input',()=>{
        //Não permitir que a data de fim do primeiro trimestre seja anterior à de início 
        if(retornarADataDeFimDoPrimeiroTrimestre() <= retornarADataDeInicioDoPrimeiroTrimestre()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoPrimeiroTrimestre, "O primeiro trimestre não pode terminar antes ou no dia do início");
            dataDeFimDoPrimeiroTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de fim do primeiro trimestre suceder à de início
        if(retornarADataDeInicioDoPrimeiroTrimestre() < retornarADataDeFimDoPrimeiroTrimestre() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoPrimeiroTrimestre);
        } 

        //Não permitir que a data de fim do primeiro trimestre seja após à de fim do ano lectivo
        if(retornarADataDeFimDoPrimeiroTrimestre() >= retornarADataDeFimDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoPrimeiroTrimestre, "O primeiro trimestre não pode terminar após o término do ano lectivo");
            dataDeFimDoPrimeiroTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de fim do primeiro trimestre anteceder à de término do ano lectivo
        if(retornarADataDeFimDoPrimeiroTrimestre() < retornarADataDeFimDoAnoLectivo() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoPrimeiroTrimestre);
        } 
    });

    //Ao alterar o valor da input da data de início do segundo trimestre
    dataDeInicioDoSegundoTrimestre.addEventListener('input',()=>{
        //Não permitir que a data de início do segundo trimestre seja anterior à de término do primeiro trimestre
        if(retornarADataDeInicioDoSegundoTrimestre() < retornarADataDeFimDoPrimeiroTrimestre()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoSegundoTrimestre, "O segundo trimestre não pode começar antes do término do primeiro");
            dataDeInicioDoSegundoTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de início do segundo trimestre suceder à de término do primeiro trimestre
        if(retornarADataDeInicioDoSegundoTrimestre() >= retornarADataDeFimDoPrimeiroTrimestre() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoSegundoTrimestre);
        } 

        //Não permitir que a data de início do segundo trimestre seja após à de fim do ano lectivo
        if(retornarADataDeInicioDoSegundoTrimestre() >= retornarADataDeFimDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoSegundoTrimestre, "O segundo trimestre não pode começar no dia ou após do término do ano lectivo");
            dataDeInicioDoSegundoTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de início do segundo trimestre anteceder à de término do ano lectivo
        if(retornarADataDeInicioDoSegundoTrimestre() < retornarADataDeFimDoAnoLectivo() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoSegundoTrimestre);
        } 
    });

    //Ao alterar o valor da input da data de fim do segundo trimestre
    dataDeFimDoSegundoTrimestre.addEventListener('input',()=>{
        //Não permitir que a data de fim do segundo trimestre seja anterior à de início 
        if(retornarADataDeFimDoSegundoTrimestre() <= retornarADataDeInicioDoSegundoTrimestre()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoSegundoTrimestre, "O segundo trimestre não pode terminar antes ou no dia do início");
            dataDeFimDoSegundoTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de fim do segundo trimestre suceder à de início
        if(retornarADataDeInicioDoSegundoTrimestre() < retornarADataDeFimDoSegundoTrimestre() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoSegundoTrimestre);
        } 

        //Não permitir que a data de fim do segundo trimestre seja após à de fim do ano lectivo
        if(retornarADataDeFimDoSegundoTrimestre() >= retornarADataDeFimDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoSegundoTrimestre, "O segundo trimestre não pode terminar após o término do ano lectivo");
            dataDeFimDoSegundoTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de fim do segundo trimestre anteceder à de término do ano lectivo
        if(retornarADataDeFimDoSegundoTrimestre() < retornarADataDeFimDoAnoLectivo() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoSegundoTrimestre);
        } 
    });

    //Ao alterar o valor da input da data de início do terceiro trimestre
    dataDeInicioDoTerceiroTrimestre.addEventListener('input',()=>{
        //Não permitir que a data de início do terceiro trimestre seja anterior à de término do segundo trimestre
        if(retornarADataDeInicioDoTerceiroTrimestre() < retornarADataDeFimDoSegundoTrimestre()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoTerceiroTrimestre, "O terceiro trimestre não pode começar antes do término do segundo");
            dataDeInicioDoTerceiroTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de início do terceiro trimestre suceder à de término do segundo trimestre
        if(retornarADataDeInicioDoTerceiroTrimestre() >= retornarADataDeFimDoSegundoTrimestre() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoTerceiroTrimestre);
        } 

        //Não permitir que a data de início do terceiro trimestre seja após à de fim do ano lectivo
        if(retornarADataDeInicioDoTerceiroTrimestre() >= retornarADataDeFimDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoTerceiroTrimestre, "O terceiro trimestre não pode começar no dia ou após do término do ano lectivo");
            dataDeInicioDoTerceiroTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de início do terceiro trimestre anteceder à de término do ano lectivo
        if(retornarADataDeInicioDoTerceiroTrimestre() < retornarADataDeFimDoAnoLectivo() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoTerceiroTrimestre);
        } 
    });

    //Ao alterar o valor da input da data de fim do terceiro trimestre
    dataDeFimDoTerceiroTrimestre.addEventListener('input',()=>{
        //Não permitir que a data de fim do terceiro trimestre seja anterior à de início 
        if(retornarADataDeFimDoTerceiroTrimestre() <= retornarADataDeInicioDoTerceiroTrimestre()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoTerceiroTrimestre, "O terceiro trimestre não pode terminar antes ou no dia do início");
            dataDeFimDoTerceiroTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de fim do terceiro trimestre suceder à de início
        if(retornarADataDeInicioDoTerceiroTrimestre() < retornarADataDeFimDoTerceiroTrimestre() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoTerceiroTrimestre);
        } 

        //Não permitir que a data de fim do terceiro trimestre seja após à de fim do ano lectivo
        if(retornarADataDeFimDoTerceiroTrimestre() >= retornarADataDeFimDoAnoLectivo()){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoTerceiroTrimestre, "O terceiro trimestre não pode terminar após o término do ano lectivo");
            dataDeFimDoTerceiroTrimestre.value = "";
        }
        //Remover a mensagem de erro se a data de fim do terceiro trimestre anteceder à de término do ano lectivo
        if(retornarADataDeFimDoTerceiroTrimestre() < retornarADataDeFimDoAnoLectivo() ){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeFimDoTerceiroTrimestre);
        } 
    });
//Validações - Terceiro step (Manhã)
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

    //Ao alterar o valor da input de duração do tempo de aula no período da manhã
    duracaoDoTempoDeAulaNoPeriodoDaManha.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoTempoDeAulaNoPeriodoDaManha, 2);
        //Impedir menos de 1 e mais de 60 minutos de tempo de aula no período da manhã
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoTempoDeAulaNoPeriodoDaManha, 1, 60);
    });

    //Ao alterar o valor da input de duração do tempo de intervalo menor no período da manhã
    duracaoDoIntervaloMenorNoPeriodoDaManha.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMenorNoPeriodoDaManha, 2);
        //Impedir menos de 1 e mais de 10 minutos de tempo de intervalo menor no período da manhã
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMenorNoPeriodoDaManha, 0, 10);

        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMaiorNoPeriodoDaManha.value <= duracaoDoIntervaloMenorNoPeriodoDaManha.value){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMaiorNoPeriodoDaManha.value = "";
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaManha.value > duracaoDoIntervaloMenorNoPeriodoDaManha.value){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha);
        }
    });

    //Ao alterar o valor da input de duração do tempo de intervalo maior no período da manhã
    duracaoDoIntervaloMaiorNoPeriodoDaManha.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMaiorNoPeriodoDaManha, 2);
        //Impedir menos de 1 e mais de 30 minutos de tempo de intervalo maior no período da manhã
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMaiorNoPeriodoDaManha, 0, 30);

        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMaiorNoPeriodoDaManha.value <= duracaoDoIntervaloMenorNoPeriodoDaManha.value){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMaiorNoPeriodoDaManha.value = "";
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaManha.value > duracaoDoIntervaloMenorNoPeriodoDaManha.value){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha);
        }
    });

//Validações - Quarto step (Tarde)
    //Ao alterar o valor da input de hora de início das aulas
    horaDeInicioDasAulasNoPeriodoDaTarde.addEventListener("input", ()=>{
        if(horaDeInicioDasAulasNoPeriodoDaTarde.value < '12:00' || horaDeInicioDasAulasNoPeriodoDaTarde.value > '13:30'){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaTarde, horaDeInicioDasAulasNoPeriodoDaTarde.validationMessage);
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

    //Ao alterar o valor da input de duração do tempo de aula no período da tarde
    duracaoDoTempoDeAulaNoPeriodoDaTarde.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoTempoDeAulaNoPeriodoDaTarde, 2);
        //Impedir menos de 1 e mais de 60 minutos de tempo de aula no período da tarde
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoTempoDeAulaNoPeriodoDaTarde, 1, 60);
    });

    //Ao alterar o valor da input de duração do tempo de intervalo menor no período da tarde
    duracaoDoIntervaloMenorNoPeriodoDaTarde.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMenorNoPeriodoDaTarde, 2);
        //Impedir menos de 1 e mais de 10 minutos de tempo de intervalo menor no período da tarde
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMenorNoPeriodoDaTarde, 0, 10);

        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value <= duracaoDoIntervaloMenorNoPeriodoDaTarde.value){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMaiorNoPeriodoDaTarde.value = "";
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value > duracaoDoIntervaloMenorNoPeriodoDaTarde.value){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde);
        }
    });

    //Ao alterar o valor da input de duração do tempo de intervalo maior no período da tarde
    duracaoDoIntervaloMaiorNoPeriodoDaTarde.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMaiorNoPeriodoDaTarde, 2);
        //Impedir menos de 1 e mais de 30 minutos de tempo de intervalo maior no período da tarde
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMaiorNoPeriodoDaTarde, 0, 30);

        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value <= duracaoDoIntervaloMenorNoPeriodoDaTarde.value){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMaiorNoPeriodoDaTarde.value = "";
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaTarde.value > duracaoDoIntervaloMenorNoPeriodoDaTarde.value){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde);
        }
    });
//Validações - Quinto step (Noite)
    //Ao alterar o valor da input de hora de início das aulas
    horaDeInicioDasAulasNoPeriodoDaNoite.addEventListener("input", ()=>{
        if(horaDeInicioDasAulasNoPeriodoDaNoite.value < '17:00' || horaDeInicioDasAulasNoPeriodoDaNoite.value > '19:00'){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaNoite, horaDeInicioDasAulasNoPeriodoDaNoite.validationMessage);
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

    //Ao alterar o valor da input de duração do tempo de aula no período da noite
    duracaoDoTempoDeAulaNoPeriodoDaNoite.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoTempoDeAulaNoPeriodoDaNoite, 2);
        //Impedir menos de 1 e mais de 60 minutos de tempo de aula no período da noite
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoTempoDeAulaNoPeriodoDaNoite, 1, 60);
    });

    //Ao alterar o valor da input de duração do tempo de intervalo menor no período da noite
    duracaoDoIntervaloMenorNoPeriodoDaNoite.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMenorNoPeriodoDaNoite, 2);
        //Impedir menos de 1 e mais de 10 minutos de tempo de intervalo menor no período da noite
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMenorNoPeriodoDaNoite, 0, 10);

        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value <= duracaoDoIntervaloMenorNoPeriodoDaNoite.value){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMaiorNoPeriodoDaNoite.value = "";
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value > duracaoDoIntervaloMenorNoPeriodoDaNoite.value){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite);
        }
    });

    //Ao alterar o valor da input de duração do tempo de intervalo maior no período da noite
    duracaoDoIntervaloMaiorNoPeriodoDaNoite.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMaiorNoPeriodoDaNoite, 2);
        //Impedir menos de 1 e mais de 30 minutos de tempo de intervalo maior no período da noite
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMaiorNoPeriodoDaNoite, 0, 30);

        //O intervalo maior não pode durar menos do que o menor
        if(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value <= duracaoDoIntervaloMenorNoPeriodoDaNoite.value){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite, "O intervalo maior tem de durar mais tempo que o menor");
            duracaoDoIntervaloMaiorNoPeriodoDaNoite.value = "";
        }
        if(duracaoDoIntervaloMaiorNoPeriodoDaNoite.value > duracaoDoIntervaloMenorNoPeriodoDaNoite.value){
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite);
        }
    });