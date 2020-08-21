@extends('layouts.layout')

@section('title','Centro ¡Supérate! Hilasal')
@section('style_section')
<link rel="stylesheet" href="{{asset('css/cs_hilasal.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection

@section('content')
<div class="hilasal">
    <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 8</div>
                <img src="{{ asset('img/our-centers/hilasal/h1.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 8</div>
                <img src="{{ asset('img/our-centers/hilasal/h2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 8</div>
                <img src="{{ asset('img/our-centers/hilasal/h3.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 8</div>
                <img src="{{ asset('img/our-centers/hilasal/h4.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 8</div>
                <img src="{{ asset('img/our-centers/hilasal/h5.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 8</div>
                <img src="{{ asset('img/our-centers/hilasal/h6.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">7 / 8</div>
                <img src="{{ asset('img/our-centers/hilasal/h7.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">8 / 8</div>
                <img src="{{ asset('img/our-centers/hilasal/h8.jpg') }}" style="width:100%">
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
        <h1>Conoce Nuestro Centro ¡Supérate! Hilasal</h1>
    </div>

    <div class="content">
        <img src="{{ asset('img/our-centers/hilasal/logo_hilasal.jpg') }}" alt="logo_hilasal">
        <p>Nuestro Centro ¡Supérate! Hilasal fue una iniciativa de la Fundación Sagrera Palomo. Se inauguró en el año
            2004 gracias a la iniciativa de Responsabilidad Social Empresarial de Hilasal y al trabajo y dedicación de
            la Fundación Sagrera Palomo. También gracias al aporte significativo de Microsoft con las licencias de
            “Microsoft Office”. <br><br>
            Dirección: Km.32 Carretera a Santa Ana, San Juan Opico, La Libertad. <br> Teléfono: 2319-1319</p><br>E-mail:
        <a href="mailto:info@hilasal.superate.org.sv" target="_blank" rel="noopener noreferrer">info@hilasal.superate.org.sv</a><br><br>
        <a href="https://www.facebook.com/SuperateHilasal?fref=ts" target="_blank"><img
                src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.instagram.com/superate_hilasal/" target="_blank"><img
                src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="icon_not_available"></a>
        <a href="https://twitter.com/SuperateHilasal" target="_blank"><img
                src="{{ asset('img/index/social_icons/twitter.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.youtube.com/channel/UCp2TLV7xmqnNBWvF1C9LvYQ" target="_blank"><img
                src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="icon_not_available"></a>
    </div>

    <div class="numbers">
        <table>
            <tr>
                <td style="background-color: #00c800;"><h1>170</h1></td>
                <td style="background-color: rgb(238, 238, 238); color:gray;"><h1>Estudiantes</h1></td>
            </tr>
            <tr>
                <td style="background-color: #01b2de;"><h1>489</h1></td>
                <td style="background-color: rgb(238, 238, 238); color:gray;"><h1>Graduados</h1></td>
            </tr>
        </table>
    </div>
</div>
@endsection