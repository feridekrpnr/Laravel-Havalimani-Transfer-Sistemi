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
                @php
                    $parentCategories = \App\Http\Controllers\HomeController::categorylist()
                @endphp
                @foreach($parentCategories as $rs)
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('categorytransfers',['id'=>$rs->id,'slug'=>$rs->title])}}">{{$rs->title}}</a></li>
                @endforeach

                @guest

                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/login">Login</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="/register">Join</a></li>
                @endguest
                @auth
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{route('logout')}}">Logout </a></li>


                <li>

                            <a class="dropdown-item" href="{{route('myprofile')}}"> <img class="img-profile rounded-circle" src="{{ asset('assets')}}/admin/assets/images/faces/face2.jpg" style="max-width: 40px">

                                {{Auth::user()->name }}

                            </a>


                    </li>
                @endauth

            </ul>
        </div>
    </div>
</nav>
