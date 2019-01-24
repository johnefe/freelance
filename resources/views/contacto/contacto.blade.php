@extends('layouts.app')

@section('content')
@include('layouts.css-header')
<!-- -->
<main class=" red darken-1 promotion">
        <div class="container">

        </div>
      </main>

      <!--Main layout-->
    <main class="section-2">

        <div class="">
          <hr class="my-5">

        <!-- News Blog Content -->
          <div class="container">
            <div class="row py-3">
              <div class="col-lg-12 ">
                 <h1>Contáctanos.</h1>
                <p class="color-gay-p">Envíanos un mensaje si crees que podemos ayudarte en algo, nos encantaría poder atenderte. </p>
              </div>
              <!--form contact -->
              <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                      <!--Section: Contact v.2-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-9 mb-md-0 mb-5">
                                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                                        <!--Grid row-->
                                        <div class="row">

                                            <!--Grid column-->
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="name" name="name" class="form-control">
                                                    <label for="name" class="">Tu nombre</label>
                                                </div>
                                            </div>
                                            <!--Grid column-->

                                            <!--Grid column-->
                                            <div class="col-md-6">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="email" name="email" class="form-control">
                                                    <label for="email" class="">Tu correo electrónico</label>
                                                </div>
                                            </div>
                                            <!--Grid column-->

                                        </div>
                                        <!--Grid row-->

                                        <!--Grid row-->
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="md-form mb-0">
                                                    <input type="text" id="subject" name="subject" class="form-control">
                                                    <label for="subject" class="">Teléfono</label>
                                                </div>
                                            </div>
                                        </div>
                                        <!--Grid row-->

                                        <!--Grid row-->
                                        <div class="row">

                                            <!--Grid column-->
                                            <div class="col-md-12">

                                                <div class="md-form">
                                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                                    <label for="message">Escribe aqui tu mensaje</label>
                                                </div>

                                            </div>
                                        </div>
                                        <!--Grid row-->

                                    </form>

                                    <div class="text-center text-md-left">
                                        <a class="btn btn-primary red darken-1" onclick="document.getElementById('contact-form').submit();">Enviar mensaje</a>
                                    </div>
                                    <div class="status"></div>
                                </div>
                                <!--Grid column-->

                                <!--Grid column-->
                                <div class="col-md-3 text-center">
                                    <ul class="list-unstyled mb-0">
                                        <li><i class="fa fa-map-marker fa-2x icon-contact"></i>
                                            <p class="color-gay-p">San Juan de Pasto, Nariño. Colombia</p>
                                        </li>

                                        <li><i class="fa fa-phone mt-4 fa-2x icon-contact"></i>
                                            <p class="color-gay-p">+57 3173187766</p>
                                        </li>

                                        <li><i class="fa fa-envelope mt-4 fa-2x icon-contact"></i>
                                            <p class="color-gay-p">ciervolab@gmail.com</p>
                                        </li>
                                    </ul>
                                </div>
                                <!--Grid column-->

                            </div>

                        <!--Section: Contact v.2-->
                    </div>
                </div>

              </div>
              <!-- end form contact -->
            </div>
          </div>

        <!-- End News Blog Content -->
        </div>
    </main>

    @include('layouts.estima-proyecto')
    <!--  -->
@stop
