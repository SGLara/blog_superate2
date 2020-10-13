@extends('admin.layouts.dashboard')

@section('content')
  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Administración</li>
  </ol>

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white o-hidden h-100" style="background-color: #00c800;">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-list"></i>
          </div>
          <div class="mr-5">¡Tenemos <strong>{{ $totalBlogs }}</strong> blogs publicados!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ route('blog.blogs.index') }}">
          <span class="float-left">Ver más detalles</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-fw fa-list"></i>
          </div>
          <div class="mr-5">¡Tenemos <strong>{{ $users }}</strong> usuarios registrados!</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="{{ route('blog.admin.users.registered') }}">
          <span class="float-left">Ver más detalles</span>
          <span class="float-right">
            <i class="fas fa-angle-right"></i>
          </span>
        </a>
      </div>
    </div>
  </div>

  <!-- Area Chart Example-->
  {{-- <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-chart-area"></i>
        Area Chart Example</div>
      <div class="card-body">
        <canvas id="myAreaChart" width="100%" height="30"></canvas>
      </div>
      <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div> --}}

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
                  <H6 class="text-success font-weight-bold">¡Ooops! No hay blogs por el momento, porfavor
                    vuelva pronto...</H6>
                </center>
              </td>
            </tr>
            @else
            @foreach ($blogs as $blog)
            <tr>
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
                  <img src="{{ asset('storage/img/blogs_images/' . $blog->image_url) }}" alt="{{ $blog->image_url }}"
                    width="150" loading="lazy"></center>
              </td>
              <td>
                <center>{{ $blog->user->first_name." ".$blog->user->last_name }}</center>
              </td>
              <td>
                <center>
                  <a href="{{ route('blog.blogs.edit', $blog->id) }}"><i class="fa fa-edit"></i></a>
                  <a href="#" data-toggle="modal" data-target="#deleteModal" data-blogid="{{ $blog->id }}">
                    <i class="fa fa-trash-alt"></i></a>
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
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro que quieres eliminar este blog?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Selecciona "borrar" si realmente quieres eliminarlo</div>
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
  @endif

@endsection

@section('js_blog_page')
<script>
  $('#deleteModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) 
          var blog_id = button.data('blogid') 
          
          var modal = $(this)
          modal.find('.modal-footer #blog_id').val(blog_id);
      })
</script>
@endsection