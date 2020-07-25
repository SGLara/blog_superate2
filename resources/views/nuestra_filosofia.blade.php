@extends('layouts.layout')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/nuestra_filosofia.css')}}">
@endsection
@section('title','Nuestra Filosofía')
@section('content')
<div class="our-philosophy">
    <div class="slogan">
        <h1>Transformando Vidas Vía Educación</h1>
    </div>
    <div class="our-vision">
        <h1>Nuestra Visión</h1>
        <p>Ser un programa de excelencia académica que contribuya a elevar el nivel educativo de la juventud de escasos
            recursos económicos de Centroamérica, con el fin de brindarles nuevas y mejores oportunidades de vida a
            través de la capacitación de alta calidad en inglés, computación y valores.
        </p>
    </div>
    <div class="our-mission">
        <h1>Nuestra Misión</h1>
        <p>Desarrollar jóvenes con potencial y deseo de superación personal, para que a través de una formación integral
            puedan optar a mejores oportunidades de formación profesional y de trabajo, para mejorar su calidad de vida
            y su entorno.
        </p>
    </div>
    <div class="our-values">
        <div class="values">
            <h1>Nuestros Valores</h1>
        </div>
        <div class="overcoming">
            <h2>Superación</h2>
        </div>
        <div class="v1">
            <p>Automotivación para salir adelante y ser una mejor persona cada día.</p>
        </div>
        <div class="excelence">
            <h2>Excelencia</h2>
        </div>
        <div class="v2">
            <p>Es alcanzable si te importa más de lo que otros piensan que es razonable; arriesgas más
                de lo que otros piensan que es seguro; sueñas más de lo que otros piensan que es práctico y esperas más
                de lo que otros piensan que es posible.</p>
        </div>
        <div class="solidarity">
            <h2>Solidaridad</h2>
        </div>
        <div class="v3">
            <p>Deseo desinteresado y voluntario por servir y ayudar a los demás.</p>
        </div>
        <div class="integrity">
            <h2>Integridad</h2>
        </div>
        <div class="v4">
            <p>Hacer lo correcto, aun cuando nadie está observando</p>
        </div>
        <div class="leadership">
            <h2>Liderazgo</h2>
        </div>
        <div class="v5">
            <p>Capacidad de influir positivamente en otras personas a través de una visión, pasión y el ejemplo.</p>
        </div>
        <div class="image"><img src="{{ asset('img/who-we-are/our-philosophy/philosophy.jpg') }}" alt=""></div>
    </div>
</div>
@endsection