<?php

namespace gestion\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
	public function __construct(){
		$this->middleware('auth');
	}
    public function index(){
    	return view('admin.inicio');
    }
}