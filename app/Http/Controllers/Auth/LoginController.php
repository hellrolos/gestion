<?php

namespace gestion\Http\Controllers\Auth;

use Auth;
use gestion\Http\Controllers\Controller;

class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest', ['only' => 'showLogin']);
    }

   public function login(){
    $credentials = $this->validate(request(),[
        'username' => 'required|string',
        'password' => 'required|string'
    ]);
    //Aquí va la logica de uso de los webservices, primero buscar si el usuario es ADM, en caso contrario hacer el llamado de los webservices dependiendo que tipo de caracteres introdujo.
    if(Auth::attempt($credentials))
    {
        $user = Auth::user();
        if($user->type <> 'ADM')
        {
            if($user->type <> 'ALU')
            {
                return redirect()->route('docente')->with('success', 'Bienvenido Profesor');
            }
            else
            {
                return redirect()->route('alumno')->with('success', 'Bienvenido');
            }
        }
        else
        {
            return redirect()->route('admin')->with('success', 'Bienvenido Administrador');
        }
    }
    return back()->withErrors(['username' => trans('auth.failed')])
            ->withInput(request(['username']));
   }

   public function showLogin(){
    return view('login');
   }

   public function logout(){
    Auth::logout();
    return redirect('/');
   }

}
