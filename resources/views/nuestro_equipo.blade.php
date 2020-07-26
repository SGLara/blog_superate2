@extends('layouts.layout')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/nuestro_equipo.css')}}">
@endsection
@section('title','Nuestro Equipo')
@section('content')
<div class="our-team">
    <div class="title">
        <h1>Junta Directiva</h1>
    </div>
    <div class="description">
        <h3>Está compuesta por el presidente y representantes de los concesionarios del Programa ¡Supérate!.</h3>
    </div>
    <div class="img1"><img src="{{ asset('img/who-we-are/our-team/0012_RSB.jpg') }}" alt="photo" loading="lazy">
        <h2>Ricardo Sagrera Bogle</h2><br>
        <p>Presidente y Fundador del Programa ¡Supérate! y Director Propietario por Centro ¡Supérate! Hilasal</p>
    </div>
    <div class="img2"><img src="{{ asset('img/who-we-are/our-team/0000_Arturo.jpg') }}" alt="photo" loading="lazy">
        <h2>Arturo Sagrera Palomo</h2><br>

        <p>Director General Programa ¡Supérate!</p>
    </div>
    <div class="img3"><img src="{{ asset('img/who-we-are/our-team/0002_Jaime.jpg') }}" alt="photo" loading="lazy">
        <h2>Jaime R. Palomo</h2><br>

        <p>Director Propietario por Centro ¡Supérate! ADOC</p>
    </div>
    <div class="img4"><img src="{{ asset('img/who-we-are/our-team/0008_Mary.jpg') }}" alt="photo" loading="lazy">
        <h2>Mary Fábrega</h2><br>

        <p>Directora Propietaria por Centro ¡Supérate! Fundación Alberto Motta</p>
    </div>
    <div class="img5"><img src="{{ asset('img/who-we-are/our-team/0009_Michelle.jpg') }}" alt="photo" loading="lazy">
        <h2>Michelle de Poma</h2><br>

        <p>Directora Propietaria por Centro ¡Supérate! Fundación Poma</p>
    </div>
    <div class="img6"><img src="{{ asset('img/who-we-are/our-team/0007_Mary.jpg') }}" alt="photo" loading="lazy">
        <h2>Mary Alice Simán de Frech</h2><br>

        <p>Directora Propietaria por Centro ¡Supérate! Merlet</p>
    </div>
    <div class="img7"><img src="{{ asset('img/who-we-are/our-team/0005_Marci.jpg') }}" alt="photo" loading="lazy">
        <h2>Marci Mizrachi</h2><br>

        <p>Directora Propietaria por Centro ¡Supérate! Fundación JUPÁ</p>
    </div>
    <div class="img8"><img src="{{ asset('img/who-we-are/our-team/0006_Margarita.jpg') }}" alt="photo" loading="lazy">
        <h2>Margarita de Cristiani</h2><br>

        <p>Directora Propietaria por Centro ¡Supérate! Fundación Raíces</p>
    </div>
    <div class="img9"><img src="{{ asset('img/who-we-are/our-team/0003_Juan.jpg') }}" alt="photo" loading="lazy">
        <h2>Juan F. Salaverría</h2><br>

        <p>Director Propietario por Centro ¡Supérate! Grupo Q</p>
    </div>
    <div class="img10"><img src="{{ asset('img/who-we-are/our-team/0013_MCS.jpg') }}" alt="photo" loading="lazy">
        <h2>María Cristina Salazar</h2><br>

        <p>Directora Propietaria por Centro ¡Supérate! Fundación Provivienda</p>
    </div>

    <div class="title2">
        <h1>Equipo Institucional</h1>
    </div>
    <div class="description2">
        <h3>Está compuesto por el Director Ejecutivo, Directora Académica, Directora de Operaciones,
            Administradora Contable y Coordinador de Proyectos y Comunicaciones.</h3>
    </div>
    <div class="img11"><img src="{{ asset('img/who-we-are/our-team/0010_Rodrigo.jpg') }}" alt="photo" loading="lazy">
        <h2>Rodrigo Bustamante</h2><br>

        <p>Director Ejecutivo Programa ¡Supérate!</p>
    </div>
    <div class="img12"><img src="{{ asset('img/who-we-are/our-team/0001_Irene.jpg') }}" alt="photo" loading="lazy">
        <h2>Irene Flores</h2><br>

        <p>Directora Académica Programa ¡Supérate!</p>
    </div>
    <div class="img13"><img src="{{ asset('img/who-we-are/our-team/0004_Leylla.jpg') }}" alt="photo" loading="lazy">
        <h2>Leyla de Guzmán</h2><br>

        <p>Directora de Operaciones Programa ¡Supérate!</p>
    </div>
    <div class="img14"><img src="{{ asset('img/who-we-are/our-team/0014_Sarai.jpg') }}" alt="photo" loading="lazy">
        <h2>Saraí Aguilar</h2><br>

        <p>Administradora Contable Programa ¡Supérate!</p>
    </div>
    <div class="img15"><img src="{{ asset('img/who-we-are/our-team/0011_Rodrigo.jpg') }}" alt="photo" loading="lazy">
        <h2>Rodrigo Castro</h2><br>

        <p>Coordinador de Proyectos y Comunicaciones Programa ¡Supérate!</p>
    </div>
</div>
@endsection