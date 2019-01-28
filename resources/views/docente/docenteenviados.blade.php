@extends('docente.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('docente') }}">Inicio</a></li>
	<li class="breadcrumb-item"><a href="{{ route('docenterecibidos') }}">Mensajes</a></li>
	<li class="breadcrumb-item active">Mensajes Enviados</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Mensajes Enviados<small>Sección de mensajería, enviados por el docente</small></h1>
<!-- end page-header -->
@endsection