<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('dashboard') }}"><i class="menu-icon fa fa-laptop"></i>Inicio </a>
                </li>
                <!-- Agregar codigo para saber cual esta activo -->
                <li class="menu-item-has-children  active dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-cogs"></i>Migraciones</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-spinner"></i><a href="{{ route('migraciones') }}">Estatus</a></li>
                    <li><i class="fa fa-calendar"></i><a href="{{ route('periodos') }}">Periodos</a></li>
                    <li><i class="fa fa-suitcase"></i><a href="{{ route('departamentos') }}">Departamentos</a></li>
                    <li><i class="fa fa-sitemap"></i><a href="{{ route('organigrama') }}">Organigrama</a></li>
                    <li><i class="fa fa-users"></i><a href="{{ route('personal') }}">Personal</a></li>
                    <li><i class="fa fa-trophy"></i><a href="{{ route('carreras') }}">Carreras</a></li>
                    <li><i class="fa fa-user"></i><a href="{{ route('alumnos') }}">Alumnos</a></li>
                    <li><i class="fa fa-file-text-o"></i><a href="{{ route('reticulas') }}">Reticulas</a></li>
                    <li><i class="fa fa-list-ol"></i><a href="{{ route('planes') }}">Planes</a></li>
                    <li><i class="fa fa-list-alt"></i><a href="{{ route('asignaturas') }}">Asignaturas</a></li>
                    <li><i class="fa fa-tasks"></i><a href="{{ route('grupos') }}">Grupos</a></li>
                    <li><i class="fa fa-sort-amount-asc"></i><a href="{{ route('cargashorarias') }}">Cargas Horarias</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children  active dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-id-card-o"></i>Sesiones</a>
                    <ul class="sub-menu children dropdown-menu">
                    <li><i class="fa fa-users"></i><a href="{{ route('docenteacademia') }}">Docentes</a></li>
                    <li><i class="fa fa-street-view"></i><a href="{{ route('docenteacademia') }}">Jefes</a></li>
                    <li><i class="fa fa-id-badge"></i><a href="{{ route('docenteacademia') }}">Subdirección</a></li>
                    <li><i class="fa fa-user-md"></i><a href="{{ route('docenteaprobaciones') }}">Dirección</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{ route('logout') }}"><i class="menu-icon fa fa-paper-plane"></i>Cerrar sesión </a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->
<!-- Left Panel -->