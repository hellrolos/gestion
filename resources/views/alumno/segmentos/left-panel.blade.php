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
                    <li><i class="fa fa-id-badge"></i><a href="{{ route('alumnoasignatura') }}">Semestre Actual</a></li>
                    <li><i class="fa fa-th"></i><a href="{{ route('alumnohistorico') }}">Histórico</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children  active dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Mensajes</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route('alumnorecibidos') }}">Recibidos</a></li>
                        <li><i class="fa fa-table"></i><a href="{{ route('alumnoenviados') }}">Enviados</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('alumnocalendario') }}"><i class="menu-icon fa fa-book"></i>Calendario </a>
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