@extends('layouts.layout')

@section('title','Centro ¡Supérate! Fundación Provivienda')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/cs_fpro.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection

@section('content')
<div class="provivienda">
    <div class="slideshow">
        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 6</div>
                <img src="{{ asset('img/our-centers/provivienda/pro1.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 6</div>
                <img src="{{ asset('img/our-centers/provivienda/pro2.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 6</div>
                <img src="{{ asset('img/our-centers/provivienda/pro3.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 6</div>
                <img src="{{ asset('img/our-centers/provivienda/pro4.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 6</div>
                <img src="{{ asset('img/our-centers/provivienda/pro5.jpg') }}" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">6 / 6</div>
                <img src="{{ asset('img/our-centers/provivienda/pro6.jpg') }}" style="width:100%">
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
        <h1>Conoce nuestro Centro ¡Supérate! Fundación Provivienda</h1>
    </div>

    <div class="content">
        <img src="{{ asset('img/our-centers/provivienda/logo_provivienda.png') }}" width="250px" alt="logo_provivienda">
        <p>El Centro ¡Supérate! Fundación Provivienda inicia operaciones en el 2019 gracias al esfuerzo y trabajo de la
            Fundación Provivienda. Éste se convierte en el cuarto Centro en Panamá.<br><br>
            Dirección: Avenida Costanera, urbanización Versalles, calle Barcelona, edificio ¡Supérate!.<br><br>
            Teléfono: (507) 66707606, (507) 830-6081 </p><br>E-mail:
        <a href="mailto:info@provivienda.superate.org.pa" target="_blank"
            rel="noopener noreferrer">info@provivienda.superate.org.pa</a><br><br>
        <a href="https://www.facebook.com/SuperateProvivienda/"
            target="_blank"><img src="{{ asset('img/index/social_icons/facebook.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.instagram.com/superateprovivienda/" _blank"><img
                src="{{ asset('img/index/social_icons/instagram.svg') }}" alt="icon_not_available"></a>
        <a href="https://www.youtube.com/channel/UCmdJ_7EJTIiJfwRJLKjOTfg" target="_blank"><img
                src="{{ asset('img/index/social_icons/youtube.svg') }}" alt="icon_not_available"></a>
    </div>

    <div class="numbers">
        <table>
            <tr>
                <td style="background-color: #00c800;">
                    <h1>116</h1>
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