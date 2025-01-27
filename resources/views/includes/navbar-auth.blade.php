<nav
      class="navbar navbar-expand-lg navbar-light navbar-store fixed-top navbar-fixed-top"
      data-aos="fade-down"
    >
      <div class="container">
        <a href="{{ url('/') }}" class="navbar-brands">
          <img src="images/logo.svg" alt="logo" />
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
            <li class="nav-item active">
              <a class="nav-link active" aria-current="page" href="{{ url('/') }}"
                >Home</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/categories') }}">Categories</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/beritaMobil.html">Rewards</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
