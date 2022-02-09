
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../../Nav/img/LogoTabadul_32px.jpg" alt=""></a>
    <a class="navbar-brand" href="#">Gure Tabadul</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul style="margin-left:55%;" class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" aria-current="page" href="{{route('inicio.index')}}">{{ __('traducciones.inicio') }}</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('cursos.index')}}">Cursos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('taller.index')}}">Taller</a>
          </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Euskera</a>
        </li>
        @if(!Auth::check())
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('login')}}">Inicio Sesion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('register')}}">Registrarse</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="" onclick="event.preventDefault(); document.getElementById('logout').submit();">Cerrar sesion</a>
          <!-- Solo usuarios identificados -->
          <form id="logout" action="{{route('logout')}}" method="POST" style="display:none;">
          @csrf
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('perfil.index')}}">Ver perfil</a>
        </li>
        @endif

      </ul>

    </div>
  </div>
</nav>

