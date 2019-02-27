<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li class="nav-header"><span>Menú</span></li>
			<li class="has-sub">
				<a href="{{ route('dashboard') }}">
				    <i class="fa fa-th-large"></i>
				    <span>Administración</span>
			    </a>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
					<i class="fa fa-angle-double-down"></i>
					<span>Migraciones</span>
				</a>
				<ul class="sub-menu">
				    <li><a href="{{ route('migraciones') }}">Estatus migraciones</a></li>
				    <li><a href="{{ route('periodos') }}">Periodos</a></li>
				    <li><a href="{{ route('departamentos') }}">Departamentos</a></li>
				    <li><a href="{{ route('organigrama') }}">Organigrama</a></li>
				    <li><a href="{{ route('personal') }}">Personal</a></li>
				    <li><a href="{{ route('carreras') }}">Carreras</a></li>
				    <li><a href="{{ route('alumnos') }}">Alumnos</a></li>
				    <li><a href="{{ route('reticulas') }}">Reticulas</a></li>
				    <li><a href="{{ route('planes') }}">Planes</a></li>
				    <li><a href="{{ route('asignaturas') }}">Asignaturas</a></li>
				    <li><a href="{{ route('grupos') }}">Grupos</a></li>
				    <li><a href="{{ route('cargashorarias') }}">Cargas Horarias</a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
					<i class="fa fa-user-secret"></i>
					<span>Sesiones</span>
				</a>
				<ul class="sub-menu">
				    <li><a href="{{ route('docenteasignatura') }}">Docentes</a></li>
				    <li><a href="{{ route('docenteaprobaciones') }}">Jefes</a></li>
				    <li><a href="{{ route('docenteacademias') }}">Subdirección</a></li>
				    <li><a href="{{ route('docenteestatus') }}">Dirección</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ route('logout') }}">
			       	<i class="fa fa-key"></i>
				    <span>Cerrar Sesión</span>
				</a>
			</li>
	        <!-- begin sidebar minify button -->
			<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
	        <!-- end sidebar minify button -->
		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>