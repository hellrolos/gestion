@extends('admin.plantilla')
@section('content')
<!-- begin breadcrumb -->
<ol class="breadcrumb pull-right">
	<li class="breadcrumb-item"><a href="{{ route('admin') }}">Gestión</a></li>
	<li class="breadcrumb-item active">Dashboard</li>
</ol>
<!-- end breadcrumb -->
<!-- begin page-header -->
<h1 class="page-header">Bienvenido al tablero: <small>Aqui se desplegara el estatus completo</small></h1>
<!-- end page-header -->
@endsection