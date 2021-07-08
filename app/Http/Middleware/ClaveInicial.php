<?php

namespace App\Http\Middleware;

use Closure;
use Hash;
use Auth;
use User;
class ClaveInicial

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
        $claveusuario = Auth::user()->password;
        if (Hash::check('123456', $claveusuario))
        {
            return redirect('mi-clave')->with ('error', Auth::user()->name . ', debes cambiar tu clave');
        }
        return $next($request);

    }
}
