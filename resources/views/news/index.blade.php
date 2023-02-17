@extends('layouts.master-dashboard')
@section('content')
    <div class="container-fluid">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Imagen</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach($news as $new)
                <tr>
                    <td>{{ $new->id }}</td>
                    <td>{{ $new->titulo }}</td>
                    <td>{{ $new->image }}</td>
                    <td>{{ $new->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection