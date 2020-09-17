@extends('layouts.layout')

@section('title','Contáctanos')
@section('style_section')
<link rel="stylesheet" href="{{asset('css/contactanos.css')}}">
@endsection
@section('content')
<div class="contact_us">
    <h1>Contacta a las Oficinas Institucionales</h1>
    <form class="form">
        <div>
            <label for="name">Nombre: </label>
            <input type="text" id="name">

            <label for="email">Email: </label>
            <input type="email" id="exampleInputEmail1" aria-describedby="emailHelp">

            <small id="emailHelp" style="color: rgb(161, 161, 161)">No compartiremos tu correo con nadie
                más.</small><br><br>
            <label for="text">Asunto: </label>

            <input type="text" name="subject" id="subject">
            <label for="text">Mensaje: </label>

            <textarea id="textarea" name="message" style="resize: none" cols="30" rows="10"></textarea>
        </div>
        <button type="submit">Enviar</button>
    </form>
    <div class="google_maps">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.375816327008!2d-89.1557478853061!3d13.69567379038373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f633715e07a575b%3A0x3687f885c7301acb!2sCentro%20%C2%A1Sup%C3%A9rate*21%20ADOC!5e0!3m2!1ses!2ssv!4v1600380647415!5m2!1ses!2ssv"
            width="485" height="450" frameborder="2" style="border:0;" allowfullscreen="" aria-hidden="false"
            tabindex="0">
        </iframe>
    </div>
    <div class="info">
        <strong>Teléfono: </strong>
        <p>(503) 2562 0290</p><br>
        <strong>Dirección: </strong>
        <p>Blv. Santa Elena, Calle Alegría, Edificio Interalia. Tercer Nivel, Local 3A, Antiguo
            Cuscatlán, La Libertad.</p>
    </div>
</div>
@endsection