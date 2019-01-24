<li class="nav-item  dropdown ">
    <a class="nav-link dropdown-toggle"
     href="{{ route('login') }}"
     role="button"
     data-toggle="dropdown"
     aria-haspopup="true"
     aria-expanded="false"
     >
        {{auth()->user()->name}} <span class="caret"></span>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a
        class="dropdown-item"
        href="{{route('logout')}}"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();"
    >Cerrar Sesión</a>
    <form id="logout-form" action="{{ route('logout')}}" method="POST" style="display:none;">
        @csrf <!-- envia un token de forma automatica -->

    </form>
    </div>
</li>
