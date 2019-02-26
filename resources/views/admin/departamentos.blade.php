@extends('admin.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('admin') }}">Gestión</a></li>
	<li class="breadcrumb-item"><a href="{{ route('migraciones') }}">Migraciones</a></li>
	<li class="breadcrumb-item active">Departamentos</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Departamentos: <small>Listados</small></h1>
<!-- end page-header -->
@endsection