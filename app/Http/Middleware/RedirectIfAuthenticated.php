<?php

namespace gestion\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        //Aquí se tiene que diseñar una función que permita distinguir el perfil y redireccionar al home que corresponda.
        if (Auth::guard($guard)->check()) {
            $user = Auth::user();
            if($user->type<>'ADM')
            {
               if($user->type<>'ALU')
               {
                 return redirect('/docente');
               }
               else
               {
                 return redirect('/alumno');
               }
            }
            else
            {
                return redirect('/admin');
            }
        }

        return $next($request);
    }
}
