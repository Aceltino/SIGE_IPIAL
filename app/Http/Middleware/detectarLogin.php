<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Active_session;

class detectarLogin
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
        $userId = auth()->id(); // Obtém o ID do usuário autenticado
        $sessionId = session()->getId(); // Obtém o ID da sessão atual

        $sessao = Active_session::where('user_id', $userId)
                        ->where('session_id', $sessionId) 
                        ->first();

        if (!$sessao) {
            auth()->logout(); // Realiza o logout do usuário
            session()->invalidate(); // Invalida a sessão atual
            session()->regenerateToken(); // Gera um novo token de sessão

            return redirect()->route('login')->with('error', 'Sua sessão foi encerrada.');
        }

        return $next($request);
    }
}
