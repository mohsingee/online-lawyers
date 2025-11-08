<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
            <img src="{{asset(websetting()->logo)}}" alt="" width="110">
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

       <!-- Dashboard -->
        <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('dashboard') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <hr class="sidebar-divider">

        <div class="sidebar-heading">
            Interface
        </div>

        @if(auth()->user()->role == 'admin')
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fas fa-fw fa-users"></i> <!-- Users icon -->
                    <span>Users</span>
                </a>
            </li>
        @endif

        
        @if(in_array(auth()->user()->role, ['admin', 'creator']))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('cms.index', ['page' => 'Home']) }}">
                    <i class="fas fa-fw fa-home"></i>
                    <span>Home</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('cms.index', ['page' => 'About us']) }}">
                    <i class="fas fa-fw fa-address-card"></i>
                    <span>About Us</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('legal_categories.index') }}">
                    <i class="fas fa-fw fa-gavel"></i> <!-- Legal categories icon -->
                    <span>Legal Categories</span>
                </a>
            </li>

            <!-- <li class="nav-item">
                <a class="nav-link" href="{{ route('lawfirms.index') }}">
                    <i class="fas fa-fw fa-blog"></i>
                    <span>Law Firms</span>
                </a>
            </li> -->

            <li class="nav-item">
                <a class="nav-link" href="{{ route('blogs.index') }}">
                    <i class="fas fa-fw fa-blog"></i> <!-- Blogs icon -->
                    <span>Blogs</span>
                </a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('settings') }}">
                    <i class="fas fa-fw fa-cogs"></i> <!-- Website settings icon -->
                    <span>Website Settings</span>
                </a>
            </li>
        @endif
    </ul>
<!-- End of Sidebar -->