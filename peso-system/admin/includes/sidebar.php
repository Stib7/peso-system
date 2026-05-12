<?php
// ============================================================
//  PESO SYSTEM — Admin Sidebar
//  File: /admin/includes/sidebar.php
// ============================================================

// Detect current page for active link highlighting
$currentPage = basename($_SERVER['PHP_SELF']);
$currentDir  = basename(dirname($_SERVER['PHP_SELF']));

function navItem(string $href, string $icon, string $label, string $dir = ''): void {
    global $currentDir, $currentPage;
    $active = ($dir && $currentDir === $dir) ? 'active' : '';
    echo "<a href=\"{$href}\" class=\"nav-link {$active}\">
            <i class=\"bi {$icon}\"></i>
            <span>{$label}</span>
          </a>";
}
?>

<style>
    :root {
        --peso-blue:   #1a3a6b;
        --peso-accent: #e8a020;
        --sidebar-w:   260px;
        --topbar-h:    60px;
    }

    #sidebar {
        position: fixed;
        top: 0; left: 0; bottom: 0;
        width: var(--sidebar-w);
        background: var(--peso-blue);
        display: flex;
        flex-direction: column;
        z-index: 200;
        overflow-y: auto;
    }

    #sidebar .brand {
        height: var(--topbar-h);
        display: flex;
        align-items: center;
        gap: .75rem;
        padding: 0 1.25rem;
        border-bottom: 1px solid rgba(255,255,255,.1);
        flex-shrink: 0;
    }

    #sidebar .brand .logo-box {
        width: 34px; height: 34px;
        background: var(--peso-accent);
        border-radius: 8px;
        display: flex; align-items: center; justify-content: center;
        font-weight: 800;
        color: #fff;
        font-size: .85rem;
        flex-shrink: 0;
    }

    #sidebar .brand span {
        color: #fff;
        font-weight: 700;
        font-size: .95rem;
        letter-spacing: .3px;
    }

    #sidebar .nav-section {
        padding: 1.1rem 1rem .3rem 1rem;
        font-size: .68rem;
        font-weight: 700;
        letter-spacing: 1.2px;
        text-transform: uppercase;
        color: rgba(255,255,255,.4);
    }

    #sidebar .nav-link {
        display: flex;
        align-items: center;
        gap: .75rem;
        padding: .55rem 1.25rem;
        color: rgba(255,255,255,.75);
        font-size: .875rem;
        border-radius: 8px;
        margin: 1px .5rem;
        transition: background .15s, color .15s;
        text-decoration: none;
    }

    #sidebar .nav-link i {
        font-size: 1rem;
        width: 20px;
        text-align: center;
        flex-shrink: 0;
    }

    #sidebar .nav-link:hover {
        background: rgba(255,255,255,.1);
        color: #fff;
    }

    #sidebar .nav-link.active {
        background: var(--peso-accent);
        color: #fff;
        font-weight: 600;
    }

    #sidebar .sidebar-footer {
        margin-top: auto;
        padding: 1rem 1.25rem;
        font-size: .75rem;
        color: rgba(255,255,255,.3);
        border-top: 1px solid rgba(255,255,255,.08);
        text-align: center;
    }
</style>

<nav id="sidebar">
    <!-- Brand -->
    <div class="brand">
        <div class="logo-box">P</div>
        <span>PESO System</span>
    </div>

    <!-- Main -->
    <div class="nav-section">Main</div>
    <?php navItem('/admin/index.php',    'bi-speedometer2', 'Dashboard',   'admin'); ?>

    <!-- Management -->
    <div class="nav-section">Management</div>
    <?php navItem('/admin/users/',        'bi-people',         'Users',         'users'); ?>
    <?php navItem('/admin/programs/',     'bi-grid',           'Programs',      'programs'); ?>
    <?php navItem('/admin/announcements.php', 'bi-megaphone', 'Announcements', ''); ?>

    <!-- Programs -->
    <div class="nav-section">Programs</div>
    <?php navItem('/admin/livelihood/',    'bi-house-heart',    'Livelihood',    'livelihood'); ?>
    <?php navItem('/admin/tupad/',         'bi-calendar-check', 'TUPAD',         'tupad'); ?>
    <?php navItem('/admin/spes/',          'bi-mortarboard',    'SPES',          'spes'); ?>
    <?php navItem('/admin/wap/',           'bi-person-workspace','WAP',          'wap'); ?>
    <?php navItem('/admin/ojt/',           'bi-briefcase',      'OJT',           'ojt'); ?>
    <?php navItem('/admin/work-immersion/','bi-building',       'Work Immersion','work-immersion'); ?>
    <?php navItem('/admin/ofw/',           'bi-airplane',       'OFW',           'ofw'); ?>
    <?php navItem('/admin/lra-sra/',       'bi-file-earmark-text','LRA-SRA',     'lra-sra'); ?>
    <?php navItem('/admin/child-labor/',   'bi-shield-check',   'Child Labor',   'child-labor'); ?>
    <?php navItem('/admin/jobfair/',       'bi-people-fill',    'Job Fair',      'jobfair'); ?>

    <div class="sidebar-footer">
        PESO &copy; <?= date('Y') ?>
    </div>
</nav>
