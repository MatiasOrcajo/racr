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
    <div class="position-fixed intro" style="background-image: url({{asset('images/welcome.png')}}); height: 100vh; width: 100vw; z-index: 999999999999999; background-position: center; background-size: cover; background-repeat: no-repeat;"></div>
    @include('front.partials.header')
    @yield('content')
    @include('front.partials.footer')
    
    {{-- scripts propios --}}
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{asset('js/scripts.js')}}"></script> --}}
    {{-- jquery --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.8.0/CSSRulePlugin.min.js"></script>

    
	<script>

        const intro = document.querySelector('.intro');


        const titulo = CSSRulePlugin.getRule('.titulo:before');
        const titulo_texto = CSSRulePlugin.getRule('.texto-titulo:before');

        gsap.to('.intro', {top: '-100%', duration: 1, delay: 2.5}); /*3,5s*/
        gsap.to(titulo, {cssRule: {scaleY:0}, duration: .5, delay: 3.5,});/*4,5s*/
        gsap.to(titulo_texto, {cssRule: {scaleY: 0}, duration: .2, delay: 4.3});/*4,7s*/

    </script>


</body>
</html>
