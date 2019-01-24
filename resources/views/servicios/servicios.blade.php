@extends('layouts.app')

@section('content')
@include('layouts.css-header')

  <!--Main layout-->
<main  class="section-2">
    <div class="container">

        <section class="container text-center my-5 py-5 " >

            <!-- Section heading -->
            <!--<h2 class="h1-responsive font-weight-bold text-center my-2">NUESTROS SERVICIOS</h2>-->
                <!-- Grid row -->

                    <!-- Grid row  grey lighten-1 amber accent-4 -->
                    <div class="row">

                    <div class="col-lg-12">
                        <!-- Title -->
                            <div class="w-md-80 w-lg-60 text-center mx-md-auto mb-9">
                            <!--<span class="">What is Space?</span>-->
                            <h2 class="h3">Siempre estamos a la vanguardia para ofrecer siempre lo mejor</h2>
                            <p class="color-gay-p">Experiencia y alto grado calidad</p>
                            </div>
                            <!-- End Title -->
                    </div>
                        <!-- Grid column -->
                        <div class="col-lg-12">
                            <!-- Tab Nav -->
                                <div class="nav nav-tabs justify-content-center tab-modern mb-5" id="h-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link h5 active tab-modern__nav-link mb-4 size-1 service" id="h-tab-forward-tab" data-toggle="pill" href="#h-tab-forward" role="tab" aria-controls="h-tab-forward" aria-selected="true">
                                    <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="img/icons/proyecto.svg" alt="Image Description">
                                    Desarrollo web
                                </a>
                                <a class="nav-link h5 tab-modern__nav-link mb-4 size-1 service" id="h-tab-together-tab" data-toggle="pill" href="#h-tab-together" role="tab" aria-controls="h-tab-together" aria-selected="false">
                                    <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="img/icons/apoyo-tecnico.svg" alt="Image Description">
                                    Desarrollo de App's
                                </a>
                                <a class="nav-link h5 tab-modern__nav-link mb-4 size-1 service" id="h-tab-toolsy-tab" data-toggle="pill" href="#h-tab-tools" role="tab" aria-controls="h-tab-tools" aria-selected="false">
                                    <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="img/icons/sensible.svg" alt="Image Description">
                                    Marketing digital
                                </a>
                                <a class="nav-link h5 tab-modern__nav-link mb-4 size-1 service" id="h-tab-toolsy-tab" data-toggle="pill" href="#h-tab-toolss" role="tab" aria-controls="h-tab-tools" aria-selected="false">
                                    <img class="max-width-10 tab-modern__nav-link-icon mx-auto mb-2" src="img/icons/customer-support.svg" alt="Image Description">
                                    Buscamos tu Cto
                                </a>
                                </div>
                                <!-- End Tab Nav -->

                                <!-- Tab Content -->
                                <div class="tab-content" id="h-tabContent">
                                <div class="tab-pane fade show active" id="h-tab-forward" role="tabpanel" aria-labelledby="h-tab-forward-tab">
                                    <!-- About -->
                                    <div class="row align-items-lg-center">
                                    <div class="col-md-6 order-md-2 mb-5 mb-md-0">
                                        <div class="mb-4">
                                        <!-- Title -->
                                        <h2 class="h3">Creación de páginas y aplicaciones web</h2>
                                        <p class="color-gay-p">Now that we've aligned the details, it's time to get things mapped out and organized. This part is really crucial in keeping the project in line to completion.</p>
                                        <!-- End Title -->

                                        <!-- Features List -->

                                        <!-- End Features List -->

                                        <hr class="my-5">

                                        <!-- Review -->

                                        <!-- End Review -->
                                        </div>
                                    </div>

                                    <div class="col-md-6 order-md-1">
                                        <div class="pr-lg-4">
                                        <img class="img-fluid" src="img/dw2.jpg" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                    <!-- End About -->
                                </div>

                                <div class="tab-pane fade" id="h-tab-together" role="tabpanel" aria-labelledby="h-tab-together-tab">
                                    <!-- About -->
                                    <div class="row align-items-lg-center">
                                    <div class="col-md-6 mb-5 mb-md-0">
                                        <div class="mb-4">
                                        <!-- Title -->
                                        <h2 class="h3">Desarrollo de aplicaciones móviles</h2>
                                        <p class="color-gay-p">Working together on the daily requires each individual to let the greater good of the team's work surface above their own ego.</p>
                                        <!-- End Title -->

                                        <!-- Features List -->

                                        <!-- End Features List -->

                                        <hr class="my-5">

                                        <!-- Review -->

                                        <!-- End Review -->
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="pr-lg-4">
                                        <img class="img-fluid" src="img/dw2.jpg" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                    <!-- End About -->
                                </div>

                                <div class="tab-pane fade" id="h-tab-tools" role="tabpanel" aria-labelledby="h-tab-tools">
                                    <!-- About -->
                                    <div class="row align-items-lg-center">
                                    <div class="col-md-6 order-md-2 mb-5 mb-md-0">
                                        <div class="mb-4">
                                        <!-- Title -->
                                        <h2 class="h3">Work faster with your tools in one place</h2>
                                        <p class="color-gay-p">As creatives, it's important that we strive to do work outside of obligation. This lets us stay ahead of the curve for our clients and internal projects.</p>
                                        <!-- End Title -->



                                        <hr class="my-5">

                                        <!-- Review -->

                                        <!-- End Review -->
                                        </div>
                                    </div>

                                    <div class="col-md-6 order-md-1">
                                        <div class="pr-lg-4">
                                        <img class="img-fluid" src="img/dw2.jpg" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                    <!-- End About -->
                                </div>

                                <div class="tab-pane fade" id="h-tab-toolss" role="tabpanel" aria-labelledby="h-tab-tools">
                                    <!-- About -->
                                    <div class="row align-items-lg-center">
                                    <div class="col-md-6 order-md-2 mb-5 mb-md-0">
                                        <div class="mb-4">
                                        <!-- Title -->
                                        <h2 class="h3">Work faster with your tools in one place</h2>
                                        <p class="color-gay-p">As creatives, it's important that we strive to do work outside of obligation. This lets us stay ahead of the curve for our clients and internal projects.</p>
                                        <!-- End Title -->



                                        <hr class="my-5">

                                        <!-- Review -->

                                        <!-- End Review -->
                                        </div>
                                    </div>

                                    <div class="col-md-6 order-md-1">
                                        <div class="pr-lg-4">
                                        <img class="img-fluid" src="img/dw2.jpg" alt="Image Description">
                                        </div>
                                    </div>
                                    </div>
                                    <!-- End About -->
                                </div>
                                </div>
                                <!-- End Tab Content -->
                        </div>

                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->

        </section>
    </div>
</main>
@include('layouts.estima-proyecto')
@stop
