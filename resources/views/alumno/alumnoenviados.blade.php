@extends('alumno.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('alumno') }}">Inicio</a></li>
	<li class="breadcrumb-item"><a href="{{ route('alumnorecibidos') }}">Mensajes</a></li>
	<li class="breadcrumb-item active">Mensajes Enviados</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Mensajes Enviados<small>Sección de mensajería, enviados</small></h1>
<!-- end page-header -->
@endsection