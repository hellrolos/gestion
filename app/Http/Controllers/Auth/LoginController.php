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
    if(Auth::attempt($credentials))
    {
        return redirect()->route('admin');
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
