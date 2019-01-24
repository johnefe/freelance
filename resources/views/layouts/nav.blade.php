<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-purple scrolling-navbar">
    <div class="container">

      <!-- Brand -->
      <a class="navbar-brand" href="{{ url('/') }}">
        <strong>CiervoLab</strong>
      </a>

      <!-- Collapse -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Links -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Left -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/') }}">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/servicios') }}">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/home') }}">Trabajo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/freelancer') }}">Freelancers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/contacto') }}">Contácto</a>
            </li>
        </ul>

        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons">
            <li class="nav-item">
                <a href="" class="nav-link" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link" target="_blank">
                <i class="fab fa-facebook-f"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link" target="_blank">
                <i class="fab fa-twitter"></i>
                </a>
            </li>
            @include('partitial.navigations.'.\App\User::navigation());
        </ul>

      </div>

    </div>
  </nav>
  <!-- Navbar -->
