<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-store-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">R. Block</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item @if(request()->routeIs('dashboard')) active @endif">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Tampilan
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item @if(request()->routeIs('profiles.index')) active @endif">
        <a class="nav-link" href="{{ route('profiles.index') }}">
            <i class="fas fa-store"></i>
            <span>Profil Toko</span></a>
    </li>

    <li class="nav-item @if(request()->routeIs('sliders.index')) active @endif">
        <a class="nav-link" href="{{ route('sliders.index') }}">
            <i class="far fa-images"></i>
            <span>Slider</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Manajemen Produk
    </div>

    {{-- Nav Item - Category --}}
    <li class="nav-item @if(request()->routeIs('categories.index')) active @endif">
        <a class="nav-link" href="{{ route('categories.index') }}">
            <i class="fas fa-list"></i>
            <span>Kategori</span></a>
    </li>

    <!-- Nav Item - Brand -->
    <li class="nav-item @if(request()->routeIs('brands.index')) active @endif">
        <a class="nav-link" href="{{ route('brands.index') }}">
            <i class="far fa-bookmark"></i>
            <span>Merk</span></a>
    </li>

    {{-- Nav Item - Product --}}
    <li class="nav-item @if(request()->routeIs('products.index')) active @endif">
        <a class="nav-link" href="{{ route('products.index') }}">
            <i class="fas fa-box-open"></i>
            <span>Produk</span></a>
    </li>


    <!-- Nav Item - Logout -->
    <li class="nav-item ">
        <a class="nav-link" href="#">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
