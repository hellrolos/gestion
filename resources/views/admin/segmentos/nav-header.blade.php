<!-- begin header-nav -->
<ul class="navbar-nav navbar-right">
	<li class="dropdown navbar-user">
		<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
			<img src={{ asset('template/img/user/user-13.jpg') }} alt="" />
			<span class="d-none d-md-inline">Administrador: {{ auth()->user()->name}}</span> <b class="caret"></b>
		</a>
		<div class="dropdown-menu dropdown-menu-right">
			<a href="{{ route('alumnorecibidos') }}" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Mensajes</a>
			<a href="{{ route('alumnocalendario') }}" class="dropdown-item">Calendario</a>
			<div class="dropdown-divider"></div>
			<a href="{{ route('logout') }}" class="dropdown-item">Cerrar Sesión</a>
		</div>
	</li>
</ul>
<!-- end header navigation right -->