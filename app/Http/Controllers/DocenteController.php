<?php

namespace gestion\Http\Controllers;

use Illuminate\Http\Request;
use gestion\WS\SII;

class DocenteController extends Controller
{
    protected $SIIws;

    public function __construct(SII $SII){
        $this->middleware('auth'); //Primero, si no tiene sesión arroja la excepción y lo manda al login
        $this->middleware('doc'); //despues valida solo al admin, docente, jefe, subdirector ó director accedan
        $this->middleware('jef')->only('academia', 'aprobaciones');// valida si es admin o jefe
        $this->middleware('sub')->only('academias', 'estatus');// valida si es admin o subdirector o director
        $this->SIIws = $SII; //Instancia para mandar llamar las funciones de Guzzle para los webservices
    }
    public function index(){
    	return view('docente.inicio');
    }

    public function asignatura(){
    	return view('docente.docenteasignatura');
    }

    public function historico(){
    	return view('docente.docentehistorico');
    }

    public function recibidos(){
    	return view('docente.docenterecibidos');
    }

    public function enviados(){
    	return view('docente.docenteenviados');
    }

    public function calendario(){
    	return view('docente.docentecalendario');
    }

    public function aprobaciones(){
        return view('docente.aprobaciones');
    }

    public function academia(){
        return view('docente.academia');
    }

    public function academias(){
        return view('docente.academias');
    }

    public function estatus(){
        return view('docente.estatus');
    }
}
