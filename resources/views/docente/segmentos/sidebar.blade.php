<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li class="nav-header"><span>Menú</span></li>
			<li class="has-sub">
				<a href="javascript:;">
			        <b class="caret"></b>
				    <i class="fa fa-th-large"></i>
				    <span>Asignaturas</span>
			    </a>
				<ul class="sub-menu">
				    <li><a href="{{ route('docenteasignatura') }}">Semestre Actual</a></li>
				    <li><a href="{{ route('docentehistorico') }}">Histórico</a></li>
				</ul>
			</li>
			{{-- agregar la condicion si es Jefe --}}
			@if(auth()->user()->type=='JEF' or auth()->user()->type=='ADM')
			<li class="has-sub">
				<a href="javascript:;">
			        <b class="caret"></b>
				    <i class="fa fa-users"></i>
				    <span>Academia</span>
			    </a>
				<ul class="sub-menu">
					<li><a href="{{ route('docenteacademia') }}">Academia</a></li>
				    <li><a href="{{ route('docenteaprobaciones') }}">Aprobaciones</a></li>
				</ul>
			</li>
			@endif
			{{-- agregar la condicion para solo sub y director --}}
			@if(auth()->user()->type=='SUB' or auth()->user()->type=='DIR' or auth()->user()->type=='ADM')
			<li class="has-sub">
				<a href="javascript:;">
			        <b class="caret"></b>
				    <i class="fa fa-chart-bar"></i>
				    <span>Progresos</span>
			    </a>
				<ul class="sub-menu">
					<li><a href="{{ route('docenteestatus') }}">Estatus plataforma</a></li>
				    <li><a href="{{ route('docenteacademias') }}">Academias</a></li>
				</ul>
			</li>
			@endif
			<li class="has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
					<i class="fa fa-envelope"></i>
					<span>Mensajes</span>
				</a>
				<ul class="sub-menu">
				    <li><a href="{{ route('docenterecibidos') }}">Recibidos</a></li>
				    <li><a href="{{ route('docenteenviados') }}">Enviados</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ route('docentecalendario') }}">
				<i class="fa fa-calendar"></i>
				<span>Calendario</span>
				</a>
			</li>
			{{-- aqui colocar la condifición si es admin --}}
			@if(auth()->user()->type=='ADM')
			<li>
				<a href="{{ route('admin') }}">
					<i class="fa fa-cogs"></i>
					<span>Administración</span>
				</a>
			</li>
			@endif
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
<!-- end #sidebar