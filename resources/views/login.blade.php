<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>Acceso | Gestión de Curso</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="icon" type="image/png" href={{ asset('prueba/images/favicon.ico')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/bootstrap.min.css')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/font-awesome.min.css')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/icon-font.min.css')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/animate.css')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/hamburgers.min.css')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/animsition.min.css')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/select2.min.css')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/daterangepicker.css')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/util.css')}}/>
    <link rel="stylesheet" type="text/css" href={{ asset('prueba/css/main.css')}}/>
    <link rel="stylesheet" href={{ asset('css/toastr.min.css')}}/>
</head>
<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(prueba/images/bg-01.jpg);">
                    <span class="login100-form-title-1">
                        Gestión de Curso
                    </span>
                </div>
                <form class="login100-form validate-form" action="{{ route('login')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="wrap-input100 validate-input m-b-26">
                        <span class="label-input100">Usuario</span>
                        <input class="input100" type="text" name="username" value="{{ old('username')}}" placeholder="Ingresar usuario"/>
                    </div>
                    <div class="wrap-input100 validate-input m-b-18">
                        <span class="label-input100">Contraseña</span>
                        <input class="input100" type="password" name="password" placeholder="Ingresar contraseña"/>
                    </div>
                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit">
                            Acceder al sitio
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src={{ asset('prueba/js/jquery-3.2.1.min.js')}}></script>
    <script src={{ asset('prueba/js/animsition.min.js')}}></script>
    <script src={{ asset('prueba/js/popper.js')}}></script>
    <script src={{ asset('prueba/js/bootstrap.min.js')}}></script>
    <script src={{ asset('prueba/js/select2.min.js')}}></script>
    <script src={{ asset('prueba/js/moment.min.js')}}></script>
    <script src={{ asset('prueba/js/daterangepicker.js')}}></script>
    <script src={{ asset('prueba/js/countdowntime.js')}}></script>
    <script src={{ asset('prueba/js/main.js')}}></script>
    <script src={{ asset('js/toastr.min.js')}}></script>
    {!! $errors->first('username', '<script>toastr.error(":message", "¡Oops!", {timeOut:5000, progressBar:true, positionClass: "toast-top-center"})</script>') !!}
    {!! $errors->first('password', '<script>toastr.error(":message", "¡Oops!", {timeOut:5000, progressBar:true, positionClass: "toast-top-center"})</script>') !!}
    @if(session()->has('flash'))
        <script>toastr.error("{{ session('flash')}}", "¡Oops!", {timeOut:5000, progressBar:true, positionClass: 'toast-top-center'})</script>
    @elseif(session()->has('success'))
        <script>toastr.success("{{ session('success')}}", "¡Exitoso!", {timeOut:5000, progressBar:true, positionClass: 'toast-top-center'})</script>
    @elseif(session()->has('info'))
        <script>toastr.info("{{ session('info')}}", "¡Información!", {timeOut:5000, progressBar:true, positionClass: 'toast-top-center'})</script>
    @elseif(session()->has('warning'))
        <script>toastr.warning("{{ session('warning')}}", "¡Alerta!", {timeOut:5000, progressBar:true, positionClass: 'toast-top-center'})</script>
    @elseif(session()->has('error'))
        <script>toastr.error("{{ session('error')}}", "¡Error!", {timeOut:5000, progressBar:true, positionClass : 'toast-top-center'})</script>
    @endif
</body>
</html>