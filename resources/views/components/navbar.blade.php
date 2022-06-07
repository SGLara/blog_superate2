<div>
    <img class="superate_logo" src="{{asset('img/superate_logo.png')}}" alt="Supérate_Logo">
</div>

<div>
    <nav class="navbar">
        <ul class="menu">
            <li><a class="{{ setActive('inicio') }}" href="{{route('inicio')}}">Inicio</a></li>
            <li><a href="#">¿Quiénes Somos? &nbsp<span class="fa fa-angle-down"></span></a>
                <ul class="submenu">
                    <li><a class="{{ setActive('nuestra-historia') }}" href="{{route('nuestra-historia')}}">Nuestra Historia</a></li>
                    <li><a class="{{ setActive('nuestra-filosofia') }}" href="{{route('nuestra-filosofia')}}">Nuestra Filosofía</a></li>
                    {{-- <li><a class="{{ setActive('efecto-multiplicador') }}" href="{{route('efecto-multiplicador')}}">Efecto Multiplicador</a></li> --}}
                    <li><a class="{{ setActive('nuestro-equipo') }}" href="{{route('nuestro-equipo')}}">Nuestro Equipo</a></li>
                </ul>
            </li>
            <li><a href="#">¿Qué Hacemos? &nbsp<span class="fa fa-angle-down"></span></a>
                <ul class="submenu">
                    <li><a class="{{ setActive('nuestro-programa') }}" href="{{route('nuestro-programa')}}">Nuestro Programa</a></li>
                    <li><a class="{{ setActive('enfoque-en-la-calidad') }}" href="{{route('enfoque-en-la-calidad')}}">Enfoque en la Calidad</a></li>
                    <li><a class="{{ setActive('impacto') }}" href="{{route('impacto')}}">Impacto</a></li>
                </ul>
            </li>
            <li><a href="#">Nuestros Centros &nbsp<span class="fa fa-angle-down"></span></a>
                <ul class="submenu">
                    <li><a class="{{ setActive('cs-hilasal') }}" href="{{route('cs-hilasal')}}">Centro ¡Supérate! Hilasal</a></li>
                    <li><a class="{{ setActive('cs-adoc') }}" href="{{route('cs-adoc')}}">Centro ¡Supérate! ADOC</a></li>
                    <li><a class="{{ setActive('cs-fam-san-miguelito') }}" href="{{route('cs-fam-san-miguelito')}}">Centro ¡Supérate! Fundación Alberto Motta - San Miguelito</a></li>
                    <li><a class="{{ setActive('cs-fpoma') }}" href="{{route('cs-fpoma')}}">Centro ¡Supérate! Fundación POMA</a></li>
                    <li><a class="{{ setActive('cs-merlet') }}" href="{{route('cs-merlet')}}">Centro ¡Supérate! Merlet</a></li>
                    <li><a class="{{ setActive('cs-jupa') }}" href="{{route('cs-jupa')}}">Centro ¡Supérate! Fundación JUPÁ</a></li>
                    <li><a class="{{ setActive('cs-raices') }}" href="{{route('cs-raices')}}">Centro ¡Supérate! Fundación Raíces</a></li>
                    <li><a class="{{ setActive('cs-grupoQ') }}" href="{{route('cs-grupoQ')}}">Centro ¡Supérate! Grupo Q</a></li>
                    <li><a class="{{ setActive('cs-fam-cdn') }}" href="{{route('cs-fam-cdn')}}">Centro ¡Supérate! Fundación Alberto Motta - Ciudad del Niño</a></li>
                    <li><a class="{{ setActive('cs-provivienda') }}" href="{{route('cs-provivienda')}}">Centro ¡Supérate! Fundación Provivienda</a></li>
                </ul>
            </li>
            <li><a class="{{ setActive('nuestros-aliados') }}" href="{{route('nuestros-aliados')}}">Nuestros Aliados</a></li>
            <li><a class="{{ setActive('contactanos') }}" href="{{route('contactanos')}}">Contáctanos</a></li>
            <li class="btn-login"><a href="{{ route('blog') }}">BLOG</a></li>
        </ul>
    </nav>
</div>