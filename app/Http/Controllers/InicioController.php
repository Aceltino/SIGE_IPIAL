<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Db;
use App\Models\{
    Candidato, 
    Professor,
    Turma,
    Curso,
};

class inicioController extends Controller
{
    public function inicio(){

        //Consultando a tabela dos candidatos 
        $inscritos = Candidato::all();
        $totalinscritos = 0;

        //Contando cada registro da tabela candidatos
        foreach($inscritos as $inscrit)
            $totalinscritos +=1;

        //Consultando a tabela dos candidatos para os Admitidos
        $admitidos = Candidato::all();
        $totaladmitidos = 0;

        //Contando cada registro da tabela candidatos para os Admitidos
        foreach($admitidos as $admitid)
            //filtrando candidatos com o estado de Admitido
            if($admitid->status == "Admitido")
                $totaladmitidos +=1;

       // Consultando a tabela dos candidatos para os Nao Admitidos
        $nadmitidos = Candidato::all();
        $totalnadmitidos = 0;

        //Contando cada registro da tabela candidatos com o estado de Nao admitidos
        foreach($nadmitidos as $nadmitid)
            //filtrando candidatos com o estado de Não admitido
            if($nadmitid->status == "Não admitido")
                $totalnadmitidos +=1;
        
        // Consultando a tabela dos candidatos para os Matriculados
        $matriculados = Candidato::all();
        $totalmatriculados = 0;

        //Contando cada registro da tabela candidatos com o Matriculados
        foreach($matriculados as $matriculad)
            //filtrando candidatos com o estado de Matriculado
            if($matriculad->status == "Matriculado")
                $totalmatriculados +=1;

        //Consultando a tabela dos professores
        $professores = Professor::all();
        $totalprofessores = 0;

        //Contando cada registro da tabela professores
        foreach($professores as $prof)
            $totalprofessores +=1;

        //Consultando a tabela dos turmas
        $turmas = Turma::all();
        $totalturmas = 0;

        //Contando cada registro da tabela turmas
        foreach($turmas as $turm)
            $totalturmas +=1;

        //Consultando a tabela dos cursos
        $cursos = Curso::all();
        $totalcursos = 0;

        //Contando cada registro da tabela cursos
        foreach($cursos as $curs)
            $totalcursos +=1;
       

        return view('pagina-inicial', compact('totalinscritos', 'totaladmitidos', 'totalnadmitidos', 'totalmatriculados', 'totalprofessores', 'totalturmas', 'totalcursos'));
        //redirect()->route('inicio');
    }

}