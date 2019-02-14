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
				    <li><a href="{{ route('alumnoasignatura') }}">Semestre Actual</a></li>
				    <li><a href="{{ route('alumnohistorico') }}">Histórico</a></li>
				</ul>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
					<b class="caret"></b>
					<i class="fa fa-envelope"></i>
					<span>Mensajes</span>
				</a>
				<ul class="sub-menu">
				    <li><a href="{{ route('alumnorecibidos') }}">Recibidos</a></li>
				    <li><a href="{{ route('alumnoenviados') }}">Enviados</a></li>
				</ul>
			</li>
			<li>
				<a href="{{ route('alumnocalendario') }}">
				<i class="fa fa-calendar"></i>
				<span>Calendario</span>
				</a>
			</li>
			<li>
				<a href="{{ route('inicio') }}">
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
<!-- end #sidebar -->