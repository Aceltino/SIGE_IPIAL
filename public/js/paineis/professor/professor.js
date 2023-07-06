//Para algumas questões básicas (Não validações - propriamente)
//Variáveis e elementos
    //Segundo step
    const quantidadeDeDisciplinas = document.querySelector("#quantidade-de-disciplinas");
    const divDoSelectPrimeiraDisciplina = document.querySelector("#div-disciplina-1");
    
    //Terceiro step
    const selectCargo = document.querySelector("#select-cargo-cadastrar-professor");
    const divDoSelectDoCurso = document.querySelector("#div-do-select-do-curso");
    const divDoSelectDaAreaDeFormacao = document.querySelector("#div-do-select-da-area-de-formacao");

//Ao alterar o valor do select cargo
selectCargo.addEventListener("change", () => {
    //Expôr e Esconder os selects de curso e/ou área de formação
    if (selectCargo.value === "Professor") {
        if (!divDoSelectDoCurso.classList.contains("d-none")) {
            divDoSelectDoCurso.classList.add("d-none");
        }
        if (!divDoSelectDaAreaDeFormacao.classList.contains("d-none")) {
            divDoSelectDaAreaDeFormacao.classList.add("d-none");
        }
    }

    if (selectCargo.value === "Coordenador do curso") {
        if (divDoSelectDoCurso.classList.contains("d-none")) {
            divDoSelectDoCurso.classList.remove("d-none");
        }
        if (!divDoSelectDaAreaDeFormacao.classList.contains("d-none")) {
            divDoSelectDaAreaDeFormacao.classList.add("d-none");
        }
    }

    if (selectCargo.value === "Coordenador da área de formação") {
        if (!divDoSelectDoCurso.classList.contains("d-none")) {
            divDoSelectDoCurso.classList.add("d-none");
        }
        if (divDoSelectDaAreaDeFormacao.classList.contains("d-none")) {
            divDoSelectDaAreaDeFormacao.classList.remove("d-none");
        }
    }
});