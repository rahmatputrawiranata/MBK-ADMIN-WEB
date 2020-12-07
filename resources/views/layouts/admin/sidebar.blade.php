    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">{{config('app.name', 'Laravel')}}</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item {{ Nav::isRoute('home') }}">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{ __('Dashboard') }}</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading d-none d-md-block">
            {{__('Master Data Device')}}
        </div>

        <li class="nav-item {{ Nav::isRoute('Country') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-database"></i>
                <span>{{ __('Device')}}</span>
            </a>
        </li>

        <li class="nav-item {{ Nav::isRoute('Country') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-database"></i>
                <span>{{ __('Data Device')}}</span>
            </a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading d-none d-md-block">
            {{__('Master Data')}}
        </div>

        <li class="nav-item {{ Nav::isRoute('Country') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-database"></i>
                <span>{{ __('Device')}}</span>
            </a>
        </li>
        <li class="nav-item  {{Nav::hasSegment('data-lokasi')}}">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLocationData"
                aria-exanded="true" aria-controls="collapseLocationData">
                <i class="fas fa-fw fa-compass"></i>
                <span>Lokasi</span>

            </a>
            <div id="collapseLocationData"
                 class="collapse {{Nav::hasSegment('data-lokasi', 1, 'show')}}"
                 aria-labelledby="headingLocation"
                 data-parent="#accordionSidebar" >
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Master Data Lokasi</h6>
                    <a class="collapse-item {{Nav::isRoute('country')}}" href="{{route('country')}}">{{__('Negara')}}</a>
                    <a class="collapse-item {{Nav::isRoute('region')}}" href="{{route('region')}}">{{__('Provinsi')}}</a>
                    <a class="collapse-item {{Nav::isRoute('city')}}" href="{{route('city')}}">{{__('Kota')}}</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            {{ __('Settings') }}
        </div>

        <!-- Nav Item - Profile -->
        <li class="nav-item {{ Nav::isRoute('profile') }}">
            <a class="nav-link" href="{{ route('profile') }}">
                <i class="fas fa-fw fa-user"></i>
                <span>{{ __('Profile') }}</span>
            </a>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
<!-- End of Sidebar -->