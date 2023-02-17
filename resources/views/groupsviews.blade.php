@extends('layouts.master-dashboard')
@section('content')
<div class="container">
    <div class="card">
    <div class="card-header text-primary font-weight-bold" style="background-color: #E9E9E9">Roles</div>
    <div class="card-body">
        <h1 class="h3 text-center">Grupos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Nombre Clave</th>
                    <th>Descripcion</th>
                </tr>
            </thead>
            <tbody>
                @foreach($group as $group)
                    <tr>
                        <td>{{ $group->id }}</td>
                        <td>{{ $group->name }}</td>
                        <td>{{ $group->key_name }}</td>
                        <td>{{ $group->description }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>    
    </div>
</div>
@endsection