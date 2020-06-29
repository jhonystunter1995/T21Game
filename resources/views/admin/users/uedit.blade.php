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
    <div class="page_user">
        <div class="row">
            <div class="col-md-4">
                <div class="panel shadow">
                    <div class="header">
                        <h2 class="title"><i class="fas fa-user"></i> Informacion de Usuario</h2>
                    </div>
            
                    <div class="insider">
                        <div class="mini_profile">
                            @if(is_null($users->avatar))
                            <img src="{{ url('/static/images/default-avatar.jpg') }}" class="avatar">
                            @else
                            <img src="{{ url('/uploads/user/'.$users->id.'/'.$user->avatar) }}" class="avatar">
                            @endif
                            <div class="info">
                                <span class="title"><i class="fas fa-id-card"></i> Nombre:</span>
                                <span class="text">{{ $users->name }}</span>
                                <span class="title"><i class="fas fa-power-off"></i> Estado del Usuario:</span>
                                <span class="text">{{ getUserStatusArray(null,$users->status) }}</span>
                                <span class="title"><i class="fas fa-paper-plane"></i> Correo Electrónico:</span>
                                <span class="text">{{ $users->email }}</span>
                                <span class="title"><i class="fas fa-calendar-alt"></i> Fecha de Registro:</span>
                                <span class="text">{{ $users->created_at }}</span>
                                <span class="title"><i class="fas fa-user-tag"></i> Rol de Usuario:</span>
                                <span class="text">{{ getRoleUserArray(null,$users->role) }}</span>
                            </div>
                            @if($users->status == '100' )
                            <a href="{{ url('/admin/user/'.$users->id.'/banned') }}" class="btn btn-success">habilitar Usuario</a>
                            @else
                            <a href="{{ url('/admin/user/'.$users->id.'/banned') }}" class="btn btn-danger">Inhabilitar Usuario</a>
                            @endif
                        </div> 
                        
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
</div>
@endsection

