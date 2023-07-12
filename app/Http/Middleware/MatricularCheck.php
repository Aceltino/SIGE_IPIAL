<?php

namespace App\Http\Middleware;

use App\Models\Candidato;
use Closure;
use Illuminate\Http\Request;

class MatricularCheck
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
    $id = $request->route('candidato'); // Obtém o valor do parâmetro {candidato}
    
    $candidato = Candidato::find($id);

    if  (!$candidato || $candidato->status != 'Admitido') 
        {
        abort(404);
        }
        return $next($request);
    }
   
    

}
