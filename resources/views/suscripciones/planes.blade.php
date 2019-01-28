@extends('layouts.app')

@section('content')
@include('layouts.css-header')
<main class="section-2">
    <hr class="my-4">
    <div class="col-lg-12 text-center  my-5 py-3 gray-2-bg" align="justify">
        <a href="" class="color-gay-p link-categoria">Todos</a>
        <a href="" class="color-gay-p link-categoria">Desarrollo web</a>
        <a href="" class="color-gay-p link-categoria">Desarrollo movil</a>
        <a href="" class="color-gay-p link-categoria">Diseño</a>
        <a href="" class="color-gay-p link-categoria">Actualidad</a>
        <a href="" class="color-gay-p link-categoria">Emprendimiento</a>
    </div>

</main>
<main class="">
    <div class="container">
            <div class="row text-center mb-5">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                      <!--Panel-->
                      <div class="card">
                        <div class="card-header purple-bg white-text font-weight-bold">
                          <h3>MENSUAL</h3>
                        <p>{{ __(":price / mes",['price' => 'COP 0,0'])}}</p>
                        </div>
                        <div class="card-body">
                            <ul>
                                <li>adipisicing elit. Consequatur soluta</li>
                                <li> Consequatur soluta  Consequatur</li>
                                <li>
                                    @include('partitial.stripe.form', [
                                        "product" => [
                                            "name" => __('Suscription'),
                                            "description" => __('Mensual'),
                                            "type" => "mensual",
                                            "amount" => 0,0
                                        ]
                                    ])
                                </li>
                            </ul>
                          <a class="btn btn-primary btn-md" href="https://mdbootstrap.com/registration/" target="_blank" role="button">Sign up</a>
                        </div>
                      </div>
                      <!--/.Panel-->
                    </div>
                </div>
    </div>

</main>



@include('layouts.section-subscripcion')
@endsection
