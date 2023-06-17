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
    //Função para atribuir datas aos inputs type date
        function atribuirDataAoInput(inputTypeDate, data){
            inputTypeDate.value = data;
        }

    //Função para não permitir datas anteriores à data de hoje
        function naoPermitirDatasAnterioresADataDeHoje(inputTypeDate){
            inputTypeDate.setAttribute('min', retornarADataActual());
        }
    //Função que compara se o valor do input é inferior à data introduzida
    function verificarSeOvalorDoInputEUmaDataMaiorOuIgualQueARecebidaComoParametro(inputTypeDate, dataRecebidaComoParametro){
        const valorDaInput = new Date(inputTypeDate.value);
        const dataRecebida = new Date(dataRecebidaComoParametro);

        const retorno = valorDaInput >= dataRecebida ?  true :  false;

        return retorno;
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
    //Função para ocultar as validações se os campos estiverem vazios
    function ocultarAsValidacoesSeOsCamposEstiveremVazios(input, textoDeValidacao){
        if(!textoDeValidacao.classList.contains("d-none") && input.value === ''){
            textoDeValidacao.classList.add("d-none");
        }
    }
    //Função para apresentar as mensagens de erro
    function apresentarMensagemDeErro(paragrafoDeValidacao, textoASerApresentado){
        paragrafoDeValidacao.innerHTML = textoASerApresentado;
        paragrafoDeValidacao.remove("d-none");
    }
    //Função para ocultar as mensagens de erro
    function ocultarMensagemDeErro(paragrafoDeValidacao){
        paragrafoDeValidacao.add("d-none");
    }
//Término das funções diversas

//Definições que devem ser tomadas de imediato
    //Ocultar as validações se os campos estiverem vazios
        //Primeiro step
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeInicioDoAnoLectivo, paragrafoDeValidacaoDaDataDeInicioDoAnoLectivo);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeFimDoAnoLectivo, paragrafoDeValidacaoDaDataDeFimDoAnoLectivo);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeInicioDasInscricoes, paragrafoDeValidacaoDaDataDeInicioDasInscricoes);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeFimDasInscricoes, paragrafoDeValidacaoDaDataDeFimDasInscricoes);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeInicioDasMatriculas, paragrafoDeValidacaoDaDataDeInicioDasMatriculas);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeFimDasMatriculas, paragrafoDeValidacaoDaDataDeFimDasMatriculas);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(numeroMaximoDeAlunosNasTurmas, paragrafoDeValidacaoDoNumeroMaximoDeAlunosNasTurmas);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(numeroMaximoDeSalas, paragrafoDeValidacaoDoNumeroMaximoDeSalas);
        //Segundo step
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeInicioDoPrimeiroTrimestre, paragrafoDeValidacaoDaDataDeInicioDoPrimeiroTrimestre);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeFimDoPrimeiroTrimestre, paragrafoDeValidacaoDaDataDeFimDoPrimeiroTrimestre);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeInicioDoSegundoTrimestre, paragrafoDeValidacaoDaDataDeInicioDoSegundoTrimestre);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeFimDoSegundoTrimestre, paragrafoDeValidacaoDaDataDeFimDoSegundoTrimestre);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeInicioDoTerceiroTrimestre, paragrafoDeValidacaoDaDataDeInicioDoTerceiroTrimestre);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(dataDeFimDoTerceiroTrimestre, paragrafoDeValidacaoDaDataDeFimDoTerceiroTrimestre);
        //Terceiro step
            ocultarAsValidacoesSeOsCamposEstiveremVazios(horaDeInicioDasAulasNoPeriodoDaManha, paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaManha);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(horaDeFimDasAulasNoPeriodoDaManha, paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaManha);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(duracaoDoTempoDeAulaNoPeriodoDaManha, paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaManha);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(duracaoDoIntervaloMenorNoPeriodoDaManha, paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaManha);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(duracaoDoIntervaloMaiorNoPeriodoDaManha, paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaManha);
        //Quarto step
            ocultarAsValidacoesSeOsCamposEstiveremVazios(horaDeInicioDasAulasNoPeriodoDaTarde, paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaTarde);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(horaDeFimDasAulasNoPeriodoDaTarde, paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaTarde);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(duracaoDoTempoDeAulaNoPeriodoDaTarde, paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaTarde);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(duracaoDoIntervaloMenorNoPeriodoDaTarde, paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaTarde);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(duracaoDoIntervaloMaiorNoPeriodoDaTarde, paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaTarde);
        //Quinto step
            ocultarAsValidacoesSeOsCamposEstiveremVazios(horaDeInicioDasAulasNoPeriodoDaNoite, paragrafoDeValidacaoDaHoraDeInicioDasAulasNoPeriodoDaNoite);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(horaDeFimDasAulasNoPeriodoDaNoite, paragrafoDeValidacaoDaHoraDeFimDasAulasNoPeriodoDaNoite);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(duracaoDoTempoDeAulaNoPeriodoDaNoite, paragrafoDeValidacaoDaDuracaoDoTempoDeAulaNoPeriodoDaNoite);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(duracaoDoIntervaloMenorNoPeriodoDaNoite, paragrafoDeValidacaoDaDuracaoDoIntervaloMenorNoPeriodoDaNoite);
            ocultarAsValidacoesSeOsCamposEstiveremVazios(duracaoDoIntervaloMaiorNoPeriodoDaNoite, paragrafoDeValidacaoDaDuracaoDoIntervaloMaiorNoPeriodoDaNoite);
    //Término de ocultar as validações se os campos estiverem vazios
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

    //Atribuir datas aos inputs
        //Primeiro step
            atribuirDataAoInput(dataDeInicioDoAnoLectivo, retornarADataActual());
            atribuirDataAoInput(dataDeFimDoAnoLectivo, retornarADataActual());
            atribuirDataAoInput(dataDeInicioDasInscricoes, retornarADataActual());
            atribuirDataAoInput(dataDeFimDasInscricoes, retornarADataActual());
            atribuirDataAoInput(dataDeInicioDasMatriculas, retornarADataActual());
            atribuirDataAoInput(dataDeFimDasMatriculas, retornarADataActual());
                //Descrição
                    //Transformar a string recebida como valor da input em Date
                        var valorDoAnoLectivoInicio = new Date(dataDeInicioDoAnoLectivo.value);
                    //Armazenar o início do ano lectivo
                        anoDeInicioDoAnoLectivo = valorDoAnoLectivoInicio.getFullYear();
                    //Transformar a string recebida como valor da input em Date
                        var valorDoAnoLectivoFim = new Date(dataDeFimDoAnoLectivo.value);
                    //Armazenar o fim do ano lectivo
                        anoDeFimDoAnoLectivo = valorDoAnoLectivoFim.getFullYear();
                //Apresentar descrição
                descricaoDoAnoLectivo.value = anoDeInicioDoAnoLectivo +"-"+ anoDeFimDoAnoLectivo;
        //Segundo step
            atribuirDataAoInput(dataDeInicioDoPrimeiroTrimestre, retornarADataActual());
            atribuirDataAoInput(dataDeFimDoPrimeiroTrimestre, retornarADataActual());
            atribuirDataAoInput(dataDeInicioDoSegundoTrimestre, retornarADataActual());
            atribuirDataAoInput(dataDeFimDoSegundoTrimestre, retornarADataActual());
            atribuirDataAoInput(dataDeInicioDoTerceiroTrimestre, retornarADataActual());
            atribuirDataAoInput(dataDeFimDoTerceiroTrimestre, retornarADataActual());
    //Término da atribuição de datas
        
        
//Término das definições que devem ser tomadas de imediato

//Validações - Primeiro step (Informações do sistema)
    //Ao alterar o valor da input da data de início do ano lectivo
    dataDeInicioDoAnoLectivo.addEventListener("input",()=>{
        if(!verificarSeOvalorDoInputEUmaDataMaiorOuIgualQueARecebidaComoParametro(dataDeInicioDoAnoLectivo, retornarADataActual())){
            apresentarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoAnoLectivo, "A data não pode ser anterior à de hoje.");
            dataDeInicioDoAnoLectivo.value = retornarADataActual();
            ocultarMensagemDeErro(paragrafoDeValidacaoDaDataDeInicioDoAnoLectivo);
        }

        //Transformar a string recebida como valor da input em Date
        var valorDoAnoLectivoInicio = new Date(dataDeInicioDoAnoLectivo.value);

        //Armazenar o ano de início do ano lectivo
        anoDeInicioDoAnoLectivo = valorDoAnoLectivoInicio.getFullYear();

        //Apresentar descrição
        descricaoDoAnoLectivo.value = dataDeFimDoAnoLectivo.value === "" ? anoDeInicioDoAnoLectivo: anoDeInicioDoAnoLectivo +"-"+ anoDeFimDoAnoLectivo;
    });

    //Ao alterar o valor da input da data de fim do ano lectivo
    dataDeFimDoAnoLectivo.addEventListener("input",()=>{
        
        //Transformar a string recebida como valor da input em Date
        var valorDoAnoLectivoFim = new Date(dataDeFimDoAnoLectivo.value);

        //Armazenar o ano de fim do ano lectivo
        anoDeFimDoAnoLectivo = valorDoAnoLectivoFim.getFullYear();

        //Apresentar descrição
        descricaoDoAnoLectivo.value = dataDeInicioDoAnoLectivo.value === "" ? anoDeFimDoAnoLectivo: anoDeInicioDoAnoLectivo +"-"+ anoDeFimDoAnoLectivo;
    
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
        limitarOsValoresMinimosEMaximosDaInput(numeroMaximoDeSalas, 1, 22);
    });

//Validações - Segundo step (Trimestres)
//Validações - Terceiro step (Manhã)
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

        if(duracaoDoIntervaloMaiorNoPeriodoDaManha.value <= duracaoDoIntervaloMenorNoPeriodoDaManha.value){
            duracaoDoIntervaloMaiorNoPeriodoDaManha.value = 0;
        }
    });

    //Ao alterar o valor da input de duração do tempo de intervalo maior no período da manhã
    duracaoDoIntervaloMaiorNoPeriodoDaManha.addEventListener("input", ()=>{
        //Impedir mais de 2 caracteres na input
        limitarOsCaracteresDaInput(duracaoDoIntervaloMaiorNoPeriodoDaManha, 2);
        //Impedir menos de 1 e mais de 30 minutos de tempo de intervalo maior no período da manhã
        limitarOsValoresMinimosEMaximosDaInput(duracaoDoIntervaloMaiorNoPeriodoDaManha, 0, 30);
        
        if(duracaoDoIntervaloMaiorNoPeriodoDaManha.value <= duracaoDoIntervaloMenorNoPeriodoDaManha.value){
            duracaoDoIntervaloMaiorNoPeriodoDaManha.value = 0;
        }
        
    });
//Validações - Quarto step (Tarde)
//Validações - Quinto step (Tarde)