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
            <li><a href="/quienes-somos">¿Quiénes Somos?</a>
            <ul>
                <li><a href="/nuestra-historia">Nuestra Historia</a></li>
                <li><a href="/nuestra-filosofia">Nuestra Filosofía</a></li>
                <li><a href="/efecto-multiplicador">Efecto Multiplicador</a></li>
                <li><a href="/nuestro-equipo">Nuestro Equipo</a></li>
            </ul></li>
            <li><a href="/que-hacemos">¿Qué Hacemos?</a>
            <ul>
                <li><a href="/nuestro-programa">Nuestro Programa</a></li>
                <li><a href="/enfoque-en-la-calidad">Enfoque en la Calidad</a></li>
                <li><a href="/impacto">Impacto</a></li>
            </ul></li>
            <li><a href="/nuestros-centros">Nuestros Centros</a>
            <ul>
                <li><a href="/cs-hilasal">Centro ¡Supérate! Hilasal</a></li>
                <li><a href="/cs-adoc">Centro ¡Supérate! ADOC</a></li>
                <li><a href="/cs-fam-san-miguelito">Centro ¡Supérate! Fundación Alberto Motta - San Miguelito</a></li>
                <li><a href="/cs-fpoma">Centro ¡Supérate! Fundación POMA</a></li>
                <li><a href="/cs-merlet">Centro ¡Supérate! Merlet</a></li>
                <li><a href="/cs-jupa">Centro ¡Supérate! Fundación JUPÁ</a></li>
                <li><a href="/cs-raices">Centro ¡Supérate! Fundación Raíces</a></li>
                <li><a href="/cs-grupo-Q">Centro ¡Supérate! Grupo Q</a></li>
                <li><a href="/cs-fam-cdn">Centro ¡Supérate! Fundación Alberto Motta - Ciudad del Niño</a></li>
                <li><a href="/cs-provivienda">Centro ¡Supérate! Fundación Provivienda</a></li>
            </ul></li>
            <li><a href="/nuestros-aliados">Nuestros Aliados</a></li>
            <li><a href="/contactanos">Contáctanos</a></li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>