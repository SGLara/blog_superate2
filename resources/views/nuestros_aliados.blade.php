@extends('layouts.layout')

@section('title','Nuestros Aliados')
@section('style_section')
<link rel="stylesheet" href="{{asset('css/nuestros_aliados.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/slideshows.js') }}"></script>
{{-- <script src="{{ asset('js/open_modal.js') }}"></script> --}}
@endsection

@section('content')
<div class="our-allies">
    <div class="title">
        <h1>Conoce a Nuestros Aliados</h1>
    </div>
    <div class="subtitle">
        <p>Nuestro Programa tiene reconocimiento por su efectividad de ahí que organismos internacionales, empresas y
            fundaciones se acerquen, le conozcan y le brinden apoyo.</p>
    </div>

    <div class="content1">
        <p>La Embajada de Estados Unidos en El Salvador se ha convertido en aliado del Programa, gestionando
            oportunidades que fortalecen el posicionamiento del Programa y que, en definitiva, representan otras
            posibilidades de éxito para todos los miembros de la familia ¡Supérate!; entre algunos de sus programas se
            encuentran: English Access Microscholarship Program y Youth Ambassadors.</p>
    </div>
    <div class="see1"><a class="myBtn1" href="#myModal1">Ver Galería</a></div>

    <div class="content2">
        <p>La Agencia de los Estados Unidos para el Desarrollo Internacional (USAID) firmó una alianza público privada
            con la Fundación Sagrera Palomo y Microsoft El Salvador en 2010 para el fortalecimiento y la expansión de
            nuevos Centros ¡Supérate! en El Salvador. Además, USAID ha financiado Becas Semilla para que algunos de los
            graduados cursen estudios técnicos en Estados Unidos.</p>
    </div>
    <div class="see2"><a class="myBtn2" href="#myModal2">Ver Galería</a></div>

    <div class="content3">
        <p> Microsoft El Salvador ha donado todas las licencias de software, sistema operativo y de productividad desde
            el inicio del Programa en el 2004. También apoyan con capacitaciones para docentes, computadoras para los
            graduados con mejores desempeños académicos y con becas DIGIGIRLZ.</p>
    </div>
    <div class="see3"><a class="myBtn3" href="#myModal3">Ver Galería</a></div>

    <div class="logos">
        <div class="img1"><img src="{{ asset('img/our-allies/embajada.png') }}" alt="img1"></div>
        <div class="img2"><img src="{{ asset('img/our-allies/usaid.png') }}" alt="img2"></div>
        <div class="img3"><img src="{{ asset('img/our-allies/microsoft.png') }}" alt="img3"></div>
    </div>
</div>


{{-- MODALS WITH SLIDESHOWS--}}
<div class="modalmask" id="myModal1">
    <div class="modal-content rotate">
        <a href="#" class="close">&times;</a>
        <div class="modal-body">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/a.jpg') }}" alt="image1">
                    <div class="text">
                        <p>Thomas Carper, Senador Demócrata por el Estado de Delaware de los Estados Unidos de
                            Norteamérica, visitó las instalaciones del Centro ¡Supérate! ADOC para conocer el impacto
                            del Programa en las vidas de los jóvenes, sus familias y comunidades.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/b.jpg') }}" alt="image2">
                    <div class="text">
                        <p>Heather Higginbottom, Subsecretaria de Estado Adjunta de Gestión y Recursos de Estados Unidos
                            compartió con los jóvenes de uno de nuestros Centros.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/c.jpg') }}" alt="image3">
                    <div class="text">
                        <p>La honorable jueza Sotomayor visitó El Salvador y aprovechó para conocer el Centro ¡Supérate!
                            Hilasal. Durante su visita participó junto a la Embajadora de Estados Unidos en El Salvador,
                            Mari Carmen Aponte, en un diálogo inspirador sobre superación personal con estudiantes de
                            todos
                            nuestros Centros.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/d.jpg') }}" alt="image4">
                    <div class="text">
                        <p>La Primera Dama de EE.UU visitó en el 2011 uno de nuestros Centros ¡Supérate! donde tuvo la
                            oportunidad de conocer sobre nuestro Programa a través de nuestro director ejecutivo y
                            conversaciones con estudiantes.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/e.jpg') }}" alt="image5">
                    <div class="text">
                        <p>Cada año, la Embajada de Estados Unidos en El Salvador invita al Programa ¡Supérate! a
                            participar
                            del Programa Youth Ambassadors of the Americas organizado por el Departamento de Estado de
                            EE.UU
                            y la Universidad de Georgetown. Es un programa de intercambio cultural para jóvenes enfocado
                            en
                            el desarrollo de liderazgo, voluntariado y práctica del entendimiento mutuo entre las
                            diferentes
                            culturas que se encuentran en esta experiencia.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/f.jpg') }}" alt="image6">
                    <div class="text">
                        <p>Jóvenes Embajadores es una iniciativa auspiciada por el Departamento de Estado de los Estados
                            Unidos de Norteamérica que brinda la oportunidad a jóvenes centroamericanos de conocer a
                            profundidad sobre la cultura del país norteamericano, así como desarrollar sus habilidades
                            en el
                            manejo del idioma inglés y fortalecer sus competencias de liderazgo.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/g.jpg') }}" alt="image7">
                    <div class="text">
                        <p>La Embajada de los Estados Unidos mantiene una estrecha relación de apoyo con el Programa
                            ¡Supérate! a través de diversas actividades orientadas a los jóvenes beneficiados. En la
                            fotografía la señora Embajadora de los Estados Unidos, Jean Manes, durante una visita al
                            Centro
                            ¡Supérate! Hilasal.</p>
                    </div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>
</div>

<div class="modalmask" id="myModal2">
    <div class="modal-content rotate">
        <a href="#" class="close">&times;</a>
        <div class="modal-body">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/aa.jpg') }}" alt="image8">
                    <div class="text">
                        <p>Peter Natiello, Director de USAID El Salvador, durante una visita a uno de los Centros
                            ¡Supérate!
                            junto a estudiantes y graduados del Programa.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/ab.jpg') }}" alt="image9">
                    <div class="text">
                        <p>El Centro ¡Supérate! Fundación Poma en Santa Tecla, es el segundo Centro ¡Supérate!
                            establecido
                            bajo la alianza público-privada entre USAID, Fundación Sagrera Palomo y Microsoft El
                            Salvador.
                        </p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/ac.jpg') }}" alt="image10">
                    <div class="text">
                        <p>Jennifer Huynh, Desk Officer USAID El Salvador, visitó el Centro ¡Supérate! CASSA Sonsonate,
                            y
                            tuvo la oportunidad de compartir con estudiantes y el equipo docente para conocer más sobre
                            el
                            Programa.
                        </p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/ad.jpg') }}" alt="image11">
                    <div class="text">
                        <p>El Centro ¡Supérate! Merlet en el Plan de la Laguna, Antiguo Cuscatlán, fue el primero que se
                            estableció bajo la alianza público-privada entre USAID, Fundación Sagrera Palomo y Microsoft
                            El
                            Salvador.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/ae.jpg') }}" alt="image12">
                    <div class="text">
                        <p>El Centro ¡Supérate! Raíces en Soyapango, es el tercer Centro ¡Supérate! establecido bajo la
                            alianza público-privada entre USAID, Fundación Sagrera Palomo y Microsoft El Salvador.</p>
                    </div>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>
</div>

<div class="modalmask" id="myModal3">
    <div class="modal-content rotate">
        <a href="#" class="close">&times;</a>
        <div class="modal-body">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/aba.jpg') }}" alt="image13">
                    <div class="text">
                        <p>Los estudiantes ¡Supérate! recibieron la visita del Vicepresidente Corporativo de Microsoft
                            Latinoamérica, César Cernuda. César motivó a los jóvenes a continuar con su desarrollo
                            personal y profesional con énfasis en la tecnología.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abb.jpg') }}" alt="image14">
                    <div class="text">
                        <p>Cada año, Microsoft El Salvador, invita a un promedio de 150 estudiantes mujeres de nuestro
                            Programa al evento Digigirlz, con el fin de inspirarlas y motivarlas a estudiar carreras
                            relacionadas a la tecnología.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abc.jpg') }}" alt="image15">
                    <div class="text">
                        <p>En la fotografía Gracia Rossi, Gerente General de Microsoft El Salvador, durante la ceremonia
                            de
                            graduación de uno de nuestros Centros ¡Supérate!</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abd.jpg') }}" alt="image16">
                    <div class="text">
                        <p>El apoyo que Microsoft otorga al Programa quedó evidenciado una vez más en la visita que
                            Robert
                            Ivantchiz,
                            VP de Microsoft LatAm, Marlon Feztner, Director de Microsoft LatAm, realizaron a el Centro
                            ¡Supérate! Hilasal.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abe.jpg') }}" alt="image17">
                    <div class="text">
                        <p>Cada año, Microsoft El Salvador, invita a un promedio de 150 estudiantes mujeres de nuestro
                            Programa
                            a su evento DIGIGIRLZ, con el fin de inspirarlas y motivarlas a estudiar carreras
                            relacionadas a
                            la tecnología.</p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abf.jpg') }}" alt="image18">
                    <div class="text">
                        <p>Las donaciones de licencias que Microsoft ha realizado para los siete Centros ¡Supérate! en
                            El
                            Salvador
                            están valoradas en $250,000.00. En la fotografía miembros de Junta Directiva de nuestro
                            Programa
                            junto a Gracia Rossi,
                            Gerente General de Microsoft El Salvador durante la conferencia de en agradecimiento por
                            todo
                            el apoyo que le han dado al Programa desde sus inicios en 2004.</p>
                    </div>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>
</div>
@endsection