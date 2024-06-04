<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">

            <a class="nav-link @if ($title == 'Dashboard') active @endif " href="/">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->
        @if (Auth::user()->level == 'superadmin')
            <li class="nav-item">
                <a class="nav-link @if ($title == 'Daftar User' or $title == 'Tambah User' or $title == 'Edit User') active @endif" href="/users">
                    <i class="bi bi-people"></i>
                    <span>Manajemen User</span>
                </a>
            </li>
        @endif

        <li class="nav-item">
            <a class="nav-link @if ($title == 'Daftar Lapangan' or $title == 'Tambah Lapangan' or $title == 'Edit Lapangan') active @endif" href="/lapangan">
                <i class="bi bi-menu-button-wide"></i>
                <span>Lapangan</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link @if ($title == 'Daftar Booking' or $title == 'Tambah Booking' or $title == 'Edit Booking') active @endif" href="/booking">
                <i class="bi bi-journal-text"></i>
                <span>Booking</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/logout">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
            </a>
        </li>
        <li class="nav-heading">About</li>
        <li class="nav-item">
            <a class="nav-link @if ($title == 'Profil Developer') active @endif" href="/profil">
                <i class="bi bi-person-circle"></i>
                <span>Profil Developer</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->
