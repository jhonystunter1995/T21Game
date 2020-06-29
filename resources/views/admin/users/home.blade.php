{{-- LLAMADO DE LA RAMA MASTER.BLADE.PHP --}}
@extends('admin.master')

{{-- TITULO DE LA PAGINA --}}
@section('title', 'Usuarios')

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/admin/users') }}"><i class="fas fa-users"></i> Usuarios</a>    
    </li>    
@endsection

{{-- PANEL DE CONTENIDO USUARIOS --}}
@section('content')
<div class="container-fluid">
    <div class="panel shadow">
        <div class="header">
            <h2 class="title"><i class="fas fa-users"></i> Usuarios</h2>
        </div>

    <div class="insider">
        <div class="row">
            <div class="col-md-2 offset-md-10">
                <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="width: 100%;">
                    <i class="fas fa-filter"></i> Filtrar
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="{{ url('/admin/users/all') }}"><i class="fas fa-spell-check"></i> Todos</a>
                        <a class="dropdown-item" href="{{ url('/admin/users/1') }}"><i class="far fa-check-square"></i> Verificados</a>
                        <a class="dropdown-item" href="{{ url('/admin/users/100') }}"><i class="fas fa-users-slash"></i> Inhabilitados</a>
                        <a class="dropdown-item" href="{{ url('/admin/users/0') }}"><i class="fas fa-handshake-slash"></i> No verificados</a>
                    </div>
                </div>
            </div>
            <table class="table mtop16">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td>Estado</td>
                        <td>Rol</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="table1">
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ getUserStatusArray(null,$user->status) }}</td>
                        <td>{{ getRoleUserArray(null,$user->role) }}</td>
                        <td>
                            <div class="opts">
                                <a href="{{ url('/admin/user/' .$user->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-user-edit"></i></a>
                                <a href="{{ url('/admin/user/' .$user->id.'/delete') }}" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td colspan="6">{!! $users->render() !!}</td>
                    </tr>
                </tbody>
            </table>    
        </div>
    </div>
</div>
@endsection