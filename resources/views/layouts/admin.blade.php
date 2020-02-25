<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title')</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href={{ asset('staradmin/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}>
  <link rel="stylesheet" href={{ asset('staradmin/vendors/css/vendor.bundle.base.css')}}>
  <link rel="stylesheet" href={{ asset('staradmin/vendors/css/vendor.bundle.addons.css')}}>

  <link rel="stylesheet" href={{ asset('staradmin/vendors/iconfonts/font-awesome/css/font-awesome.css')}}>
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href={{ asset('staradmin/css/style.css')}}>

  <script src={{ asset('js/jquery.min.js')}}></script>

  <!-- endinject -->
  <link rel="shortcut icon" href={{ asset('img/logo.png')}}>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ url('/cikara/home')}}">
          <img src={{ asset('/img/cikara.png')}} alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{ url('/beranda')}}">
          <img src={{ asset('staradmin/images/logo-mini.svg')}} alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
          {{-- <li class="nav-item">
            <a href="#" class="nav-link">Schedule
              <span class="badge badge-primary ml-1">New</span>
            </a>
          </li>
          <li class="nav-item active">
            <a href="#" class="nav-link">
              <i class="mdi mdi-elevation-rise"></i>Reports</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="mdi mdi-bookmark-plus-outline"></i>Score</a>
          </li> --}}
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Hello, {{ ucwords(Auth::user()->name) }} !</span>
              <img class="img-xs rounded-circle" src={{ asset('img/logo.png')}} alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <a class="dropdown-item p-0">
                <div class="d-flex border-bottom">
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                    <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                  </div>
                  <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                    <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                  </div>
                </div>
              </a>
              {{-- <a class="dropdown-item mt-2">
                Pengaturan Akun
              </a>
              <a class="dropdown-item">
                Check Inbox
              </a> --}}
              <a class="dropdown-item" href="{{ url('/cikara/logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                {{ __('Keluar') }}
              </a>

              <form id="logout-form" action="{{ url('/cikara/logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src={{ asset('img/logo.png')}} alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ ucwords(Auth::user()->name) }}</p>
                  <div>
                    <small class="designation text-muted">{{ Auth::user()->level }}</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              {{-- <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button> --}}
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ url('/cikara/home')}}>
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Beranda</span>
            </a>
          </li>
          @if (Auth::user()->level == 'admin')
          <li class="nav-item">
            <a class="nav-link" href={{ url('/cikara/shortlink')}}>
              <i class="menu-icon mdi mdi-network"></i>
              <span class="menu-title">Shortlink</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href={{ url('/cikara/referer')}}>
              <i class="menu-icon mdi mdi-help-network"></i>
              <span class="menu-title">Site Referer</span>
            </a>
          </li>
          @endif
          @if (Auth::user()->level == 'user')
            <li class="nav-item">
              <a class="nav-link" href={{ url('/produk')}}>
                <i class="menu-icon mdi mdi-network"></i>
                <span class="menu-title">Produk</span>
              </a>
            </li>
          @endif
          {{-- <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="menu-icon mdi mdi-restart"></i>
              <span class="menu-title">Maintenance</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="#"> Page 1 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Page 2 </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#"> Page 3 </a>
                </li>
              </ul>
            </div>
          </li> --}}
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            @yield('container')
        </div>
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
              <div class="container-fluid clearfix">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © {{ Date('Y')}}
                  <a href="http://www.cikarastudio.com/" target="_blank">Cikara Studio</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Shortlink version 1.0
                    <i class="mdi mdi-shopping text-primary"></i>
                </span>
              </div>
            </footer>
            <!-- partial -->
          </div>
          <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
      </div>
      <!-- container-scroller -->
    
      <!-- plugins:js -->
      <script src={{ asset('staradmin/vendors/js/vendor.bundle.base.js')}}></script>
      <script src={{ asset('staradmin/vendors/js/vendor.bundle.addons.js')}}></script>
      <!-- endinject -->
      <!-- Plugin js for this page-->
      <!-- End plugin js for this page-->
      <!-- inject:js -->
      <script src={{ asset('staradmin/js/off-canvas.js')}}></script>
      <script src={{ asset('staradmin/js/misc.js')}}></script>
      <!-- endinject -->
      <!-- Custom js for this page-->
      <script src={{ asset('staradmin/js/dashboard.js')}}></script>
      <!-- End custom js for this page-->
      <script src={{ asset('staradmin/js/chart.js')}}></script>
      <script src={{ asset('js/chatomz.js') }}></script>
    </body>
    
    </html>
