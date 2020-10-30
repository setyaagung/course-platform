<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-book"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Learning Course <sup></sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Role Admin -->
    <li class="nav-item {{ (request()->segment(1) == 'dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item {{ (request()->segment(1) == 'category') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('category.index')}}">
            <i class="fas fa-fw fa-list-alt"></i>
        <span>Kategori Kelas</span>
        </a>
    </li>

    <li class="nav-item {{ (request()->segment(1) == 'course') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('course.index')}}">
            <i class="fas fa-fw fa-chalkboard"></i>
        <span>Kelas</span>
        </a>
    </li>

    <li class="nav-item {{ (request()->segment(1) == 'role') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('role.index')}}">
            <i class="fas fa-fw fa-tasks"></i>
        <span>Role</span>
        </a>
    </li>

    <li class="nav-item {{ (request()->segment(1) == 'user') ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('user.index')}}">
            <i class="fas fa-fw fa-user"></i>
        <span>User</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>