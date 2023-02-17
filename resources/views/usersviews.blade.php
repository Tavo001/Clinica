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
                    <th>E-mail</th>
                    <th>Rol</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->Role->name }}</td>
                        
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>    
    </div>    
</div>
@endsection    