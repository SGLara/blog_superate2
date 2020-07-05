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
            <li><a href="<?php echo route('home')?>">Home</a></li>
            <li><a href="<?php echo route('quienesSomos')?>">¿Quiénes Somos?</a>
            <ul>
                <li><a href="<?php echo route('nuestraHistoria')?>">Nuestra Historia</a></li>
                <li><a href="<?php echo route('nuestraFilosofia')?>">Nuestra Filosofía</a></li>
                <li><a href="<?php echo route('efectoMultiplicador')?>">Efecto Multiplicador</a></li>
                <li><a href="<?php echo route('nuestroEquipo')?>">Nuestro Equipo</a></li>
            </ul></li>
            <li><a href="<?php echo route('queHacemos')?>">¿Qué Hacemos?</a>
            <ul>
                <li><a href="<?php echo route('nuestroPrograma')?>">Nuestro Programa</a></li>
                <li><a href="<?php echo route('enfoqueEnLaCalidad')?>">Enfoque en la Calidad</a></li>
                <li><a href="<?php echo route('impacto')?>">Impacto</a></li>
            </ul></li>
            <li><a href="<?php echo route('nuestrosCentros')?>">Nuestros Centros</a>
            <ul>
                <li><a href="<?php echo route('csHilasal')?>">Centro ¡Supérate! Hilasal</a></li>
                <li><a href="<?php echo route('csAdoc')?>">Centro ¡Supérate! ADOC</a></li>
                <li><a href="<?php echo route('csFAMSanMiguelito')?>">Centro ¡Supérate! Fundación Alberto Motta - San Miguelito</a></li>
                <li><a href="<?php echo route('csFPoma')?>">Centro ¡Supérate! Fundación POMA</a></li>
                <li><a href="<?php echo route('csMerlet')?>/">Centro ¡Supérate! Merlet</a></li>
                <li><a href="<?php echo route('csJupa')?>">Centro ¡Supérate! Fundación JUPÁ</a></li>
                <li><a href="<?php echo route('csRaices')?>">Centro ¡Supérate! Fundación Raíces</a></li>
                <li><a href="<?php echo route('csGrupoQ')?>">Centro ¡Supérate! Grupo Q</a></li>
                <li><a href="<?php echo route('csFAMCDN')?>">Centro ¡Supérate! Fundación Alberto Motta - Ciudad del Niño</a></li>
                <li><a href="<?php echo route('csProvivienda')?>">Centro ¡Supérate! Fundación Provivienda</a></li>
            </ul></li>
            <li><a href="<?php echo route('nuestrosAliados')?>">Nuestros Aliados</a></li>
            <li><a href="<?php echo route('contactanos')?>">Contáctanos</a></li>
        </ul>
    </nav>
    @yield('content')
</body>

</html>