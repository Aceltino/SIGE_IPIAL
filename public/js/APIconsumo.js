axios.get('/api/candidatos')
        .then(function(response) {
            const registros = response.data;

            const tabelaRegistros = document.getElementById('Inscricoes-ta');
            const tbody = tabelaRegistros.getElementsByTagName('tbody')[0];

            registros.forEach(function(registro) {
                const row = tbody.insertRow();
                let corBotao = '';

                switch (registro.Situacao) {
                    case 'Admitido':
                        corBotao = 'style="Color:green;"';
                        break;
                    case 'Não admitido':
                        corBotao = 'style="Color:red;"';
                        break;
                    default:
                        corBotao = 'Black';
                }
                switch (registro.Situacao) {
                    case 'Admitido':
                        Botao = `<a href="/matricula/matricular-aluno/${registro.Id_inscricao}" name="" id="" class="btn btn-success"  role="button">Matricular</a>`;
                        break;
                    case 'Não admitido':
                        Botao = ``;
                        break;
                    default:
                        Botao = ``;
                }
                
                row.innerHTML = `
                    <td>${registro.NumeroBI}</td>
                    <td>${registro.Nome}</td>
                    <td>${registro.Media}</td>
                    <td>${registro.Idade}</td>
                    <td>${registro.Curso}</td>
                    <td ${corBotao}> ${registro.Situacao} </td>
                    <td>${Botao}</td>
                    <td>
                    <i class="bi bi-eye-fill" data-bs-toggle="modal" data-bs-target="#ExtralargeModal"></i>
                    <a href="/editar-candidato/${registro.Id_inscricao}/editar"><i class="bi bi-pencil"></i></a>
                    </td>
                    
                    
                `; 
            });
        })
        .catch(function(error) {
            console.error(error);
        });