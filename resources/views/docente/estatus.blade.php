@extends('docente.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('docente') }}">Inicio</a></li>
	<li class="breadcrumb-item active">Estatus</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Estatus<small>Listado de estatus</small></h1>
<!-- end page-header -->
@endsection