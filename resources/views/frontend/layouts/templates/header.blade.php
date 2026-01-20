<!-- header======================-->
<header class="position-relative z-1 header-nav-menu" id="header-nav-menu">
<div class="container">
    <div class="header-inner py-3">
    <div class="row align-items-center justify-content-between">
        <div class="col-lg-3 col-md-4 col-6 order-1">
        <div class="header-logo">
            <a href="{{route('homepage')}}"><img src="{{asset('image/logow-04-1.png')}}" alt="logo" class="w-10"!important></a>
        </div>
        </div>
        <div class="col-xl-8 col-0 order-3 order-xl-2">
        <div class="header-nav float-end">
            <div class="navbar-collapse justify-content-end playfair" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav flex-row align-items-center" id="responsive-menu">
                <li class="nav-item">
                    <a class="nav-link text" href="{{route('homepage')}}" role="button">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text " href="{{route('about')}}">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text " href="{{ route('spotlight') }}">Spotlight</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text " href="{{ route('video') }}">Stories</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text" href="{{ route('portfolio') }}">
                        Portfolio
                    </a>
                    <ul class="dropdown-menu bg-lightgrey p-0 rounded-0 border-0">
                        @foreach($categories as $category)
                            <li>
                                <a class="dropdown-item text-capitalize black border-0"
                                href="{{ route('portfolio.single', ['slug' => $category->slug]) }}">
                                    {{ $category->name }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link text " href="{{ route('contact') }}">Contact</a>
                </li>
            </ul>
            </div>
        </div>
        </div>
    </div>
    <div id="slicknav-mobile"></div>
    </div>
</div>
</header>
<!-- End of Header area=-->