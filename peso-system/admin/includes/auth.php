<?php
// ============================================================
//  PESO SYSTEM — Authentication & Session Guard
//  File: /admin/includes/auth.php
//  Include this at the TOP of every admin page.
// ============================================================

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// ----------------------------------------------------------
//  Role constants — adjust labels to match your DB values
// ----------------------------------------------------------
define('ROLE_ADMIN',  'admin');
define('ROLE_STAFF',  'staff');
define('ROLE_VIEWER', 'viewer');

// ----------------------------------------------------------
//  requireLogin()
//  Call on any admin page that needs authentication.
// ----------------------------------------------------------
function requireLogin(): void {
    if (empty($_SESSION['user_id'])) {
        header('Location: /login.php?redirect=' . urlencode($_SERVER['REQUEST_URI']));
        exit;
    }
}

// ----------------------------------------------------------
//  requireRole(string|array $roles)
//  Call when a page is restricted to specific roles.
//  Example: requireRole(ROLE_ADMIN);
//           requireRole([ROLE_ADMIN, ROLE_STAFF]);
// ----------------------------------------------------------
function requireRole(string|array $roles): void {
    requireLogin(); // Must be logged in first

    $allowed = is_array($roles) ? $roles : [$roles];

    if (!in_array($_SESSION['user_role'] ?? '', $allowed, true)) {
        http_response_code(403);
        include __DIR__ . '/../../errors/403.php'; // Optional: create a 403 page
        exit;
    }
}

// ----------------------------------------------------------
//  isLoggedIn() — returns bool (useful for conditionals in views)
// ----------------------------------------------------------
function isLoggedIn(): bool {
    return !empty($_SESSION['user_id']);
}

// ----------------------------------------------------------
//  currentUser() — returns array of session user data
// ----------------------------------------------------------
function currentUser(): array {
    return [
        'id'       => $_SESSION['user_id']       ?? null,
        'name'     => $_SESSION['user_name']     ?? 'Unknown',
        'email'    => $_SESSION['user_email']    ?? '',
        'role'     => $_SESSION['user_role']     ?? '',
        'avatar'   => $_SESSION['user_avatar']   ?? null,
    ];
}

// ----------------------------------------------------------
//  hasRole(string $role) — inline role check, returns bool
// ----------------------------------------------------------
function hasRole(string $role): bool {
    return ($_SESSION['user_role'] ?? '') === $role;
}

// ----------------------------------------------------------
//  setUserSession(array $user) — call after successful login
// ----------------------------------------------------------
function setUserSession(array $user): void {
    session_regenerate_id(true); // Prevent session fixation
    $_SESSION['user_id']    = $user['id'];
    $_SESSION['user_name']  = $user['full_name'];
    $_SESSION['user_email'] = $user['email'];
    $_SESSION['user_role']  = $user['role'];
    $_SESSION['user_avatar']= $user['avatar'] ?? null;
    $_SESSION['login_time'] = time();
}

// ----------------------------------------------------------
//  destroySession() — call on logout
// ----------------------------------------------------------
function destroySession(): void {
    $_SESSION = [];
    if (ini_get('session.use_cookies')) {
        $params = session_get_cookie_params();
        setcookie(session_name(), '', time() - 42000,
            $params['path'], $params['domain'],
            $params['secure'], $params['httponly']
        );
    }
    session_destroy();
}

// ----------------------------------------------------------
//  Auto-run: just including this file ensures session is started.
//  Call requireLogin() or requireRole() explicitly per page.
// ----------------------------------------------------------
