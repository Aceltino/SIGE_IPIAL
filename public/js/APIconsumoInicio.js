axios.get('/api/settings')
        .then(function(response) {
            const registros = response.data;

            const tabelaRegistros = document.getElementById('DadosInicioCount');
            tabelaRegistros = registros;
                 
         //   const tbody = tabelaRegistros.getElementsByTagName('tbody')[0];
            
            registros.forEach(function(ree) {

                const diva= tbody.insertDiv();

                diva.innerHTML= `

                    <div class="container">
                
                            <div class="row" data-aos="fade-up">
                    
                                <div class="col-lg-3 col-md-6 mt-4">
                                
                                    <div class="figura-card">
                                        <div class="count-box count-box-escuro">
                                        <i class="bi bi-people"></i>
                                        <span class="total">${ree}</span>
                                        <p>INSCRITOS</p>
                                        </div>
                        
                                        <div class="card-legenda">
                                        <ul>
                                            <li>T.I: 23</li>
                                            <li>D.P: 100</li>
                                            <li>T.E.I.E: 50</li>
                                            <li>E.T: 122</li>
                                        </ul>
                                        </div>
                                    </div>
                                </div>
                    
                                <div class="col-lg-3 col-md-6 mt-4">
                    
                                    <div class="figura-card">
                                        <div class="count-box count-box-escuro">
                                            <i class="bi bi-person"></i>
                                            <span class="total">500</span>
                                            <p>ADMITIDOS</p>
                                        </div>
                                        
                                        <div class="card-legenda">
                                            <ul>
                                                <li>T.I: 200</li>
                                                <li>D.P: 200</li>
                                                <li>T.E.I.E: 50</li>
                                                <li>E.T: 122</li>
                                            </ul>
                                        </div>
                                    </div>
                    
                                </div>
                    
                                <div class="col-lg-3 col-md-6 mt-4">
                    
                                <div class="figura-card">
                                    <div class="count-box count-box-escuro">
                                    <i class="bi bi-check2-square"></i>
                                    <span class="total">500</span>
                                    <p>NÃO ADMITIDOS</p>
                                    </div>
                                    
                                    <div class="card-legenda">
                                    <ul>
                                        <li>T.I: 300</li>
                                        <li>D.P: 200</li>
                                        <li>T.E.I.E: 150</li>
                                        <li>E.T: 122</li>
                                    </ul>
                                    </div>
                                </div>
                    
                                </div>
                    
                                <div class="col-lg-3 col-md-6 mt-4">
                    
                                <div class="figura-card">
                                    <div class="count-box count-box-escuro">
                                    <i class="bi bi-clipboard"></i>
                                    <span class="total">500</span>
                                    <p>MATRICULADOS</p>
                                    </div>
                                    
                                    <div class="card-legenda">
                                    <ul>
                                        <li>T.I: 200</li>
                                        <li>D.P: 150</li>
                                        <li>T.E.I.E: 100</li>
                                        <li>E.T: 132</li>
                                    </ul>
                                    </div>
                                </div>
                    
                                </div>
                                
                                <div class="col-lg-3 col-md-6 mt-5">
                    
                                <div class="figura-card">
                                    <div class="count-box count-box-escuro">
                                    <i class="bi bi-arrow-90deg-down"></i>
                                    <span class="total">500</span>
                                    <p>PROFESSORES</p>
                                    </div>
                                    
                                    <div class="card-legenda">
                                    <ul>
                                        <li>T.I: 63</li>
                                        <li>D.P: 50</li>
                                        <li>T.E.I.E: 50</li>
                                        <li>E.T: 70</li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                    
                                <div class="col-lg-3 col-md-6 mt-5">
                    
                                <div class="figura-card">
                                    <div class="count-box count-box-escuro">
                                    <i class="bi bi-person-check"></i>
                                    <span class="total">500</span>
                                    <p>TURMAS</p>
                                    </div>
                                    
                                    <div class="card-legenda">
                                    <ul>
                                        <li>T.I: 20</li>
                                        <li>D.P: 20</li>
                                        <li>T.E.I.E: 16</li>
                                        <li>E.T: 10</li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                    
                                <div class="col-lg-3 col-md-6 mt-5">
                    
                                <div class="figura-card">
                                    <div class="count-box count-box-escuro">
                                    <i class="bi bi-people"></i>
                                    <span class="total">500</span>
                                    <p>VAGAS</p>
                                    </div>
                                    
                                    <div class="card-legenda">
                                    <ul>
                                        <li>T.I: 200</li>
                                        <li>D.P: 100</li>
                                        <li>T.E.I.E: 300</li>
                                        <li>E.T: 200</li>
                                    </ul>
                                    </div>
                                </div>
                                </div>
                    
                                <div class="col-lg-3 col-md-6 mt-5">
                                <div class="figura-card">
                                    <div class="count-box count-box-escuro">
                                    <i class="bi bi-people"></i>
                                    <span class="total">500</span>
                                    <p>CURSOS</p>
                                    </div>
                    
                                    <div class="card-legenda">
                                    <ul>
                                        <li>T.I</li>
                                        <li>D.P</li>
                                        <li>T.E.I.E</li>
                                        <li>E.T</li>
                                    </ul>
                                    </div>
                    
                                </div>
                                </div>
                                
                                            
                            </div>
                
                        </div>
                    
                
                
            `; 

              
            });
            
        })
        .catch(function(error) {
            console.error(error);
        });