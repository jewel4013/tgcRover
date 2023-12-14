<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('pageTitle')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @section('mainLinks')
            <!-- Favicon -->
            <link rel="icon" href="{{ asset('img/rover_logo.png') }}">
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
            <!-- Nice Select CSS -->
            {{-- <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}"> --}}
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
            {{-- <link rel="stylesheet" href="{{ asset('css/salvattore.css') }}"> --}}

            <!-- Medipro CSS -->
            <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
            <link rel="stylesheet" href="{{ asset('css/style.css') }}">
            <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">

            <!-- Styles -->
            {{-- <link rel="stylesheet" href="{{ asset('css/tailwindcss.css') }}"> --}}
            <link rel="stylesheet" href="{{ asset('css/profileButton.css') }}">
            <link rel="stylesheet" href="{{ asset('css/admission.css') }}">
            <link rel="stylesheet" href="{{ asset('css/profile_sidebars.css') }}">

        @show







    </head>
    <body class="font-sans antialiased" onload="disableFun(); pa_disableFun();">
        {{-- <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div> --}}

        <div class="">
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
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
            <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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


            @if (Session::has('message'))
                <script>
                    toastr.success("{{ Session::get('message') }}");
                </script>
            @endif

            @if (session('status') === 'profile-updated')
                <script>
                    toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "timeOut": "10000",
                    }
                    toastr.success("{{ session('status') }}");
                </script>
            @endif

            @if (Session::has('biosUpdate'))
            <script>
                 toastr.options = {
                        "closeButton": true,
                        "progressBar": true,
                        "timeOut": "10000",
                    }
                toastr.success("{{ Session::get('biosUpdate') }}");
            </script>
        @endif


        @show
    </body>
</html>
