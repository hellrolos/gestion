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
<!-- begin row -->
			<div class="row">
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-green">
						<div class="stats-icon stats-icon-lg"><i class="fa fa-globe fa-fw"></i></div>
			        	<div class="stats-content">
							<div class="stats-title">VISITAS DE HOY</div>
							<div class="stats-number">7,842,900</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 70.1%;"></div>
							</div>
							<div class="stats-desc">Total de Usuarios (70.1%)</div>
                        </div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-blue">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-dollar-sign fa-fw"></i></div>
						<div class="stats-content">
							<div class="stats-title">MAESTROS</div>
							<div class="stats-number">180,200</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 40.5%;"></div>
							</div>
							<div class="stats-desc">Total de Usuarios (40.5%)</div>
						</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-purple">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-archive fa-fw"></i></div>
			        	<div class="stats-content">
							<div class="stats-title">ALUMNOS</div>
							<div class="stats-number">38,900</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 76.3%;"></div>
							</div>
							<div class="stats-desc">Total de Usuarios (76.3%)</div>
						</div>
			        </div>
			    </div>
			    <!-- end col-3 -->
			    <!-- begin col-3 -->
			    <div class="col-lg-3 col-md-6">
			        <div class="widget widget-stats bg-gradient-black">
			            <div class="stats-icon stats-icon-lg"><i class="fa fa-comment-alt fa-fw"></i></div>
			        	<div class="stats-content">
							<div class="stats-title">NUEVOS MENSAJES</div>
							<div class="stats-number">3,988</div>
							<div class="stats-progress progress">
								<div class="progress-bar" style="width: 54.9%;"></div>
							</div>
							<div class="stats-desc">Total de Usuarios (54.9%)</div>
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
			                    Visitors Analytics
			                    <small>Where do our visitors come from</small>
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
			                    <li><i class="fa fa-circle fa-fw text-success f-s-9 m-r-5 t-minus-1"></i> 56.0% <span>{{ $dato }}</span></li>
			                </ul>
			            </div>
			        </div>
			    </div>
			    <!-- end col-12 -->
@endsection
@section('ScriptElement')
DashboardV2.init();
@endsection