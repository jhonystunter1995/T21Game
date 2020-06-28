{{-- LLAMADO DE LA RAMA MASTER.BLADE.PHP --}}
@extends('admin.master')

{{-- TITULO DE LA PAGINA --}}
@section('title', 'Editar Usuario')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/users') }}"><i class="fas fa-users"></i> Usuarios</a>    
    </li>    
@endsection


{{-- PANEL DE CONTENIDO EDITAR USUARIO --}}
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-user"></i> Informacion de Usuario</h2>
                </div>
        
                <div class="insider">
                    
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="panel shadow">
                <div class="header">
                    <h2 class="title"><i class="fas fa-user-edit"></i> Editar info.Usuario</h2>
                </div>
        
                <div class="insider">
                    
                </div>
            </div>
        </div>

    </div>
    
</div>
@endsection

