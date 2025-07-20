<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top" data-aos="fade-down">
    <div class="container">
        <a href="/index.html" class="navbar-brands">
            <img src="{{ url('images/logo.svg') }}" alt="logo" />
        </a>
        <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('home')}}"
                    >Home</a
                    >
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('categories')}}">Categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/beritaMobil.html">Rewards</a>
                </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Sign up</a>
                </li>
                <li class="nav-item">
                    <a
                    class="btn-success nav-link px-4 text-light d-inline-block"
                    href="{{ route('login') }}"
                    >
                    Sign in
                    </a>
                </li>
            @endguest

            @auth
            <!-- desktop menu -->
                {{-- <ul class="navbar-nav d-none d-lg-flex"> --}}
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link pt-0" id="navbarDropdown" role="button" data-toggle="dropdown">
                            <img src="/images/iconuser.png" alt="" class="rounded-circle mr-2 profile-picture p-0" >
                            Hi, {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ route('dashboard') }}" class="dropdown-item"> Dashboard</a>
                            <a href="{{ route('dashboard-settings-account') }}" class="dropdown-item"> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="dropdown-item">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                        </div>
                        <li class="nav-item">
                            <a href="#" class="nav-link d-inline-block ">
                            <img src="/images/cartkosong.svg" alt="">
                            </a>
                        </li>
                    </li>
                {{-- </ul> --}}

                <!-- mobile menu -->
                <ul class="navbar-nav d-block d-lg-none">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        Hi, Mega
                        </a>
                        </li>
                        <li class="nav-item">
                        <a href="#" class="nav-link d-inline-block">
                        Cart
                        </a>
                    </li>
                </ul>
            @endauth
            </ul>
        </div>
    </div>
</nav>
