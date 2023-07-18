//Declaração de variáveis e elementos
    //Primeiro step
        //Inputs
        const inputDataDeNascimentoDoProfessor = document.querySelector("#data-de-nascimento-do-professor-input");
        const inputIdadeDoProfessor = document.querySelector("#idade-do-professor-input");
        const inputMunicipioDoProfessor = document.querySelector("#municipio-do-professor-input");
        const inputBairroDoProfessor = document.querySelector("#bairro-do-professor-input");
        const inputContactoTelefonicoDoProfessor = document.querySelector("#contacto-telefonico-do-professor-input");
        const inputEmailDoProfessor = document.querySelector("#email-do-professor-input");
        //Textos de validação dos inputs
        const textoDeValidacaoDoInputIdadeDoProfessor = document.querySelector("#paragrafo-de-validacao-da-idade-do-professor");
        const textoDeValidacaoDoInputMunicipioDoProfessor = document.querySelector("#paragrafo-de-validacao-do-municipio-do-professor");
        const textoDeValidacaoDoInputBairroDoProfessor = document.querySelector("#paragrafo-de-validacao-do-bairro-do-professor");
        const textoDeValidacaoDoInputContactoTelefonicoDoProfessor = document.querySelector("#paragrafo-de-validacao-do-contacto-telefone-do-professor");
        const textoDeValidacaoDoInputEmailDoProfessor = document.querySelector("#paragrafo-de-validacao-do-email-do-professor");
    //Fim do primeiro step
    //Segundo step
        //Selects
        const disciplinaALeccionar1 = document.querySelector("#displina-a-leccionar-1");
        const disciplinaALeccionar2 = document.querySelector("#displina-a-leccionar-2");
        const disciplinaALeccionar3 = document.querySelector("#displina-a-leccionar-3");
        const disciplinaALeccionar4 = document.querySelector("#displina-a-leccionar-4");
    //Fim segundo step
//Fim da declaração de variáveis e elementos   

//Funções diversas
    function habilitarOpcoes(select) {
        const opcoes = select.getElementsByTagName('option');

        for (let i = 0; i < opcoes.length; i++) {
            opcoes[i].disabled = false;
        }
    }
    
    function desabilitarOpcaoSelecionada(valor, select) {
        const opcoes = select.getElementsByTagName('option');

        for (let i = 0; i < opcoes.length; i++) {
            if (opcoes[i].value === valor) {
                opcoes[i].disabled = true;
            }
        }
    }
  
    //Função para validar e-mail
    function validarEmail(email) {
        var regra = /\S+@\S+\.\S+/;
        return regra.test(email);
    }
 //Fim das funções diversas

 //Funções dos eventos
    inputDataDeNascimentoDoProfessor.addEventListener("blur", ()=>{
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

        inputIdadeDoProfessor.value = idade === 1 ? idade + " ano" : idade + " anos";

        if(idade < 18){
            apresentarMensagemDeErro(textoDeValidacaoDoInputIdadeDoProfessor, "O professor não pode ser menor de idade");
            inputDataDeNascimentoDoProfessor.value = "";
            inputIdadeDoProfessor.value = "";
        }
        if(idade >= 18 && idade <= 122){
            ocultarMensagemDeErro(textoDeValidacaoDoInputIdadeDoProfessor);
        }
        if(idade > 122){
            apresentarMensagemDeErro(textoDeValidacaoDoInputIdadeDoProfessor, "O professor não pode ter mais de 122 anos");
            inputDataDeNascimentoDoProfessor.value = "";
            inputIdadeDoProfessor.value = "";
        } 
    });

    function verificarSelecoes() {
        const valor1 = disciplinaALeccionar1.value;
        const valor2 = disciplinaALeccionar2.value;
        const valor3 = disciplinaALeccionar3.value;
        const valor4 = disciplinaALeccionar4.value;
    
        // Habilitar todas as opções nos selects
        habilitarOpcoes(disciplinaALeccionar1);
        habilitarOpcoes(disciplinaALeccionar2);
        habilitarOpcoes(disciplinaALeccionar3);
        habilitarOpcoes(disciplinaALeccionar4);
    
        // Desabilitar as opções selecionadas nos outros selects
        desabilitarOpcaoSelecionada(valor1, disciplinaALeccionar2);
        desabilitarOpcaoSelecionada(valor1, disciplinaALeccionar3);
        desabilitarOpcaoSelecionada(valor1, disciplinaALeccionar4);
    
        desabilitarOpcaoSelecionada(valor2, disciplinaALeccionar1);
        desabilitarOpcaoSelecionada(valor2, disciplinaALeccionar3);
        desabilitarOpcaoSelecionada(valor2, disciplinaALeccionar4);
    
        desabilitarOpcaoSelecionada(valor3, disciplinaALeccionar1);
        desabilitarOpcaoSelecionada(valor3, disciplinaALeccionar2);
        desabilitarOpcaoSelecionada(valor3, disciplinaALeccionar4);
    
        desabilitarOpcaoSelecionada(valor4, disciplinaALeccionar1);
        desabilitarOpcaoSelecionada(valor4, disciplinaALeccionar2);
        desabilitarOpcaoSelecionada(valor4, disciplinaALeccionar3);
    }
    

    //E-mail
    inputEmailDoProfessor.addEventListener('blur', ()=>{
        //Se o e-mail for um número
        if(!isNaN(inputEmailDoProfessor.value)){
            apresentarMensagemDeErro(textoDeValidacaoDoInputEmailDoProfessor, "O seu e-mail não pode ser um número.");
            inputEmailDoProfessor.value = "";
        }
        if(isNaN(inputEmailDoProfessor.value)){
            ocultarMensagemDeErro(textoDeValidacaoDoInputEmailDoProfessor);
        }

        //Se o e-mail foi válido
        if(validarEmail(inputEmailDoProfessor.value)){
            ocultarMensagemDeErro(textoDeValidacaoDoInputEmailDoProfessor);
        }
        else{
            apresentarMensagemDeErro(textoDeValidacaoDoInputEmailDoProfessor, "O seu e-mail é inválido.");
            inputEmailDoProfessor.value = "";
        }
    });
 //Fim das funções dos eventos