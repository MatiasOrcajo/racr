@extends('layouts.app')
@section('content')
<div class="d-flex flex-column justify-content-center align-items-center container-fluid position-relative p-0" style="height: 100vh; background: #4678BF">
    <div class="position-absolute" style="
    bottom: 0;
    left: 0; 
    right: 0; 
    margin-left: auto; 
    margin-right: auto; 
    width: 100%;
    height: 50%;
    background-image: url({{asset('images/racr/montanas2.png')}}); 
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    z-index: 0"></div>
    <div class="row d-flex flex-column align-items-center mx-0 mt-0 w-100 logo-titulo-texto">
        <div class="col-12 p-0 hero text-center mt-0 mb-lg-0 mb-xxl-5 mt-lg-5 mt-xxl-0" id="inicio">
            <img src="{{asset('images/racr/logo.png')}}" class="mt-5 mb-lg-5 img-logo" alt="" style="width: 100px">
            <h1 class="mb-4 titulo">¡Bienvenidos! Somos Racr Soft.</h1>
            <p class="mb-5 texto-titulo">Ofrecemos sitios web adaptados a cada necesidad,<br> acompañando a cada cliente en cómo mostrar su <br>empresa en internet.</p>
            <div class="btn btn-primary elegir-sitio rounded-pill px-5 pt-2">Elegir mi sitio</div>
        </div>
    </div>
</div>


<div class="container-fluid p-0 position-relative">

    <img src="{{asset('images/racr/ondas.png')}}" alt="" class="w-100 position-absolute imagen-ondas d-lg-block d-none">
    <section class="pb-5" id="productos">
        <div class="row pb-5 d-none d-lg-block" style="margin-top: 150px" >
            <h2 class="text-center">Elegí el sitio web adaptado a tu medida</h2>
            <div class="col-12 d-flex flex-wrap mt-5 contenido-principal">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <div>
                        <h3 class="my-4">Landing Page*</h3>
                        <p class="my-4">Te ofrecemos un sitio simple, pero elegante y funcional para poder marcar el inicio de tu identidad online.</p>
                        <div class="btn btn-primary rounded-pill px-4">Ver ejemplos <i class="fas fa-chevron-right ms-3"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <div data-aos="zoom-in" data-aos-duration="1500">
                        <img src="{{asset('images/racr/fondo-webs.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex flex-row-reverse flex-wrap mt-5 contenido-principal">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column" style="z-index: 999">
                    <div>
                        <h3 class="my-4">Página Con Secciones*</h3>
                        <p class="my-4">Te ofrecemos un sitio, en el cual podés contar parte de tu historia, los objetivos que tengas, y los servicios y/o productos que estas ofreciendo al público en general.</p>
                        <div class="btn btn-primary rounded-pill px-4">Ver ejemplos <i class="fas fa-chevron-right ms-3"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column" style="z-index: 999">
                    <div data-aos="zoom-in" data-aos-duration="1500">
                        <img src="{{asset('images/racr/fondo-webs.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-12 d-flex flex-wrap mt-5 contenido-principal">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <div>
                        <h3 class="my-4">E-Commerce*</h3>
                        <p class="my-4">Te ofrecemos con esta opción que tus productos estén al alcance del publico en general, con las opciones de retiro-envío que más les convengan a tus clientes, y las opciones de pago variadas  (efectivo, transferencia, MERCADO PAGO)</p>
                        <div class="btn btn-primary rounded-pill px-4">Ver ejemplos <i class="fas fa-chevron-right ms-3"></i></div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <div data-aos="zoom-in" data-aos-duration="1000">
                        <img src="{{asset('images/racr/fondo-webs.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-12 p-0 my-5">
                <div class="rounded-pill nuestros-sitios-SSL text-center px-5 py-4 my-5">
                    <p>* Nuestros sitios incluyen un servicio de hosting por un año, certificado SSL, generación de cuentas de email, y un CMS propio en el cual se puede gestionar el contenido de todas las secciones del mismo para poder personalizarlo a gusto.</p>
                </div>
            </div>
        </div>




        <div class="row pb-5 px-5 d-block d-lg-none" style="margin-top: 150px" >
            <h2 class="text-center">Elegí el sitio web adaptado a tu medida</h2>

            <div class="col-12 d-flex flex-wrap mt-5 contenido-principal px-0">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <div>
                        <h3 class="my-4">Landing Page*</h3>
                        <div data-aos="zoom-in" data-aos-duration="1500">
                            <img src="{{asset('images/racr/fondo-webs.png')}}" alt="" style="max-width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <p class="my-4">Te ofrecemos un sitio simple, pero elegante y funcional para poder marcar el inicio de tu identidad online.</p>
                    <div class="btn btn-primary rounded-pill w-100 position-relative px-4 ">Ver ejemplos <i class="fas position-absolute fa-chevron-right me-3 ms-3" style="right: 0; top: 0; transform: translateY(50%)"></i></div>
                </div>
            </div>

            <div class="col-12 d-flex flex-wrap mt-5 contenido-principal px-0">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <div>
                        <h3 class="my-4">Página con secciones*</h3>
                        <div data-aos="zoom-in" data-aos-duration="1500">
                            <img src="{{asset('images/racr/fondo-webs.png')}}" alt="" style="max-width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <p class="my-4">Te ofrecemos un sitio, en el cual podés contar parte de tu historia, los objetivos que tengas, y los servicios y/o productos que estas ofreciendo al público en general.</p>
                    <div class="btn btn-primary rounded-pill w-100 position-relative px-4 ">Ver ejemplos <i class="fas position-absolute fa-chevron-right me-3 ms-3" style="right: 0; top: 0; transform: translateY(50%)"></i></div>
                </div>
            </div>


            <div class="col-12 d-flex flex-wrap mt-5 contenido-principal px-0">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <div>
                        <h3 class="my-4">E-Commerce*</h3>
                        <div data-aos="zoom-in" data-aos-duration="1500">
                            <img src="{{asset('images/racr/fondo-webs.png')}}" alt="" style="max-width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column"style="z-index: 999">
                    <p class="my-4">Te ofrecemos con esta opción que tus productos estén al alcance del publico en general, con las opciones de retiro-envío que más les convengan a tus clientes, y las opciones de pago variadas  (efectivo, transferencia, MERCADO PAGO)</p>
                    <div class="btn btn-primary rounded-pill w-100 position-relative px-4 ">Ver ejemplos <i class="fas position-absolute fa-chevron-right me-3 ms-3" style="right: 0; top: 0; transform: translateY(50%)"></i></div>
                </div>
            </div>

            <div class="col-12 p-0 my-5">
                <div class="nuestros-sitios-SSL text-center px-2 p-4 my-5" style="border-radius: 44px">
                    <p>* Nuestros sitios incluyen un servicio de hosting por un año, certificado SSL, generación de cuentas de email, y un CMS propio en el cual se puede gestionar el contenido de todas las secciones del mismo para poder personalizarlo a gusto.</p>
                </div>
            </div>
        </div>

        <div class="row" id="mision">
            <div class="col-12 d-flex flex-wrap mt-5 d-lg-none">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column contenido-principal">
                    <div>
                        <h3 class="my-4">Nuestra Misión</h3>
                        <div data-aos="fade-right" data-aos-duration="1100">
                            <img src="{{asset('images/imagen2.png')}}" alt="" style="max-width: 100%">
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                    <p class="my-4" style="font-family: 'Montserrat-Regular', sans-serif; font-size: 23px; line-height: 30px; color: #023D8C">Estamos comprometidos a digitalizar los sueños, de todos los emprendedores que se contacten con nosotros y a ofrecerles una presencia online en la cual puedan ofrecer sus productos, en un mundo digitalizado. Ofrecemos sitios preconcebidos para satisfacer las necesidades de un público en general, que busca marcar el inicio de su identidad digital.</p>
                </div>
            </div>

            <div class="col-12 d-flex flex-row-reverse flex-wrap mt-5 d-lg-none">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column contenido-principal">
                    <div>
                        <h3 class="my-4">Diseños Personalizados</h3>
                        <div data-aos="fade-left" data-aos-duration="1100">
                            <img src="{{asset('images/imagen3.png')}}" alt="" style="max-width: 100%">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                    <p class="my-4" style="font-family: 'Montserrat-Regular', sans-serif; font-size: 23px; line-height: 30px; color: #023D8C">Estamos comprometidos a digitalizar los sueños, de todos los emprendedores que se contacten con nosotros y a ofrecerles una presencia online en la cual puedan ofrecer sus productos, en un mundo digitalizado. Ofrecemos sitios preconcebidos para satisfacer las necesidades de un público en general, que busca marcar el inicio de su identidad digital.</p>
                </div>
            </div>



            <div class="col-12 d-none d-lg-flex flex-wrap mt-5" >
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column contenido-principal">
                    <div>
                        <h3 class="my-4">Nuestra Misión</h3>
                        <p class="my-4">Estamos comprometidos a digitalizar los sueños, de todos los emprendedores que se contacten con nosotros y a ofrecerles una presencia online en la cual puedan ofrecer sus productos, en un mundo digitalizado. Ofrecemos sitios preconcebidos para satisfacer las necesidades de un público en general, que busca marcar el inicio de su identidad digital.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                    <div data-aos="fade-right" data-aos-duration="1100">
                        <img src="{{asset('images/imagen2.png')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="col-12 d-none d-lg-flex flex-row-reverse flex-wrap mt-5">
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column contenido-principal">
                    <div>
                        <h3 class="my-4">Diseños Personalizados</h3>
                        <p class="my-4">Estamos comprometidos a digitalizar los sueños, de todos los emprendedores que se contacten con nosotros y a ofrecerles una presencia online en la cual puedan ofrecer sus productos, en un mundo digitalizado. Ofrecemos sitios preconcebidos para satisfacer las necesidades de un público en general, que busca marcar el inicio de su identidad digital.</p>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                    <div data-aos="fade-left" data-aos-duration="1100">
                        <img src="{{asset('images/imagen3.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
        


    <section id="contacto" class="py-5 estemos-en-contacto" style="background: #F0F6FF">
        <div class="row mt-5">
            <h2 class="text-center">Estemos en contacto</h2>
            <span class="text-center">Nosotros te orientamos según tus necesidades</span>

            <div class="col-12 d-flex flex-wrap pt-5" >
                <div class="col-lg-6 ps-lg-5 mb-5 mb-lg-0 pr-5 contenedor-de-contenedor-redes">
                    <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                        <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 my-2">
                            <img class="me-2" src="{{asset('images/racr/email.png')}}" alt="email"> info@racr.io
                        </div>
                    </a>
                    <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                        <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 my-2">
                            <img class="me-2" src="{{asset('images/racr/wpp.png')}}" alt="wpp"></i>13213213
                        </div>
                    </a>
                    <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                        <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 my-2">
                            <img class="me-2" src="{{asset('images/racr/facebook.png')}}" alt="facebook"></i>Racr Soft
                        </div>
                    </a>
                    <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                        <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 my-2">
                            <img class="me-2" src="{{asset('images/racr/twitter.png')}}" alt="twitter"></i>Racr Soft
                        </div>
                    </a>
                    <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                        <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 my-2">
                            <img class="me-2" src="{{asset('images/racr/instagram.png')}}" alt="instagram"></i>Racr Soft
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <form action="" class="d-flex justify-content-center flex-column formulario">
                        @csrf
                        <h3>Envianos Tu Consulta</h3>
                        <div class="form-group">
                            <input type="text" class="form-control my-2 p-3 w-75" placeholder="Nombre y apellido" name="nombre">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control my-2 p-3 w-75" placeholder="Teléfono" name="telefono">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control my-2 p-3 w-75" placeholder="E-Mail" name="email">
                        </div>
                        <div class="form-group my-2">
                            <select class="p-2" name="tipo_pagina" id="">
                                <option disabled selected>Consulta por tipo de página web</option>
                                <option value="landing">Landing</option>
                                <option value="con_secciones">Con secciones</option>
                                <option value="ecommerce">E-Commerce</option>
                            </select>
                        </div>
                        <textarea class="w-75 my-2 p-3" name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                        <button type="submit" class="w-75 rounded-pill py-2 px-3 mt-3">Enviar consulta</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
       
</div>


{{-- scroll up --}}

<div class="position-fixed me-lg-3 up justify-content-center align-items-center d-flex" style="">
    <i class="fas fa-chevron-up" style="color: white; font-size: 40px"></i>
</div>


<script>
    AOS.init();

</script>

@endsection