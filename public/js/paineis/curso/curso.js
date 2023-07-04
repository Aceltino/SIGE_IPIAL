 alert ('olá mundo!');
let nome_curso = document.getElementById('nome_curso');
let sigla_curso = document.getElementById('sigla_curso');

let erro_nome = document.getElementById('erro_nome');
let erro_sigla = document.getElementById('erro_sigla');
campo_valido = true;

function validacao_inputs() {
    campo_valido = true;
    let invalido = "03456789-=;,.+_"

    for (let c of invalido) {
        if (nome_curso.value.includes(c)) {
            erro_nome.innerHTML = "Erro - números e caracteres ";
            setTimeout(() => erro_nome.innerHTML = '', 3000)
            campo_valido = false
            break;
        }
    }

    if (campo_valido) {
        erro_nome.innerHTML = "";
    }
    console.log("ola mundo");

    for (let d of invalido) {
        if (sigla_curso.value.includes(d)) {
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

