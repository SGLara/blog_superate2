@extends('layouts.layout')

@section('title','Centro ¡Supérate! Grupo Q')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/cs_grupoq.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection

@section('content')
<div class="grupoq">
    <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                <img src="{{ asset('img/our-centers/grupoq/g1.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 3</div>
                <img src="{{ asset('img/our-centers/grupoq/g2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 3</div>
                <img src="{{ asset('img/our-centers/grupoq/g3.jpg') }}" style="width:100%">
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
        </div>
    </div>

    <div class="title">
        <h1>Conoce Nuestro Centro ¡Supérate! Grupo Q</h1>
    </div>

    <div class="content">
        <img src="{{ asset('img/our-centers/grupoq/logo_grupoq.png') }}" width="250px" alt="logo_grupoq">
        <p>Grupo Q se une a la familia ¡Supérate! en el año 2018 como patrocinador del Centro ubicado en San Miguel, El
            Salvador, gracias al apoyo de USAID y la valiosa donación de licencias de Microsoft Office realizada por
            Microsoft El Salvador. <br><br>
            Dirección: 9ª Calle Oriente Nº 408 Barrio Concepción, San Miguel. <br>(Ex Oficinas de AMNET)<br>
            Teléfono: 2606-0976 </p><br>E-mail:
        <a href="mailto:info@grupoq.superate.org.sv" target="_blank"
            rel="noopener noreferrer">info@grupoq.superate.org.sv</a><br><br>
        <a href="https://www.facebook.com/superatesm/"
            target="_blank"><img src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.instagram.com/superatesanmiguel/" _blank"><img
                src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="icon_not_available"></a>
        <a href="https://twitter.com/SuperateSnM" target="_blank"><img
                src="{{ asset('img/index/social_icons/twitter.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.youtube.com/channel/UCiuYTKj4HZYg_W4ILvX--LA" target="_blank"><img
                src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="icon_not_available"></a>
    </div>

    <div class="numbers">
        <table>
            <tr>
                <td style="background-color: #00c800;">
                    <h1>159</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Estudiantes</h1>
                </td>
            </tr>
            <tr>
                <td style="background-color: #01b2de;">
                    <h1>271</h1>
                </td>
                <td style="background-color: rgb(238, 238, 238); color:gray;">
                    <h1>Graduados</h1>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection