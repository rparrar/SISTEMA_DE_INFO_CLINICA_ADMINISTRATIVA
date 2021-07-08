<?php

namespace App\Http\Middleware;

use Closure;
use Hash;
use Auth;
use User;
use Session;
use Redirect;

class EsActivo

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
        $estado = Auth::user()->activo;
        
        
        if ($estado <> "SI")
        {
            return redirect::to('suspendido');
        }
    
        return $next($request);

    }
}


