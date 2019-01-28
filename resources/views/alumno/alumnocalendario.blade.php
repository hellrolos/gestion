@extends('alumno.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('alumno') }}">Inicio</a></li>
	<li class="breadcrumb-item active">Calendario</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Calendario<small>Sección de actividades programadas</small></h1>
<!-- end page-header -->
@endsection