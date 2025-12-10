<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth; // Importar o facade Auth

class blockForeignKey
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */




    public function handle(Request $request, Closure $next): Response
    {

        if(Auth::check()){

           $cargo = [1,2];

            if(in_array(Auth::user()->{'id_cargo'},$cargo)){
                 return redirect()->route('funcionario.painel')->with('error', 'Acesso negado Só os ADM tem acesso.');
                
            }
            
        }

        return $next($request);
    }
}
