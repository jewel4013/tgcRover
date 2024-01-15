<x-app-layout>
    @section('bodyContent')
        <div class="">
            <div class="d-flex p-0">
                <div id="pSidenav" class="pSidenav">
                    {{-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> --}}
                    <a href="{{ url('profile') }}">{{ Auth::user()->name }}</a>
                    <a href="{{ url('/admin/dashboard') }}" class="">Dashboard</a>
                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Client  askdf klasls</a>
                    <a href="#">Contact</a>
                    <a href="{{ url('profile/edit') }}">Edit Profile</a>
                    <a href="{{ url('profile/bios') }}">Update Bios</a>
                    <a href="{{ url('profile/contribution') }}" class="">Contribution</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            Log out
                        </a>
                    </form>
                </div>
                <div id="Pmain" class="container-fluid" style="">
                    <span id="toggleSymble" onclick="openNav()" class="closed">&#9932;</span>


                        @section('profileContetn')
                            <div class="d-flex-column" id="pmainContent">
                                <div class="d-flex flex-column justify-content-start align-items-center">
                                    <img src="{{ asset('img/profilePic/'.Auth::user()->avatar) }}" style="" alt="Avatar">
                                    <h2>{{ Auth::user()->name }}</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <h2>Sidenav Push Example Lorem ipsum dolor sit, amet consectetur adipisicing</h2>
                                    </div>
                                    <div class="col-md-8">
                                        <p>Click on the element below to open the side navigation menu, and push this content to the right.</p>
                                    </div>
                                </div>
                            </div>
                        @show

                </div>
            </div>
        </div>
    @endsection




















    @section('mainScripts')
        @parent
        <script>
            function openNav() {
                var list = document.getElementById("toggleSymble").classList;
                if(list == "closed"){
                    document.getElementById("pSidenav").style.marginLeft= "-250px";
                    document.getElementById("toggleSymble").innerHTML = "&#9776;";
                    list.remove("closed");
                    list.add("open");
                }else if(list == "open"){
                    document.getElementById("pSidenav").style.marginLeft = "0";
                    document.getElementById("toggleSymble").innerHTML = "&#9932;";
                    list.remove("open");
                    list.add("closed");
                }
            }
        </script>
    @endsection
</x-app-layout>
