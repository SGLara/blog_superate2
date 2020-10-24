@extends('admin.layouts.dashboard')

@section('content')
@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="font-weight-bold">Crear Nuevo Usuario</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('blog.admin.users.store') }}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                    <label for="first_name">Nombre</label>
                    <input type="text" name="first_name" class="form-control" id="first_name" value="{{ old('first_name') }}" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="last_name">Apellido</label>
                    <input type="text" name="last_name" class="form-control" id="last_name" value="{{ old('last_name') }}" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Contraseña</label>
                    <input type="password" name="password" class="form-control" id="password" minlength="8" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password_confirmation">Confirmar Contraseña</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" required autocomplete="off">
                </div>

                <input class="btn btn-primary" type="submit" value="Crear">
                <a href="{{ url()->previous() }}" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>
            </form>
        </div>
    </div>
</div>



<script>
    CKEDITOR.replace( 'blog_content' );
</script>

@endsection