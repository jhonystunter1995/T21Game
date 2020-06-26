<div class="sidebar shadow">
    <div class="section-top">
        <div class="logo">
            <img src="{{ url('static/images/logo1.png') }}" class="img-fluid">
        </div>

        {{-- LLamado de nombre de usuarui|email|boton de logout con icono|tooltip --}}
        <div class="user">
            <span class="subtitle">Hola</span>
            <div class="name">
                {{ Auth::user()->name }} 
                <a href="{{ url('/logout') }}" data-toggle="tooltip" data-placement="top" title="Salir"><i class="fas fa-door-open"></i></a>
            </div>
            <div class="email">{{ Auth::user()->email }}</div>

        </div>

    </div> 

    <div class="main">
        <ul>
        <li><a href="{{ url('/admin') }}"><i class="fas fa-chalkboard"></i> Dashboard</a></li>
        <li><a href="{{ url('/admin/products') }}"><i class="fas fa-box-open"></i> Productos</a></li>
        <li><a href="{{ url('/admin/users') }}"><i class="fas fa-users"></i> Usuarios</a></li>
        </ul>
    </div>
</div>