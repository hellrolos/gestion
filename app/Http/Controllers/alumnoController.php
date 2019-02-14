<?php

namespace gestion\Http\Controllers;

use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index(){
    	return view('alumno.inicio');
    }
}
