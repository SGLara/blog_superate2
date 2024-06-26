<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{asset('img/favicon/sup_favicon.png')}}" type="image/x-icon">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href={{ asset('vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href={{ asset('vendor/datatables/dataTables.bootstrap4.css') }} rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href={{ asset('css/admin/sb-admin.css') }} rel="stylesheet">

    {{-- CKEditor 4 plugin --}}
    <script src="https://cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>

</head>

<body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <div class="navbar-brand mr-1 font-weight-bold">¡Hola,
            {{ Auth::user()->first_name." ".Auth::user()->last_name }}!</div>
        &nbsp
        &nbsp
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
            <i class="fas fa-bars"></i>
        </button>

        <!-- Navbar Search -->
        {{-- <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search for..." aria-label="Search"
                    aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form> --}}

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto mr-0">
            <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-user-circle fa-fw"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar Sesión</a>
                </div>
            </li>
        </ul>

    </nav>

    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('blog') }}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Blog Principal</span>
                </a>
            </li>

            {{-- Users view --}}
            @if (Auth::user()->is_admin)
            <li class="nav-item {{ setActive('blog.admin.dashboard') }}">
                <a class="nav-link" href="{{ route('blog.admin.dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ setActive('blog.blogs.index') }}">
                <a class="nav-link" href="{{ route('blog.admin.roles.index') }}">
                    <i class="fas fa-fw fa-unlock-alt"></i>
                    <span>Roles</span>
                </a>
            </li>
            <li class="nav-item {{ setActive('blog.admin.users.index') }}">
                <a class="nav-link" href="{{ route('blog.admin.users.index') }}">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Usuarios</span></a>
            </li>
            @endif

            <li class="nav-item {{ setActive('blog.blogs.index') }}">
                <a class="nav-link" href="{{ route('blog.blogs.index') }}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Blogs</span>
                </a>
            </li>
        </ul>

        <div id="content-wrapper">

            <div class="container-fluid">
                {{--------------MY DINAMIC CONTENT-------------------------------- --}}

                @yield('content')

                {{--------------/MY DINAMIC CONTENT/-------------------------------- --}}
            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>¡Supérate! Blog by Steven Lara {{ date('Y')}}</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Ya te vas
                        {{ Auth::user()->first_name }}?
                    </h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecciona &nbsp; "Cerrar Sesión" &nbsp; si estás listo para irte.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="#" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src={{ asset('vendor/jquery/jquery.min.js') }}></script>
    <script src={{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

    <!-- Core plugin JavaScript-->
    <script src={{ asset('vendor/jquery-easing/jquery.easing.min.js') }}></script>

    <!-- Page level plugin JavaScript-->
    <script src={{ asset('vendor/chart.js/Chart.min.js') }}></script>
    <script src={{ asset('vendor/datatables/jquery.dataTables.js') }}></script>
    <script src={{ asset('vendor/datatables/dataTables.bootstrap4.js') }}></script>

    <!-- Custom scripts for all pages-->
    <script src={{ asset('js/admin/sb-admin.js') }}></script>

    <!-- Demo scripts for this page-->
    <script src={{ asset('js/admin/demo/datatables-demo.js') }}></script>
    <script src={{ asset('js/admin/demo/chart-area-demo.js') }}></script>
    @yield('js_blog_page')
    @yield('js_user_view')
    @yield('js_role_view')
</body>

</html>