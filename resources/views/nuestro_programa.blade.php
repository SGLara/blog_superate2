@extends('layouts.layout')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/nuestro_programa.css')}}">
@endsection

@section('title','Nuestro Programa')
@section('content')
<div class="what-we-do">
    <div class="our-program">
        <h1>Nuestro Programa</h1>
    </div>
    <div class="areas">
        <h1>Áreas Curriculares</h1>
    </div>
    <div class="content1">
        <p>Brinda educación de alta calidad en inglés, computación y valores a jóvenes de escasos recursos económicos y
            de alto rendimiento académico durante tres años. Los jóvenes reciben tres horas diarias de clase, de forma
            complementaria y paralela a la educación del sistema público. <br><br>

            Al finalizar el Programa, obtienen certificaciones internacionales que garantizan un dominio avanzado del
            idioma inglés y el manejo eficiente de las herramientas de Microsoft Office. <br><br>

            Los jóvenes también cuentan con una sólida base de valores y reflejan el compromiso de seguir contribuyendo
            al desarrollo socioeconómico del país.
        </p>
    </div>
    <div class="areas-image"><img src="{{ asset('img/what-we-do/our-program/areas_curric.jpg') }}" alt=""></div>
    <div class="boy-image"><img src="{{ asset('img/what-we-do/our-program/req_boy.jpg') }}" alt=""></div>
    <div class="requirements">
        <h1>Requisitos de Ingreso</h1>
    </div>
    <div class="content2">
        <ul>
            <li>13 o 14 años cumplidos</li>
            <li>Escasos recursos económicos.</li>
            <li>Cursar 8 grado del sistema público.</li>
            <li>Alto rendimiento académico (mínimo de 8)</li>
            <li>Recomendado por el director de su Centro Escolar.</li>
            <li>Demostrar el deseo y potencial de superación.</li><br><br>
            <p>Para más información sobre requisitos de ingreso haz click <span><a href="{{ route('contactanos') }}">AQUÍ.</a></span></p>
        </ul>
    </div>
</div>

@endsection