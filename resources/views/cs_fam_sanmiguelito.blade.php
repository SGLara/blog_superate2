@extends('layouts.layout')

@section('title','Centro ¡Supérate! Fundación Alberto Motta - San Miguelito')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/cs_fam_sanmiguelito.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection

@section('content')
<div class="sanmiguelito">
    <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="{{ asset('img/our-centers/fam_sanmiguelito/fam1.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="{{ asset('img/our-centers/fam_sanmiguelito/fam2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="{{ asset('img/our-centers/fam_sanmiguelito/fam3.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="{{ asset('img/our-centers/fam_sanmiguelito/fam4.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="{{ asset('img/our-centers/fam_sanmiguelito/fam5.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="{{ asset('img/our-centers/fam_sanmiguelito/fam6.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="{{ asset('img/our-centers/fam_sanmiguelito/fam7.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="{{ asset('img/our-centers/fam_sanmiguelito/fam8.jpg') }}" style="width:100%">
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
            <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
        </div>
    </div>

    <div class="title">
        <h1>Conoce Nuestro Centro ¡Supérate! Fundación Alberto Motta - San Miguelito</h1>
    </div>

    <div class="content">
        <img src="{{ asset('img/our-centers/fam_sanmiguelito/logo_motta.jpg') }}" alt="logo_fam_sanmiguelito">
        <p>Nuestro Centro ¡Supérate! Fundación Alberto Motta se abrió en el año 2010 gracias al esfuerzo y gran aporte
            de la Fundación Alberto Motta en la Ciudad de Panamá. Este fue el primer Centro ¡Supérate! que traspasó las
            fronteras salvadoreñas.<br><br>
            Dirección: Villa Guadalupe, Calle E San Miguelito, Panamá República de Panamá <br> Teléfono: (507) 3963076 </p><br>E-mail:
            <a href="mailto:info@motta.superate.org.pa" target="_blank" rel="noopener noreferrer">info@motta.superate.org.pa</a><br><br>
        <a href="https://www.facebook.com/SuperateMotta/" target="_blank"><img
                src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.instagram.com/superatemotta.sm/" target="_blank"><img
                src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="icon_not_available"></a>
        <a href="https://twitter.com/superatemotta" target="_blank"><img
                src="{{ asset('img/index/social_icons/twitter.svg') }}" alt="icon_not_available"></a>
        <a href="https://twitter.com/superatemotta" target="_blank"><img
                src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="icon_not_available"></a>
    </div>

    <div class="numbers">
        <table>
            <tr>
                <td style="background-color: #00c800;">
                    <h1>166</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Estudiantes</h1>
                </td>
            </tr>
            <tr>
                <td style="background-color: #01b2de;">
                    <h1>331</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Graduados</h1>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection