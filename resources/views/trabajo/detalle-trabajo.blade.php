@extends('layouts.app')

@section('content')
@include('layouts.css-header')

      <!--Main layout-->
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
        <div id="app">
                <stripe-form></stripe-form>

        </div>
        <h1>asas</h1>

        <!-- News Blog Content -->
        <div class="container-fluid p-5">
          <div class="row">

            <div class="col-lg-12">
                <!--********************** -->
                  <!-- Job Description Section -->
                  <div class="container space-2 space-3--lg">
                    <div class="row">
                      <div class="col-lg-3 order-lg-2 mb-7 mb-lg-0">
                        <div class="mb-4">
                          <h2 class="h4">Job snapshot</h2>
                        </div>

                        <!-- Contacts List -->
                        <ul class="list-unstyled">
                          <li class="media align-items-center pb-2">
                            <div class="media-body">
                              <h3 class="h6 mb-0">Employee type:</h3>
                              <small class="text-secondary">Full-time</small>
                            </div>
                          </li>

                          <li class="dropdown-divider"></li>

                          <li class="media align-items-center pb-2">
                            <div class="media-body">
                              <h3 class="h6 mb-0">Location:</h3>
                              <a class="small text-secondary" href="#">San Francisco</a>
                            </div>
                          </li>

                          <li class="dropdown-divider"></li>

                          <li class="media align-items-center pb-2">
                            <div class="media-body">
                              <h3 class="h6 mb-0">Job type:</h3>
                              <small class="text-secondary">Product Management</small>
                            </div>
                          </li>

                          <li class="dropdown-divider"></li>

                          <li class="media align-items-center pb-2">
                            <div class="media-body">
                              <h3 class="h6 mb-0">Experience:</h3>
                              <small class="text-secondary">Not specified</small>
                            </div>
                          </li>

                          <li class="dropdown-divider"></li>

                          <li class="media align-items-center pb-2">
                            <div class="media-body">
                              <h3 class="h6 mb-0">Salary:</h3>
                              <small class="text-secondary">$50-$75k</small>
                            </div>
                          </li>

                          <li class="dropdown-divider"></li>

                          <li class="media align-items-center pb-2">
                            <div class="media-body">
                              <h3 class="h6 mb-0">Fecha publicación:</h3>
                                <small class="text-post">{{$post->created_at->format('d/m/y')}}</small>
                            </div>
                          </li>
                        </ul>
                        <!-- End Contacts List -->
                        <!-- action button-->
                        <div class="mb4">
                            @include('partitial.posts.action_button')
                        </div>
                        <!--end action button -->
                      </div>

                      <div class="col-lg-9 order-lg-1">
                        <div class="pr-lg-4">
                          <div class="mb-4">
                            <h2 class="h3 titulo-post">{{$post->name}}</h2>
                            <p><strong>Oferta publicada por:</strong> {{$post->freelance->user->name}};<strong> Categoria:</strong> {{$post->category->name}}</p>
                            <p><strong>Inscritos a esta oferta:</strong> {{$post->invitados_count}}</p>
                          </div>

                        <p class="color-gay-p">{{$post->description}}</p>


                          <div class="mb-5"></div>

                          <h3 class="h6 text-secondary">Responsibilities:</h3>

                            @include('partitial.posts.goals',['goals' => $post->goals])

                          <div class="mb-5"></div>

                          <h3 class="h6 text-secondary">Minimum qualifications:</h3>

                          @include('partitial.posts.requirements',['requirements' => $post->requirements])

                          <div class="mb-5"></div>

                          <h3 class="h6 text-secondary">Preferred qualifications:</h3>

                          <ul class="text-secondary">
                            <li>MBA degree.</li>
                            <li>Experience in business operations. Demonstrated passion and talent for building and scaling consumer products that are technically excellent, aesthetically appealing and easy to use.</li>
                            <li>Team-first outlook, with the ability to build great working relationships with peers across functions.</li>
                            <li>Strong technical, analytical and cross-functional collaboration skills.</li>
                            <li>Excellent communication and interpersonal skills, with the ability to champion initiatives internally and externally and communicate with executives and external partners.</li>
                            <li>Ability and willingness to travel.</li>
                          </ul>

                          <div class="mb-5"></div>

                          <p class="color-gay-p">We're a purpose-driven company whose beliefs are the foundation for how we conduct business every day. We hold ourselves to our One Team Behaviors which demand that we hold the highest ethical standards, to empower an open and diverse workplace, and strive to treat everyone who is touched by our business with dignity and respect. Our employees challenge the status quo, ask questions, and find solutions. We want to break down barriers to financial empowerment. Join us as we change the way the world defines financial freedom.</p>

                          <div class="mb-5"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Job Description Section -->
            </div>
          </div>
        </div>
        <!-- End News Blog Content -->
    </main>
    @include('partitial.posts.related')
    @include('layouts.estima-proyecto')
@stop

