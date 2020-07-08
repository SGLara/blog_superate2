<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/navbarStyle.css')}}">
    <title>@yield('title', 'withoutTitle')</title>
</head>

<body>
    <div>
        <nav>
            <ul class="menu">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="#">¿Quiénes Somos? &nbsp↓</a>
                    <ul class="sub_menu">
                        <li><a href="{{route('nuestra-historia')}}">Nuestra Historia</a></li>
                        <li><a href="{{route('nuestra-filosofia')}}">Nuestra Filosofía</a></li>
                        <li><a href="{{route('efecto-multiplicador')}}">Efecto Multiplicador</a></li>
                        <li><a href="{{route('nuestro-equipo')}}">Nuestro Equipo</a></li>
                    </ul>
                </li>
                <li><a href="#">¿Qué Hacemos? &nbsp↓</a>
                    <ul class="sub_menu">
                        <li><a href="{{route('nuestro-programa')}}">Nuestro Programa</a></li>
                        <li><a href="{{route('enfoque-en-la-calidad')}}">Enfoque en la Calidad</a></li>
                        <li><a href="{{route('impacto')}}">Impacto</a></li>
                    </ul>
                </li>
                <li><a href="#">Nuestros Centros &nbsp↓</a>
                    <ul class="sub_menu">
                        <li><a href="{{route('cs-hilasal')}}">Centro ¡Supérate! Hilasal</a></li>
                        <li><a href="{{route('cs-adoc')}}">Centro ¡Supérate! ADOC</a></li>
                        <li><a href="{{route('cs-fam-san-miguelito')}}">Centro ¡Supérate! Fundación Alberto Motta - San
                                Miguelito</a></li>
                        <li><a href="{{route('cs-fpoma')}}">Centro ¡Supérate! Fundación POMA</a></li>
                        <li><a href="{{route('cs-merlet')}}/">Centro ¡Supérate! Merlet</a></li>
                        <li><a href="{{route('cs-jupa')}}">Centro ¡Supérate! Fundación JUPÁ</a></li>
                        <li><a href="{{route('cs-raices')}}">Centro ¡Supérate! Fundación Raíces</a></li>
                        <li><a href="{{route('cs-grupoQ')}}">Centro ¡Supérate! Grupo Q</a></li>
                        <li><a href="{{route('cs-fam-cdn')}}">Centro ¡Supérate! Fundación Alberto Motta - Ciudad del
                                Niño</a></li>
                        <li><a href="{{route('cs-provivienda')}}">Centro ¡Supérate! Fundación Provivienda</a></li>
                    </ul>
                </li>
                <li><a href="{{route('nuestros-aliados')}}">Nuestros Aliados</a></li>
                <li><a href="{{route('contactanos')}}">Contáctanos</a></li>
            </ul>
        </nav>
    </div>
    @yield('content')
</body>

</html>