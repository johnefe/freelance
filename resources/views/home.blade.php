@extends('layouts.app')

@section('content')
@include('layouts.css-header')
<main class="white-bg">

    <hr class="my-4">

        <div class="" id="app">
            @if(session('message'))
                <div class="col-lg-12 text-center  my-5 py-3 gray-2-bg" align="justify">
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            <div class="alert alert-{{session('message')[0]}}">
                                <h4 class="alert-heding">Mensaje Informativo</h4>
                                <p>{{session('message')[1]}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>

    <div class="container-fluid py-5 px-5">
        <!-- =================== -->
          <div class="row">
              <div class="col-lg-12 py-3">
                   <h4 class="text-center titulo-ofertas-laborales">Haz parte de nuestra gran Familia!</h4>
              </div>
              <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1 ">
                  <!-- post cards -->
                    <div class="row ofertas">
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="card text-left  target-ofertas">

                            <div class="card-body">
                                <div class="t text-center">
                                    <img class="" src="https://www.netguru.com/hubfs/images/ico/tiles/people.png"/>
                                    <p class="p-1-target">Freelancer</p>
                                    <p class="p-2-target">Conocer mas sobre Nosotros</p>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="card text-left target-ofertas">

                                <div class="card-body">
                                    <div class="t  text-center">
                                    <img class="" src="https://www.netguru.com/hubfs/images/ico/tiles/people.png"/>
                                    <p class="p-1-target">Freelancer</p>
                                    <p>Conocer mas sobre Nosotros</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-3 col-lg-3 ">
                            <div class="card text-left target-ofertas">

                                <div class="card-body">
                                    <div class="t  text-center">
                                    <img class="" src="https://www.netguru.com/hubfs/images/ico/tiles/people.png"/>
                                    <p class="p-1-target">Freelancer</p>
                                    <p>Conocer mas sobre Nosotros</p>
                                </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-md-3 col-lg-3">
                            <div class="card text-left target-ofertas">

                              <div class="card-body">
                                 <div class="t  text-center">
                                    <img class="" src="https://www.netguru.com/hubfs/images/ico/tiles/people.png"/>
                                    <p class="p-1-target">Freelancer</p>
                                    <p>Conocer mas sobre Nosotros</p>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
              </div>
          </div>
    </div>
</main>
<main class="section-2">
    <div class="container-fluid py-3 px-5">
        <!-- =================== -->
          <div class="row">
              <div class="col-lg-12 py-3">
                   <h4 class="text-center titulo-ofertas">OFERTAS LABORALES</h4>
              </div>
              <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                  <!-- post cards -->
                    <div class="row ofertas">
                        @forelse($posts as $post)
                       <!-- one post -->
                            @include('partitial.posts.card-posts')
                        <!-- one post -->
                        @empty
                        <!-- diseñar el mensaje de alerta de que no hay post -->

                        @endforelse
                    </div>
                  <!-- end post cards-->
              </div>
              <div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 py-3 d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
             <!-- <div class="col-xs-12  col-lg-4 offset-lg-4 py-3 text-center">
                  <a href="#" class="btn btn-ver-mas">Ver más</a>
              </div>-->
          </div>
        <!-- =================== -->
    </div>
</main>

@include('layouts.section-subscripcion')
@endsection
