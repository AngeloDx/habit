
<!DOCTYPE html>
<html lang="en">

<head>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="../../../../maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
    <link href="{{ asset('css/custom/bootstrap/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('css/custom/boots.css')}}"rel="stylesheet" />

  <link href="{{ asset('css/custom/cssdemo.css')}}" rel="stylesheet" />


</head>

<body class="register-page">


  <div class="wrapper wrapper-full-page ">
    <div class="full-page register-page section-image" filter-color="black" data-image="images/img_2.jpg">
      <div class="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-4 col-md-6 mr-auto">
              <div class="card card-signup ">
                <div class="card-header text-center ">
                  <h4 class="card-title">login</h4>
                  <!-- <div class="social">
                    <button class="btn btn-icon btn-round btn-twitter">
                      <i class="fa fa-twitter"></i>
                    </button>
                    <button class="btn btn-icon btn-round btn-dribbble">
                      <i class="fa fa-dribbble"></i>
                    </button>
                    <button class="btn btn-icon btn-round btn-facebook">
                      <i class="fa fa-facebook-f"></i>
                    </button>
                    <p class="card-description"> ou </p>
                  </div> -->
                </div>

                  <form method="POST" action="{{ route('login') }}">
                        @csrf
                   <div class="card-body ">
                    <div class="form-group">

                <label class="lab">Email</label>
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Introduzao Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group">

                <label class="lab"> Password</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Introduza o password">
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
          <!-- <div class="form-group">
                        <div class="form-check">
                      <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                       <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                      </div> -->


</div>
<div class="card-footer  ">
                  <div class="form-group row mb-2 text-center">
                            <div class="d-flex align-items-center">

           <button type="submit" class="btn btn-info btn-round text-center">
                                             {{ __('Login') }}
                                         </button>
                  @if (Route::has('password.request'))
                                             <a class="btn btn-link" href="{{ route('password.request') }}">
                                                 {{ __('Forgot Your Password?') }}
                                             </a>
                                         @endif

                                      </div>
                                      <div class="login-desc mt-30">
					Nao tem conta! Registe se  <a href="{{route('register')}}">Aqui</a>.
				</div>

                     </div>

                </div>
                  </form>


              </div>
            </div>
            <div class="col-lg-5 col-md-5 ml-auto">
              <div class="info-area info-horizontal mt-5">
                <div class="icon icon-primary">
                  <i class="nc-icon nc-tv-2"></i>
                </div>
                <div class="description">
                  <h5 class="info-title">Imobiliaria</h5>
                  <p class="description">
                    Sua Propriedade nossa responsabilidade.
                  </p>
                </div>
              </div>
              <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                  <i class="nc-icon nc-html5"></i>
                </div>
                <div class="description">
                  <h5 class="info-title">Agentes Imobiliarios</h5>
                  <p class="description">
                    Cada casa conta a sua historia
                  </p>
                </div>
              </div>
              <div class="info-area info-horizontal">
                <div class="icon icon-info">
                  <i class="nc-icon nc-atom"></i>
                </div>
                <div class="description">
                  <h5 class="info-title">Built Audience</h5>
                  <p class="description">
                    There is also a Fully Customizable CMS Admin Dashboard for this product.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>

    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="js/custom/jquery.min.js"></script>

  <script src="js/custom/bootstrap/bootstrap.min.js"></script>


  <script src="js/custom/jasny-bootstrap.min.js"></script>


  <script src="js/custom/logdemo.js"></script>

<script>
    $(document).ready(function() {
      demo.checkFullPageBackgroundImage();
    });
  </script>
</body>
</html>
