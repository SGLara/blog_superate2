<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="{{asset('css/navbarStyle.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title', 'withoutTitle')</title>
</head>

<body>
    <div class="container">
        <header class="header">
            {{-- <img class="superate_logo" src="img/superate_logo.png" alt="Supérate_Logo"> --}}
            @include('components.navbar')
        </header>
        <main class="content">
            @yield('content')
        </main>
    </div>
</body>

</html>