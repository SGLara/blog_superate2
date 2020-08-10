@extends('layouts.layout')


@section('style_section')
<link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/home_slideshow.js') }}"></script>
@endsection
@section('title','Inicio')

@section('content')
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext">1 / 11</div>
        <img src="{{ asset('img/index/slideshow/img1.jpg') }}" style="width:100%">
        <div class="text">
            <h4>En el 2019 ¡Supérate! celebra su décimo quinto aniversario llegando a 10 Centros, 6 en El Salvador y 4
                en
                Panamá.</h4>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">2 / 11</div>
        <img src="{{ asset('img/index/slideshow/img2.jpg') }}" style="width:100%">
        <div class="text">
            <h4>¡Supérate!, nace como sueño visionario de un empresario salvadoreño, tomando vida en el 2004 con un
                centro y
                40 jóvenes en el Valle de San Andrés. Tres años después, desarrollamos una franquicia social que hasta
                la
                fecha ha beneficiado a 3,810 jóvenes de 10 centros en la región.<br><br>

                Ricardo Sagrera</h4>
            <span>Fundador y Presidente del Programa ¡Supérate! en la celebración del Décimo Aniversario del
                Programa.</span>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">3 / 11</div>
        <img src="{{ asset('img/index/slideshow/img3.jpg') }}" style="width:100%">
        <div class="text">
            <h4>Gracias a fundaciones y empresas amigas, con un alto compromiso con la agenda social de la
                región, se han establecido y patrocinado nuestros diez Centros ¡Supérate!. Esto ha permitido alcanzar el
                objetivo de dar escala y multiplicar el Programa a nivel nacional e internacional.</h4>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">4 / 11</div>
        <img src="{{ asset('img/index/slideshow/img4.jpg') }}" style="width:100%">
        <div class="text">
            <h4>"Cada uno de los momentos en ¡Supérate! estuvieron cargados de esfuerzos, sacrificios, perseverancia,
                responsabilidades, compromiso, entrega y especialmente el sueño de transformar nuestras vidas a través
                de la
                educación"</h4><br>

            <span>Misael Bernave Díaz</span>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">5 / 11</div>
        <img src="{{ asset('img/index/slideshow/img5.jpg') }}" style="width:100%">
        <div class="text">
            <h2>MISIÓN</h2><br>

            <h4>Desarrollar jóvenes con potencial y deseos de superación personal, para que, a través de una formación
                integral puedan optar a mejores oportunidades de formación profesional y de trabajo, para mejorar su
                calidad
                de vida y entorno.</h4>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">6 / 11</div>
        <img src="{{ asset('img/index/slideshow/img6.jpg') }}" style="width:100%">
        <div class="text">
            <h2>CULTURA EMPRESARIAL</h2><br>

            <h4>La transformación de los jóvenes inicia desde el primer día en el Programa, la calidad del personal de
                los
                Centros ¡Supérate!, el programa educativo, la infraestructura de los Centros, la ambientación y el
                mobiliario, cada componente del Programa, estimula el cambio a nivel personal en cada estudiante.</h4>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">7 / 11</div>
        <img src="{{ asset('img/index/slideshow/img7.jpg') }}" style="width:100%">
        <div class="text">
            <h4>"Apoyamos al Programa ¡Supérate! porque el compromiso del sector privado con la formación de
                los jóvenes líderes puede cambiar el destino de una nación".<br><br>

                Jean Manes</h4>
            <span>Embajadora de los Estados Unidos en El Salvador</span>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">8 / 11</div>
        <img src="{{ asset('img/index/slideshow/img8.jpg') }}" style="width:100%">
        <div class="text">
            <h2>VISIÓN</h2><br>
            <h4>Ser un programa de excelencia académica que contribuya a elevar el nivel educativo de la juventud de
                escasos
                recursos económicos de Centroamérica con el fin de brindarles nuevas y mejores oportunidades de vida a
                través de la capacitación de alta calidad en inglés, computación y valores.</h4>
        </div>
    </div>

    <div class="mySlides fade">
        <div class="numbertext">9 / 11</div>
        <img src="{{ asset('img/index/slideshow/img9.jpg') }}" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">10 / 11</div>
        <img src="{{ asset('img/index/slideshow/img10.jpg') }}" style="width:100%">
    </div>

    <div class="mySlides fade">
        <div class="numbertext">11 / 11</div>
        <img src="{{ asset('img/index/slideshow/img11.jpg') }}" style="width:100%">
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
    <span class="dot" onclick="currentSlide(9)"></span>
    <span class="dot" onclick="currentSlide(10)"></span>
    <span class="dot" onclick="currentSlide(11)"></span>
</div>
</div>

<div class="logos">
    <a target="_blank" href="https://www.hilasal.com.sv">
        <img loading="lazy" src="{{ asset('img/index/logos/colored/privada_01.gif') }}" alt="image not available"></a>
    <a target="_blank" href="http://www.empresasadoc.com/es/inicio/">
        <img loading="lazy" src="{{ asset('img/index/logos/colored/privada_02.gif') }}" alt="image not available"></a>
    <a target="_blank" href="https://fundacionalbertomotta.org/">
        <img loading="lazy" src="{{ asset('img/index/logos/colored/privada_03.jpg') }}" alt="image not available"></a>
    <a target="_blank" href="http://fundacionpoma.org/"><img loading="lazy" src="{{ asset('img/index/logos/colored/privada_04.gif') }}"
            alt="image not available"></a>
    <a target="_blank" href="https://www.imerlet.com/index.html">
        <img loading="lazy" src="{{ asset('img/index/logos/colored/privada_05.gif') }}" alt="image not available"></a>
    <a target="_blank" href="https://www.fundacionjupa.org/">
        <img loading="lazy" src="{{ asset('img/index/logos/colored/privada_06.gif') }}" alt="image not available"></a>
    <a target="_blank" href="#"><img loading="lazy" src="{{ asset('img/index/logos/colored/privada_07.gif') }}" alt="image not available"></a>
    <a target="_blank" href="https://www.grupoq.com/default.html">
        <img loading="lazy" src="{{ asset('img/index/logos/colored/privada_08.gif') }}" alt="image not available"></a>
    <a target="_blank" href="https://gprovivienda.com/"><img loading="lazy" src="{{ asset('img/index/logos/colored/privada_09.gif') }}"
            alt="image not available"></a>
</div>
@endsection