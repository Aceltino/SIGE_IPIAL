<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;

class CheckUserNecessario
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    public function handle(Request $request, Closure $next)
    {

        // Verifica se o usuário diretor existe na tabela users
        $director = User::where('cargo_usuario', 'Director')->where('status_usuario',1)->first();
       
        // Verifica se o usuário subdiretor existe na tabela users
        $subdirector = User::where('cargo_usuario', 'Subdirector')->where('status_usuario',1)->first();

        // Verifica se o usuarário coordenador do curso existe na tabela users
        $coordenadorArea= User::where('cargo_usuario', 'coordenacao')->where('status_usuario',1)->first();

        $dadosAssinantes=[
            'director'=>$director,
            'subdirector'=>$subdirector,
            'coordenadorArea'=>$coordenadorArea,
            // 'directorTurma'=>"",
        ];

        switch ($dadosAssinantes) {

            case $dadosAssinantes['director']== false || null:
                return redirect()->back()->with('msg_sem_director',"Lamentamos! Esta pauta não pode ser gerada sem conter um(a) director(a) no sistema");

            case $dadosAssinantes['subdirector']== false || null:
                return redirect()->back()->with('msg_sem_subdirector',"Lamentamos! Esta pauta não pode ser gerada sem conter um(a) Sub-director(a) no sistema");

            case $dadosAssinantes['coordenadorArea']== false || null:
                return redirect()->back()->with('msg_sem_coordenadorArea',"Lamentamos! Esta pauta não pode ser gerada sem conter um(a) Coordenador(a) no sistema");

            // case $dadosAssinantes['directorTurma']== false || null:
            //     return redirect()->back()->with('msg_sem_directorTurma',"Lamentamos! Esta pauta não pode ser gerada sem conter um(a) Coordenador(a) da Turma no sistema");

            default:
                goto conti;
        }
        
        conti:
        return $next($request);
    }
}
