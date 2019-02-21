<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <title>Acceso | Gestión de Curso</title>
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href={{ asset('template/plugins/jquery-ui/jquery-ui.min.css') }} rel="stylesheet" />
    <link href={{ asset('template/plugins/bootstrap/4.0.0/css/bootstrap.min.css') }} rel="stylesheet" />
    <link href={{ asset('template/plugins/font-awesome/5.0/css/fontawesome-all.min.css') }} rel="stylesheet" />
    <link href={{ asset('template/plugins/animate/animate.min.css') }} rel="stylesheet" />
    <link href={{ asset('template/css/default/style.min.css') }} rel="stylesheet" />
    <link href={{ asset('template/css/default/style-responsive.min.css') }} rel="stylesheet" />
    <link href={{ asset('template/css/default/theme/default.css" rel="stylesheet') }} id="theme" />
    <link rel="stylesheet" href={{ asset('css/toastr.min.css')}}>
    <script src={{ asset('template/plugins/pace/pace.min.js') }}></script>
</head>
<body class="pace-top">
    <!-- begin #page-loader -->
    <div id="page-loader" class="fade show"><span class="spinner"></span></div>
    <!-- end #page-loader -->
    <div class="login-cover">
        <div class="login-cover-image" style="background-image: url(template/img/login-bg/login-bg-12.jpg)" data-id="login-cover-image"></div>
        <div class="login-cover-bg"></div>
    </div>
     <hr>
    <div id="page-container" class="fade">
        <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated fadeIn">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand">
                    <span class="logo"></span> <b>TecNM</b> ITTepic
                    <small>Gestión de Curso</small>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <!-- end brand -->
            <!-- begin login-content -->
            <div class="login-content">
                <form action="{{ route('login')}}" method="POST" class="margin-bottom-0">
                    {{ csrf_field() }}
                    <div class="form-group m-b-20">
                        <input type="text" name="username"  value="{{ old('username')}}" class="form-control form-control-lg" placeholder="Usuario"/>
                        {!! $errors->first('username', '<span class="hljs-string" style="color:white;">¡:message!</span>') !!}
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" name="password" class="form-control form-control-lg" placeholder="Contraseña"/>
                        {!! $errors->first('password', '<span class="hljs-string" style="color:white;">¡:message!</span>') !!}
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Acceder al sitio</button>
                    </div>
                </form>
            </div>
            <!-- end login-content -->
        </div>
        <!-- end login -->
    </div>
    <!-- ================== BEGIN BASE JS ================== -->
    <script src={{ asset('template/plugins/jquery/jquery-3.2.1.min.js') }}></script>
    <script src={{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}></script>
    <script src={{ asset('template/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('template/plugins/slimscroll/jquery.slimscroll.min.js') }}></script>
    <script src={{ asset('template/plugins/js-cookie/js.cookie.js') }}></script>
    <script src={{ asset('template/js/theme/default.min.js') }}></script>
    <script src={{ asset('template/js/apps.min.js') }}></script>
    <!-- ================== END BASE JS ================== -->
    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src={{ asset('template/js/demo/login-v2.demo.min.js') }}></script>
    <script src={{ asset('js/toastr.min.js')}}></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    <script>
        $(document).ready(function() {
            App.init();
            LoginV2.init();
        });
    </script>
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