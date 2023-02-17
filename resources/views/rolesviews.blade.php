@extends('layouts.master-dashboard')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header text-primary font-weight-bold" style="background-color: #E9E9E9">Roles</div>
    <div class="card-body">        
        <a href="{{ url('agregar-rol') }}" class="btn btn-success" class="mb-3">
            <i class="fas fa-fw fa-plus"></i>
            Agregar
        </a>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Usuarios</th>
                    <th># de usuarios</th>
                    <th># de permisos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr>
                        <td>{{ $role->id }}</td>
                        <td>{{ $role->name }}</td>
                        
                        <td>
                            @foreach($role->users as $user)
                            {{ $user->name }},
                            @endforeach
                        </td>
                        <td>{{ $role->users->count() }}</td>

                        <td>{{ $role->permissions->count() }}</td>
                        <td>
                            <a class="btn btn-info btn-sm" href="{{ url('editar-rol/'.$role->id) }}">
                                <i class="fas fa-fw fa-edit"></i>
                                Editar
                            </a>
                            @if($role->users->count() == 0 || $role->permissions->count() == 0)
                                <a class="btn btn-danger btn-sm" href="{{ url('eliminar-rol/'.$role->id) }}">
                                    <i class="fas fa-fw fa-trash"></i>
                                    Eliminar
                                </a>
                            @endif
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>    
    </div>    
</div>
@endsection