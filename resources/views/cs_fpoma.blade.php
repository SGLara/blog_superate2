@extends('layouts.layout')

@section('title','Centro ¡Supérate! Fundación POMA')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/cs_fpoma.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection

@section('content')
<div class="poma">
    <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="{{ asset('img/our-centers/poma/p1.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="{{ asset('img/our-centers/poma/p2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="{{ asset('img/our-centers/poma/p3.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="{{ asset('img/our-centers/poma/p4.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="{{ asset('img/our-centers/poma/p5.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="{{ asset('img/our-centers/poma/p6.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="{{ asset('img/our-centers/poma/p7.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="{{ asset('img/our-centers/poma/p8.jpg') }}" style="width:100%">
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
        <h1>Conoce Nuestro Centro ¡Supérate! Fundación Poma</h1>
    </div>

    <div class="content">
        <img src="{{ asset('img/our-centers/poma/logo_poma.jpg') }}" alt="logo_poma">
        <p>Nuestro Centro ¡Supérate! Fundación Poma se inauguró en el año 2011 gracias a la Fundación Poma, al convenio
            firmado entre la Fundación Sagrera Palomo y USAID en el 2010 y la valiosa donación de licencias de Microsoft
            Office realizada por Microsoft El Salvador.<br><br>
            Dirección: 4ta calle poniente, entre 10a y 8a avenida sur, número 5-4, Santa Tecla, La Libertad.<br>
            Teléfono: 2229-7239 </p><br>E-mail:
        <a href="mailto:info@poma.superate.org.sv" target="_blank"
            rel="noopener noreferrer">info@poma.superate.org.sv</a><br><br>
        <a href="https://www.facebook.com/superate.poma.5?fref=ts" target="_blank"><img
                src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.instagram.com/superatepoma/" target="_blank"><img
                src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="icon_not_available"></a>
        <a href="https://twitter.com/SuperatePoma" target="_blank"><img
                src="{{ asset('img/index/social_icons/twitter.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.youtube.com/channel/UChUzV8Is-3hEz2bWwZCgQWw" target="_blank"><img
                src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="icon_not_available"></a>
    </div>

    <div class="numbers">
        <table>
            <tr>
                <td style="background-color: #00c800;">
                    <h1>183</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Estudiantes</h1>
                </td>
            </tr>
            <tr>
                <td style="background-color: #01b2de;">
                    <h1>296</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Graduados</h1>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection