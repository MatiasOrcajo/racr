<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Tridon') }}</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Fonts -->
    <link rel="stylesheet" href="{{asset('css/fontawesome/css/all.min.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Icons -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

   


    <!-- Styles -->
	<!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts.css') }}">
    <!---swiper-->
    <link
    rel="stylesheet"
    href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
    />

    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- aos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="https://kit.fontawesome.com/1231344c8f.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="position-fixed intro d-flex justify-content-center align-items-center" style="background: transparent radial-gradient(closest-side at 50% 50%, #063D8C 0%, #031F46 100%); height: 100vh; width: 100vw; z-index: 999999999999999;">
        <img src="{{asset('images/racr/logo-blanco.png')}}" alt="" style="width: 150px">
    </div>
    @include('front.partials.header')
    @yield('content')
    @include('front.partials.footer')
    
    {{-- scripts propios --}}
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    {{-- <script src="{{asset('js/scripts.js')}}"></script> --}}
    {{-- jquery --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/CSSRulePlugin.min.js"></script>

    
	<script>

        const intro = document.querySelector('.intro');


        const titulo = CSSRulePlugin.getRule('.titulo:before');
        const titulo_texto = CSSRulePlugin.getRule('.texto-titulo:before');

        gsap.to('.intro', {opacity: 0, duration: 1, delay: 2.5}); /*3,5s*/
        gsap.to(titulo, {cssRule: {scaleY:0}, duration: .5, delay: 3.7,});/*4,5s*/
        gsap.to('.intro', {top: '-100%', duration: 1, delay: 3.8});
        gsap.from('.img-logo', {y:40, opacity: 0, delay: 3.4});


        const boxes = document.querySelectorAll('.contenedor-redes');

        function cb (entries){
            entries.forEach(entry => {
                if(entry.isIntersecting && !entry.target.classList.contains('gsap')){
                    gsap.to(entry.target, {opacity: 1, duration:2});
                    gsap.from(entry.target, {x: '-90', duration:2});
                    entry.target.classList.add('gsap')
                }
            })
        }

        const options = {
            rootMargin: '-50px',
        }

        const observer = new IntersectionObserver(cb, options);

        boxes.forEach(el => observer.observe(el));

    </script>


</body>
</html>
