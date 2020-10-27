@extends('admin.layouts.dashboard')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1 class="font-weight-bold">Editar Role</h1>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('blog.admin.roles.update', $role->id) }}" enctype="multipart/form-data">
                @method('PUT')
                @csrf

                <div class="form-group">
                    <label for="role_name">Nombre del Role</label>
                    <input type="text" name="role_name" class="form-control" id="role_name" value="{{ $role->name }}" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="role_slug">Slug del Role</label>
                    <input type="text" name="role_slug" class="form-control" id="role_slug" value="{{ $role->slug }}" required autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="role_permission">Agregar Permisos</label>
                    <input type="text" data-role="tagsinput" name="role_permission" class="form-control" id="role_permission" value="" required autocomplete="off">
                </div>
                <input class="btn btn-primary" type="submit" value="Guardar">
                <a href="{{ url()->previous() }}" class="btn btn-secondary" role="button" aria-pressed="true">Cancelar</a>
            </form>
        </div>
    </div>
</div>
@endsection