<!-- Header-->
<header id="header" class="header">
<div class="top-left">
    <div class="navbar-header">
        <a class="navbar-brand" href="./"><img src={{ asset('base/images/logoTecNM.png') }} alt="Logo"></a>
        {{-- <a class="navbar-brand hidden" href="./"><img src={{ asset('base/images/logo2.png') }} alt="Logo"></a> --}}
        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
    </div>
</div>
<div class="top-right">
    <div class="header-menu">
        <div class="header-left">
            <div class="dropdown for-notification">
                    <span>Gestión de Curso</span>
            </div>
        </div>
        <div class="user-area dropdown float-right">
        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="user-avatar rounded-circle" alt="User Avatar" src={{ asset('base/images/admin.jpg') }}>
        </a>
        <div class="user-menu dropdown-menu">
        <a class="nav-link" href="{{ route('docenterecibidos') }}"><i class="fa fa-bell-o"></i>Mensajes <span class="count">0</span></a>
        <a class="nav-link" href="{{ route('docentecalendario') }}"><i class="fa fa-cog"></i>Calendario</a>
        <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-power-off"></i>Cerrar sesión</a>
        </div>
        </div>
    </div>
</div>
</header><!-- /header -->