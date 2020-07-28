@extends('layouts.layout')

@section('style_section')
<link rel="stylesheet" href="{{asset('css/enfoque_en_la_calidad.css')}}">
@endsection
@section('title','Enfoque en la Calidad')
@section('content')
<div class="focus-on-quality">
    <div class="title">
        <h1>Enfoque en la Calidad</h1>
    </div>
    <div class="img"><img src="{{ asset('img/what-we-do/focus-on-quality/focus.jpg') }}" alt="photo"></div>
    <div class="content">
        <p>El Programa ¡Supérate! posee un enfoque en la calidad educativa, entendida como el resultado de la
            articulación y mejora constante de sus elementos principales como son el compromiso empresarial, docentes y
            directores competentes, manuales y programas curriculares adecuados, jóvenes con deseos de superación y la
            evidencia externa del aprendizaje (certificaciones y evaluaciones).
        </p>
    </div>
</div>
@endsection