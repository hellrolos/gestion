<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<title>Gestion de Curso | Pagina de Error</title>
	<link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href={{ asset('css/style.css') }} />
</head>
<body>
	<div id="notfound">
		<div class="notfound">
			<div class="notfound-404">
				<div></div>
				<h1>403</h1>
			</div>
			<h2>Acceso restringido</h2>
			<p>Lo sentimos, no cuenta con los permisos para ingresar a esa dirección</p>
			<a href="{{ route('inicio')}}">Inicio</a>
		</div>
	</div>
</body>
</html>