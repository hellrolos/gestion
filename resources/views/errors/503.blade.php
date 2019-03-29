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
				<h1>503</h1>
			</div>
			<h2>El servicio no está disponible actualmente.</h2>
			<p>El servidor actualmente no puede manejar la solicitud debido a un mantenimiento temporal del servicio..</p>
			<a href="{{ route('logout')}}">Salir</a>
		</div>
	</div>
</body>
</html>
