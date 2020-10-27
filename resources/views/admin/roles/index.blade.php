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
        <h1 class="font-weight-bold">Roles Registrados</h1>
    </div>
    <div class="col-md-6">
        <a href="{{ route('blog.admin.roles.create') }}" class="btn btn-primary btn-lg float-md-right font-weight-bold" role="button" aria-pressed="true">Crear Nuevo Role</a>
    </div>
</div>

@if (session('role_stored'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Role Creado con Éxito</strong>
</div>
@endif

@if (session('role_deleted'))
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Role Eliminado con Éxito</strong>
</div>
@endif

@if (session('role_updated'))
<div class="alert alert-primary alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Role Actualizado con Éxito</strong>
</div>
@endif

@if (session('role_restored'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Role Restaurado con Éxito</strong>
</div>
@endif

<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Roles Registrados en la BD</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Role</th>
                        <th>Slug</th>
                        <th>Permisos</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Role</th>
                        <th>Slug</th>
                        <th>Permisos</th>
                        <th>Herramientas</th>
                    </tr>
                </tfoot>
                <tbody>
                    @if (count($roles) == 0)
                    <tr>
                        <td colspan="6">
                            <center>
                                <H6 class="text-danger font-weight-bold">
                                    ¡Ooops! No hay roles registrados, sigamos esperándolos...
                                </H6>
                            </center>
                        </td>
                    </tr>
                    @else
                    @foreach ($roles as $role)
                    @if (!is_null($role->deleted_at))
                    <tr class="table-danger text-danger font-weight-bold">
                        @else
                    <tr>
                        @endif
                        <td>
                            <center>{{ $role->id }}</center>
                        </td>
                        <td>
                            <center>{{ $role->name }}</center>
                        </td>
                        <td>
                            <center>{{ $role->slug }}</center>
                        </td>
                        <td>
                            <center>{{ $role->permission }}</center>
                        </td>
                        <td>
                            <center>
                                @if (!is_null($role->deleted_at))
                                <a href="#" data-toggle="modal" data-target="#restoreModal" data-roleid="{{ $role->id }}">
                                    <i class="fa fa-trash-restore"></i>
                                </a>
                                @else
                                <a href="{{ route('blog.admin.roles.show', $role->id) }}"><i class="fa fa-eye"></i></a>
                                <a href="#" data-toggle="modal" data-target="#deleteModal" data-roleid="{{ $role->id }}">
                                    <i class="fa fa-trash-alt"></i>
                                </a>
                                <a href="{{ route('blog.admin.roles.edit', $role->id) }}"><i class="fa fa-edit"></i></a>
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
    {{-- @if (!count($roles) == 0)
    <div class="card-footer text-primary font-weight-bold">Role registrado recientemente:
        {{ $lastUser->first_name . " " . $lastUser->last_name . " | " . $lastUser->created_at->formatLocalized('%d de %B de %Y %I:%M:%S %p') }}
    </div>
    @endif --}}
</div>

@if (!count($roles) == 0)
<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que quieres eliminar este role?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Click en "Borrar" si realmente quieres eliminarlo</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{ route('blog.admin.roles.destroy', $role->id) }}">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="role_id" name="role_id" value="">
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
                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que quieres restaurar este role?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Click en "Restaurar" si realmente quieres eliminarlo</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{ route('blog.admin.roles.restore', $role->id) }}">
                    @csrf
                    <input type="hidden" id="role_id" name="role_id" value="">
                    <a class="btn btn-success text-light font-weight-bold" onclick="$(this).closest('form').submit();">Restaurar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

@section('js_role_view')
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var role_id = button.data('roleid') 
            
            var modal = $(this)
            modal.find('.modal-footer #role_id').val(role_id);
        });
    $('#restoreModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var role_id = button.data('roleid') 
            
            var modal = $(this)
            modal.find('.modal-footer #role_id').val(role_id);
        });
</script>
@endsection