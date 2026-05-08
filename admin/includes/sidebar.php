<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center"
        href="/PESO-SYSTEM/admin/index.php">

        <div class="avatar">
            <img src="/PESO-SYSTEM/admin/assets/img/png logo-peso.png"
                width="40">
        </div>

        <div class="sidebar-brand-text mx-3">
            PESO Admin
        </div>

    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Dashboard -->
    <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">

        <a class="nav-link"
            href="/PESO-SYSTEM/admin/index.php">

            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>

        </a>

    </li>

    <!-- Programs -->
    <li class="nav-item <?php echo ($current_page == 'program.php') ? 'active' : ''; ?>">

        <a class="nav-link"
            href="/PESO-SYSTEM/admin/programs/program.php">

            <i class="fas fa-fw fa-book"></i>
            <span>Programs</span>

        </a>

    </li>

    <!-- Users -->
    <li class="nav-item <?php echo ($current_page == 'users.php') ? 'active' : ''; ?>">

        <a class="nav-link"
            href="/PESO-SYSTEM/admin/users/users.php">

            <i class="fas fa-fw fa-users"></i>
            <span>Users</span>

        </a>

    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0"
            id="sidebarToggle">
        </button>
    </div>

</ul>
<!-- End of Sidebar -->