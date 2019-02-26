<?php

namespace gestion\Http\Controllers;

use Illuminate\Http\Request;

class DocenteController extends Controller
{

    public function __construct(){
        //Primero, si no tiene sesión arroja la excepción y lo manda al login
        $this->middleware('auth');
        //despues debemos validar solo admins para el acceso a este controlador
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
