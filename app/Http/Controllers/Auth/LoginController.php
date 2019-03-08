<?php

namespace gestion\Http\Controllers\Auth;

use Auth;
use gestion\User;
use gestion\Organization;
use gestion\Http\Controllers\Controller;
use gestion\WS\SII;
use Validator;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    protected $SIIws;

    public function __construct(SII $SII){
        $this->middleware('guest', ['only' => 'showLogin']);
        $this->SIIws = $SII;
    }

    public function login() {
        $credentials = $this->validate(request(),[
            'username' => 'required|string',
            'password' => 'required|string'
        ]);
        if($this->isRegister()) {
            if(Auth::attempt($credentials)) {
                $user = Auth::user();
                if($user->type <> 'ADM') {
                    if($user->type <> 'ALU') {
                        return redirect()->route('docente')->with('success', 'Bienvenido Profesor');
                    }
                    else {
                        return redirect()->route('alumno')->with('success', 'Bienvenido');
                    }
                }
             else {
                    return redirect()->route('admin')->with('success', 'Bienvenido Administrador');
                }
            }
            else {
                return back()->withErrors(['username' => trans('auth.failed')])->withInput(request(['username']));
            }
        }
        else {
            return back()->withErrors(['username' => trans('auth.failed')])->withInput(request(['username']));
        }
    }

   public function showLogin(){
    return view('login');
   }

   public function logout(){
    Auth::logout();
    return redirect('/');
   }

   public function isRegister(){
        $Usuario = request('username');
        $Password = request('password');
        switch($this->findUserType($Usuario)){
            case 'A':
                    return true;
                break;
            case 'D':
                    if($this->registerDocente($Usuario, $Password)) {
                        return true;
                    }
                    else {
                        return false;
                    }
                break;
            case 'E':
                    if($this->registerAlumno($Usuario, $Password)) {
                        return true;
                    }
                    else {
                        return false;
                    }
                break;
            case 'F':
                    return false;
                break;
            default :
                    return false;
        }
        return true;
   }

   public function findUserType($Username){
        $ValidaAlumno = Validator::Make(['user' => $Username], ['user' => 'numeric']);
        if($ValidaAlumno->fails())
        {
            $ValidaDocente = Validator::Make(['user' => $Username],['user' => ['regex:/^(([ÑA-Z|ña-z|&]{3}|[A-Z|a-z]{4})\d{2}((0[1-9]|1[012])(0[1-9]|1\d|2[0-8])|(0[13456789]|1[012])(29|30)|(0[13578]|1[02])31)(\w{2})([A|a|0-9]{1}))$|^(([ÑA-Z|ña-z|&]{3}|[A-Z|a-z]{4})([02468][048]|[13579][26])0229)(\w{2})([A|a|0-9]{1})$/']]);
            if($ValidaDocente->fails()){
               $dbUsername = User::where("username","=", $Username)->first();
               if($dbUsername != null and $dbUsername->type == 'ADM') {
                return 'A';
               }
               else {
                return 'F';
               }
            }
            else {
                return 'D';
            }
        }
        else {
            return 'E';
        }
   }

    public function registerDocente($User, $Pass){
       $DocenteResponse = $this->SIIws->Docente($User, $Pass);
        if($DocenteResponse->getStatusCode() == 200) {
            $Docente = json_decode($DocenteResponse->getBody()->getContents(), true);
            $dbDocente = User::where("username", "=", $User)->first();
            if($dbDocente != null){
                $dbDocente->name = $Docente['nombreCompleto'];
                $dbDocente->password = Hash::make($Pass);
                //Buscar a que tipo pertenece en base a su puesto
                $PuestoUpdate = Organization::find($Docente['jefatura']);
                if($PuestoUpdate != null) {
                    $dbDocente->type = $PuestoUpdate->role_type;
                    $dbDocente->description = $PuestoUpdate->departament;
                }
                else {
                    $dbDocente->type = 'DOC';
                    $dbDocente->description = 'DOCENTE';
                }
                $dbDocente->save();
                return true;
            }
            else {
                $newUser = new User();
                $newUser->username = $Docente['usuario'];
                $newUser->name = $Docente['nombreCompleto'];
                $newUser->usernamed = $Docente['usuario'];
                $newUser->password = Hash::make($Pass);
                //Buscar si existe su puesto en la tabla organizations
                $Puesto = Organization::find($Docente['jefatura']);
                if($Puesto != null){
                    $newUser->type = $Puesto->role_type;
                    $newUser->description = $Puesto->departament;
                }
                else {
                    $newUser->type = 'DOC';
                    $newUser->description = $Docente['descripcionTipo'];
                }
                $newUser->save();
                return true;
            }
        }
        else {
            return false;
        }
    }

    public function registerAlumno($User, $Pass){
        $AlumnoResponse = $this->SIIws->Alumno($User, $Pass);
        if($AlumnoResponse->getStatusCode() == 200) {
            $Alumno = json_decode($AlumnoResponse->getBody()->getContents(), true);
            $dbAlumno = User::where("username", "=", $User)->first();
            if($dbAlumno != null) {
                $dbAlumno->name =  $Alumno['nombreCompleto'];
                $dbAlumno->password =  Hash::make($Pass);
                $dbAlumno->save();
                return true;
            }
            else {
                $newUserA = new User();
                $newUserA->username = $Alumno['usuario'];
                $newUserA->name = $Alumno['nombreCompleto'];
                $newUserA->usernamed = $Alumno['usuario'];
                $newUserA->password = Hash::make($Pass);
                $newUserA->type = $Alumno['tipo'];
                $newUserA->description = $Alumno['descripcionTipo'];
                $newUserA->save();
                return true;
            }
        }
        else {
            return false;
        }
    }

}
