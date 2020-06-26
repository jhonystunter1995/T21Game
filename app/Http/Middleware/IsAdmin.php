<?php

namespace App\Http\Middleware;

use Closure, Auth;

class IsAdmin
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
        //VALIDAR SI EL USUARIO ES ADMIN O NO
        if(Auth::user()->role == "1"):
            return $next($request);
        else:
            return redirect('/');
        endif;
    }
}
