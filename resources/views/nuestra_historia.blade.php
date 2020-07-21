@extends('layouts.layout')

@section('title','Nuestra Historia')
@section('content')
<div class="who-we-are">
    <div class="origin">
        <h1>¿Cómo Surgió El Programa?</h1>
    </div>
    <div class="idea-history">
        <p>
            La idea nace cuando en el año 2000 don Ricardo Sagrera Bogle y su familia crearon la Fundación Sagrera
            Palomo,
            una fundación apolítica, sin fines de lucro, enfocada exclusivamente en contribuir a la educación de El
            Salvador, partiendo de la premisa que la educación es el vehículo más efectivo para el desarrollo social y
            económico de cualquier nación. <br><br>

            Después de varios años analizando proyectos de educación, don Ricardo junto a un equipo de sus colaboradores
            clave de Grupo Hilasal identificaron una oportunidad especial de servir de puente entre jóvenes de escasos
            recursos de las escuelas públicas del Valle de San Andrés y las oportunidades de empleo. La zona venía
            creciendo
            en inversión extranjera a través del establecimiento de parques industriales y empresas de servicio (call
            centers), quienes necesitaban contratar jóvenes que hablaran inglés y manejaran las herramientas de
            computación:
            competencias específicas que eran difíciles de encontrar en el entorno inmediato.<br><br>

            Basado en esta necesidad de mercado, decidieron fundar un Centro piloto en el 2004 para impartir
            capacitación de
            alta calidad en Inglés, Computación y Valores, siempre enfocándose en atraer a los estudiantes con los
            mejores
            promedios de las escuelas públicas de la zona, que tuvieran un alto potencial y un fuerte compromiso con su
            superación personal. Así nace en el 2004, el Centro ¡Supérate! Hilasal para desarrollar la formación de alta
            calidad para jóvenes, como una iniciativa de Responsabilidad Social Empresarial: el Programa ¡Supérate!.
            <br><br>

            Desde sus inicios el Programa ¡Supérate! dio muestras de ser muy visionario, anticipándose a las demandas de
            un
            mundo globalizado, en donde no solo el idioma inglés y la computación constituyen herramientas importantes
            para
            la juventud, sino también los valores con los que orientan su comportamiento.<br><br>

            La visión empresarial de origen y su formación en inglés, computación y valores han permitido que los
            jóvenes se
            inserten exitosamente en el mercado laboral y/o continúen estudios superiores; transformando así, su vida,
            las
            de sus familias y sus comunidades.
        </p>
    </div>
    <div class="logos">
        <div class="img1"><img src="{{ asset('img/logo-fsp.jpg')}}" alt="logo-fsp.jpg"></div>
        <div class="img2"><img src="{{ asset('img/logo-h.jpg')}}" alt="logo-h.jpg"></div>
    </div>
    <div class="founders">
        <h1>Conoce a Sus Fundadores</h1>
    </div>
    <div class="founder1">
        <h2><img src="{{ asset('img/ricardo.jpg') }}" alt="founder1">Ricardo Sagrera Bogle</h2><br><br>
        <p>Ricardo Sagrera ha formado parte de diferentes gremiales de la empresa privada y múltiples organizaciones sin
            fines de lucro enfocadas en las áreas de salud y educación. Gracias al interés que ha tenido desde hace
            muchos años en estas áreas, creó junto a su familia la Fundación Sagrera Palomo, la cual se enfocó, desde su
            nacimiento, en contribuir a la mejora de la educación de nuestro país.</p><br><br>
        <cite> "Siempre llamo a los
            jóvenes que inician al Programa a que pongan lo mejor de sí mismos a fin de lograr una superación personal y
            realizar sus sueños"<br><br>
            -Ricardo Sagrera</cite>
    </div>
    <div class="founder2">
        <h2><img src="{{ asset('img/arturo.jpg') }}" alt="founder2">Arturo X. Sagrera Palomo</h2><br><br>
        <p>Arturo X. Sagrera, un empresario con notable compromiso social ha liderado diferentes proyectos orientados a
            promover sana convivencia y brindar oportunidades de superación a niños y niñas, jóvenes y familias en
            comunidades vulnerables de El Salvador. Actualmente, Arturo es el director general del Programa ¡Supérate!
            responsable de buscar siempre la sostenibilidad y expansión del Programa.</p><br><br>
        <cite> “Nuestro lema es
            transformando vidas vía educación y creemos que si se logra en los jóvenes. El programa les otorga las
            herramientas para su éxito”<br><br>
            -Arturo Sagrera</cite>
    </div>
</div>




@endsection