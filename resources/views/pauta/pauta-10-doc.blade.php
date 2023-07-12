@extends('layouts.doc')

@section('title', 'Pautas')

@section('conteudo')
<main id="main" class="main">
    
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

        <th scope="col" colspan="{{$dadosPauta['colspanDisciplina']}}">
            <img src={{URL::asset("img/insignia.jpg")}} alt="Insígnia" class="insignia">
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>
        
        <tr>
        <th scope="col" colspan="3">
            
        </th>
        
        <th scope="col" colspan="{{$dadosPauta['colspanDisciplina']}}">
            <span class="tx-cab-p">REPÚBLICA DE ANGOLA</span> 
        </th>
        <th scope="col" colspan="3">
                
        </th>
        </tr>
        
        <tr>
        <th scope="col" colspan="3">
            
        </th>
        
        <th scope="col" colspan="{{$dadosPauta['colspanDisciplina']}}">
            <span class="tx-cab-p">GOVERNO PROVINCIAL DE LUANDA</span>
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>

        <tr>
        <th scope="col" colspan="3">
            VISTO
        </th>
        <th scope="col" colspan="{{$dadosPauta['colspanDisciplina']}}">
            <span class="tx-cab-p">INSTITUTO POLITÉCNICO INDUSTRIAL "ALDA LARA"</span>
        </th>
        <th scope="col" colspan="3">
            
        </th>
        </tr>


        <tr>
        <th scope="col" colspan="3">
            O DIRECTOR
        </th>
        <th scope="col" colspan="{{$dadosPauta['colspanDisciplina']}}">
            <span class="tx-curso-p">{{ $dadosPauta['turma']->curso->areaFormacao->nome_area_formacao}} : {{ $dadosPauta['turma']->curso->nome_curso}}</span>
        </th>
        <th scope="col" colspan="3">
            
        </th>           
        </tr>
        
        <tr>
        <td colspan="1">
            
        </td>
        <td colspan="2" style="background-color: #fff; border-bottom: 1px solid #000; padding-bottom: 8px;">
            
        </td>
        <td colspan="{{$dadosPauta['colspanDisciplina']}}"></td>
        
        <td colspan="3">
            
        </td>
        </tr>

        {{-- <tr> --}}
        <th scope="col" colspan="3">
            <span class="nome-dg">{{$dadosPauta['dadosAssinantes']['director']->pessoa->nome_completo}}</span>
        </th>
        <th scope="col" colspan="{{$dadosPauta['colspanDisciplina']}}">
            <h1>PAUTA DE AVALIAÇÃO ANUAL </h1> 
        </th>
        <th colspan="3">
            <span class="ano-lec-p nota-neg">ANO LECTIVO: {{$dadosPauta['ano']->ano_lectivo}}</span>
        </th>
        </tr>

    </thead>
    <tbody class="corpo-tab-p">
        
        <tr class="linha-tab-p">
        <th class="coluna-tab-p" colspan="3" rowspan="2">
            <span class="tx-turma-p maisculo-p">TURMA: {{$dadosPauta['turma']->nome_turma}}</span>
        </th>
        <th class="coluna-tab-p" colspan="{{$dadosPauta['colspanDisciplina']}}">
            <span class="tx-disciplina-p maisculo-p">DISICPLINAS</span>
        </th> 

        <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p maisculo-p">OBS(EXAMES)</span></th>
        <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p maisculo-p">RESULTADOS</span></th>
        <th class="coluna-tab-p" rowspan="3"><span class="txdecisao-p maisculo-p">Nº</span></th>
                            
        </tr>
        
        <tr class="linha-tab-p">
            @foreach ($dadosPauta['disciplinas'] as $disciplinass )
            <th class="coluna-tab-p" colspan="6"><span class="maisculo-p">{{ $disciplinass->sigla}}</span></th>
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
        @foreach ($dadosPauta['disciplinas'] as $essesmambos)    
        <th class="coluna-tab-p"><span class="t-vert maisculo-p">MT1</span></th>
        <th class="coluna-tab-p"><span class="t-vert maisculo-p">MT2</span></th>
        <th class="coluna-tab-p"><span class="t-vert maisculo-p">MT3</span></th>
        <th class="c-tab-amarelo coluna-tab-p"><span class="t-vert maisculo-p">CA</span></th>
        <th class="coluna-tab-p" colspan="2"><span class="t-verst-falta-aluno-p maisculo-p">FALTAS</span></th>     
        @endforeach        
        </tr>

        
            @foreach ($dadosPauta['alunos'] as $aluno  )
                
            <tr class="linha-tab-p">
            <td class="coluna-tab-p">
                <span class="num-aluno-p">{{$loop->index+1}}</span>
            </td>
            <td class="coluna-tab-p">
                <span class="nome-aluno-p">{{$aluno->candidato->pessoa->nome_completo}}</span>
            </td>
            <td class="coluna-tab-p">
                <span class="num-proc-p">{{$aluno->aluno_id}}</span>
            </td> 
            
            

           @foreach ($dadosPauta['disciplinas'] as $index => $disciplina )

           <?php
           foreach($dadosPauta['alunos'] as $aluno){

               $mediasDisciplina = $dadosPauta['medias'];
               if (array_key_exists($index, $mediasDisciplina)) {
                   $media = $mediasDisciplina[$index];
                   if (count($media) > 0) {
                       $primeiraPosicao = $media[0]; 
                       $mt1 = $primeiraPosicao['nota']; 
                   } else {
                    $mt1 = '0'; 
                   }
               } else {
                $mt1 = '0'; 
               }
    
               $mediasDisciplina = $dadosPauta['medias'];
                if (array_key_exists($index, $mediasDisciplina)) {
                    $media = $mediasDisciplina[$index];
                    if (count($media) > 1) {
                        $segundaPosicao = $media[1]; 
                        $mt2= $segundaPosicao['nota']; 
                    } else {
                        $mt2 = '0'; 
                    }
                } else {
                    $mt2 = '0'; 
                }

                $mediasDisciplina = $dadosPauta['medias'];
                if (array_key_exists($index, $mediasDisciplina)) {
                    $media = $mediasDisciplina[$index];
                    if (count($media) > 2) {
                        $segundaPosicao = $media[2]; 
                        $mt2= $segundaPosicao['nota']; 
                    } else {
                        $mt3 = '0'; 
                    }
                } else {
                    $mt3 = '0'; 
                }
           }
           ?>
           
                      
          
            <td class="nota coluna-tab-p"><span class="nota-neg">{{$mt1}}</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg">{{$mt2}}</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos">{{$mt3}}</span></td>
            <td class="nota c-tab-amarelo coluna-tab-p"><span class="nota-pos">15</span></td>
            <td class="nota coluna-tab-p"><span class="nota-pos"></span></td>
  
            <td class="nota c-tab-sinza-esq coluna-tab-p">
                <span>
                
                </span>
            </td>
           
         
           @endforeach 
         
            <td class="nota coluna-tab-p"><span class="nota-neg maisculo-p">RPF</span></td>
            <td class="nota coluna-tab-p"><span class="nota-neg maisculo-p">NÃO TRANSITA</span></td>
            <td class="nota coluna-tab-p">5</td>
            </tr>
         
         @endforeach

        
        
            <!--Rodape da pauta-->
            <tr>
            <th colspan="3" style="padding-top: 10px;">
                O COORDENADOR DA AREA DE FORMAÇÃO

            </th>
            
            <th colspan="21" style="text-align: right; padding-right: 5px; padding-top: 10px;">
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
            <th colspan="3">{{$dadosPauta['dadosAssinantes']['coordenadorArea']->pessoa->nome_completo}}</th>
            
            <th colspan="21" style="text-align: right; padding-right: 15px; padding-top: 10px;">              
                {{$dadosPauta['dadosAssinantes']['subdirector']->pessoa->nome_completo}}
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
            <th colspan="21"></th>
            </tr>

            <!--Fim Rodape da pauta-->
        </tbody>
        </table>

        <!--Fim da pauta-->
        <br><br>
    </main>
@endsection