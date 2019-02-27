<?php

namespace gestion\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{

    public function __construct(){
        $this->middleware('auth'); //Primero, si no tiene sesión arroja la excepción y lo manda al login
        $this->middleware('doc'); //despues debemos validar solo admin, docente, jefe, subdirector ó director tenga acceso
        $this->middleware('jef')->only('academia', 'aprobaciones');// valida si es admin o jefe
        $this->middleware('sub')->only('academias', 'estatus');// valida si es admin o subdirector o director
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
