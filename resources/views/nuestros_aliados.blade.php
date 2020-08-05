@extends('layouts.layout')

@section('title','Nuestros Aliados')
@section('style_section')
<link rel="stylesheet" href="{{asset('css/nuestros_aliados.css')}}">
@endsection

@section('content')
    <div class="our-allies">
        <div class="title"><h1>Conoce a Nuestros Aliados</h1></div>
        <div class="subtitle"><p>Nuestro Programa tiene reconocimiento por su efectividad de ahí que organismos internacionales, empresas y fundaciones se acerquen, le conozcan y le brinden apoyo.</p></div>

        <div class="content1"><p>La Embajada de Estados Unidos en El Salvador se ha convertido en aliado del Programa, gestionando oportunidades que fortalecen el posicionamiento del Programa y que, en definitiva, representan otras posibilidades de éxito para todos los miembros de la familia ¡Supérate!; entre algunos de sus programas se encuentran: English Access Microscholarship Program y Youth Ambassadors.</p></div>
        <div class="see1"><p>Ver Galería</p></div>
        
        <div class="content2"><p>La Agencia de los Estados Unidos para el Desarrollo Internacional (USAID) firmó una alianza público privada con la Fundación Sagrera Palomo y Microsoft El Salvador en 2010 para el fortalecimiento y la expansión de nuevos Centros ¡Supérate! en El Salvador. Además, USAID ha financiado Becas Semilla para que algunos de los graduados cursen estudios técnicos en Estados Unidos.</p></div>
        <div class="see2"><p>Ver Galería</p></div>

        <div class="content3"><p> Microsoft El Salvador ha donado todas las licencias de software, sistema operativo y de productividad desde el inicio del Programa en el 2004. También apoyan con capacitaciones para docentes, computadoras para los graduados con mejores desempeños académicos y con becas DIGIGIRLZ.</p></div>
        <div class="see3"><p>Ver Galería</p></div>

        <div class="logos">
            <div class="img1"><img src="{{ asset('img/our-allies/embajada.png') }}" alt=""></div>
            <div class="img2"><img src="{{ asset('img/our-allies/usaid.png') }}" alt=""></div>
            <div class="img3"><img src="{{ asset('img/our-allies/microsoft.png') }}" alt=""></div>
        </div>
    </div>
@endsection