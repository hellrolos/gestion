@extends('alumno.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('alumno') }}">Inicio</a></li>
	<li class="breadcrumb-item"><a href="{{ route('alumnoasignatura') }}">Asignatura</a></li>
	<li class="breadcrumb-item active">Historico</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Asignaturas totales<small>en esta sección se encuentra el listado de materias registradas en este sitio web sobre las cuales se ha realizado alguna planeación</small></h1>
<!-- end page-header -->
@endsection