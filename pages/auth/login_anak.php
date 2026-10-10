<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk Anak - NetKids</title>
    <!-- Hubungkan ke file CSS yang baru dibuat -->
   <link rel="stylesheet" href="../../assets/css/pages/auth/login_anak.css?v=<?php echo filemtime('../../assets/css/pages/auth/login_anak.css'); ?>">
</head>
<body>

    <!-- Latar Belakang Dekoratif Orbs -->
    <div class="fixed-orbs">
        <div class="orb-glow orb-1"></div>
        <div class="orb-glow orb-2"></div>
        <div class="orb-glow orb-3"></div>
    </div>

    <!-- MAIN SPLIT LAYOUT -->
    <main class="layout-wrapper">
        
        <!-- ==================== KOLOM KIRI: FORMULIR LOGIN ==================== -->
        <section class="col-left">
            <div>
                <!-- TOP NAV / BRAND HEADER -->
                <div class="top-nav">
                    <a href="../../index.php" class="btn-back">
                        <svg width="16" height="16" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"></path>
                        </svg>
                        <span>Kembali ke Beranda</span>
                    </a>
                    <a href="../../index.php" class="brand-logo">
                        <div class="brand-icon">N</div>
                        <span class="brand-text">Net<span>Kids</span></span>
                    </a>
                </div>

                <!-- Role Badge & Judul -->
                <div class="role-badge-icon">
                    <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                        <circle cx="12" cy="12" r="10"></circle>
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                        <line x1="9" y1="9" x2="9.01" y2="9"></line>
                        <line x1="15" y1="9" x2="15.01" y2="9"></line>
                    </svg>
                </div>
                <h1 class="page-title">
                    Masuk ke Akun <span class="title-gradient">NetKids</span>
                </h1>
                <p class="page-desc">
                    Pilih peranmu dan masukkan identitas akun untuk mulai petualangan koding & logika!
                </p>
            </div>

            <!-- FORM SECTION CONTAINER -->
            <div class="form-container">
                
                <!-- ROLE SELECTOR PILL TABS -->
                <div class="role-tabs-container">
                    <!-- Tab Anak (Status: Aktif) -->
                    <a href="login_anak.php" class="role-tab active">
                        <svg fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10"></circle>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 14s1.5 2 4 2 4-2 4-2"></path>
                            <line x1="9" y1="9" x2="9.01" y2="9"></line>
                            <line x1="15" y1="9" x2="15.01" y2="9"></line>
                        </svg>
                        <span>Masuk sebagai Anak</span>
                    </a>
                    
                    <!-- Tab Ortu/Guru (Status: Inaktif, Mengarah ke file login guru) -->
                    <a href="login_guru.php" class="role-tab inactive">
                        <svg fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                            <circle cx="6" cy="12" r="4"></circle>
                            <circle cx="18" cy="12" r="4"></circle>
                            <path stroke-linecap="round" stroke-linejoin="round" d="M10 12h4M6 8l3-4M18 8l-3-4"></path>
                        </svg>
                        <span>Masuk sebagai Ortu/Guru</span>
                    </a>
                </div>

                <!-- Form Login Anak -->
                <form action="../../actions/auth/login_anak_process.php" method="POST">
                    
                    <!-- Field Username Anak -->
                    <div class="form-group">
                        <div class="form-label-row">
                            <label for="kidsUsername" class="form-label">NAMA PANGGILAN / USERNAME</label>
                            <span class="badge-id">ID Petualang</span>
                        </div>
                        <div class="input-wrapper">
                            <input type="text" id="kidsUsername" name="username" class="form-input" placeholder="Ketik nama panggilan atau ID petualang" required autocomplete="off">
                            <div class="input-icon">
                                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>

                    <!-- Field PIN Rahasia Anak (4 Angka) -->
                    <div class="form-group">
                        <div class="form-label-row">
                            <label class="form-label">PIN RAHASIA ANAK (4 ANGKA)</label>
                            <span class="badge-pin">4 Digit</span>
                        </div>
                        <div class="pin-grid">
                            <input type="password" name="pin[]" class="pin-digit" maxlength="1" inputmode="numeric" pattern="[0-9]*" required autocomplete="off">
                            <input type="password" name="pin[]" class="pin-digit" maxlength="1" inputmode="numeric" pattern="[0-9]*" required autocomplete="off">
                            <input type="password" name="pin[]" class="pin-digit" maxlength="1" inputmode="numeric" pattern="[0-9]*" required autocomplete="off">
                            <input type="password" name="pin[]" class="pin-digit" maxlength="1" inputmode="numeric" pattern="[0-9]*" required autocomplete="off">
                        </div>
                        <div class="pin-note">
                            <span style="font-size: 0.875rem;">🔒</span>
                            <span>PIN rahasia diberikan oleh ayah, bunda, atau bapak/ibu guru kelas.</span>
                        </div>
                    </div>

                    <!-- Tombol CTA Utama Anak -->
                    <button type="submit" class="btn-submit">
                        <span>🚀 Mulai Petualangan & Belajar</span>
                        <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </form>

                <!-- Tautan Registrasi Bawah -->
                <div class="register-container">
                    Belum punya akun petualang? 
                    <a href="register.php" class="register-link">Daftar di sini</a>
                </div>

            </div>

            <!-- FOOTER KOLOM KIRI -->
            <div class="left-footer">
                <span>© 2026 NetKids • M-One Telkomsel Coding Competition</span>
                <span class="hidden-sm">Versi Ramah Anak v2.4</span>
            </div>
        </section>

        <!-- ==================== KOLOM KANAN: PANEL KARTU INFORMASI / PROTEKSI ==================== -->
        <section class="col-right">
            <div class="glass-card-right">
                <div class="card-glow-top"></div>
                
                <!-- ANIMASI 3D LOTTIE -->
                <div class="lottie-3d-box">
                    <!-- Ingat: Ganti login-3d.svg dengan nama asli file gambarmu! -->
                    <object type="image/svg+xml" data="../../assets/img/login-anak.svg" style="width: 100%; height: 100%; pointer-events: none;"></object>
                </div>

                <div class="card-pill-badge">
                    <span>🛡️</span>
                    <span>Proteksi Cerdas NetKids</span>
                </div>
                
                <h2 class="card-title">Akses Terproteksi & Ramah Anak</h2>
                <p class="card-desc">Sistem keamanan NetKids memastikan lingkungan belajar digital yang aman dari konten berbahaya, bebas iklan, dan melindungi privasi anak sesuai standar komputasi ramah anak.</p>

                <!-- 3 TRUST INDICATOR CARDS -->
                <div class="feature-list-grid">
                    
                    <!-- 1. Emerald -->
                    <div class="feat-item emerald">
                        <div class="feat-icon emerald">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                        </div>
                        <div>
                            <div class="feat-text-title">100% Bebas Iklan & Aman</div>
                            <div class="feat-text-desc">Bebas pelacak eksternal serta konten komersial</div>
                        </div>
                    </div>

                    <!-- 2. Indigo -->
                    <div class="feat-item indigo">
                        <div class="feat-icon indigo">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                        </div>
                        <div>
                            <div class="feat-text-title">Dashboard Pantauan Orang Tua</div>
                            <div class="feat-text-desc">Laporan kemajuan logika dan waktu bermain real-time</div>
                        </div>
                    </div>

                    <!-- 3. Amber -->
                    <div class="feat-item amber">
                        <div class="feat-icon amber">
                            <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <div class="feat-text-title">Standar Kurikulum Koding SD</div>
                            <div class="feat-text-desc">Dirancang terstruktur untuk anak usia 6 - 12 tahun</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

    <!-- Panggil Javascript Auto-Tab -->
    <script src="../../assets/js/pages/auth/login_anak.js"></script>
</body>
</html>