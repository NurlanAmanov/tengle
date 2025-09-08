<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2  bg-white my-2" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand px-4 py-3 m-0 text-center"  target="_blank">
       {{-- <img src="../img/logo/logoKalemimarlik.png" class="navbar-brand-img" width="50" height="50" alt="main_logo">  --}}
        <span class="ms-1 text-md text-center text-dark">Kale Mimarlik</span>
        
      </a>
    </div>
    <hr class="horizontal dark mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
           >
            <i class="material-symbols-rounded opacity-5">dashboard</i>
            <span class="nav-link-text ms-1">Panel</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.project.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
           >
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Projects</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.news.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
          >
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Sliders</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.service.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
          href="{{ route('servicelist') }}" >
            <i class="material-symbols-rounded opacity-5">table_view</i>
            <span class="nav-link-text ms-1">Services</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link {{ request()->routeIs('admin.about.*') ? 'active bg-gradient-dark text-white' : 'text-dark' }}"
          >
            <i class="material-symbols-rounded opacity-5">info</i>
            <span class="nav-link-text ms-1">About Us</span>
        </a>
    </li>
{{-- 
<form method="POST" action="{{ route('logout') }}">
    @csrf
    <button type="submit" class="btn btn-danger mx-4 my-5">Çıxış</button>
</form> --}}



</ul>

    </div>
 
  </aside>