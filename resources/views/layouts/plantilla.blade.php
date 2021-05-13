<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="{{asset('js/app.js')}}"></script>
    <link href="{{asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/design.css')}}" rel="stylesheet" >
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" >
    <link rel="icon" href="{{asset('img/icons/icon.ico')}}">
    <script src="{{asset('js/icons.js')}}" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>
<body>
    <div class="container">
        <header>
          <img src="{{asset('img/banner/banner.jpg')}}" class="img-fluid" alt="Responsive image">
          @yield('nav')
        </header>
        <section class="mt-4">
          @yield('content')
            <div class="container mt-4 pt-3 pb-1 text-center text-white fw-normal backgold">
                <p>"2021, Año del 25 Aniversario de los Estudios de Doctorado en la UAEM"</p>
            </div>
        </section>
        <footer class="backgreen" id="footer">
            <div class="container text-center text-md-center">
              <div class="row">
                <div class="col-md-5 mx-auto">
                  <h5 class="h3 text-white mt-3 mb-4 text-center">Informes</h5>
                  <p class="text-justify text-white">Facultad de Antropología, UAEMex Coordinador de Investigación y Estudios Avanzados Dr. Juan Jesús Velasco Orozco.</p>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-2 mx-auto">
                  <h5 class="h3 text-white mt-3 mb-4 text-center">Teléfonos</h5>
      
                  <ul class="list-unstyled">
                    <p class="text-white">Número de ext. 134 y 140 </p>
                    <li>
                      <a class="phone text-white text-decoration-none und-text-a" href="tel:7222194615"><i class="fa fa-phone"></i> Tel: 7222194615</a>
                    </li>
                    <li>
                      <a class="phone text-light text-decoration-none und-text-a" href="tel:7222120373"><i class="fa fa-phone"></i> Tel: 7222120373</a>
                    </li>
                    <li>
                      <a class="phone text-light text-decoration-none und-text-a" href="tel:7223478909"><i class="fa fa-mobile"></i> Telefóno celular: 7223478909</a>
                    </li>
                  </ul>
                </div>
                <hr class="clearfix w-100 d-md-none">
                <div class="col-md-2 mx-auto">
                  <h5 class="h3 text-white mt-3 mb-4 text-center">E-mail</h5>
                  <ul class="list-unstyled">
                    <li>
                      <a class="envelope text-light text-decoration-none und-text-a" href="mailto:jjvelascoo@uaemex.mx"><i class="fa fa-envelope"></i> Correo electronico: jjvelascoo@uaemex.mx</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="social-icons">
              <h5 class="h3 text-white">Contáctanos</h5>
              <br>
              <ul>
                <li><a class="envelope" href="mailto:jjvelascoo@uaemex.mx" target="_blank"><i class="fa fa-envelope"></i></a></li>
                <li><a class="facebook" href="https://www.facebook.com/Facultad-de-Antropolog%C3%ADa-UAEM-413232909057965" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="https://twitter.com/FAntro_UAEM" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a class="maps" href="https://www.google.com.mx/maps/place/Facultad+De+Antropolog%C3%ADa+UAEMex/@19.2792122,-99.6761979,15z/data=!4m12!1m6!3m5!1s0x85cd89a284c012f9:0x653a340d7916eb0a!2sFacultad+De+Antropolog%C3%ADa+UAEMex!8m2!3d19.2741645!4d-99.6562134!3m4!1s0x85cd89a284c012f9:0x653a340d7916eb0a!8m2!3d19.2744736!4d-99.6568829" target="_blank"><i class="fa fa-map-marker"></i></a></li>
                <li><a class="phone" href="tel:7223478909"><i class="fa fa-phone"></i></a></li>
              </ul>
            </div>
            <div class="footer-copyright text-center py-3 text-light">© 2021 Copyright:
              <a class="color-goldeness text-decoration-none" href="http://antropologia.uaemex.mx/"> antropologia.uaemex.mx</a>
            </div>
          </footer>
    </div>  
</body>
</html>