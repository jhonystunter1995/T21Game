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
            <table class="table">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Nombre</td>
                        <td>Email</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <div class="opts">
                                <a href="{{ url('/admin/user/' .$user->id.'/edit') }}" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fas fa-user-edit"></i></a>
                                <a href="{{ url('/admin/user/' .$user->id.'/delete') }}" data-toggle="tooltip" data-placement="top" title="Eliminar"><i class="fas fa-trash-alt"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>
    </div>
</div>
@endsection