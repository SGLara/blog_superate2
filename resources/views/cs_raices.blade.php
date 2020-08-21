@extends('layouts.layout')

@section('title','Centro ¡Supérate! Fundación Raíces')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/cs_raices.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection

@section('content')
<div class="raices">
    <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="{{ asset('img/our-centers/raices/r1.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="{{ asset('img/our-centers/raices/r2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="{{ asset('img/our-centers/raices/r3.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="{{ asset('img/our-centers/raices/r4.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="{{ asset('img/our-centers/raices/r5.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="{{ asset('img/our-centers/raices/r6.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="{{ asset('img/our-centers/raices/r7.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="{{ asset('img/our-centers/raices/r8.jpg') }}" style="width:100%">
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
        <h1>Conoce Nuestro Centro ¡Supérate! Fundación Raíces</h1>
    </div>

    <div class="content">
        <img src="{{ asset('img/our-centers/raices/logo_raices.jpg') }}" alt="logo_raices">
        <p>Nuestro Centro ¡Supérate! Fundación Raíces inicia operaciones en el año 2013 gracias al trabajo de la
            Fundación Raíces, al convenio firmado entre la Fundación Sagrera Palomo y USAID en el 2010 y la valiosa
            donación de licencias de Microsoft Office realizada por Microsoft El Salvador.<br><br>
            Dirección: Intersección Carretera a San Miguel y Calle a Tonacatepeque después del Paso a desnivel de
            Unicentro Soyapango. Estadio “Plaza España”.<br><br>
            Teléfono: 2292-8464 </p><br>E-mail:
        <a href="mailto:info@raices.superate.org.sv" target="_blank"
            rel="noopener noreferrer">info@raices.superate.org.sv</a><br><br>
        <a href="https://www.facebook.com/pages/Centro-Sup%C3%A9rate-Fundaci%C3%B3n-Ra%C3%ADces/185437491604889?fref=ts"
            target="_blank"><img src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.instagram.com/superateraices/" _blank"><img
                src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="icon_not_available"></a>
        <a href="https://twitter.com/SuperateR" target="_blank"><img
                src="{{ asset('img/index/social_icons/twitter.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.youtube.com/channel/UCU0zzd78PNE1IW0l3x8ivdQ" target="_blank"><img
                src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="icon_not_available"></a>
    </div>

    <div class="numbers">
        <table>
            <tr>
                <td style="background-color: #00c800;">
                    <h1>154</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Estudiantes</h1>
                </td>
            </tr>
            <tr>
                <td style="background-color: #01b2de;">
                    <h1>165</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Graduados</h1>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection