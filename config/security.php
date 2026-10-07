<?php
// ==========================================
// FILE: config/security.php
// FUNGSI: Proteksi XSS, CSRF, & Anti-Brute Force
// ==========================================

/**
 * 1. ANTI XSS (Cross-Site Scripting)
 * Wajib digunakan setiap kali melakukan "echo" data dari database ke HTML.
 * Mengubah tag script berbahaya menjadi entitas teks biasa.
 */
function escape($string) {
    return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

/**
 * 2. CSRF PROTECTION (Cross-Site Request Forgery)
 * Menghasilkan token acak yang disisipkan ke dalam form HTML.
 */
function generate_csrf_token() {
    if (empty($_SESSION['csrf_token'])) {
        // Buat token 32 byte yang sangat kuat
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Memvalidasi apakah token CSRF dari form cocok dengan token di session.
 * Menggunakan hash_equals untuk mencegah Timing Attacks.
 */
function verify_csrf_token($post_token) {
    if (isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $post_token)) {
        return true;
    }
    return false;
}

/**
 * 3. ANTI BRUTE FORCE (Proteksi Login)
 * Membatasi percobaan login untuk mencegah serangan tebak password.
 */
function check_brute_force($max_attempts = 5, $lockout_time = 300) {
    // 300 detik = 5 menit waktu tunggu (lockout)
    if (isset($_SESSION['login_attempts']) && $_SESSION['login_attempts'] >= $max_attempts) {
        $time_passed = time() - $_SESSION['last_attempt_time'];
        if ($time_passed < $lockout_time) {
            return false; // Akses ditolak (sedang dikunci)
        } else {
            // Waktu hukuman selesai, reset percobaan
            $_SESSION['login_attempts'] = 0; 
        }
    }
    return true; // Akses diizinkan
}

/**
 * Mencatat kegagalan login ke dalam session
 */
function record_failed_login() {
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = 1;
    } else {
        $_SESSION['login_attempts']++;
    }
    $_SESSION['last_attempt_time'] = time();
}
?>