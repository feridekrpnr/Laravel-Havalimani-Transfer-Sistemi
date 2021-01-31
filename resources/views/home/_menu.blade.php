<nav class="navbar navbar-expand-lg navbar-dark fixed-top " id="mainNav" style="background-color: #292929">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="assets/img/navbar-logo.svg" alt="" /></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ml-n1"></i>
        </button>
        <div class="collapse navbar-collapse text-dark" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto ">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('aboutus')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('vehicles')}}">Vehicles</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('references')}}">References</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('faq')}}">Faq</a></li>

                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/login">Login/ </a> <a class="nav-link js-scroll-trigger" href="/register">Join </a></li>

                  <li>
                        @auth
                            <a class="dropdown-item" href="{{route('myprofile')}}"> <img class="img-profile rounded-circle" src="{{ asset('assets')}}/admin/assets/images/faces/face2.jpg" style="max-width: 40px">

                                {{Auth::user()->name }}

                            </a>

                    @endauth

                    </li>


            </ul>
        </div>
    </div>
</nav>
