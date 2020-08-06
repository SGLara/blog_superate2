<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('img/favicon/sup_favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/navbarStyle2.css')}}">
    @yield('style_section')
    <title>@yield('title', 'withoutTitle')</title>
</head>

<body>
    <header class="header">
        @include('components.navbar')
    </header>

    <main>
        @yield('content')
    </main>

    @include('partials.scripts')
</body>
<footer>
    <h5>Copyright &copy; {{ date('Y')}} ¡Supérate!</h5>
</footer>
    @yield('scripts')
</html>