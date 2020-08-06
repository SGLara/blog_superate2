@extends('layouts.layout')

@section('title','Nuestros Aliados')
@section('style_section')
<link rel="stylesheet" href="{{asset('css/nuestros_aliados.css')}}">
@endsection
@section('scripts')
<script src="{{ asset('js/slideshows.js') }}"></script>
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
    <div class="see1"><a class="myBtn" id="myBtn1" href="#myModal1">Ver Galería</a></div>

    <div class="content2">
        <p>La Agencia de los Estados Unidos para el Desarrollo Internacional (USAID) firmó una alianza público privada
            con la Fundación Sagrera Palomo y Microsoft El Salvador en 2010 para el fortalecimiento y la expansión de
            nuevos Centros ¡Supérate! en El Salvador. Además, USAID ha financiado Becas Semilla para que algunos de los
            graduados cursen estudios técnicos en Estados Unidos.</p>
    </div>
    <div class="see2"><a class="myBtn" id="myBtn2" href="#myModal2">Ver Galería</a></div>

    <div class="content3">
        <p> Microsoft El Salvador ha donado todas las licencias de software, sistema operativo y de productividad desde
            el inicio del Programa en el 2004. También apoyan con capacitaciones para docentes, computadoras para los
            graduados con mejores desempeños académicos y con becas DIGIGIRLZ.</p>
    </div>
    <div class="see3"><a class="myBtn" id="myBtn3" href="#myModal3">Ver Galería</a></div>

    <div class="logos">
        <div class="img1"><img src="{{ asset('img/our-allies/embajada.png') }}" alt="img1"></div>
        <div class="img2"><img src="{{ asset('img/our-allies/usaid.png') }}" alt="img2"></div>
        <div class="img3"><img src="{{ asset('img/our-allies/microsoft.png') }}" alt="img3"></div>
    </div>
</div>


{{-- MODALS WITH SLIDESHOWS--}}
{{-- <div class="modal" id="myModal1">
    <div class="modal-content">
        <a href="#" class="close">&times;</a>
        <div class="modal-body">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/a.jpg') }}" alt="image1">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/b.jpg') }}" alt="image2">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/c.jpg') }}" alt="image3">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/d.jpg') }}" alt="image4">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/e.jpg') }}" alt="image5">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/f.jpg') }}" alt="image6">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/g.jpg') }}" alt="image7">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>
</div> --}}

{{-- <div class="modal" id="myModal2">
    <div class="modal-content">
        <a href="#" class="close">&times;</a>
        <div class="modal-body">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/aa.jpg') }}" alt="image8">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/ab.jpg') }}" alt="image9">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/ac.jpg') }}" alt="image10">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/ad.jpg') }}" alt="image11">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/ae.jpg') }}" alt="image12">
                    <div class="text">
                        <p></p>
                    </div>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>
</div>

<div class="modal" id="myModal3">
    <div class="modal-content">
        <a href="#" class="close">&times;</a>
        <div class="modal-body">
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/aba.jpg') }}" alt="image13">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abb.jpg') }}" alt="image14">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abc.jpg') }}" alt="image15">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abd.jpg') }}" alt="image16">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abe.jpg') }}" alt="image17">
                    <div class="text">
                        <p></p>
                    </div>
                </div>

                <div class="mySlides fade">
                    <img src="{{ asset('img/our-allies/abf.jpg') }}" alt="image18">
                    <div class="text">
                        <p></p>
                    </div>
                </div>
                <!-- Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>
        </div>
    </div>
</div> --}}
@endsection