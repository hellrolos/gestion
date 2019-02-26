@extends('docente.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('docente') }}">Inicio</a></li>
	<li class="breadcrumb-item"><a href="{{ route('docenteacademia') }}">Academia</a></li>
	<li class="breadcrumb-item active">Aprobación de Cursos</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Aprobación de cursos<small>Listado</small></h1>
<!-- end page-header -->
@endsection