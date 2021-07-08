<?php

namespace App\Http\Middleware;

use Closure;
use Hash;
use Auth;
use User;
use Session;
use Redirect;

class EsAdmin

{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $permisos = Auth::user()->permisos;
        
        
        if ($permisos <> "ADMINISTRADOR")
        {
            return redirect('/');
        }
    
        return $next($request);

    }
}



