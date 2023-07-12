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

function verificarSelecoesEducacaoFisica() {
    const valorselecionado1 = selectPrimeiroDiaDeEducacaoFisica.value;
    const valorselecionado2 = selectSegundoDiaDeEducacaoFisica.value;
   
    // Habilitar todas as opções nos selects
    habilitarOpcoes(selectPrimeiroDiaDeEducacaoFisica);
    habilitarOpcoes(selectSegundoDiaDeEducacaoFisica);
   
    // Desabilitar as opções selecionadas nos outros selects
    desabilitarOpcaoSelecionada(valorselecionado1,selectSegundoDiaDeEducacaoFisica);
    desabilitarOpcaoSelecionada(valorselecionado2,selectPrimeiroDiaDeEducacaoFisica);
}
// Fim das Funções diversas

