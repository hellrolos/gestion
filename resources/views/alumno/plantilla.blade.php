<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8"/>
	<title>Gestión de Curso | Alumnos</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="Portal para el seguimiento de calificaciones durante el semestre" name="description" />
	<meta content="TNM - ITTepic - Dirección" name="author" />
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href={{ asset('template/plugins/jquery-ui/jquery-ui.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/plugins/bootstrap/4.0.0/css/bootstrap.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/plugins/font-awesome/5.0/css/fontawesome-all.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/plugins/animate/animate.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/css/default/style.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/css/default/style-responsive.min.css') }} rel="stylesheet" />
	<link href={{ asset('template/css/default/theme/default.css') }} rel="stylesheet" id="theme" />
	<link rel="stylesheet" href={{ asset('css/toastr.min.css')}}>
	<script src={{ asset('template/plugins/pace/pace.min.js') }}></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	<!-- begin #page-container -->
	<div id="page-container" class="page-container fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="{{ route('alumno') }}" class="navbar-brand"><span class="navbar-logo"></span> <b>Gestión de Curso - TNM/ITTepic</b></a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			{{-- Aqui se llama el segmento de la navegacion de la cabecera del template --}}
			@include('alumno.segmentos.nav-header')
			{{-- Se finaliza el segmento de la navegación de la cabecera del template --}}
		</div>
		<!-- end #header -->
		@include('alumno.segmentos.sidebar')
		<!-- begin #content -->
		<div id="content" class="content">
			@yield('content')
		</div>
		<!-- end #content -->
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	<!-- ================== BEGIN BASE JS ================== -->
	<script src={{ asset('template/plugins/jquery/jquery-3.2.1.min.js') }}></script>
	<script src={{ asset('template/plugins/jquery-ui/jquery-ui.min.js') }}></script>
	<script src={{ asset('template/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js') }}></script>
	<script src={{ asset('template/plugins/slimscroll/jquery.slimscroll.min.js') }}></script>
	<script src={{ asset('template/plugins/js-cookie/js.cookie.js') }}></script>
	<script src={{ asset('template/js/theme/default.min.js') }}></script>
	<script src={{ asset('template/js/apps.min.js') }}></script>
	 <script src={{ asset('js/toastr.min.js')}}></script>
	<!-- ================== END BASE JS ================== -->
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	@include('alumno.segmentos.session-messages')
</body>
</html>