@extends('alumno.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('alumno') }}">Inicio</a></li>
	<li class="breadcrumb-item active">Asignatura Actual</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Asignatura actual<small>Esta es la vista de las asignaturas que se cursan actualmente</small></h1>
<!-- end page-header -->
@endsection