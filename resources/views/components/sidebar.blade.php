<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Clinic Ghazur</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">CG</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="nav-item dropdown">
                <a href="{{ route('home') }}" class=""><i class="fas fa-fire"></i><span>Dashboard</span></a>
                <ul class="dropdown-menu">
                    <li class='{{ Request::is('dashboard') ? 'active' : '' }}'>
                </ul>
            </li>

            <li class="menu-header">Management</li>
            <li class="nav-item dropdown">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>User</span></a>
                <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('user.index') }}">All User</a>
            </li>
        </ul>
        <li class="nav-item dropdown ">
            <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Doctors</span></a>
            <ul class="dropdown-menu">
                <li>
                    <a class="nav-link" href="{{ route('Doctors.index') }}">All Doctors</a>
                </li>
            </ul>
        </li>
        {{-- <li class="nav-item dropdown ">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Product</span></a>
                <ul class="dropdown-menu">
                    <li>
                        <a class="nav-link" href="{{ route('product.index') }}">All Product</a>
                    </li> --}}
    </aside>
</div>
