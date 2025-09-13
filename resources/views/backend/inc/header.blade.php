<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0 text-center">
        {{-- <img src="../img/logo/logoKalemimarlik.png" class="navbar-brand-img" width="50" height="50" alt="main_logo"> --}}
        <span class="ms-1 text-md text-center text-dark">Tenglee Marine</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">

    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav">

        {{-- Dashboard --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
             href="{{ route('admin.dashboard') }}">
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Panel</span>
          </a>
        </li>

        {{-- Projects --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('admin.projects.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
             href="{{ route('admin.projects.index') }}">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Projects</span>
          </a>
        </li>

        {{-- Sliders --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('admin.sliders.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
             href="{{ route('admin.sliders.index') }}">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Sliders</span>
          </a>
        </li>

        {{-- Services --}}
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
             href="{{ route('admin.services.index') }}">
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Services</span>
          </a>
        </li>

        {{-- About Us --}}
<li class="nav-item">
  <a  class="nav-link {{ request()->routeIs('admin.about.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
     href="#"
     data-bs-toggle="collapse"
     data-bs-target="#aboutMenu"
     aria-expanded="false">
    <span class="d-flex align-items-center">
      <i class="material-symbols-rounded opacity-5 me-2">info</i>
      <span class="nav-link-text">About Us</span>
    </span>
    <i class="fas fa-chevron-down small"></i>
  </a>

  <div id="aboutMenu" class="collapse">
    <ul class="list-unstyled ps-4 mb-0 submenu">
      <li><a class="dropdown-item" href="{{ route('admin.aboutlist') }}">About List</a></li>
      <li><a class="dropdown-item" href="{{ route('admin.about.history.create') }}">Our History</a></li>
      <li><a class="dropdown-item" href="#">History</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Mission & Vision</a></li>
    </ul>
  </div>
</li>





        {{-- Logout (gələcəkdə auth aktiv olanda aç) --}}
        {{--
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-danger mx-4 my-5">Çıxış</button>
        </form>
        --}}
      </ul>
    </div>
</aside>
