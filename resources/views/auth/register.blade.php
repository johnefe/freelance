@extends('layouts.app')

@section('content')
@include('layouts.css-header')
<!-- -->
<main class=" red darken-1 promotion">
    <div class="container">
    </div>
</main>

  <!--Main layout-->
<main>
    <div class="container">
    <hr class="my-5">
    <!-- ========================================================
        servicios
    ========================================================= -->

    <section class="container text-center my-5 py-3 " >

          <!-- Section heading -->
          <!--<h2 class="h1-responsive font-weight-bold text-center my-2">NUESTROS SERVICIOS</h2>-->
              <!-- Grid row -->

                <!-- Grid row  grey lighten-1 amber accent-4 offset-lg-3 -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-6 ">
                        <!-- ========== MAIN CONTENT ========== -->
                        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" novalidate>
                                @csrf
                        <!-- Title -->
                        <div class="text-center mb-4">
                          <h1 class="h3 mb-0">Registrar Usuario</h1>
                          <p class="color-gay-p">Todos los datos son requeridos</p>
                        </div>
                         <!-- Input -->

                         <div class="js-form-message mb-3">
                                <div class="js-focus-state input-group form">
                                  <div class="input-group-prepend form__prepend">
                                    <span class="input-group-text form__text">
                                      <span class="fa fa-user form__text-inner"></span>
                                    </span>
                                  </div>
                                  <input type="text" id="name" class="form-control form__input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required
                                         placeholder="Usuario"
                                         aria-label="Usuario"
                                         value="{{ old('name') }}"
                                         data-msg="Por favor ingresa un nombre"
                                         data-error-class="u-has-error"
                                         data-success-class="u-has-success">
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>
                              </div>
                              <!-- End Input -->
                        <!-- Input -->

                        <div class="js-form-message mb-3">
                          <div class="js-focus-state input-group form">
                            <div class="input-group-prepend form__prepend">
                              <span class="input-group-text form__text">
                                <span class="fa fa-user form__text-inner"></span>
                              </span>
                            </div>
                            <input type="email" id="email" value="{{ old('email') }}" class="form-control form__input{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" required
                                   placeholder="Correo electrónico"
                                   aria-label="Email"
                                   data-msg="Please enter a valid email address."
                                   data-error-class="u-has-error"
                                   data-success-class="u-has-success">
                                @if ($errors->has('email'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('email') }}</strong>
                                   </span>
                               @endif
                          </div>
                        </div>
                        <!-- End Input -->

                        <!-- Input -->
                        <div class="js-form-message mb-3">
                          <div class="js-focus-state input-group form">
                            <div class="input-group-prepend form__prepend">
                              <span class="input-group-text form__text">
                                <span class="fa fa-lock form__text-inner"></span>
                              </span>
                            </div>
                            <input type="password" id="password" class="form-control form__input{{ $errors->has('password') ? ' is-invalid' : '' }}"  name="password" required
                                   placeholder="Contraseña"
                                   aria-label="Password"
                                   data-msg="Your password is invalid. Please try again."
                                   data-error-class="u-has-error"
                                   data-success-class="u-has-success">
                                @if ($errors->has('password'))
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $errors->first('password') }}</strong>
                                   </span>
                               @endif
                          </div>
                        </div>
                        <!-- End Input -->


                        <!-- Input -->
                        <div class="js-form-message mb-3">
                          <div class="js-focus-state input-group form">
                            <div class="input-group-prepend form__prepend">
                              <span class="input-group-text form__text">
                                <span class="fa fa-key form__text-inner"></span>
                              </span>
                            </div>
                            <input type="password" id="password-confirm" class="form-control form__input" name="password_confirmation" required
                                   placeholder="Confirmar Contraseña"
                                   aria-label="Password"
                                   data-msg="Your password is invalid. Please try again."
                                   data-error-class="u-has-error"
                                   data-success-class="u-has-success">
                          </div>
                        </div>
                        <!-- End Input -->

                        <div class="mb-3">
                          <button type="submit" class="btn btn-block btn-primary red darken-1">REGISTRAR</button>
                        </div>
                        <div class="text-center mb-3">
                        <p class="text-muted">Ya tengo una cuenta. <a href="{{url('/login')}}">Iniciar sesión</a></p>
                        </div>

                      </form>
                      <!-- ========== END MAIN CONTENT ========== -->
                    </div>

                    <!-- Grid column -->
                    <!--inicio de sesion con redes sociales -->
                    <div class="col-lg-6">
                        @include('partitial.auth.social_login')
                    </div>
                <!--fin de inicio de sesion con redes sociales-->
                </div>
                <!-- Grid row -->

    </section>

    <!--===================================================== -->

    </div>
</main>
<!--  -->
@include('layouts.section-olaborales')
@endsection
