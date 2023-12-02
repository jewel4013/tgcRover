<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>@yield('pageTitle')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

        @section('mainLinks')
            <!-- Favicon -->
            <link rel="icon" href="{{ asset('img/rover_logo.png') }}">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <!-- Nice Select CSS -->
            <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
            <!-- Font Awesome CSS -->
            <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
            <!-- icofont CSS -->
            <link rel="stylesheet" href="{{ asset('css/icofont.css') }}">
            <!-- Slicknav -->
            <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}">
            <!-- Owl Carousel CSS -->
            <link rel="stylesheet" href="{{ asset('css/owl-carousel.css') }}">
            <!-- Datepicker CSS -->
            <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
            <!-- Animate CSS -->
            <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
            <!-- Magnific Popup CSS -->
            <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

            <!-- Medipro CSS -->
            <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

            <!-- Styles -->
            <link rel="stylesheet" href="{{ asset('css/tailwindcss.css') }}">            
        @show

    </head>
    <body>
        <div class="">
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            @section('loader')
                @include('partials.loader')                
            @show
            
            @include('partials.notice')
            @include('partials.header')








            @yield('bodyContent')




















            @include('partials.footer')
        </div>




        @section('mainScripts')
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
            <!-- jquery Min JS -->
            <script src="{{ asset('js/jquery.min.js') }}"></script>
            <!-- jquery Migrate JS -->
            <script src="{{ asset('js/jquery-migrate-3.0.0.js') }}"></script>
            <!-- jquery Ui JS -->
            <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
            <!-- Easing JS -->
            <script src="{{ asset('js/easing.js') }}"></script>
            <!-- Color JS -->
            <script src="{{ asset('js/colors.js') }}"></script>
            <!-- Popper JS -->
            <script src="{{ asset('js/popper.min.js') }}"></script>
            <!-- Bootstrap Datepicker JS -->
            <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
            <!-- Jquery Nav JS -->
            <script src="{{ asset('js/jquery.nav.js') }}"></script>
            <!-- Slicknav JS -->
            <script src="{{ asset('js/slicknav.min.js') }}"></script>
            <!-- ScrollUp JS -->
            <script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
            <!-- Niceselect JS -->
            <script src="{{ asset('js/niceselect.js') }}"></script>
            <!-- Tilt Jquery JS -->
            <script src="{{ asset('js/tilt.jquery.min.js') }}"></script>
            <!-- Owl Carousel JS -->
            <script src="{{ asset('js/owl-carousel.js') }}"></script>
            <!-- counterup JS -->
            <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
            <!-- Steller JS -->
            <script src="{{ asset('js/steller.js') }}"></script>
            <!-- Wow JS -->
            <script src="{{ asset('js/wow.min.js') }}"></script>
            <!-- Magnific Popup JS -->
            <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
            <!-- Counter Up CDN JS -->
            <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
            <!-- Bootstrap JS -->
            <script src="{{ asset('js/bootstrap.min.js') }}"></script>
            <!-- Main JS -->
            <script src="{{ asset('js/main.js') }}"></script>

        
        @show
    </body>
</html>
