@extends('admin.layouts.dashboard')

@section('content')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="#" class="text-success font-weight-bold">{{ Auth::user()->first_name." ".Auth::user()->last_name }}</a>
    </li>
    <li class="breadcrumb-item active"> {{ (Auth::user()->is_admin) ? 'Administrador' : 'Usuario' }}</li>
</ol>
<div class="row py-lg-2">
    <div class="col-md-6">
        <h1 class="font-weight-bold">Usuarios Registrados</h1>
    </div>
    <div class="col-md-6">
        <a href="{{ route('blog.admin.users.create') }}" class="btn btn-primary btn-lg float-md-right font-weight-bold" role="button" aria-pressed="true">Crear Nuevo Usuario</a>
    </div>
</div>

@if (session('user_stored'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Usuario Creado con Éxito</strong>
</div>
@endif

@if (session('user_deleted'))
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Usuario Eliminado con Éxito</strong>
</div>
@endif

@if (session('user_updated'))
<div class="alert alert-primary alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Usuario Actualizado con Éxito</strong>
</div>
@endif

@if (session('user_restored'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Usuario Restaurado con Éxito</strong>
</div>
@endif

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Usuarios Registrados en la BD</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Roles</th>
                        <th>Permisos</th>
                        <th>Administrador</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>Roles</th>
                        <th>Permisos</th>
                        <th>Administrador</th>
                        <th>Herramientas</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if (count($users) == 0)
                    <tr>
                        <td colspan="6">
                            <center>
                                <H6 class="text-danger font-weight-bold">
                                    ¡Ooops! No hay usuarios registrados, sigamos esperándolos...
                                </H6>
                            </center>
                        </td>
                    </tr>
                    @else
                    @foreach ($users as $user)
                    @if (!is_null($user->deleted_at))
                    <tr class="table-danger text-danger font-weight-bold">
                        @else
                    <tr>
                        @endif
                        <td>
                            <center>{{ $user->id }}</center>
                        </td>
                        <td>
                            <center>{{ $user->first_name }}</center>
                        </td>
                        <td>
                            <center>{{ $user->last_name }}</center>
                        </td>
                        <td>
                            <center>{{ $user->email }}</center>
                        </td>
                        {{-- ROLE AND PERMISSION COLUMNS --}}
                        <td>
                            <center>Coming Soon!</center>
                        </td>
                        <td>
                            <center>Coming Soon!</center>
                        </td>
                        {{---------------------------------}}
                        <td>
                            @if ($user->is_admin == 1)
                            <center>Administrador</center>
                            @else
                            <center>Usuario</center>
                            @endif
                        </td>
                        <td>
                            <center>
                                <a href="{{ route('blog.admin.users.show', $user->id) }}"><i class="fa fa-eye"></i></a>
                                @if ((auth()->user()->id) == $user->id)
                                <i class="fa fa-user" style="color: green"></i>
                                <a href="{{ route('blog.admin.users.edit', $user->id) }}"><i class="fa fa-edit"></i></a>
                                @elseif (!is_null($user->deleted_at))
                                <a href="#" data-toggle="modal" data-target="#restoreModal" data-userid="{{ $user->id }}">
                                    <i class="fa fa-trash-restore"></i>
                                </a>
                                @else
                                <a href="#" data-toggle="modal" data-target="#deleteModal" data-userid="{{ $user->id }}">
                                    <i class="fa fa-trash-alt"></i>
                                </a>
                                <a href="{{ route('blog.admin.users.edit', $user->id) }}"><i class="fa fa-edit"></i></a>
                                @endif
                            </center>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @if (!count($users) == 0)
    <div class="card-footer text-primary font-weight-bold">Usuario registrado recientemente:
        {{ $lastUser->first_name . " " . $lastUser->last_name . " | " . $lastUser->created_at->formatLocalized('%d de %B de %Y %I:%M:%S %p') }}
    </div>
    @endif
</div>

@if (!count($users) == 0)
<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que quieres eliminar a este usuario?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Click en "Borrar" si realmente quieres eliminarlo</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{ route('blog.admin.users.destroy', $user->id) }}">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="user_id" name="user_id" value="">
                    <a class="btn btn-danger text-light font-weight-bold" onclick="$(this).closest('form').submit();">Borrar</a>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- restore Modal-->
<div class="modal fade" id="restoreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que quieres restaurar este usuario?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Click en "Restaurar" si realmente quieres eliminarlo</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{ route('blog.admin.users.restore', $user->id) }}">
                    @csrf
                    <input type="hidden" id="user_id" name="user_id" value="">
                    <a class="btn btn-success text-light font-weight-bold" onclick="$(this).closest('form').submit();">Restaurar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

@section('js_user_view')
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var user_id = button.data('userid') 
            
            var modal = $(this)
            modal.find('.modal-footer #user_id').val(user_id);
        });
    $('#restoreModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var user_id = button.data('userid') 
            
            var modal = $(this)
            modal.find('.modal-footer #user_id').val(user_id);
        });
</script>
@endsection