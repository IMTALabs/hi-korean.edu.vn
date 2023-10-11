<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
    {!! JsonLd::generate() !!}
    <link rel="shortcut icon" href="{{ asset('assets/images/logo/favourite_icon_1.svg') }}">

    <!-- Framework - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Icon Font - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fontawesome.css') }}">

    <!-- Animation - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">

    <!-- Cursor - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/cursor.css') }}">

    <!-- Carousel - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick-theme.css') }}">

    <!-- Video & Image Popup - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">

    <!-- Vanilla Calendar - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vanilla-calendar.min.css') }}">

    <!-- Custom - CSS Include -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/yt-lite.css') }}">
    @stack('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    @vite('resources/css/app.css')
</head>
<body>
<!-- Body Wrap - Start -->
<div class="page_wrapper flex flex-col min-h-screen">

    <!-- Back To Top - Start -->
    <div class="backtotop">
        <a href="#" class="scroll">
            <i class="far fa-arrow-up"></i>
        </a>
    </div>
    <!-- Back To Top - End -->

    <!-- Site Header - Start
    ================================================== -->
    @include('layouts.header')
    <!-- Site Header - End
    ================================================== -->

    <!-- Main Body - Start
    ================================================== -->
    @yield('content')
    <!-- Main Body - End
    ================================================== -->

    <!-- Site Footer - Start
    ================================================== -->
    @include('layouts.footer')
    <!-- Site Footer - End
    ================================================== -->
</div>
<!-- Body Wrap - End -->

<!-- Framework - Jquery Include -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap-dropdown-ml-hack.js') }}"></script>

<!-- animation - jquery include -->
{{--<script src="{{ asset('assets/js/cursor.js') }}"></script>--}}
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/tilt.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

<!-- Carousel - Jquery Include -->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>

<!-- Video & Image Popup - Jquery Include -->
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>

<!-- Counter Up - Jquery Include -->
<script src="{{ asset('assets/js/waypoint.js') }}"></script>
<script src="{{ asset('assets/js/counterup.min.js') }}"></script>

<!-- Countdown Timer - jquery include -->
<script src="{{ asset('assets/js/countdown.js') }}"></script>
<script src="{{ asset('assets/js/yt-lite.js') }}"></script>

<!-- Vanilla Calendar - Jquery Include -->
<script src="{{ asset('assets/js/vanilla-calendar.min.js') }}"></script>

<!-- Custom - Jquery Include -->
<script
    async
    src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.4/dist/lazyload.min.js"
></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
@stack('scripts')
</body>
</html>
