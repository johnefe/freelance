<li class="nav-item  dropdown ">
    <a class="nav-link dropdown-toggle"
        role="button"
        data-toggle="dropdown"
        aria-haspopup="true"
        aria-expanded="false"
        >
        Opciones <span class="caret"></span>
    </a>
    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="#">Mi Perfil</a>
        <a class="dropdown-item" href="#">Mis Suscripciones</a>
        <a class="dropdown-item" href="#">Mis Cursos</a>
        <a class="dropdown-item" href="{{route('invoices.admin')}}">Mis Facturas</a>
        <a class="dropdown-item" href="#">Cursos desarrollados por mi</a>
        <a class="dropdown-item" href="#">Crear Curso</a>


    </div>
</li>
@include('partitial.navigations.logged')
