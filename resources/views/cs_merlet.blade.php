@extends('layouts.layout')

@section('title','Centro ¡Supérate! Merlet')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/cs_merlet.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection

@section('content')
<div class="merlet">
    <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="{{ asset('img/our-centers/merlet/m1.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="{{ asset('img/our-centers/merlet/m2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="{{ asset('img/our-centers/merlet/m3.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="{{ asset('img/our-centers/merlet/m4.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="{{ asset('img/our-centers/merlet/m5.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="{{ asset('img/our-centers/merlet/m6.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="{{ asset('img/our-centers/merlet/m7.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="{{ asset('img/our-centers/merlet/m8.jpg') }}" style="width:100%">
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
        <h1>Conoce Nuestro Centro ¡Supérate! Merlet</h1>
    </div>

    <div class="content">
        <img src="{{ asset('img/our-centers/merlet/logo_merlet.jpg') }}" alt="logo_merlet">
        <p>Nuestro Centro ¡Supérate! Merlet se inauguró en el año 2011 gracias a la Fundación Frech, al convenio firmado
            entre la Fundación Sagrera Palomo y USAID en el 2010 y la valiosa donación de licencias de Microsoft Office
            realizada por Microsoft El Salvador.<br><br>
            Dirección: Calle Circunvalación, Polígono D #7, Plan de la Laguna, Antiguo Cuscatlán, La Libertad.<br><br>
            Teléfono: (503) 2212-7500 ext. 7516</p><br>E-mail:
        <a href="mailto:info@merlet.superate.org.sv" target="_blank"
            rel="noopener noreferrer">info@merlet.superate.org.sv</a><br><br>
        <a href="https://www.facebook.com/CentroSuperateMerlet?fref=ts" target="_blank"><img
                src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.instagram.com/superatemerlet/" _blank"><img
                src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="icon_not_available"></a>
        <a href="https://twitter.com/SuperateMerlet" target="_blank"><img
                src="{{ asset('img/index/social_icons/twitter.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.youtube.com/channel/UCHNt-Z1FzYcoTKel6Hyh8RQ" target="_blank"><img
                src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="icon_not_available"></a>
    </div>

    <div class="numbers">
        <table>
            <tr>
                <td style="background-color: #00c800;">
                    <h1>122</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Estudiantes</h1>
                </td>
            </tr>
            <tr>
                <td style="background-color: #01b2de;">
                    <h1>246</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Graduados</h1>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection