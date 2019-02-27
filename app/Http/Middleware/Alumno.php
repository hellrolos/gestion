<?php

namespace gestion\Http\Middleware;

use Closure;
use Session;
use Illuminate\Contracts\Auth\Guard;

class Alumno
{
    protected $auth;

    public function __construct(Guard $user){
        $this->auth = $user;
    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if($this->auth->user()->type == 'ALU' or $this->auth->user()->type == 'ADM')
        {
            return $next($request);
        }
        else
        {
            Session::flash('error', 'Acción no autorizada por el administrador');
            // return back();
            return redirect('/docente')->with('error', 'Acción no autorizada por el administrador');
        }

    }
}
