@extends('layouts.doc')

@section('title', 'Pautas')

@section('conteudo')
<main id="main" class="main">

    
    
    <?php

    //Organização dos alunos que estão a vir da back
    $medias = [];
            
            for ($i = 0; $i < count($OneMedia); $i++) {
                $ca = isset($ca_cdf[$i][0]->ca) ? $ca_cdf[$i][0]->ca: '0';
                $cfd = isset($ca_cdf[$i][0]->cfd) ? $ca_cdf[$i][0]->cfd : '0';
                $situacao = isset($situacaoAluno[$i]->situacao) ? $situacaoAluno[$i]->situacao : 'Não Apto';
                $mt1 = isset($OneMedia[$i][0]->nota) ? $OneMedia[$i][0]->nota : '0';
                $mt2 = isset($TwoMedia[$i][0]->nota) ? $TwoMedia[$i][0]->nota : '0';
                $mt3 = isset($ThreeMedia[$i][0]->nota) ? $ThreeMedia[$i][0]->nota : '0';
                $alunoIndex = $i % count($alunos); 
                $disciplinaIndex = $i % count($disciplinas);
            
                $aluno = $alunos[$alunoIndex]; 
                $disciplina = $disciplinas[$disciplinaIndex]; 

                
            
                $medias[] = [
                    'aluno' => $aluno,
                    'disciplina' => $disciplina,
                    'media_trimestre1' => $mt1,
                    'media_trimestre2' => $mt2,
                    'media_trimestre3' => $mt3,
                    'ca' => $ca,
                    'cfd' => $cfd,
                    'situacao' => $situacao 
                ];
            }
            
    ?>
  

    <div class="container no-print">
    <div class="row">
        <div class="col" style="display: flex; justify-content: flex-start; align-items: center;">
        <a href="/pautas"><i class="voltar bi bi-arrow-left-circle-fill"></i></a>
        <h1>Pauta</h1>      
        </div>
    
        <div class="col" style="display: flex; justify-content: flex-end; align-items: center;">
            <button class="btn-imprimir" id="gerar-pdf" onclick="window.print()">Imprimir <i class="bi bi-file-earmark-pdf"></i></button>
        </div>
    </div>
    </div>
    
    <!--Inicio da puta -->
    <table class="pauta-geral" id="pauta-g">
    <thead class="cabecalho-tab-p">

        <tr>
        <th scope="col" colspan="3">
            
        </th>

        <th scope="col" colspan="{{$colspanDisciplina}}">
            <img src={{URL::asset("img/insignia.jpg")}} alt="Insígnia" class="insignia">
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>
        
        <tr>
        <th scope="col" colspan="3">
            
        </th>
        
        <th scope="col" colspan="{{$colspanDisciplina}}">
            <span class="tx-cab-p">REPÚBLICA DE ANGOLA</span> 
        </th>
        <th scope="col" colspan="3">
                
        </th>
        </tr>
        
        <tr>
        <th scope="col" colspan="3">
            
        </th>
        
        <th scope="col" colspan="{{$colspanDisciplina}}">
            <span class="tx-cab-p">GOVERNO PROVINCIAL DE LUANDA</span>
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>

        <tr>
        <th scope="col" colspan="3">
            VISTO
        </th>
        <th scope="col" colspan="{{$colspanDisciplina}}">
            <span class="tx-cab-p">INSTITUTO POLITÉCNICO INDUSTRIAL "ALDA LARA"</span>
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>


        <tr>
        <th scope="col" colspan="3">
            O DIRECTOR
        </th>
        <th scope="col" colspan="{{$colspanDisciplina}}">
            <span class="tx-curso-p">{{$turma->curso->areaFormacao->nome_area_formacao}}: {{$turma->curso->nome_curso}}</span>
        </th>
        <th scope="col" colspan="3">
            
        </th>           
        </tr>
        
        <tr>
        <td colspan="1">
            
        </td>
        <td colspan="2" style="background-color: #fff; border-bottom: 1px solid #000; padding-bottom: 8px;">
            
        </td>
        <td colspan="{{$colspanDisciplina}}"></td>
        
        <td colspan="3">
            
        </td>
        </tr>

        {{-- <tr> --}}
        <th scope="col" colspan="3">
            <span class="nome-dg">{{$dadosAssinantes['director']->pessoa->nome_completo}}</span>
        </th>
        <th scope="col" colspan="{{$colspanDisciplina}}">
            <h1>PAUTA DE AVALIAÇÃO ANUAL </h1> 
        </th>
        <th colspan="3">
            <span class="ano-lec-p nota-neg">ANO LECTIVO: {{$anoTurmaCoord->ano_lectivo->ano_lectivo}}</span>
        </th>
        </tr>

    </thead>
    <tbody class="corpo-tab-p">
        
        <tr class="linha-tab-p">
        <th class="coluna-tab-p" colspan="3" rowspan="2">
            <span class="tx-turma-p maisculo-p">TURMA: {{$turma->nome_turma}}</span>
        </th>
        <th class="coluna-tab-p" colspan="{{$colspanDisciplina}}">
            <span class="tx-disciplina-p maisculo-p">DISICPLINAS</span>
        </th> 

        <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p maisculo-p">OBS(EXAMES)</span></th>
        <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p maisculo-p">RESULTADOS</span></th>
        <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p maisculo-p">Nº</span></th>
                            
        </tr>
        
        <tr class="linha-tab-p">
            @foreach ($disciplinas as  $disciplina)
            <th class="coluna-tab-p" colspan="6"><span class="maisculo-p">{{ $disciplina->sigla}}</span></th>
                
            @endforeach
            
            
           
            
        </tr>

        <tr class="linha-tab-p">
        <th class="coluna-tab-p">
            <span class="txnum-aluno-p maisculo-p">Nº</span>
        </th>
        <th class="coluna-tab-p">
            <span class="txnome-aluno-p maisculo-p">NOME COMPLETO</span>
        </th>
        <th class="coluna-tab-p">
            <span class="txproc-p maisculo-p">Nº PROC</span>
        </th>
        
        
        @php
        foreach ($disciplinas as  $disciplina){
            $disciplinaId = $disciplina->disciplina_id
            
        @endphp
            <th class="coluna-tab-p"><span class="t-vert maisculo-p">MT1</span></th>
            <th class="coluna-tab-p"><span class="t-vert maisculo-p">MT2</span></th>
            <th class="coluna-tab-p"><span class="t-vert maisculo-p">MT3</span></th>
            @php
            foreach ($medias as $media) {
                $mediaAlunoId = $media['aluno']->aluno_id;
                $mediaDisciplinaId = $media['disciplina']->disciplina_id;
                $mediaTrimestre1 = $media['media_trimestre1'];
                $mediaTrimestre2 = $media['media_trimestre2'];
                $mediaTrimestre3 = $media['media_trimestre3'];
                $caa = $media['ca'];
                $cfdd = $media['cfd'];
                $situacao = $media['situacao'];
                
                if ($mediaDisciplinaId === $disciplinaId ) {
        @endphp
        
            @if ($caa < 0)   
            <th class="c-tab-amarelo coluna-tab-p"><span class="t-vert maisculo-p">CFD</span></th>
            <th class="coluna-tab-p"><span class="t-vert maisculo-p">Exame</span></th>
            <th class="coluna-tab-p"><span class="t-vert maisculo-p">Faltas</span></th>
            @else
            <th class="c-tab-amarelo coluna-tab-p"><span class="t-vert maisculo-p">Ca</span></th>
            <th class="coluna-tab-p" colspan="2"><span class="t-verst-falta-aluno-p maisculo-p">FALTAS</span></th> 
            @endif
            @php
                }
            }
        @endphp
              
            @php
        }
    @endphp 
        

        </tr>
       

        @php
        foreach ($alunos as $index => $aluno) {
            $alunoId = $aluno->aluno_id;
    @endphp
    
    <tr class="linha-tab-p">
        <td class="coluna-tab-p">
            <span class="num-aluno-p">{{$loop+1}}</span>
        </td>
        <td class="coluna-tab-p">
            <span class="nome-aluno-p">{{ $aluno->candidato->pessoa->nome_completo }}</span>
        </td>
        <td class="coluna-tab-p">
            <span class="num-proc-p">{{$aluno->aluno_id}}</span>
        </td>
    
        <!-- Aqui você pode adicionar outros elementos afetados pelo foreach dos alunos -->
    
        @php
            foreach ($medias as $media) {
                $mediaAlunoId = $media['aluno']->aluno_id;
                $mediaDisciplinaId = $media['disciplina']->disciplina_id;
                $mediaTrimestre1 = $media['media_trimestre1'];
                $mediaTrimestre2 = $media['media_trimestre2'];
                $mediaTrimestre3 = $media['media_trimestre3'];
                $caa = $media['ca'];
                $cfdd = $media['cfd'];
                $situacao = $media['situacao'];
                
                
                if ($mediaAlunoId === $alunoId) {
        @endphp

        @if ($mediaTrimestre1<9)
        <td class="nota coluna-tab-p">
            <span class="nota-neg" style="color: rgb(236, 9, 28)">{{ $mediaTrimestre1 }}</span>
        </td>
        @else
        <td class="nota coluna-tab-p">
            <span class="nota-neg" style="color: rgb(38, 6, 221)">{{ $mediaTrimestre1 }}</span>
        </td>    
        @endif

        @if ($mediaTrimestre2<9)
        <td class="nota coluna-tab-p">
            <span class="nota-neg" style="color: rgb(236, 9, 28)">{{ $mediaTrimestre2 }}</span>
        </td>
        @else
        <td class="nota coluna-tab-p">
            <span class="nota-neg" style="color: rgb(38, 6, 221)">{{ $mediaTrimestre2 }}</span>
        </td>    
        @endif

        @if ($mediaTrimestre3<9)
        <td class="nota coluna-tab-p">
            <span class="nota-neg" style="color: rgb(236, 9, 28)">{{ $mediaTrimestre3 }}</span>
        </td>
        @else
        <td class="nota coluna-tab-p">
            <span class="nota-neg" style="color: rgb(38, 6, 221)">{{ $mediaTrimestre3 }}</span>
        </td>    
        @endif
        

        @if ($caa<0) 
            @if ($cfdd<9)  
                <td class="nota c-tab-amarelo coluna-tab-p">
                    <span class="nota-pos" style="color: rgb(236, 9, 28)">{{$cfdd }}</span>
                </td> 
                <td class="nota coluna-tab-p">
                    <span class="nota-neg"></span>
                </td>
                <td class="nota c-tab-sinza-esq ">
                    <span>
                        
                    </span>
                </td>
            @else 
                <td class="nota c-tab-amarelo coluna-tab-p">
                    <span class="nota-pos" style="color: rgb(38, 6, 221)">{{$cfdd }}</span>
                </td> 
                <td class="nota coluna-tab-p">
                    <span class="nota-neg"></span>
                </td>
                <td class="nota c-tab-sinza-esq ">
                    <span>
                        
                    </span>
                </td>

            @endif

        @else
        
            <td class="nota c-tab-amarelo coluna-tab-p">
                    <span class="nota-pos" style="color: rgb(38, 6, 221)">{{$caa }}</span>
                </td>
                <td class="nota coluna-tab-p">
                    <span class="nota-pos"></span>
                </td>
                
                <td class="nota c-tab-sinza-esq ">
                    <span>
                        
                    </span>
                </td>
        @endif
        
      
        
        @php
                }
            }
        @endphp
        
        <!-- Aqui você pode adicionar os elementos afetados pelo foreach do aluno -->
        
    
        <td class="nota coluna-tab-p">
            @if ($situacao =="Não Apto")
            <span class="nota-neg maisculo-p"></span>
            @else
            <span class="nota-neg maisculo-p">RPF</span> 
            @endif
        </td>
        <td class="nota coluna-tab-p">
            <span class="nota-neg maisculo-p">{{$situacao}}</span>
        </td>
        <td class="nota coluna-tab-p">{{$loop+1}}</td>
    </tr>
    
    @php
        }
    @endphp
    
    
        
            <!--Rodape da pauta-->
            <tr>
            <th colspan="3" style="padding-top: 10px;">
                O COORDENADOR DA AREA DE FORMAÇÃO

            </th>
            
            <th colspan="{{$colspanDisciplina}}" style="text-align: right; padding-right: 5px; padding-top: 10px;">
                O SUBDIRETOR PEDAGOGICO

            </th>            
            </tr>

            <tr>
            <th colspan="24"></th>

            </tr>

            <tr>
            <th colspan="24"></th>

            </tr>

            <tr>
            <th colspan="24"></th>
            </tr>

            <tr>
            <th colspan="3">{{$dadosAssinantes['subdirector']->pessoa->nome_completo}}</th>
            
            <th colspan="{{$colspanDisciplina}}" style="text-align: right; padding-right: 15px; padding-top: 10px;">              
                {{$dadosAssinantes['coordenadorArea']->pessoa->nome_completo}}
            </th> 
            </tr>
            <tr>
            <th colspan="24"></th>
            
            </tr>

            <tr>
            <th colspan="24"></th>

            </tr>

            <tr>
            <th colspan="24"></th>
            </tr>


            <tr>
            <th colspan="3" style="border-bottom: 2px solid #000;">              
                <strong>O(A) DIRETOR(A) DE TURMA </strong>
            </th>
            <th colspan="{{$colspanDisciplina}}"></th>
            </tr>

            <!--Fim Rodape da pauta-->
        </tbody>
        </table>

        <!--Fim da pauta-->
        <br><br>







        
    </main>
@endsection
