@extends('layouts.master-dashboard')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header text-primary font-weight-bold" style="background-color: #E9E9E9">Roles</div>
    <div class="card-body">
        <h1 class="h3 text-center">Permisos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                </tr>
            </thead>
            <tbody>
                @foreach($permissions as $permission)
                    <tr>
                        <td>{{ $permission->id }}</td>
                        <td>{{ $permission->name }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>    
    </div>    
</div>
@endsection