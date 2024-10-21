<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Berkah Surya Dashboard</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="{{ asset('admindashboard/css/styles.css') }}" rel="stylesheet" />
        <link rel="shortcut icon" href="{{ asset('admindashboard/assets/img/logo.png')}}" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="#">Berkah Surya Group</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group d-none">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4 d-flex justify-content-end align-items-center">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route ('profile.show') }}">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <form method="POST" action="{{ route('logout') }}">
                        @csrf
                            <li><button type="submit" class="dropdown-item">Logout</button></li>
                        </form>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Cms</div>
                            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link {{ request()->is('dashboard/contacts*') || request()->is('dashboard/contacts.edit*') ? 'active' : '' }}" href="{{ route('contacts.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-address-book"></i></div>
                                Contact
                            </a>
                            <a class="nav-link {{ request()->is('dashboard/electrics*') || request()->is('dashboard/electrics.edit*') ? 'active' : '' }}" href="{{ route('electrics.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-bolt"></i></div>
                                Electric
                            </a>
                            <a class="nav-link {{ request()->is('dashboard/homepages*') || request()->is('dashboard/homepages.edit*') ? 'active' : '' }}" href="{{ route('homepages.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-solid fa-house"></i></div>
                                Homepage
                            </a>
                            <a class="nav-link {{ request()->is('dashboard/maintenances*') || request()->is('dashboard/maintenances.edit*') ? 'active' : '' }}" href="{{ route('maintenances.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-tools"></i></div>
                                Maintenance
                            </a>
                            <a class="nav-link {{ request()->is('dashboard/mechanics*') || request()->is('dashboard/mechanics.edit*') ? 'active' : '' }}" href="{{ route('mechanics.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-wrench"></i></div>
                                Mechanic
                            </a>
                            <a class="nav-link {{ request()->is('dashboard/profils*') || request()->is('dashboard/profils.edit*') ? 'active' : '' }}" href="{{ route('profils.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-user"></i></div>
                                Profile
                            </a>
                            <a class="nav-link {{ request()->is('dashboard/residentals*') || request()->is('dashboard/residentals.edit*') ? 'active' : '' }}" href="{{ route('residentals.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-building"></i></div>
                                Residental
                            </a>
                            <a class="nav-link {{ request()->is('dashboard/spaces*') || request()->is('dashboard/spaces.edit*') ? 'active' : '' }}" href="{{ route('spaces.index') }}">
                                <div class="sb-nav-link-icon"><i class="fa-solid fa-rocket"></i></div>
                                Space
                            </a>
                            {{-- <a class="nav-link" href="{{ route('contacts.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-globe"></i></div>
                                Social Media
                            </a> --}}
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        {{ Auth::user()->name }}
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
@yield('admincontent')