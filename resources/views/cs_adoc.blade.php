@extends('layouts.layout')

@section('title','Centro ¡Supérate! ADOC')
@section('style_section')
<link rel="stylesheet" href="{{asset('css/cs_adoc.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection

@section('content')
<div class="adoc">
    <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="{{ asset('img/our-centers/adoc/a1.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="{{ asset('img/our-centers/adoc/a2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="{{ asset('img/our-centers/adoc/a3.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="{{ asset('img/our-centers/adoc/a4.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="{{ asset('img/our-centers/adoc/a5.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="{{ asset('img/our-centers/adoc/a6.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="{{ asset('img/our-centers/adoc/a7.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="{{ asset('img/our-centers/adoc/a8.jpg') }}" style="width:100%">
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
        <h1>Conoce Nuestro Centro ¡Supérate! ADOC</h1>
    </div>

    <div class="content">
        <img src="{{ asset('img/our-centers/adoc/logo_adoc.gif') }}" alt="logo_adoc">
        <p>Nuestro Centro ¡Supérate! ADOC se inauguró en el año 2008 gracias a la iniciativa de la Fundación ADOC y al
            gran aporte de Microsoft El Salvador con las licencias de “Microsoft Office”.<br><br>
            Dirección: Calle Montecarmelo #800, Soyapango, San Salvador. <br> Teléfono: 2277-0488 <br><br>E-mail: 
            <a href="mailto:info@adoc.superate.org.sv" target="_blank"
                rel="noopener noreferrer">info@adoc.superate.org.sv</a><br><br>
            <a href="https://www.facebook.com/SuperateADOC/" target="_blank"><img
                    src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="icon_not_available"></a>
            <a href="https://www.instagram.com/superate_adoc/" target="_blank"><img
                    src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="icon_not_available"></a>
            <a href="https://twitter.com/Superate_ADOC" target="_blank"><img
                    src="{{ asset('img/index/social_icons/twitter.svg') }}" alt="icon_not_available"></a>
            <a href="https://www.youtube.com/channel/UCjcphuXoJNAhkGTVwd7ECWA" target="_blank"><img
                    src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="icon_not_available"></a>
    </div>

    <div class="numbers">
        <table>
            <tr>
                <td style="background-color: #00c800;">
                    <h1>172</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Estudiantes</h1>
                </td>
            </tr>
            <tr>
                <td style="background-color: #01b2de;">
                    <h1>414</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Graduados</h1>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection