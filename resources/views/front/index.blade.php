@extends('layouts.app')
@section('content')

<div class="container-fluid p-0">
        <div class="row mx-0 mt-0 w-100" style="height: 100vh; background: #4678BF">
            <div class="col-12 p-0 hero d-flex flex-column align-items-center text-center mt-5">
                <img src="{{asset('images/logo2.png')}}" class="mt-5 mb-5" alt="" style="width: 150px">
                <h1 class="mb-4">¡Bienvenidos! Somos Racr Soft.</h1>
                <p class="mb-5">Ofrecemos sitios web adaptados a cada necesidad,<br> acompañando a cada cliente en cómo mostrar su <br>empresa en internet.</p>
                <div class="btn btn-primary rounded-pill px-5 pt-2">Elegir mi sitio</div>
            </div>
        </div>

        <section class="pb-5">
            <div class="row pb-5" style="margin-top: 150px">
                <h2 class="text-center">Elegí el sitio web adaptado a tu medida</h2>
                <div class="col-12 d-flex flex-wrap mt-5 contenido-principal">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                        <div>
                            <h3 class="my-4">Landing Page*</h3>
                            <p class="my-4">Te ofrecemos un sitio simple, pero elegante y funcional para poder marcar el inicio de tu identidad online.</p>
                            <div class="btn btn-primary rounded-pill px-4">Ver ejemplos <i class="fas fa-chevron-right ms-3"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                        <div>
                            <img src="{{asset('images/imagen1.png')}}" alt="">
                        </div>
                    </div>
                </div>
    
                <div class="col-12 d-flex flex-row-reverse flex-wrap mt-5 contenido-principal">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                        <div>
                            <h3 class="my-4">Página Con Secciones*</h3>
                            <p class="my-4">Te ofrecemos un sitio, en el cual podés contar parte de tu historia, los objetivos que tengas, y los servicios y/o productos que estas ofreciendo al público en general.</p>
                            <div class="btn btn-primary rounded-pill px-4">Ver ejemplos <i class="fas fa-chevron-right ms-3"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                        <div>
                            <img src="{{asset('images/imagen1.png')}}" alt="">
                        </div>
                    </div>
                </div>
    
                <div class="col-12 d-flex flex-wrap mt-5 contenido-principal">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                        <div>
                            <h3 class="my-4">E-Commerce*</h3>
                            <p class="my-4">Te ofrecemos con esta opción que tus productos estén al alcance del publico en general, con las opciones de retiro-envío que más les convengan a tus clientes, y las opciones de pago variadas  (efectivo, transferencia, MERCADO PAGO)</p>
                            <div class="btn btn-primary rounded-pill px-4">Ver ejemplos <i class="fas fa-chevron-right ms-3"></i></div>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                        <div>
                            <img src="{{asset('images/imagen1.png')}}" alt="">
                        </div>
                    </div>
                </div>
    
                <div class="col-12 my-5">
                    <div class="rounded-pill nuestros-sitios-SSL text-center px-5 py-4 my-5">
                        <p>* Nuestros sitios incluyen un servicio de hosting por un año, certificado SSL, generación de cuentas de email, y un CMS propio en el cual se puede gestionar el contenido de todas las secciones del mismo para poder personalizarlo a gusto.</p>
                    </div>
                </div>
    
    
    
    
    
                <div class="col-12 20-px d-flex flex-wrap mt-5">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column contenido-principal">
                        <div>
                            <h3 class="my-4">Nuestra Misión</h3>
                            <p class="my-4">Estamos comprometidos a digitalizar los sueños, de todos los emprendedores que se contacten con nosotros y a ofrecerles una presencia online en la cual puedan ofrecer sus productos, en un mundo digitalizado. Ofrecemos sitios preconcebidos para satisfacer las necesidades de un público en general, que busca marcar el inicio de su identidad digital.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                        <div>
                            <img src="{{asset('images/imagen2.png')}}" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-12 20-px d-flex flex-row-reverse flex-wrap mt-5">
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column contenido-principal">
                        <div>
                            <h3 class="my-4">Diseños Personalizados</h3>
                            <p class="my-4">Estamos comprometidos a digitalizar los sueños, de todos los emprendedores que se contacten con nosotros y a ofrecerles una presencia online en la cual puedan ofrecer sus productos, en un mundo digitalizado. Ofrecemos sitios preconcebidos para satisfacer las necesidades de un público en general, que busca marcar el inicio de su identidad digital.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center align-items-center flex-column">
                        <div>
                            <img src="{{asset('images/imagen3.png')}}" alt="">
                        </div>
                    </div>
                </div>
    
    
            </div>
        </section>
        


        <section class="py-5 estemos-en-contacto" style="background: #F0F6FF">
            <div class="row">
                <h2 class="text-center">Estemos en contacto</h2>
                <span class="text-center">Nosotros te orientamos según tus necesidades</span>

                <div class="col-12 d-flex flex-wrap pt-5">
                    <div class="col-md ps-md-5">
                        <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                            <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 w-50 my-2">
                                <i class="me-4 far fa-envelope"></i>info@racr.io
                            </div>
                        </a>
                        <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                            <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 w-50 my-2">
                                <i class="me-4 fab fa-whatsapp"></i>13213213
                            </div>
                        </a>
                        <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                            <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 w-50 my-2">
                                <i class="me-4 fab fa-facebook"></i>Racr Soft
                            </div>
                        </a>
                        <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                            <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 w-50 my-2">
                                <i class="me-4 fab fa-twitter"></i>Racr Soft
                            </div>
                        </a>
                        <a href="" class="d-flex justify-content-center" style="text-decoration: none; color: inherit;">
                            <div class="d-flex align-items-center contenedor-redes pe-5 ps-4 py-4 w-50 my-2">
                                <i class="me-4 fab fa-instagram"></i>Racr Soft
                            </div>
                        </a>
                    </div>
                    <div class="col-md-6">
                        <form action="">
                            @csrf
                            <h3>Envianos Tu Consulta</h3>
                            <div class="form-group">
                                <input type="text" class="form-control my-3 w-75" placeholder="Nombre y apellido" name="nombre">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control my-3 w-75" placeholder="Teléfono" name="telefono">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control my-3 w-75" placeholder="E-Mail" name="email">
                            </div>
                            <div class="form-group">
                                <select name="tipo_pagina" id="">
                                    <option disabled selected>Consulta por tipo de página web</option>
                                    <option value="landing">Landing</option>
                                    <option value="con_secciones">Con secciones</option>
                                    <option value="ecommerce">E-Commerce</option>
                                </select>
                            </div>
                            <textarea name="mensaje" id="" cols="30" rows="10" placeholder="Mensaje"></textarea>
                            <button type="submit">Enviar consulta</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
       
</div>

@endsection