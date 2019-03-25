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
 <div id="dom-target" style="display: none;">{{ $estatusMigraciones['dato'] }}</div>
<!-- begin row -->
<div class="row">
	<!-- begin col-3 -->
	<div class="col-lg-3 col-md-6">
		<div class="widget widget-stats bg-green">
			<div class="stats-icon"><i class="fa fa-desktop"></i></div>
			<div class="stats-info">
				<h4>PERIODOS</h4>
				<p>{{ $estatusMigraciones['periodo'] }}</p>
			</div>
			<div class="stats-link">
				<a href="{{ route('periodos') }}">Mostrar Detalles <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- end col-3 -->
	<!-- begin col-3 -->
	<div class="col-lg-3 col-md-6">
		<div class="widget widget-stats bg-blue">
			<div class="stats-icon"><i class="fa fa-link"></i></div>
			<div class="stats-info">
				<h4>DEPARTAMENTOS</h4>
				<p>{{ $estatusMigraciones['departamento'] }}</p>
			</div>
			<div class="stats-link">
				<a href="{{ route('departamentos') }}">Mostrar Detalles <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- end col-3 -->
	<!-- begin col-3 -->
	<div class="col-lg-3 col-md-6">
		<div class="widget widget-stats bg-purple">
			<div class="stats-icon"><i class="fa fa-users"></i></div>
			<div class="stats-info">
				<h4>CARRERAS</h4>
				<p>{{ $estatusMigraciones['carrera'] }}</p>
			</div>
			<div class="stats-link">
				<a href="{{ route('carreras') }}">Mostrar Detalles <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- end col-3 -->
	<!-- begin col-3 -->
	<div class="col-lg-3 col-md-6">
		<div class="widget widget-stats bg-black-lighter">
			<div class="stats-icon"><i class="fa fa-clock"></i></div>
			<div class="stats-info">
				<h4>PERSONAL</h4>
				<p>{{ $estatusMigraciones['personal'] }}</p>
			</div>
			<div class="stats-link">
				<a href="{{ route('personal') }}">Mostrar Detalles <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- end col-3 -->
</div>
<!-- end row -->
			<!-- begin row -->
			<div class="row">
				<!-- begin col-12 -->
			    <div class="col-lg-12">
			        <div class="widget-chart with-sidebar bg-black">
			            <div class="widget-chart-content">
			                <h4 class="chart-title">
			                    Analizador de Mensajes
			                    <small>Cantidad de mensajes enviados durante el año</small>
			                </h4>
			                <div id="visitors-line-chart" class="widget-chart-full-width nvd3-inverse-mode" style="height: 260px;"></div>
			            </div>
			            <div class="widget-chart-sidebar bg-black-darker">
			                <div class="chart-number">
			                    1,225,729
			                    <small>Usuarios Totales del Día</small>
			                </div>
			                <div id="visitors-donut-chart" class="nvd3-inverse-mode p-t-10" style="height: 180px"></div>
			                <ul class="chart-legend f-s-11">
			                    <li><i class="fa fa-circle fa-fw text-primary f-s-9 m-r-5 t-minus-1"></i> 34.0% <span>Alumnos</span></li>
			                    <li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>Maestros</span></li>
			                </ul>
			            </div>
			        </div>
			    </div>
			 </div>
			    <!-- end col-12 -->
<!-- begin row -->
<div class="row">
	<!-- begin col-3 -->
	<div class="col-lg-3 col-md-6">
		<div class="widget widget-stats bg-green">
			<div class="stats-icon"><i class="fa fa-desktop"></i></div>
			<div class="stats-info">
				<h4>ASIGNATURAS</h4>
				<p>{{ $estatusMigraciones['asignatura'] }}</p>
			</div>
			<div class="stats-link">
				<a href="{{ route('asignaturas') }}">Mostrar Detalles <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- end col-3 -->
	<!-- begin col-3 -->
	<div class="col-lg-3 col-md-6">
		<div class="widget widget-stats bg-blue">
			<div class="stats-icon"><i class="fa fa-link"></i></div>
			<div class="stats-info">
				<h4>RETICULAS</h4>
				<p>{{ $estatusMigraciones['reticula'] }}</p>
			</div>
			<div class="stats-link">
				<a href="{{ route('reticulas') }}">Mostrar Detalles <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- end col-3 -->
	<!-- begin col-3 -->
	<div class="col-lg-3 col-md-6">
		<div class="widget widget-stats bg-purple">
			<div class="stats-icon"><i class="fa fa-users"></i></div>
			<div class="stats-info">
				<h4>PLAN RETICULAR</h4>
				<p>{{ $estatusMigraciones['planreticular'] }}</p>
			</div>
			<div class="stats-link">
				<a href="{{ route('planes') }}">Mostrar Detalles <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- end col-3 -->
	<!-- begin col-3 -->
	<div class="col-lg-3 col-md-6">
		<div class="widget widget-stats bg-black-lighter">
			<div class="stats-icon"><i class="fa fa-clock"></i></div>
			<div class="stats-info">
				<h4>ALUMNOS</h4>
				<p>{{ $estatusMigraciones['alumno'] }}</p>
			</div>
			<div class="stats-link">
				<a href="{{ route('alumnos') }}">Mostrar Detalles <i class="fa fa-arrow-alt-circle-right"></i></a>
			</div>
		</div>
	</div>
	<!-- end col-3 -->
</div>
<!-- end row -->
@endsection
@section('ScriptElement')
DashboardV2.init();
@endsection