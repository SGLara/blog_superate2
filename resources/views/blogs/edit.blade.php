@extends('admin.layouts.dashboard')

@section('content')

<h1 class="font-weight-bold">Editar Blog</h1><br>

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form method="POST" action="{{ route('blog.blogs.update', $blog->id) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf

    <div class="form-group">
        <label for="title">Título</label>
        <input type="text" name="title" class="form-control" id="title" placeholder="Titulo de mi blog..."
            value="{{ $blog->title }}" required autocomplete="off">
    </div>
    <div class="form-group">
        <label for="image">Subir una imagen</label>
        <input type="file" name="image" class="form-control-file" id="image" value="{{ $blog->image_url }}" accept="image/*">
        <div class="row">
            <img src="{{ asset('storage/img/blogs_images/'.$blog->image_url) }}" class="img-thumbnail mx-auto"
                alt="{{ $blog->image_url }}" width="350">
        </div>
    </div>
    <div class="form-group">
        <label for="content">Contenido de mi blog</label>
        <textarea name="blog_content" id="content" required>
            @if ($errors->any())
                {{ old("blog_content") }}
            @else
                {{ $blog->content }}
            @endif
    </textarea>
    </div>

    <div class="col-md-6 mb-3">
        <input class="btn btn-primary" type="submit" value="Guardar">
        <a href="{{ route('blog.blogs.index') }}" class="btn btn-secondary"
        role="button" aria-pressed="true">Cancelar</a>
    </div>
</form>

<script>
    CKEDITOR.replace( 'blog_content' );
</script>

@endsection