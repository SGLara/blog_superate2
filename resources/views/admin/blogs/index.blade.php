    @extends('admin.layouts.dashboard')

    @section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h1>Blogs Publicados</h1>
    </div>
    <div class="col-md-6">
        <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-lg float-md-right" role="button"
            aria-pressed="true">Crear Nuevo Blog</a>
    </div>
</div>



<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Ejemplo Tabla de Datos</div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Imagen</th>
                        <th>Creado por</th>
                        <th>Herramientas</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Contenido</th>
                        <th>Imagen</th>
                        <th>Creado por</th>
                        <th>Herramientas</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->content }}</td>
                        <td>{{ $blog->image_url }}</td>
                        <td>{{ $blog->user->first_name." ".$blog->user->last_name }}</td>
                        <td>...</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
</div>

@endsection