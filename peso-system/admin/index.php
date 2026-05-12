<?php
// ============================================================
//  PESO SYSTEM — Admin Dashboard
//  File: /admin/index.php
// ============================================================

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/includes/auth.php';

requireLogin(); // Redirect to login if not authenticated

$pageTitle = 'Dashboard';

// ---- Fetch summary counts from DB ---- 
// (These will return 0 until you create the tables — safe to leave as-is)
$db = getDB();

function safeCount(PDO $db, string $table): int {
    try {
        return (int) $db->query("SELECT COUNT(*) FROM `{$table}`")->fetchColumn();
    } catch (PDOException) {
        return 0;
    }
}

$stats = [
    'users'          => safeCount($db, 'users'),
    'ojt'            => safeCount($db, 'ojt_applicants'),
    'spes'           => safeCount($db, 'spes_applicants'),
    'jobfair'        => safeCount($db, 'jobfair_registrants'),
    'livelihood'     => safeCount($db, 'livelihood_applicants'),
    'tupad'          => safeCount($db, 'tupad_applicants'),
    'announcements'  => safeCount($db, 'announcements'),
];

include __DIR__ . '/includes/header.php';
?>

<!-- Page Header -->
<div class="d-flex align-items-center justify-content-between mb-4">
    <div>
        <h4 class="mb-0 fw-bold" style="color:#1a3a6b;">Welcome back, <?= htmlspecialchars(currentUser()['name']) ?> 👋</h4>
        <small class="text-muted"><?= date('l, F j, Y') ?></small>
    </div>
</div>

<!-- Stat Cards -->
<div class="row g-3 mb-4">

    <?php
    $cards = [
        ['label' => 'Registered Users',   'value' => $stats['users'],         'icon' => 'bi-people-fill',       'color' => '#1a3a6b'],
        ['label' => 'OJT Applicants',      'value' => $stats['ojt'],           'icon' => 'bi-briefcase-fill',    'color' => '#2563eb'],
        ['label' => 'SPES Applicants',     'value' => $stats['spes'],          'icon' => 'bi-mortarboard-fill',  'color' => '#7c3aed'],
        ['label' => 'Job Fair Registrants','value' => $stats['jobfair'],       'icon' => 'bi-people-fill',       'color' => '#059669'],
        ['label' => 'Livelihood',          'value' => $stats['livelihood'],    'icon' => 'bi-house-heart-fill',  'color' => '#d97706'],
        ['label' => 'TUPAD',               'value' => $stats['tupad'],         'icon' => 'bi-calendar-check-fill','color'=> '#dc2626'],
        ['label' => 'Announcements',       'value' => $stats['announcements'], 'icon' => 'bi-megaphone-fill',    'color' => '#0891b2'],
    ];

    foreach ($cards as $card): ?>
    <div class="col-6 col-md-4 col-xl-3">
        <div class="card h-100">
            <div class="card-body d-flex align-items-center gap-3 py-3">
                <div style="
                    width:48px; height:48px;
                    background: <?= $card['color'] ?>18;
                    border-radius:12px;
                    display:flex; align-items:center; justify-content:center;
                    flex-shrink:0;
                ">
                    <i class="bi <?= $card['icon'] ?>" style="font-size:1.4rem; color:<?= $card['color'] ?>;"></i>
                </div>
                <div>
                    <div class="fw-bold fs-4 lh-1" style="color:<?= $card['color'] ?>;">
                        <?= number_format($card['value']) ?>
                    </div>
                    <div class="text-muted" style="font-size:.8rem;"><?= $card['label'] ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<!-- Quick Links -->
<div class="row g-3">
    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header py-3">
                <i class="bi bi-lightning-charge-fill text-warning me-2"></i>Quick Actions
            </div>
            <div class="card-body">
                <div class="d-flex flex-wrap gap-2">
                    <a href="/admin/users/" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-person-plus me-1"></i>Add User
                    </a>
                    <a href="/admin/ojt/" class="btn btn-sm btn-outline-primary">
                        <i class="bi bi-briefcase me-1"></i>New OJT
                    </a>
                    <a href="/admin/jobfair/" class="btn btn-sm btn-outline-success">
                        <i class="bi bi-people me-1"></i>Job Fair
                    </a>
                    <a href="/admin/announcements.php" class="btn btn-sm btn-outline-warning">
                        <i class="bi bi-megaphone me-1"></i>Post Announcement
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-12 col-lg-6">
        <div class="card">
            <div class="card-header py-3">
                <i class="bi bi-info-circle-fill text-info me-2"></i>System Info
            </div>
            <div class="card-body">
                <table class="table table-sm mb-0" style="font-size:.875rem;">
                    <tr>
                        <td class="text-muted">PHP Version</td>
                        <td class="fw-semibold"><?= PHP_VERSION ?></td>
                    </tr>
                    <tr>
                        <td class="text-muted">Server Time</td>
                        <td class="fw-semibold"><?= date('h:i A') ?></td>
                    </tr>
                    <tr>
                        <td class="text-muted">Logged in as</td>
                        <td class="fw-semibold"><?= htmlspecialchars(currentUser()['email']) ?></td>
                    </tr>
                    <tr class="border-0">
                        <td class="text-muted border-0">Role</td>
                        <td class="fw-semibold border-0">
                            <span class="badge" style="background:#1a3a6b;">
                                <?= ucfirst(currentUser()['role']) ?>
                            </span>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/includes/footer.php'; ?>
