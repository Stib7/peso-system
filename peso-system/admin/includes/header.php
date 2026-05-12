<?php
// ============================================================
//  PESO SYSTEM — Admin Header
//  File: /admin/includes/header.php
// ============================================================

// $pageTitle should be set by the including page before this is included.
// Example: $pageTitle = "Dashboard";
$pageTitle = $pageTitle ?? 'PESO System';
$user = currentUser();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= htmlspecialchars($pageTitle) ?> | PESO Admin</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <style>
        :root {
            --peso-blue:    #1a3a6b;
            --peso-accent:  #e8a020;
            --peso-light:   #f4f6fb;
            --sidebar-w:    260px;
            --topbar-h:     60px;
        }

        * { box-sizing: border-box; }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background: var(--peso-light);
            margin: 0;
        }

        /* ---- TOP BAR ---- */
        #topbar {
            position: fixed;
            top: 0; left: var(--sidebar-w); right: 0;
            height: var(--topbar-h);
            background: #fff;
            border-bottom: 1px solid #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1.5rem;
            z-index: 100;
            box-shadow: 0 1px 4px rgba(0,0,0,.06);
        }

        #topbar .page-title {
            font-weight: 700;
            font-size: 1rem;
            color: var(--peso-blue);
        }

        #topbar .user-info {
            display: flex;
            align-items: center;
            gap: .75rem;
            font-size: .875rem;
        }

        #topbar .user-info .avatar {
            width: 36px; height: 36px;
            border-radius: 50%;
            background: var(--peso-blue);
            color: #fff;
            display: flex; align-items: center; justify-content: center;
            font-weight: 700;
            font-size: .85rem;
        }

        /* ---- MAIN CONTENT ---- */
        #main-content {
            margin-left: var(--sidebar-w);
            padding-top: calc(var(--topbar-h) + 1.5rem);
            padding-right: 1.5rem;
            padding-bottom: 2rem;
            padding-left: 1.5rem;
            min-height: 100vh;
        }

        /* ---- CARD DEFAULTS ---- */
        .card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 1px 6px rgba(0,0,0,.07);
        }
        .card-header {
            background: #fff;
            border-bottom: 1px solid #e9eef5;
            font-weight: 600;
            border-radius: 12px 12px 0 0 !important;
        }
    </style>
</head>
<body>

<?php include __DIR__ . '/sidebar.php'; ?>

<!-- TOP BAR -->
<div id="topbar">
    <span class="page-title">
        <i class="bi bi-chevron-right me-1 text-muted" style="font-size:.75rem;"></i>
        <?= htmlspecialchars($pageTitle) ?>
    </span>
    <div class="user-info">
        <div class="avatar"><?= strtoupper(substr($user['name'], 0, 1)) ?></div>
        <div>
            <div style="font-weight:600;line-height:1.2;"><?= htmlspecialchars($user['name']) ?></div>
            <div style="color:#94a3b8;font-size:.75rem;"><?= ucfirst($user['role']) ?></div>
        </div>
        <a href="/logout.php" class="btn btn-sm btn-outline-danger ms-2">
            <i class="bi bi-box-arrow-right"></i>
        </a>
    </div>
</div>

<!-- MAIN CONTENT WRAPPER -->
<div id="main-content">
