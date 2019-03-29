@extends('admin.base')
@section('content')
<!-- begin breadcrumb -->
<div class="breadcrumbs">
    <div class="breadcrumbs-inner">
        <div class="row m-0">
            <div class="col-sm-6">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Bienvenido</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="{{ route('docente') }}">Gestión</a></li>
                            <li class="active">Inicio</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb -->
<div class="content">
    <!-- Animated -->
    <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7s-cash"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $estatusMigraciones['periodo'] }}</span></div>
                                    <div class="stat-heading">Periodos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7s-cart"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $estatusMigraciones['departamento'] }}</span></div>
                                    <div class="stat-heading">Departamentos</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7s-browser"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $estatusMigraciones['carrera'] }}</span></div>
                                    <div class="stat-heading">Carreras</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7s-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $estatusMigraciones['personal'] }}</span></div>
                                    <div class="stat-heading">Personal</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Widgets -->
        <div class="row">
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-1">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="currency float-left mr-1"></span>
                                <span class="count">{{ $estatusMigraciones['asignatura'] }}</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Asignaturas</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-6">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count float-left">{{ $estatusMigraciones['reticula'] }}</span>
                                <span>%</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Reticulas</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-cart"></i>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-3">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count">{{ $estatusMigraciones['planreticular'] }}</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Planes de Estudio</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-server"></i>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->
            <div class="col-sm-6 col-lg-3">
                <div class="card text-white bg-flat-color-2">
                    <div class="card-body">
                        <div class="card-left pt-1 float-left">
                            <h3 class="mb-0 fw-r">
                                <span class="count">{{ $estatusMigraciones['alumno'] }}</span>
                            </h3>
                            <p class="text-light mt-1 m-0">Alumnos</p>
                        </div><!-- /.card-left -->

                        <div class="card-right float-right text-right">
                            <i class="icon fade-5 icon-lg pe-7s-users"></i>
                        </div><!-- /.card-right -->

                    </div>

                </div>
            </div>
            <!--/.col-->
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-server text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Database</div>
                                            <div class="stat-text">Total: 765</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-user text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Users</div>
                                            <div class="stat-text">Total: 24720</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-stats-up text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Daily Sales</div>
                                            <div class="stat-text">Total: $76,58,714</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-four">
                                    <div class="stat-icon dib">
                                        <i class="ti-pulse text-muted"></i>
                                    </div>
                                    <div class="stat-content">
                                        <div class="text-left dib">
                                            <div class="stat-heading">Bandwidth</div>
                                            <div class="stat-text">Total: 4TB</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
        <div class="row">
        	<div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Total Profit</div>
                                        <div class="stat-digit">1,012</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">New Customer</div>
                                        <div class="stat-digit">961</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Active Projects</div>
                                        <div class="stat-digit">770</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><i class="ti-link text-danger border-danger"></i></div>
                                    <div class="stat-content dib">
                                        <div class="stat-text">Referrals</div>
                                        <div class="stat-digit">2,781</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>

@endsection