<?php

namespace gestion\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use gestion\WS\SII;

class AdminController extends Controller
{
    protected $SIIws;
	public function __construct(SII $SII){
        //Primero, si no tiene sesión arroja la excepción y lo manda al login
		$this->middleware('auth');
        $this->middleware('adm');
        $this->SIIws = $SII;
	}
    public function index(){
    	return view('admin.inicio');
    }

    public function migraciones(){
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
