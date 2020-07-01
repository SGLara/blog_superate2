<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'withoutTitle')</title>
</head>

<body>
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/quienes-somos">¿Quiénes Somos?</a></li>
            <li><a href="/que-hacemos">¿Qué Hacemos?</a></li>
            <li><a href="/nuestros-centros">Nuestros Centros</a></li>
            <li><a href="/nuestros-aliados">Nuestros Aliados</a></li>
            <li><a href="/contactanos">Contáctanos</a></li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>