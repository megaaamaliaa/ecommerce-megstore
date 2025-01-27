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
            <li class="nav-item">
                <a class="nav-link" href="/aksesoris.html">Sign up</a>
            </li>
            <li class="nav-item">
                <a
                class="btn-success nav-link px-4 text-light d-inline-block"
                href="/login.html"
                >
                Sign in
                </a>
            </li>
            </ul>
        </div>
    </div>
</nav>
