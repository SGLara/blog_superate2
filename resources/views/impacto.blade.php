@extends('layouts.layout')

@section('title','Impacto')
@section('style_section')
<link rel="stylesheet" href="{{asset('css/impacto.css')}}">
@endsection
@section('content')
<div class="impact">
    <div class="title1">
        <h1>Transformación de Vidas Vía Educación</h1>
    </div>
    <div class="content">
        <p>
        El Programa ¡Supérate! es una iniciativa de Responsabilidad Social Empresarial que tiene alto impacto en
        diferentes áreas en la región, concretamente de la siguiente forma: <br><br></p>
        <ul>
            <li>Aportando a una necesidad concreta de la región y su mercado laboral, impulsando el desarrollo integral de
                jóvenes y creando capital humano de calidad.</li>
            <li>Aportando a una necesidad concreta de la región y su mercado laboral, impulsando el desarrollo integral de
                jóvenes y creando capital humano de calidad.</li>
            <li>Forjando una nueva generación de jóvenes comprometidos con su superación personal y el desarrollo de
                Centroamérica.</li>
            <li>Aportando una solución concreta de prevención de violencia.
                Brindando nuevas y mejores oportunidades de vida a jóvenes de escasos recursos económicos.</li>
        </ul>
    </div>
    <div class="title2"><h1>¿Qué Hacen Nuestros Graduados?</h1></div>
    <div class="img1"><img src="{{ asset('img/what-we-do/impact/SpanishGraph.png') }}" alt=""></div>
    <div class="img2"><img src="{{ asset('img/what-we-do/impact/latransformacion.jpg') }}" alt=""></div>
</div>
@endsection