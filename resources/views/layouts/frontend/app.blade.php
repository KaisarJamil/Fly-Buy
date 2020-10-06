<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> @yield('title')-{{ config('', 'FLY BUY') }}</title>


    <meta name="description" content="e-commerce site well design with responsive view." />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('assets/frontend/image/favicon.png')}}" rel="icon" type="image/png" >
    <link href="{{ asset('assets/frontend/css/bootstrap.min.css')}}" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/frontend/javascript/font-awesome/css/font-awesome.css')}}" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet"/>
    <link href="{{ asset('assets/frontend/css/stylesheet.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/responsive.css')}}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/javascript/owl-carousel/owl.carousel.css')}}" type="text/css" rel="stylesheet" media="screen" />
    <link href="{{ asset('assets/frontend/javascript/owl-carousel/owl.transitions.css')}}" type="text/css" rel="stylesheet" media="screen" />
    @stack('css')


</head>
<body>

    @include('layouts.frontend.inc.header')
    @yield('content')

    @include('layouts.frontend.inc.footer')

    <script type="text/javascript" src="{{ asset('assets/frontend/javascript/jquery-2.1.1.min.js')}}" ></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/javascript/bootstrap/js/bootstrap.min.js')}}" ></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/javascript/template_js/jstree.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/javascript/template_js/template.js')}}" ></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/javascript/common.js')}}" ></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/javascript/global.js')}}" ></script>
    <script type="text/javascript" src="{{ asset('assets/frontend/javascript/owl-carousel/owl.carousel.min.js')}}" ></script>
    <script src="https://use.fontawesome.com/9d8853db22.js"></script>
    <script src="{{ asset('assets/frontend/javascript/jquery.parallax.js') }}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.parallax').parallax();
        });
    </script>
    @stack('js')

</body>
</html>
