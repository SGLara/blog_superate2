@extends('admin.layouts.dashboard')

@section('content')

<h1>Crear Nuevo Blog</h1><br>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Titulo de mi blog..."
            value="{{ old('title') }}" required>
    </div>
    <div class="form-group">
        <label for="image">Subir una imagen</label>
        <input type="file" name="image" class="form-control-file" id="image">
    </div>
    <div class="form-group">
        <label for="content">Contenido de mi blog</label>
        <textarea name="blog_content" id="content" required>{{ old('blog_content') }}</textarea>
    </div>

    <div class="form-group pt-2">
        <input class="btn btn-primary" type="submit" value="Enviar">
    </div>
</form>

<script>
    CKEDITOR.replace( 'blog_content' );
</script>

@endsection