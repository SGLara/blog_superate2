@extends('admin.layouts.dashboard')

@section('content')

<div class="row py-lg-2">
    <div class="col-md-6">
        <h1 class="font-weight-bold">Blogs Publicados</h1>
    </div>
    <div class="col-md-6">
        <a href="{{ route('blog.blogs.create') }}" class="btn btn-primary btn-lg float-md-right font-weight-bold" role="button" aria-pressed="true">Crear Nuevo Blog</a>
    </div>
</div>

@if (session('blog_stored'))
<div class="alert alert-primary alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Blog Guardado con Éxito</strong>
</div>
@endif

@if (session('blog_updated'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Blog Actualizado con Éxito</strong>
</div>
@endif

@if (session('blog_deleted'))
<div class="alert alert-danger alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Blog Eliminado con Éxito</strong>
</div>
@endif

@if (session('blog_restored'))
<div class="alert alert-success alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>Blog Restaurado con Éxito</strong>
</div>
@endif



<!-- DataTables Example -->
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-table"></i>
        Blogs Registrados en la BD</div>
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
                    @if (count($blogs) == 0)
                    <tr>
                        <td colspan="6">
                            <center>
                                @if (!auth()->user()->is_admin)
                                <H6 class="text-danger font-weight-bold">
                                    ¡Ooops! No has publicado nada aún, ¡Anímate! y publica algo nuevo...
                                </H6>
                                @else
                                <H6 class="text-danger font-weight-bold">
                                    ¡Ooops! No hay blogs por el momento, porfavor vuelva pronto...
                                </H6>
                                @endif
                            </center>
                        </td>
                    </tr>
                    @else
                    @foreach ($blogs as $blog)
                    @if (!is_null($blog->deleted_at))
                    <tr class="table-danger text-danger font-weight-bold">
                        @else
                    <tr>
                        @endif
                        <td>
                            <center>{{ $blog->id }}</center>
                        </td>
                        <td>
                            <center>{{ $blog->title }}</center>
                        </td>
                        <td>
                            <center>{!! getShorterString($blog->content, 100) !!}</center>
                        </td>
                        <td>
                            <center>
                                <img src="{{ asset('storage/img/blogs_images/' . $blog->image_url) }}" alt="{{ $blog->image_url }}" width="150" loading="lazy"></center>
                        </td>
                        <td>
                            <center>{{ $blog->user->first_name." ".$blog->user->last_name }}</center>
                        </td>
                        <td>
                            <center>
                                @if (!is_null($blog->deleted_at))
                                <a href="#" data-toggle="modal" data-target="#restoreModal" data-blogid="{{ $blog->id }}">
                                    <i class="fa fa-trash-restore"></i>
                                </a>
                                @else
                                <a href="{{ route('blog.blogs.edit', $blog->id) }}"><i class="fa fa-edit"></i></a>
                                <a href="#" data-toggle="modal" data-target="#deleteModal" data-blogid="{{ $blog->id }}">
                                    <i class="fa fa-trash-alt"></i>
                                </a>
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
    @if (!count($blogs) == 0)
    <div class="card-footer text-primary font-weight-bold">Último blog publicado por
        {{ $lastBlog->user->first_name . " " . $lastBlog->user->last_name . " | " . $lastBlog->created_at->formatLocalized('%d de %B de %Y %I:%M:%S %p') }}
    </div>
    @endif
</div>

@if (!count($blogs) == 0)
<!-- delete Modal-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que quieres eliminar este blog?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Click en "Borrar" si realmente quieres eliminarlo</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{ route('blog.blogs.destroy', $blog->id) }}">
                    @method('DELETE')
                    @csrf
                    <input type="hidden" id="blog_id" name="blog_id" value="">
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
                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que quieres restaurar este blog?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Click en "Restaurar" si realmente quieres eliminarlo</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form method="POST" action="{{ route('blog.blogs.restore', $blog->id) }}">
                    @csrf
                    <input type="hidden" id="blog_id" name="blog_id" value="">
                    <a class="btn btn-success text-light font-weight-bold" onclick="$(this).closest('form').submit();">Restaurar</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endif

@endsection

@section('js_blog_page')
<script>
    $('#deleteModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var blog_id = button.data('blogid') 
            
            var modal = $(this)
            modal.find('.modal-footer #blog_id').val(blog_id);
        });
    $('#restoreModal').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget) 
            var blog_id = button.data('blogid') 
            
            var modal = $(this)
            modal.find('.modal-footer #blog_id').val(blog_id);
        });
</script>
@endsection