<?php
// ============================================================
//  PESO SYSTEM — Login Page
//  File: /login.php
// ============================================================

session_start();

// If already logged in, go straight to dashboard
if (!empty($_SESSION['user_id'])) {
    header('Location: /peso-system/admin/index.php');
    exit;
}

require_once __DIR__ . '/config/database.php';

$error = '';

// ---- Handle Login Form Submission ----
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email']    ?? '');
    $password = trim($_POST['password'] ?? '');

    // Basic validation
    if (empty($email) || empty($password)) {
        $error = 'Please enter both email and password.';
    } else {
        $db   = getDB();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = ? AND status = 'active' LIMIT 1");
        $stmt->execute([$email]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // ✅ Login successful — set session
            session_regenerate_id(true);
            $_SESSION['user_id']    = $user['id'];
            $_SESSION['user_name']  = $user['full_name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_role']  = $user['role'];
            $_SESSION['login_time'] = time();

            header('Location: /peso-system/admin/index.php');
            exit;
        } else {
            // ❌ Wrong credentials
            $error = 'Invalid email or password. Please try again.';
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>PESO System — Admin Login</title>

    <!-- Bootstrap 5 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"/>
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=DM+Sans:wght@400;500;600&display=swap" rel="stylesheet"/>

    <style>
        :root {
            --blue:   #1a3a6b;
            --accent: #e8a020;
            --light:  #f4f6fb;
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'DM Sans', sans-serif;
            min-height: 100vh;
            display: flex;
            background: var(--light);
        }

        /* ---- LEFT PANEL ---- */
        .left-panel {
            width: 45%;
            background: var(--blue);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding: 3rem;
            position: relative;
            overflow: hidden;
        }

        /* decorative circles */
        .left-panel::before,
        .left-panel::after {
            content: '';
            position: absolute;
            border-radius: 50%;
            opacity: .07;
            background: #fff;
        }
        .left-panel::before { width: 400px; height: 400px; top: -120px; left: -120px; }
        .left-panel::after  { width: 300px; height: 300px; bottom: -80px; right: -80px; }

        .left-panel .logo-box {
            width: 70px; height: 70px;
            background: var(--accent);
            border-radius: 18px;
            display: flex; align-items: center; justify-content: center;
            font-family: 'Playfair Display', serif;
            font-size: 2rem;
            color: #fff;
            margin-bottom: 2rem;
            box-shadow: 0 8px 24px rgba(232,160,32,.35);
        }

        .left-panel h1 {
            font-family: 'Playfair Display', serif;
            color: #fff;
            font-size: 2rem;
            text-align: center;
            line-height: 1.3;
            margin-bottom: 1rem;
        }

        .left-panel p {
            color: rgba(255,255,255,.6);
            text-align: center;
            font-size: .9rem;
            max-width: 280px;
            line-height: 1.7;
        }

        .left-panel .badge-row {
            display: flex;
            gap: .5rem;
            margin-top: 2rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .left-panel .badge-row span {
            background: rgba(255,255,255,.1);
            color: rgba(255,255,255,.8);
            padding: .3rem .75rem;
            border-radius: 20px;
            font-size: .75rem;
            border: 1px solid rgba(255,255,255,.15);
        }

        /* ---- RIGHT PANEL ---- */
        .right-panel {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            animation: fadeUp .5s ease both;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        .login-card h2 {
            font-family: 'Playfair Display', serif;
            color: var(--blue);
            font-size: 1.75rem;
            margin-bottom: .4rem;
        }

        .login-card .subtitle {
            color: #94a3b8;
            font-size: .875rem;
            margin-bottom: 2rem;
        }

        .form-label {
            font-weight: 600;
            font-size: .85rem;
            color: #374151;
            margin-bottom: .4rem;
        }

        .form-control {
            border: 1.5px solid #e2e8f0;
            border-radius: 10px;
            padding: .7rem 1rem;
            font-size: .9rem;
            transition: border-color .2s, box-shadow .2s;
        }

        .form-control:focus {
            border-color: var(--blue);
            box-shadow: 0 0 0 3px rgba(26,58,107,.1);
            outline: none;
        }

        .input-group .form-control { border-radius: 10px 0 0 10px; }
        .input-group .btn-outline-secondary {
            border: 1.5px solid #e2e8f0;
            border-left: none;
            border-radius: 0 10px 10px 0;
            background: #fff;
            color: #94a3b8;
        }

        .btn-login {
            background: var(--blue);
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: .75rem;
            font-weight: 600;
            font-size: .95rem;
            width: 100%;
            margin-top: .5rem;
            transition: background .2s, transform .1s;
        }

        .btn-login:hover {
            background: #14305a;
            transform: translateY(-1px);
        }

        .btn-login:active { transform: translateY(0); }

        .alert-error {
            background: #fef2f2;
            border: 1px solid #fecaca;
            color: #dc2626;
            border-radius: 10px;
            padding: .75rem 1rem;
            font-size: .875rem;
            margin-bottom: 1.25rem;
            display: flex;
            align-items: center;
            gap: .5rem;
        }

        .footer-note {
            text-align: center;
            margin-top: 2rem;
            font-size: .75rem;
            color: #cbd5e1;
        }

        /* ---- RESPONSIVE ---- */
        @media (max-width: 768px) {
            .left-panel { display: none; }
            body { justify-content: center; }
        }
    </style>
</head>
<body>

    <!-- LEFT PANEL -->
    <div class="left-panel">
        <div class="logo-box">P</div>
        <h1>Public Employment Service Office</h1>
        <p>Connecting job seekers and employers through efficient employment services.</p>
        <div class="badge-row">
            <span>OJT</span>
            <span>SPES</span>
            <span>TUPAD</span>
            <span>Job Fair</span>
            <span>Livelihood</span>
            <span>OFW</span>
        </div>
    </div>

    <!-- RIGHT PANEL -->
    <div class="right-panel">
        <div class="login-card">
            <h2>Welcome back</h2>
            <p class="subtitle">Sign in to your admin account to continue.</p>

            <!-- Error Message -->
            <?php if ($error): ?>
            <div class="alert-error">
                <i class="bi bi-exclamation-circle-fill"></i>
                <?= htmlspecialchars($error) ?>
            </div>
            <?php endif; ?>

            <!-- Login Form -->
            <form method="POST" action="">

                <div class="mb-3">
                    <label class="form-label" for="email">Email Address</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder="admin@peso.gov"
                        value="<?= htmlspecialchars($_POST['email'] ?? '') ?>"
                        required
                        autofocus
                    />
                </div>

                <div class="mb-4">
                    <label class="form-label" for="password">Password</label>
                    <div class="input-group">
                        <input
                            type="password"
                            id="password"
                            name="password"
                            class="form-control"
                            placeholder="••••••••"
                            required
                        />
                        <button type="button" class="btn btn-outline-secondary" id="togglePassword">
                            <i class="bi bi-eye" id="eyeIcon"></i>
                        </button>
                    </div>
                </div>

                <button type="submit" class="btn-login">
                    <i class="bi bi-box-arrow-in-right me-2"></i>Sign In
                </button>

            </form>

            <div class="footer-note">
                PESO Admin System &copy; <?= date('Y') ?> &mdash; Authorized personnel only
            </div>
        </div>
    </div>

<script>
    // Toggle password visibility
    document.getElementById('togglePassword').addEventListener('click', function () {
        const input   = document.getElementById('password');
        const icon    = document.getElementById('eyeIcon');
        const isHidden = input.type === 'password';
        input.type    = isHidden ? 'text' : 'password';
        icon.className = isHidden ? 'bi bi-eye-slash' : 'bi bi-eye';
    });
</script>

</body>
</html>
