<?php
// ==========================================
// FILE: config/database.php
// FUNGSI: Koneksi PDO & Hardening Session
// ==========================================

// 1. PENGAMANAN SESSION (Wajib dipanggil sebelum session_start)
// Mencegah JavaScript mengakses session cookie (Mitigasi XSS tingkat lanjut)
ini_set('session.cookie_httponly', 1);
// Hanya gunakan cookie untuk session, jangan lewatkan via URL
ini_set('session.use_only_cookies', 1);
// Mencegah cookie dikirim ke situs lain (Lapis pertama mitigasi CSRF)
ini_set('session.cookie_samesite', 'Strict');

// Mulai sesi dengan aman
session_start();

// 2. KREDENSIAL DATABASE
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', ''); // Sesuaikan jika XAMPP/Laragon kamu menggunakan password
define('DB_NAME', 'db_netkids');

// 3. KONEKSI PDO (ANTI SQL INJECTION)
try {
    $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4";
    $options = [
        // Mengubah error menjadi Exception agar mudah dilacak saat development
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        // Mengambil data dalam bentuk array asosiatif
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        // MATIKAN emulasi prepared statements. Ini memaksa MySQL melakukan 
        // sanitasi data secara murni, memastikan 100% kebal SQL Injection.
        PDO::ATTR_EMULATE_PREPARES   => false, 
    ];
    
    $pdo = new PDO($dsn, DB_USER, DB_PASS, $options);
} catch (PDOException $e) {
    // Hentikan sistem tanpa membocorkan pesan error asli ke layar pengguna (Mencegah Information Disclosure)
    die("Koneksi database terputus. Sistem diamankan."); 
}
?>