@if($errors->any())
    <div class="alert alert-danger">
        <p><strong>¡Oops, Tienes errores!</strong></p>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
    </div>
@endif 