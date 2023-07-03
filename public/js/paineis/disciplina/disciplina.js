let nome_disciplina = document.getElementById('nome_disciplina');
let sigla_disciplina = document.getElementById('sigla_disciplina');
let erro_nome = document.getElementById('mensagem_erro_nome');
let erro_sigla = document.getElementById('mensagem_erro_sigla');
let form = document.getElementById('regFormh');
let select = document.querySelector('select');
let erro_select = document.getElementById('mensagem_erro_select');
let checks = document.querySelectorAll('.curso');
let erro_check = document.getElementById('erro_check');
let botao = document.getElementById('botao');
let campo_valido = true;
let tempo_prova = document.getElementById('tempo_prova');
let erro_tempo_prov = document.getElementById('erro_tempo_prov');


function validacao_inputs() {
    let invalido = "03456789-=;,.+_"

    for (let c of invalido) {
        if (nome_disciplina.value.includes(c)) {
            erro_nome.innerHTML = "Erro - números e caracteres ";
            setTimeout(() => erro_nome.innerHTML = '', 3000)
            campo_valido = false
            break;
        }
    }

    if (campo_valido) {
        erro_nome.innerHTML = "";
    }

    for (let d of invalido) {
        if (sigla_disciplina.value.includes(d)) {
            erro_sigla.innerHTML = "Erro - números e caracteres";
            setTimeout(() => erro_sigla.innerHTML = '', 3000)
            campo_valido = false;
            break;
        }
    }

    if (campo_valido) {
        erro_sigla.innerHTML = "";
    }

}


nome_disciplina.addEventListener('input', validacao_inputs);
sigla_disciplina.addEventListener('input', validacao_inputs);

botao.addEventListener('click', function (ev) {

    let curso_selecionado = false

    for (let el of checks) {
        if (el.checked) {
            curso_selecionado = true
            break
        }
    }

    if (select.selectedIndex === 0 ||
        campo_valido === false ||
        curso_selecionado === false ||
        nome_disciplina.value === '' ||
        tempo_prova.value === '' || sigla_disciplina.value === '') {
        if (nome_disciplina.value === '') {
            erro_nome.innerHTML = 'o campo não pode estar vazio'
            setTimeout(() => erro_nome.innerHTML = '', 3000)
        }


        if (select.selectedIndex === 0) {
            erro_select.innerHTML = "selecione uma componente";
            setTimeout(() => erro_select.innerHTML = '', 3000)
        }

        if (curso_selecionado === false) {
            erro_check.innerHTML = 'Selecione pelomenos um curso'
            setTimeout(() => erro_check.innerHTML = '', 3000)
        }



        if (tempo_prova.value === '') {
            erro_tempo_prov.innerHTML = 'Insere o tempo'
            setTimeout(() => erro_tempo_prov.innerHTML = '', 3000)
        }

        if (campo_valido === false) {
            validacao_inputs()
            erro_nome.innerHTML = 'Erros nos dados inseridos'
            setTimeout(() => erro_nome.innerHTML = '', 3000)
        }
        if (sigla_disciplina.value === '') {
            erro_sigla.innerHTML = 'o campo sigla não pode estar vazio'
            setTimeout(() => erro_sigla.innerHTML = '', 3000)
        }
        if (campo_valido === false) {
            validacao_inputs()
            erro_sigla.innerHTML = 'Erros nos dados inseridos'
            setTimeout(() => erro_sigla.innerHTML = '', 3000)
        }
        return
    }

    form.submit()

})
function converter_sigla() {
    sigla_disciplina.value = sigla_disciplina.value.toUpperCase()
}
sigla_disciplina.addEventListener('input', converter_sigla)
