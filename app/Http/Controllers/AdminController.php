<?php

namespace gestion\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use gestion\WS\SII;
use gestion\Consultas\administrador;

class AdminController extends Controller
{
    protected $SIIws;
    protected $adminConsultas;
	public function __construct(SII $SII, administrador $ADMIN){
        //Primero, si no tiene sesión arroja la excepción y lo manda al login
		$this->middleware('auth');
        $this->middleware('adm');
        $this->SIIws = $SII;
        $this->adminConsultas = $ADMIN;
	}
    public function index(){
        $estatusMigraciones = $this->adminConsultas->totalesMig();
    	return view('admin.inicio', compact('estatusMigraciones'));
    }

    public function migraciones(){
        // Solicitar el numero de registros para crear una tabla con esa información
    	return view('admin.migraciones');
    }

    public function cargashorarias(){
    	return view('admin.cargashorarias');
    }

    public function grupos(){
    	return view('admin.grupos');
    }

    public function planes(){
    	return view('admin.planes');
    }

    public function reticulas(){
    	return view('admin.reticulas');
    }

    public function carreras(){
    	return view('admin.carreras');
    }

    public function personal(){
    	return view('admin.personal');
    }

    public function departamentos(){
    	return view('admin.departamentos');
    }

    public function asignaturas(){
    	return view('admin.asignaturas');
    }

    public function alumnos(){
    	return view('admin.alumnos');
    }

    public function periodos(){
    	return view('admin.periodos');
    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function organigrama(){
        return view('admin.organigrama');
    }
}
