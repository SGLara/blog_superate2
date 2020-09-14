@extends('admin.layouts.dashboard')

@section('content')

<h1 class="font-weight-bold">Crear Nuevo Blog</h1><br>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li> 
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('blog.blogs.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Titulo de mi blog..."
            value="{{ old('title') }}" required autocomplete="off">
    </div>
    <div class="form-group">
        <label for="image">Subir una imagen</label>
        <input type="file" name="image" class="form-control-file" id="image" accept="image/*">
    </div>
    <div class="form-group">
        <label for="content">Contenido de mi blog</label>
        <textarea name="blog_content" id="content" required>{{ old('blog_content') }}</textarea>
    </div>

    <div class="col-md-6 mb-3">
        <input class="btn btn-primary" type="submit" value="Publicar">
        <a href="{{ route('blog.blogs.index') }}" class="btn btn-secondary"
        role="button" aria-pressed="true">Cancelar</a>
    </div>
</form>

<script>
    CKEDITOR.replace( 'blog_content' );
</script>

@endsection