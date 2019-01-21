@extends('layouts.app')

@section('content')
<!-- -->
@include('layouts.css-header')
<main class=" red darken-1 promotion">
    <div class="container">

    </div>
</main>
<!--Main layout-->
<main style="">
<div class="container">
    <hr class="my-5">
    <!-- ========================================= -->
    <section class="container text-center my-5 " >

            <!-- Section heading -->
            <!--<h2 class="h1-responsive font-weight-bold text-center my-2">NUESTROS SERVICIOS</h2>-->
                <!-- Grid row -->

                <!-- Grid row  grey lighten-1 amber accent-4 -->
                <div class="row">

                    <!-- Grid column -->
                    <div class="col-lg-6">
                        <!-- ========== MAIN CONTENT ========== -->
                        <form class="js-validate form-signin p-5" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" novalidate>
                        <!-- Title -->
                        @csrf
                        <div class="text-center mb-4">
                            <h1 class="h3 mb-0">Iniciar sesión</h1>
                            <p class="color-gay-p">Signin to manage your account.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Input -->
                        <div class="js-form-message mb-3">
                            <div class="js-focus-state input-group form">
                            <div class="input-group-prepend form__prepend">
                                <span class="input-group-text form__text">
                                <span class="fa fa-user form__text-inner"></span>
                                </span>
                            </div>
                            <input type="email" id="email" class="form-control form__input {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                                    placeholder="Correo electrónico"
                                    value="{{ old('email') }}"
                                    required autofocus
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
                            <input id="password" type="password" class="form-control form__input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required
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

                        <div class="row mb-3">
                            <div class="col-6">
                            <!-- Checkbox -->
                            <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                                <input type="checkbox" name="remember" class="custom-control-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="rememberMeCheckbox">
                                Recordar datos
                                </label>
                            </div>
                            <!-- End Checkbox -->
                            </div>

                            <div class="col-6 text-right">
                            <!--<a class="float-right" href="recover-account.html">Olvidé mi contraseña?</a>-->

                            <a class="float-right" href="{{ route('password.request') }}">Olvidé mi contraseña?</a>
                            </div>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-block btn-primary red darken-1">ENTRAR</button>
                        </div>
                        <div class="text-center mb-3">
                            <p class="text-muted">¿No tienes una cuenta? <a href="{{ route('register') }}">Registrarme</a></p>
                        </div>

                        </form>
                        <!-- ========== END MAIN CONTENT ========== -->
                    </div>
                    <!--inicio de sesion con redes sociales -->
                    <div class="col-lg-6">
                            @include('partitial.auth.social_login')
                    </div>
                    <!--fin de inicio de sesion con redes sociales-->

                    <!-- Grid column -->
                </div>
                <!-- Grid row -->

    </section>
    <!--========================================== -->
</div>
</main>
@include('layouts.section-olaborales')
@endsection
