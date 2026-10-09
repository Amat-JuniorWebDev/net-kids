<?php include 'components/header.php'; ?>

<main class="main-content" id="beranda">
    <!-- Hero Section -->
    <section aria-labelledby="hero-title" class="hero-section">
        <div class="hero-grid">
            <!-- Kolom Kiri: Teks & Tombol CTA -->
            <div class="hero-content-col">
                <div class="hero-pill-badge">
                    <span class="sparkle">✨</span> Platform Edukasi Komputasi Anak SD
                </div>
                <h1 class="hero-headline" id="hero-title">
                    <span class="typing-text-wrapper"><span id="typed-target">Belajar Pola Pikir Programmer</span><span aria-hidden="true" class="typing-cursor">|</span></span><br>
                    <span class="highlight-gradient">Tanpa Mengetik Kode!</span>
                </h1>
                <p class="hero-subheadline">
                    Memperkenalkan konsep revolusioner <strong>Zero Syntax Coding</strong>. Anak-anak melatih logika pemecahan masalah, algoritma berpikir, dan keamanan digital melalui tantangan visual yang seru.
                </p>
                <div class="hero-cta-wrapper">
                    <a class="btn-cta-primary" href="#mulai">
                        <span class="btn-cta-icon">
                            <svg fill="none" height="20" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" width="20"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.84.7-2.13-.09-2.91a2.18 2.18 0 0 0-2.91-.09z"></path><path d="m12 15-3-3a22 22 0 0 1 2-3.95A12.88 12.88 0 0 1 22 2c0 2.72-.78 7.5-6 11a22.35 22.35 0 0 1-4 2z"></path></svg>
                        </span>
                        Mulai Petualangan
                    </a>
                    <a class="btn-cta-secondary" href="#fitur">
                        <span class="btn-cta-secondary-icon">
                            <svg fill="none" height="19" stroke="currentColor" stroke-width="2.2" viewBox="0 0 24 24" width="19"><rect height="12" rx="2" width="20" x="2" y="6"></rect><line x1="6" x2="10" y1="12" y2="12"></line></svg>
                        </span>
                        Jelajahi Fitur
                    </a>
                </div>
                
                <!-- Trust Badges -->
                <div class="trust-wrapper">
                    <div class="trust-item">
                        <span class="trust-icon green"><svg fill="none" height="14" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" width="14"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path><path d="m9 12 2 2 4-4"></path></svg></span>
                        <span class="trust-text">100% Aman & Ramah Anak</span>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <span class="trust-icon purple"><svg fill="none" height="14" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" width="14"><circle cx="12" cy="12" r="10"></circle></svg></span>
                        <span class="trust-text">Tanpa Sintaks Rumit</span>
                    </div>
                    <div class="trust-divider"></div>
                    <div class="trust-item">
                        <span class="trust-icon orange"><svg fill="none" height="14" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24" width="14"><circle cx="12" cy="8" r="6"></circle><path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path></svg></span>
                        <span class="trust-text">Sesuai Kurikulum</span>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan: Animasi Visual Buddy (SVG) -->
            <div class="hero-3d-col">
                <div class="hero-scene-card">
                    <div class="hero-scene-badge"><span class="pulse-dot"></span> Interaktif Buddy</div>
                    <div class="svg-container" style="width:100%; height:400px; display:flex; align-items:center; justify-content:center;">
                        <img src="assets/img/net-kids.svg" alt="NetKids Buddy" class="floating-svg" style="max-width:90%; max-height:90%; object-fit:contain;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section" id="fitur">
        <div class="section-header">
            <span class="section-eyebrow">Modul Belajar Interaktif</span>
            <h2 class="section-title">3 Pilar Kecakapan Digital Anak</h2>
        </div>
        <div class="cards-grid">
            <!-- Kartu 1 -->
            <article class="card-glass card-1">
                <div class="card-accent-pill">● Logika Berpikir</div>
                <div class="card-icon-bubble">
                    <!-- Menggunakan tag object agar animasi SVG berjalan -->
                    <object type="image/svg+xml" data="assets/img/jurnal-3d.svg" style="width: 75%; height: 75%; pointer-events: none;"></object>
                </div>
                <h3 class="card-title">Jurnal Algoritma</h3>
                <p class="card-description">Mengajarkan anak merumuskan keputusan logis sehari-hari melalui analogi visual: "JIKA hujan, MAKA pakai payung".</p>
                <div class="card-meta-box">
                    <span>🎯 Level: Dasar</span>
                    <span style="color: var(--color-purple); font-weight: 800;">4 Misi</span>
                </div>
            </article>
            
            <!-- Kartu 2 -->
            <article class="card-glass card-2">
                <div class="card-accent-pill">● Dekomposisi Masalah</div>
                <div class="card-icon-bubble">
                    <object type="image/svg+xml" data="assets/img/problem-3d.svg" style="width: 75%; height: 75%; pointer-events: none;"></object>
                </div>
                <h3 class="card-title">Problem Breaker</h3>
                <p class="card-description">Melatih kemampuan memecah tantangan besar menjadi langkah-langkah kecil yang mudah dikelola layaknya insinyur.</p>
                <div class="card-meta-box">
                    <span>🧩 Step-by-Step</span>
                    <span style="color: #0284c7; font-weight: 800;">6 Puzzle</span>
                </div>
            </article>
            
            <!-- Kartu 3 -->
            <article class="card-glass card-3">
                <div class="card-accent-pill">● Keamanan Siber</div>
                <div class="card-icon-bubble">
                    <object type="image/svg+xml" data="assets/img/brankas-3d.svg" style="width: 75%; height: 75%; pointer-events: none;"></object>
                </div>
                <h3 class="card-title">Brankas Rahasia</h3>
                <p class="card-description">Memperkenalkan perlindungan data pribadi dan kekuatan kata sandi lewat simulasi brankas interaktif.</p>
                <div class="card-meta-box">
                    <span>🔐 Proteksi Data</span>
                    <span style="color: var(--color-orange); font-weight: 800;">3 Simulasi</span>
                </div>
            </article>
        </div>
    </section>

    <!-- Assurance Banner -->
    <section class="assurance-banner" id="orangtua">
        <div class="assurance-content">
            <span class="assurance-tag">Khusus Pendampingan Orang Tua</span>
            <h3 class="assurance-heading">Dirancang Bersama Pendidik & Ahli Kognitif</h3>
            <p class="assurance-text" style="color: var(--color-slate-muted);">NetKids bebas iklan dan dilengkapi dashboard pantauan khusus agar orang tua dapat melihat perkembangan logika anak secara transparan.</p>
        </div>
        <div>
            <a class="btn-assurance" href="#panduan">Lihat Panduan Ortu</a>
        </div>
    </section>
</main>

<!-- Load Custom Script Animasi NetKids -->
<script src="assets/js/script.js"></script>

<?php include 'components/footer.php'; ?>