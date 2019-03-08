<?php

namespace gestion\Http\Controllers;

use Illuminate\Http\Request;
use gestion\WS\SII;

class AlumnoController extends Controller
{

    public function __construct(SII $SII){
        //Primero, si no tiene sesión arroja la excepción y lo manda al login
        $this->middleware('auth');
        $this->middleware('alu');
        $this->SIIws = $SII;
    }

    public function index(){
    	return view('alumno.inicio');
    }

    public function asignatura(){
    	return view('alumno.alumnoasignatura');
    }

    public function historico(){
    	return view('alumno.alumnohistorico');
    }

    public function enviados(){
    	return view('alumno.alumnoenviados');
    }

    public function recibidos(){
    	return view('alumno.alumnorecibidos');
    }

    public function calendario(){
    	return view('alumno.alumnocalendario');
    }
}
