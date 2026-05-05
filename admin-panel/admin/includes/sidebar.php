<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="avatar">
            <img src="assets/img/png logo-peso.png" class="avatar" width="40">
        </div>
        <div class="sidebar-brand-text mx-3">PESO Admin</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php echo ($current_page == 'index.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="index.php">
            <i class="fas fa-fw fa-tachometer-alt"></i> <!-- Dashboard -->
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_page == 'program.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="program.php">
            <i class="fas fa-fw fa-book"></i> <!-- Program -->
            <span>Program</span>
        </a>
    </li>

    <li class="nav-item <?php echo ($current_page == 'users.php') ? 'active' : ''; ?>">
        <a class="nav-link" href="users.php">
            <i class="fas fa-fw fa-users"></i> <!-- Users -->
            <span>Users</span>
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