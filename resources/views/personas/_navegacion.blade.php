<nav class="navbar navbar-expand-md navbar-dark backblack">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('/')}}"><i class="fa fa-home textnavbar"></i><span class="">Inicio</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bar" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="bar">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item active">
            <a class="nav-link active" href="http://antropologia.uaemex.mx/" target="_blank"><img src="{{asset('img/icons/icon2.ico')}}" width="30" height="30" class="d-inline-block align-top" alt="">&nbsp;Facultad</a>
          </li>
          <li class="nav-item dropdown" id="personas">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Sistema de gestión
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="{{route('personas.index')}}">Listado personas</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('ubicaciones.index')}}">Ubicaciones</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="{{route('personas-domicilio.index')}}">Persona domicilio</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>