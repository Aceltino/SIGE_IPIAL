//Para algumas questões básicas (Não validações - propriamente)
//Variáveis e elementos
    //Segundo step
    const quantidadeDeDisciplinas = document.querySelector("#quantidade-de-disciplinas");
    const divDoSelectPrimeiraDisciplina = document.querySelector("#div-disciplina-1");
    const divDoSelectSegundaDisciplina = document.querySelector("#div-disciplina-2");
    const divDoSelectTerceiraDisciplina = document.querySelector("#div-disciplina-3");
    const divDoSelectQuartaDisciplina = document.querySelector("#div-disciplina-4");
    //Terceiro step
    const selectCargo = document.querySelector("#select-cargo-cadastrar-professor");
    const divDoSelectDoCurso = document.querySelector("#div-do-select-do-curso");
    const divDoSelectDaAreaDeFormacao = document.querySelector("#div-do-select-da-area-de-formacao");

    //Término das funções variadas

    //Ao alterar o valor da quantidade de inputs
    quantidadeDeDisciplinas.addEventListener('input', ()=>{
        if(parseInt(quantidadeDeDisciplinas.value) < 1 || parseInt(quantidadeDeDisciplinas.value) > 4){
            quantidadeDeDisciplinas.value = "1";
        }

        if(parseInt(quantidadeDeDisciplinas.value) === 1){
            // Habilitar todas as opções nos selects
            habilitarOpcoes(disciplinaALeccionar1);

            if(!divDoSelectSegundaDisciplina.classList.contains("d-none")){
                divDoSelectSegundaDisciplina.classList.add("d-none");
            }

            if(!divDoSelectTerceiraDisciplina.classList.contains("d-none")){
                divDoSelectTerceiraDisciplina.classList.add("d-none");
            }

            if(!divDoSelectQuartaDisciplina.classList.contains("d-none")){
                divDoSelectQuartaDisciplina.classList.add("d-none");
            }
        }

        if(parseInt(quantidadeDeDisciplinas.value) === 2){
            // Habilitar todas as opções nos selects
            habilitarOpcoes(disciplinaALeccionar1);
            habilitarOpcoes(disciplinaALeccionar2);

            if(divDoSelectSegundaDisciplina.classList.contains("d-none")){
                divDoSelectSegundaDisciplina.classList.remove("d-none");
            }

            if(!divDoSelectTerceiraDisciplina.classList.contains("d-none")){
                divDoSelectTerceiraDisciplina.classList.add("d-none");
            }

            if(!divDoSelectQuartaDisciplina.classList.contains("d-none")){
                divDoSelectQuartaDisciplina.classList.add("d-none");
            }
        }

        if(parseInt(quantidadeDeDisciplinas.value) === 3){
            // Habilitar todas as opções nos selects
            habilitarOpcoes(disciplinaALeccionar1);
            habilitarOpcoes(disciplinaALeccionar2);
            habilitarOpcoes(disciplinaALeccionar3);
            
            if(divDoSelectSegundaDisciplina.classList.contains("d-none")){
                divDoSelectSegundaDisciplina.classList.remove("d-none");
            }

            if(divDoSelectTerceiraDisciplina.classList.contains("d-none")){
                divDoSelectTerceiraDisciplina.classList.remove("d-none");
            }

            if(!divDoSelectQuartaDisciplina.classList.contains("d-none")){
                divDoSelectQuartaDisciplina.classList.add("d-none");
            }
        }

        if(parseInt(quantidadeDeDisciplinas.value) === 4){
            // Habilitar todas as opções nos selects
            habilitarOpcoes(disciplinaALeccionar1);
            habilitarOpcoes(disciplinaALeccionar2);
            habilitarOpcoes(disciplinaALeccionar3);
            habilitarOpcoes(disciplinaALeccionar4);

            if(divDoSelectSegundaDisciplina.classList.contains("d-none")){
                divDoSelectSegundaDisciplina.classList.remove("d-none");
            }

            if(divDoSelectTerceiraDisciplina.classList.contains("d-none")){
                divDoSelectTerceiraDisciplina.classList.remove("d-none");
            }

            if(divDoSelectQuartaDisciplina.classList.contains("d-none")){
                divDoSelectQuartaDisciplina.classList.remove("d-none");
            }
        }
    });

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