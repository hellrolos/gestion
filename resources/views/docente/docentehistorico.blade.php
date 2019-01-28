@extends('docente.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('docente') }}">Inicio</a></li>
	<li class="breadcrumb-item"><a href="{{ route('docenteasignatura') }}">Asignatura</a></li>
	<li class="breadcrumb-item active">Historico</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Asignaturas totales<small>Materias totales del docente</small></h1>
<!-- end page-header -->
@endsection