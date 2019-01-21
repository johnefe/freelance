<!--<div class="card-header">{{__("Socialite")}}</div>-->
<br><br>
<div class="text-center mb-4">
    <h1 class="h3 mb-0">Redes Sociales</h1>
    <p class="color-gay-p">Inicia sesión con tus cuentas de Facebook o GitHub</p>
</div>
<div class="mb-3">

    <a href="{{route('social_auth',['driver'=>'github'])}}" class="btn btn-block btn-primary light-green darken-2">
            {{ __("GitHub") }} <i class="fa fa-github"></i>
        </a>
</div>
<div class="mb-3">

    <a href="{{route('social_auth',['driver'=>'facebook'])}}" class="btn btn-block btn-primary primary-color-dark">
            {{ __("Facebook") }} <i class="fa fa-facebook"></i>
        </a>
</div>

