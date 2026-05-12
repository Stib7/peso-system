<?php
// ============================================================
//  PESO SYSTEM — Database Configuration
//  File: /config/database.php
// ============================================================

define('DB_HOST', 'localhost');
define('DB_NAME', 'peso_system');
define('DB_USER', 'root');       // Change to your DB username
define('DB_PASS', '');           // Change to your DB password
define('DB_CHARSET', 'utf8mb4');

/**
 * Returns a PDO connection instance.
 * Uses a static variable so the connection is reused (singleton-lite).
 */
function getDB(): PDO {
    static $pdo = null;

    if ($pdo === null) {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET;

        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,   // Throw exceptions on error
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,         // Return arrays by default
            PDO::ATTR_EMULATE_PREPARES   => false,                    // Use real prepared statements
        ];

        try {
            $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
        } catch (PDOException $e) {
            // In production, log this instead of displaying it
            error_log("Database connection failed: " . $e->getMessage());
            die(json_encode([
                'success' => false,
                'message' => 'Database connection failed. Please contact the administrator.'
            ]));
        }
    }

    return $pdo;
}
