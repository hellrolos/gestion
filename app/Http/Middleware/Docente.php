<?php

namespace gestion\Http\Middleware;

use Closure;
use Session;
use Illuminate\Contracts\Auth\Guard;

class Docente
{
    protected $auth;
    protected $rol;

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
         if($this->auth->user()->type == 'DOC' or $this->auth->user()->type == 'ADM' or $this->auth->user()->type == 'JEF' or $this->auth->user()->type == 'SUB' or $this->auth->user()->type == 'DIR')
        {
            return $next($request);
        }
        else
        {
            Session::flash('error', 'Acción no autorizada por el administrador');
            return redirect('/alumno')->with('error', 'Acción no autorizada por el administrador');
        }

    }
}
