<!-- Header Area -->
<header class="header" >
    <!-- Topbar -->
    <div class="topbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-12">
                    <!-- Contact -->
                    <ul class="top-link">
                        <li><a href="#">About</a></li>
                        <li><a href="#">Notice</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">FAQ</a></li>
                    </ul>
                    <!-- End Contact -->
                </div>
                <div class="col-lg-8 col-md-7 col-12">
                    <!-- Top Contact -->
                    <ul class="top-contact">
                        <li><i class="fa fa-phone"></i>+880 1328-943878</li>
                        <li><i class="fa fa-envelope"></i><a href="mailto:info@tgcrover.com">info@tgcrover.com</a></li>
                        @auth
                            <div class="dropdownpro {{ Request::is('profile') ? 'd-none' : '' }}">
                                <a class="dropbtnpro" href="" onclick="event.preventDefault()"><i class="fa fa-user" style="color: #1A76D1; padding-right: 5px"></i>{{ Auth::user()->name }}</a>
                                <div class="dropdown-content-pro">
                                    <a href="{{ url('/profile') }}">Profile</a>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            Log out
                                        </a>
                                    </form>
                                </div>
                            </div>
                        @else
                            <li><i class="fa fa-sign-in"></i><a href="{{ url('/login') }}">Log in</a></li>
                        @endauth
                    </ul>
                    <!-- End Top Contact -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->
    <!-- Header Inner -->
    <div class="header-inner" >
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-12">
                        <!-- Start Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}"><img src="img/unit_logo.png" alt="TGC Rover Logo"></a>
                        </div>
                        <!-- End Logo -->
                        <!-- Mobile Nav -->
                        <div class="mobile-nav"></div>
                        <!-- End Mobile Nav -->
                    </div>
                    <div class="col-lg-8 col-md-9 col-12">
                        <!-- Main Menu -->
                        <div class="main-menu">
                            <nav class="navigation">
                                <ul class="nav menu">
                                    <li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                                    <li class="{{ Request::is('events') ? 'active' : '' }}"><a href="#">Events <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">National Events</a></li>
                                            <li><a href="index.html">Distric Events</a></li>
                                            <li><a href="index.html">Internal Events</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('members') ? 'active' : '' }}"><a href="#">Members <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li><a href="index.html">Rover Scout Leader</a></li>
                                            <li><a href="index.html">Senior Rover Mate</a></li>
                                            {{-- <li><a href="index.html">Rover Mate</a></li> --}}
                                            <li><a href="index.html">Rover</a></li>
                                            {{-- <li><a href="index.html">Rover Squire</a></li> --}}
                                            <li><a href="index.html">Former Rover</a></li>
                                        </ul>
                                    </li>
                                    <li class="{{ Request::is('services') ? 'active' : '' }}"><a href="#">Services </a></li>
                                    <li class="{{ Request::is('awards') ? 'active' : '' }}"><a href="#">Awards </a></li>
                                    <li class="{{ Request::is('gallery') ? 'active' : '' }}"><a href="{{ url('gallery') }}">Gallary </a></li>
                                    <li class="{{ Request::is('more') ? 'active' : '' }}"><a href="#">More <i class="icofont-rounded-down"></i></a>
                                        <ul class="dropdown">
                                            <li class="{{ Request::is('college_info') ? 'active' : '' }}"><a href="index.html">College Info</a></li>
                                            <li class="{{ Request::is('extracurricular') ? 'active' : '' }}"><a href="blog-single.html">Extracurricular	</a></li>

                                        </ul>
                                    </li>

                                </ul>
                            </nav>
                        </div>
                        <!--/ End Main Menu -->
                    </div>
                    <div class="col-lg-1 col-12">
                        <div class="get-quote">
                            <a href="{{ url('/admission') }}" class="btn">Admission</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ End Header Inner -->
</header>
<!-- End Header Area -->
