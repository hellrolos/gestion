<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('alumno') }}"><i class="menu-icon fa fa-laptop"></i>Inicio </a>
                </li>
                <!-- Agregar codigo para saber cual esta activo -->
                <li class="menu-item-has-children  active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Asignaturas</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-id-badge"></i><a href="{{ route('docenteasignatura') }}">Semestre Actual</a></li>
                    <li><i class="fa fa-th"></i><a href="{{ route('docentehistorico') }}">Histórico</a></li>
                    </ul>
                </li>
                @if(auth()->user()->type=='JEF' or auth()->user()->type=='ADM')
	                <!-- Menu para Jefes -->
	                <li class="menu-item-has-children  active dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-card-o"></i>Academia</a>
	                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-id-badge"></i><a href="{{ route('docenteacademia') }}">Academia</a></li>
                        <li><i class="fa fa-street-view"></i><a href="{{ route('docenteaprobaciones') }}">Aprobaciones</a></li>
	                    </ul>
	                </li>
                @endif
                @if(auth()->user()->type=='SUB' or auth()->user()->type=='DIR' or auth()->user()->type=='ADM')
                	<!-- Menu para Jefes -->
	                <li class="menu-item-has-children  active dropdown">
	                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-fort-awesome"></i>Progresos</a>
	                    <ul class="sub-menu children dropdown-menu">
	                        <li><i class="fa fa-spinner"></i><a href="{{ route('docenteestatus') }}">Estatus Plataforma</a></li>
	                        <li><i class="fa fa-fire"></i><a href="{{ route('docenteacademias') }}">Academias</a></li>
	                    </ul>
	                </li>
                @endif
                <li class="menu-item-has-children  active dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Mensajes</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route('docenterecibidos') }}">Recibidos</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('docenteenviados') }}">Enviados</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('docentecalendario') }}"><i class="menu-icon fa fa-book"></i>Calendario </a>
                </li>
                @if(auth()->user()->type=='ADM')
                    <li class="menu-title">Administrador</li><!-- /.menu-title -->
                    <li>
                        <a href="{{ route('admin') }}"><i class="menu-icon fa fa-line-chart"></i>Dashboard </a>
                    </li>
                @endif
                <li>
                    <a href="{{ route('logout') }}"><i class="menu-icon fa fa-paper-plane"></i>Cerrar sesión </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
<!-- Left Panel -->