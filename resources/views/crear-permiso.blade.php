@extends('layouts.master-dashboard')
@section('content')
    <div class="container">

        @include('layouts.alert')

        <div class="card">
           <form action="" method="POST">
                @csrf

                <div class="container mb-3">
                    <label for="name" class="form-label">{{ __('Nombre') }}</label>
                    <div>
                        <input class="form-control" id="name"type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    </div>
                    
                    <button type="submit" class="btn btn-primary mt-2">
                        Enviar
                    </button>
                </div>
            </form> 
        </div>
    </div>
@endsection