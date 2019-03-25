<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Gestion de Curso | Pagina de Error</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href={{ asset('template/plugins/jquery-ui/jquery-ui.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/plugins/bootstrap/4.0.0/css/bootstrap.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/plugins/font-awesome/5.0/css/fontawesome-all.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/plugins/animate/animate.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/css/default/style.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/css/default/style-responsive.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/css/default/theme/default.css') }} rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src={{ asset('template/plugins/pace/pace.min.js') }}></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body class="pace-top">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin error -->
        <div class="error">
            <div class="error-code m-b-10">503</div>
            <div class="error-content">
                <div class="error-message">El servicio no está disponible actualmente.</div>
                <div class="error-desc m-b-30">
                    El servidor actualmente no puede manejar la solicitud <br />
                    debido a un mantenimiento temporal del servicio.
                </div>
                <div>
                    <a href="{{ route('logout')}}" class="btn btn-success p-l-20 p-r-20">Salir</a>
                </div>
            </div>
        </div>
        <!-- end error -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src={{ asset('template/plugins/jquery/jquery-3.2.1.min.js') }}></script>
	<script src={{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}></script>
	<script src={{ asset('template/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}></script>
	<!--[if lt IE 9]>
		<script src="crossbrowserjs/html5shiv.js"></script>
		<script src="crossbrowserjs/respond.min.js"></script>
		<script src="crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src={{ asset('template/plugins/slimscroll/jquery.slimscroll.min.js') }}></script>
	<script src={{ asset('template/plugins/js-cookie/js.cookie.js') }}></script>
	<script src={{ asset('template/js/theme/default.min.js') }}></script>
	<script src={{ asset('template/js/apps.min.js') }}></script>
	<!-- ================== END BASE JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
</body>
</html>
