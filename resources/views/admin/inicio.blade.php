@extends('admin.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="#">Gestión</a></li>
	<li class="breadcrumb-item active">Inicio</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Bienvenido: <small>Un gusto verlo administrador {{ auth()->user()->name}}</small></h1>
<!-- end page-header -->
@endsection