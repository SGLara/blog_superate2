@extends('layouts.layout')

@section('title','Centro ¡Supérate! Fundación Alberto Motta - Ciudad del Niño')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/cs_fam_cdn.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection

@section('content')
<div class="fam_cdn">
    <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 6</div>
                <img src="{{ asset('img/our-centers/fam_cdn/fam1.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 6</div>
                <img src="{{ asset('img/our-centers/fam_cdn/fam2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 6</div>
                <img src="{{ asset('img/our-centers/fam_cdn/fam3.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 6</div>
                <img src="{{ asset('img/our-centers/fam_cdn/fam4.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 6</div>
                <img src="{{ asset('img/our-centers/fam_cdn/fam5.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="{{ asset('img/our-centers/fam_cdn/fam6.jpg') }}" style="width:100%">
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
        </div>
    </div>

    <div class="title">
        <h1>Conoce Nuestro Centro ¡Supérate! Fundación Alberto Motta – Ciudad del Niño</h1>
    </div>

    <div class="content">
        <img src="{{ asset('img/our-centers/fam_cdn/logo_motta.jpg') }}" alt="logo_fam_cdn">
        <p>El Centro ¡Supérate! Fundación Alberto Motta - Ciudad del Niño inicia operaciones en el año 2018 gracias al
            esfuerzo y trabajo de la Fundación Alberto Motta en Panamá. Este se convierte en el tercer Centro ¡Supérate!
            en abrir sus puertas en Panamá. <br><br>
            Dirección: Ciudad del Niño, Chorrera, Panamá.<br>
            Teléfono: (507) 258-0085 </p><br>E-mail:
        <a href="mailto:info@mottach.superate.org.pa" target="_blank"
            rel="noopener noreferrer">info@mottach.superate.org.pa</a><br><br>
        <a href="https://www.facebook.com/SuperateMottaCH/"
            target="_blank"><img src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.instagram.com/superatemotta.ch/" _blank"><img
                src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.youtube.com/channel/UCPRAQqBg-aGy8kXumfdrRqg" target="_blank"><img
                src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="icon_not_available"></a>
    </div>

    <div class="numbers">
        <table>
            <tr>
                <td style="background-color: #00c800;">
                    <h1>178</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Estudiantes</h1>
                </td>
            </tr>
            <tr>
                <td style="background-color: #01b2de;">
                    <h1>&nbsp; -- &nbsp;</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Graduados</h1>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection