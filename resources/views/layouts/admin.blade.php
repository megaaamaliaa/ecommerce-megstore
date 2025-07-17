<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>@yield('title')</title>

    @stack('prepend-style')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link href="/style/main.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link href="https://cdn.datatables.net/v/bs5/dt-2.2.1/datatables.min.css" rel="stylesheet">
    @stack('addon-style')
</head>

<body>
    <!-- Page Dashboard -->
    <div class="page-dashboard">
      <div class="d-flex" id="wrapper" data-aos="fade-right" >
        <!-- Sidebar -->
         <div class="border-right" id="sidebar-wrapper">
            <div class="sidebar-heading text-center">
              <img src="/images/admin_logo.png" alt="" class="my-4">
            </div>
            <div class="list-group list-group-flush">
              <a href="{{ route('Adminadmin-dashboard') }}" class="list-group-item list-group-item-action">
                Dashboard
              </a>
              <a href="{{ route('Adminproduct.index')}}" class="list-group-item list-group-item-action {{ (request()->is('admin/product') ? 'active' : '') }}">
                Products
              </a>
              <a href="{{ route('Admincategory.index')}}" class="list-group-item list-group-item-action {{ (request()->is('admin/category*') ? 'active' : '') }}">
                Categories
              </a>
              <a href="{{ route('Adminproduct-gallery.index')}}" class="list-group-item list-group-item-action {{ (request()->is('admin/product-gallery*') ? 'active' : '') }} ">
                Galleries
              </a>
              <a href="/dashboard-settings.html" class="list-group-item list-group-item-action">
                Transactions
              </a>
              <a href="{{ route('Adminuser.index')}}" class="list-group-item list-group-item-action {{ (request()->is('admin/user*') ? 'active' : '') }}">
                Users
              </a>
              <a href="/index.html" class="list-group-item list-group-item-action">
                Sign Out
              </a>
            </div>
         </div>
         <!-- Page Content -->
            <div id="page-content-wrapper">
            <!-- Navbar -->
                <nav
                    class="navbar navbar-expand-lg navbar-light navbar-store fixed-top"
                    data-aos="fade-down">
                        <div class="container-fluid">
                            <button class="btn btn-secondary d-md-none mr-auto mr-2" id="menu-toggle"> &laquo; Menu
                            </button>
                            <button
                                class="navbar-toggler"
                                type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent"
                                aria-controls="navbarNav"
                                aria-expanded="false"
                                aria-label="Toggle navigation"
                                >
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- desktop menu -->
                                <ul class="navbar-nav d-none d-lg-flex ml-auto">
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link" id="navbarDropdown" role="button" data-toggle="dropdown">
                                            <img src="/images/iconuser.png" alt="" class="rounded-circle mr-2 profile-picture" >
                                            Hi, Mega
                                        </a>
                                        <div class="dropdown-menu">
                                            {{-- <a href="/dasboard.html" class="dropdown-item"> Dashboard</a>
                                            <a href="/dasboard-account.html" class="dropdown-item"> Settings</a> --}}
                                            {{-- <div class="dropdown-divider"></div> --}}
                                            <a href="/" class="dropdown-item">Logout</a>
                                        </div>

                                        {{-- <li class="nav-item">
                                            <a href="#" class="nav-link d-inline-block mt-2">
                                                <img src="/images/icon-cart-filled.svg" alt="">
                                                <div class="cart-badge">19</div>
                                            </a>
                                        </li> --}}
                                    </li>
                                </ul>

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
                                    <li class="nav-item">
                                        <a href="/index.html" class="nav-link d-inline-block">
                                        Sign out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                </nav>

            {{-- <!-- Section Content --> --}}
                @yield('content')

            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    @stack('prepend-script')
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
      crossorigin="anonymous"
    ></script>
    <script src="/vendor/jquery/jquery.min.js"></script>
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.2.1/datatables.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    <script>
      $('#menu-toggle').click(function(e)
    {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    })
    </script>
    @stack('addon-script')
  </body>
</html>
