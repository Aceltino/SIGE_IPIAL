//Declaração de variáveis e elementos
    //Primeiro step
        //Inputs
        const inputNomeCompletoDoProfessor = document.querySelector("#nome-completo-do-professor-input");
        const inputFormacaoDoProfessor = document.querySelector("#formacao-do-professor-input");
        const inputNumeroDoBilheteDeIdentidadeDoProfessor = document.querySelector("#numero-do-bilhete-do-professor-input");
        const inputDataDeNascimentoDoProfessor = document.querySelector("#data-de-nascimento-do-professor-input");
        const inputIdadeDoProfessor = document.querySelector("#idade-do-professor-input");
        const inputMunicipioDoProfessor = document.querySelector("#municipio-do-professor-input");
        const inputBairroDoProfessor = document.querySelector("#bairro-do-professor-input");
        const inputContactoTelefonicoDoProfessor = document.querySelector("#contacto-telefonico-do-professor-input");
        const inputEmailDoProfessor = document.querySelector("#email-do-professor-input");
        //Textos de validação dos inputs
        const textoDeValidacaoDoInputNomeCompletoDoProfessor = document.querySelector("#paragrafo-de-validacao-do-nome-completo-do-professor");
        const textoDeValidacaoDoInputFormacaoDoProfessor = document.querySelector("#paragrafo-de-validacao-da-formacao-do-professor");
        const textoDeValidacaoDoInputNumeroDoBilheteDeIdentidadeDoProfessor = document.querySelector("#paragrafo-de-validacao-do-numero-do-bilhete-do-professor");
        const textoDeValidacaoDoInputIdadeDoProfessor = document.querySelector("#paragrafo-de-validacao-da-idade-do-professor");
        const textoDeValidacaoDoInputMunicipioDoProfessor = document.querySelector("#paragrafo-de-validacao-do-municipio-do-professor");
        const textoDeValidacaoDoInputBairroDoProfessor = document.querySelector("#paragrafo-de-validacao-do-bairro-do-professor");
        const textoDeValidacaoDoInputContactoTelefonicoDoProfessor = document.querySelector("#paragrafo-de-validacao-do-contacto-telefone-do-professor");
        const textoDeValidacaoDoInputEmailDoProfessor = document.querySelector("#paragrafo-de-validacao-do-email-do-professor");
    //Fim do primeiro step
//Fim da declaração de variáveis e elementos   

//Funções diversas
    function validarInputPreenchidoApenasComEspacosEmBranco(input) {
        
    }
 //Fim das funções diversas

 //Funções dos eventos
    inputDataDeNascimentoDoProfessor.addEventListener("input", ()=>{
        var stringDataDeNascimentoDoProfessor = inputDataDeNascimentoDoProfessor.value;
        var dataDeNascimentoDoProfessor = new Date (stringDataDeNascimentoDoProfessor);

        //Calcular a diferença de anos
        var idade = dataActual.getFullYear() - dataDeNascimentoDoProfessor.getFullYear();

        //Verificar se o aniversário ainda não ocorreu no ano actual
        if(dataActual.getMonth() < dataDeNascimentoDoProfessor.getMonth() || 
            (dataActual.getMonth() === dataDeNascimentoDoProfessor.getMonth() &&
            dataActual.getDate() < dataDeNascimentoDoProfessor.getDate())
        ){
            idade--;
        }

        inputIdadeDoProfessor.value = idade + " anos";
    });
 //Fim das funções dos eventos