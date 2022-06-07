<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="{{asset('img/favicon/sup_favicon.png')}}" type="image/x-icon">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

  <title>¡Supérate! | BLOG</title>

  <!-- Bootstrap core CSS -->
  <link href={{ asset('/vendor/bootstrap/css/bootstrap.min.css') }} rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href={{ asset('/vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet'
    type='text/css'>
  <link
    href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
    rel='stylesheet' type='text/css'>

  @section('styles')
  <!-- Custom styles for this template -->
  <link href={{ asset('css/blog-template/clean-blog.css') }} rel="stylesheet">
  @show

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav"
    style="position: fixed; background-color:rgb(73, 73, 73); border-bottom: 8px solid #00c800;">
    <div class="container">
      <a class="navbar-brand rounded" style="background-color: #00c800;" href={{ route('blog') }}>¡Supérate! BLOG</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
        data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
        aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item rounded bg-light">
            <a class="nav-link text-muted" href={{ route('inicio') }}>INICIO</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link" href={{ route('blog.acerca') }}>ACERCA DEL BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ route('blog.contacto') }}>CONTACTO</a>
          </li> --}}
          <!-- Authentication Links -->
          @guest
          <li class="nav-item">
            <a class="nav-link mr-2 ml-5 rounded" style="background-color: #00b6d8;"
              href="{{ route('login') }}">{{ __('Ingresar') }}</a>
          </li>
          @if (Route::has('register'))
          <li class="nav-item">
            <a class="nav-link rounded" style="background-color: #00c800;"
              href="{{ route('register') }}">{{ __('Registrar') }}</a>
          </li>
          @endif
          @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @if (Auth::user()->is_admin)
                <a href="{{ route('blog.admin.dashboard') }}" class="dropdown-item">Dashboard</a>
              @else
                <a href="{{ route('blog.blogs.index') }}" class="dropdown-item">Mis Blogs</a>
              @endif

              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                {{ __('Cerrar Sesión') }}
              </a>


              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          @endguest
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/steven-gustavo-lara-6173221b8/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-linkedin fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/stivengustavo.lara/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.instagram.com/sglaravel/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/SGLara/" target="_blank">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="text-center text-muted">¡Supérate! Blog {{ date('Y')}} <br> by <i>Steven Lara</i></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src={{ asset('resources/THEMES/blog-template0/vendor/jquery/jquery.min.js') }}></script>
  <script src={{ asset('resources/THEMES/blog-template0/vendor/bootstrap/js/bootstrap.bundle.min.js') }}></script>

  <!-- Custom scripts for this template -->
  <script src={{ asset('resources/THEMES/blog-template0/js/clean-blog.min.js') }}></script>

</body>

</html>