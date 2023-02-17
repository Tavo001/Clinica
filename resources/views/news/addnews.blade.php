@extends('layouts.master-dashboard')
@section('content')

    <div class="container-fluid">
        <form method='POST'
         action="{{ url('guardar-noticia') }}"
         enctype="multipart/form-data"
        >
        <label for="name" class='form-lable'>Title</label>
        <div class='col-md-6'>
                <input class='form-control' id="title" type="text" name="title"  require autocomplete="name" autofocus>
        </div>
        <div>
        <label for="image" class='form-lable'>image</label>
        <div class='col-md-6'>
                <input class='form-control' id="image" type="text" name="image"  require autocomplete="name" autofocus>
        </div>
        </div>
        <div>
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" cols="30" rows="10" class="form-control" required>

            </textarea>
        </div>
        <button class="btn btn-success">
            Guardar
        </button>
        </form>
    </div>

@endsection