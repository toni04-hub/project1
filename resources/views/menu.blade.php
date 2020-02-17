<li class="nav-item {{(request()->is('/')) ? 'active' : '' }}">
    <a class="nav-link" href="{{asset('/')}}">Home <span class="sr-only">(current)</span></a>
</li>
<li class="nav-item {{(request()->is('usuarios*')) ? 'active' : '' }}">
        <a class="nav-link" href="{{asset('usuarios')}}">Usuarios</a>
</li>
<li class="nav-item {{(request()->is('pasteles*')) ? 'active' : '' }}">

        <a class="nav-link" href="{{asset('pasteles')}}" tabindex="-1">Pasteles</a>
</li>
