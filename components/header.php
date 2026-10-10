<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NetKids - Belajar Pola Pikir Programmer Tanpa Mengetik Kode</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800;900&family=Quicksand:wght@600;700;800&display=swap" rel="stylesheet">
    
    <!-- Link ke Native CSS kita -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo filemtime('assets/css/style.css'); ?>">
</head>
<body>
    <!-- Decorative Ambient Orbs -->
    <div aria-hidden="true" class="ambient-orb orb-1"></div>
    <div aria-hidden="true" class="ambient-orb orb-2"></div>
    <div aria-hidden="true" class="ambient-orb orb-3"></div>

    <!-- Header / Navbar -->
    <header class="site-header">
        <div class="navbar-glass">
            <!-- Logo N & Teks (Struktur tetap, ukuran diatur via CSS) -->
            <a aria-label="NetKids Beranda" class="brand-logo" href="index.php">
                <div class="logo-badge">N</div>
                <div class="brand-title">Net<span>Kids</span></div>
            </a>
            
            <!-- Menu Navigasi (TIDAK DIUBAH) -->
            <nav aria-label="Navigasi Utama" class="nav-links">
                <a class="nav-item active" href="#tentang">Tentang</a>
                <a class="nav-item" href="#fitur">fitur</a>
                <a class="nav-item" href="#orangtua">Untuk Orang Tua</a>
            </nav>
            
            <!-- Tombol CTA (Daftar & Masuk) -->
            <div class="header-actions">
                
                <!-- Tombol Daftar (Sekarang pakai warna Ghost/Transparan) -->
                <a aria-label="Daftar Akun NetKids" class="btn-login-ghost" href="pages/auth/register.php">
                    <svg fill="none" height="18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" viewBox="0 0 24 24" width="18">
                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="8.5" cy="7" r="4"></circle>
                        <line x1="20" y1="8" x2="20" y2="14"></line>
                        <line x1="23" y1="11" x2="17" y2="11"></line>
                    </svg>
                    Daftar
                </a>

                <!-- Tombol Masuk (Sekarang pakai warna Oranye) -->
                <a aria-label="Masuk ke Akun NetKids" class="btn-register-primary" href="pages/auth/login_anak.php">
                    <svg fill="none" height="18" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" viewBox="0 0 24 24" width="18">
                        <path d="M15 3h4a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-4"></path>
                        <polyline points="10 17 15 12 10 7"></polyline>
                        <line x1="15" x2="3" y1="12" y2="12"></line>
                    </svg>
                    Masuk
                </a>
                
            </div>
        </div>
    </header>