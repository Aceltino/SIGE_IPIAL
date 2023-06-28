<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth,DB,Session};

class CheckActiveSession
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
        $user = Auth::user();
        $activeSession= DB::table('active_sessions')->where('usuario_id', $user->usuario_id)->first();
       

        if (!$activeSession) {
            Auth::logout();
            Session::invalidate();
            return redirect()->route('login')->with('sucess_session_finality','Lamentamos! A sua sessão foi finalizada pela instituição'); // Redireciona para a página de login
        }

        return $next($request);
    }
}
