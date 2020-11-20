<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="images/icon-habitat.png">

<link rel:stylesheet href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"/>
<link href="{{ asset('css/custom/owl.carousel.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<link href="{{ asset('css/custom/style.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom/aos.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom/animate.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom/widgets.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom/owl.theme.default.min.css') }}" rel="stylesheet">

<link href="{{ asset('css/custom/bootstrap/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom/mediaelementplayer.css') }}" rel="stylesheet">
<link href="{{ asset('css/custom/fl-bigmug-line.css') }}" rel="stylesheet">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom/magnific-popup..css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/jquery-ui.css') }}">
<link rel="stylesheet" href="{{ asset('css/custom/bootstrap/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">

<!--
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js" crossorigin="anonymous"></script> -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 <script src="{{asset('js/custom/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/custom/jquery-migrate-3.0.1.min.js')}}"></script>
 <script src="{{asset('js/custom/main.js')}}"></script>
  <script src="{{asset('js/custom/jquery-ui.js')}}"></script>
  <script src="{{asset('js/custom/popper.min.js')}}"></script>
  <script src="{{asset('js/custom/mediaelement-and-player.min.js')}}"></script>
  <script src="{{asset('js/custom/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/custom/bootstrap/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/custom/jquery.stellar.min.js')}}"></script>
  <script src="{{asset('js/custom/jquery.countdown.min.js')}}"></script>
  <script src="{{asset('js/custom/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('js/custom/boostrap/bootstrap-datepicker.min.js')}}"></script>
  <script src="{{asset('js/custom/aos.js')}}"></script>
  <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
</head>

<body class="bg-light">
<div class="site-navbar sticky-top">
    <div class="w-90 py-1 mx-auto">
        <div class="row align-items-center">



            <!-- <div class="col-4 col-md-4 col-lg-8"> -->
              <nav class="site-navigation text-right text-md-right" role="navigation">

                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                       <li ><img src="../images/habitat.png" height="40"></li>
                        <li class="active"><a href="{{route('index')}}">Inicio</a>
                        </li>
                        <li class="has-children">
                            <a href="">Propriedades </a>
                            <ul class="dropdown">
                                <li><a href="{{route('propriedade.venda')}}">Venda</a></li>
                                <li><a href="{{route('propriedade.arendar')}}">Arendar</a></li>
                                <li><a href="">Lease</a></li>
                            </ul>
                        </li>

                        <li><a href="terrenos.html">Terrenos</a></li>
                        <li><a href="projectos.html">Projectos</a></li>
                        <li ><a href="{{route('propriedade.create')}}"><button class="btn btn-warning">Publicar</button></a></li>
                        <li class="has-children caret">
                            <a href="#"><i class="far fa-user " > </i> </a>
                            <ul class="dropdown">
                              <!-- Authentication Links -->
                              @guest
                                  <li class="nav-item ">
                                      <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                  </li>
                                  @if (Route::has('register'))
                                      <li class="nav-item">
                                          <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                      </li>
                                  @endif
                              @else
                                  <li class="nav-item dropdown">
                                      <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                          {{ Auth::user()->name }} <span class="caret"></span>
                                      </a>

                                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                             onclick="event.preventDefault();
                                                           document.getElementById('logout-form').submit();">
                                              {{ __('Logout') }}
                                          </a>

                                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                              @csrf
                                          </form>
                                      </div>
                                  </li>
                              @endguest
                            </ul>
                        </li>

<!--
                        <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="far fa-world"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li> -->



                      </ul>

</nav>




        </div>
    </div>
</div>
@include('sweetalert::alert')


@yield('content')
<!-- <script>
// $(document).ready(function() {

//

$(document).ready(function () {
    (function ($) {
       if($.isFunction('owlCarousel')) {
        $('.owl-carousel').owlCarousel({
          center: false,
          items: 1,
          loop: true,
          stagePadding: 0,
          margin: 0,
          autoplay: true,
          pauseOnHover: false,
          nav: true,
          animateOut: 'fadeOut',
          animateIn: 'fadeIn',
          navText: ['<span class="icon-arrow_back">', '<span class="icon-arrow_forward">']
        });
      }
    })(jQuery);
});
</script> -->

<footer class="site-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div >
                    <h3 class="footer-heading mb-4">Habitat</h3>
                    <p>Em uma empresa jovem com uma equipa dinamica e muito criativa!</p>
                </div>



            </div>
            <div class="col-lg-4  mb-lg-0">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <h3 class="footer-heading mb-4">Navegacao</h3>
                    </div>
                    <div class="col-md-6 col-lg-6">
                        <ul class="list-unstyled">
                            <li><a href="#">Inicio</a></li>
                            <li><a href="#">Comprar</a></li>
                            <li><a href="#">Alugar</a></li>

                        </ul>
                    </div>

                </div>


            </div>

            <div class="col-lg-4 mb-lg-0">
                <h3 class="footer-heading mb-4">Siga nos</h3>

                <div>
                    <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                    <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>



            </div>

        </div>
        <div class="row mt-5 text-center">
            <div class="col-md-12">

                Copyright &copy;</script><script>document.write(new Date().getFullYear());</script> Todos direitos Resevados
            </div>

        </div>
    </div>
</footer>
</body>
</html>
