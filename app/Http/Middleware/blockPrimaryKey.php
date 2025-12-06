<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class blockPrimaryKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(Auth::check()){
            $id_categoria = 'id_categoria';
            if(Auth::user()->{$id_categoria} == 1){
                return redirect()->route('painel-admin')->with('error', 'Acesso negado Só os funcionarios tem acesso.');
            }
        }

       
        return $next($request);
    }
}
