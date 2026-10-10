# 🤖 MASTER PRD & AI AGENT GUIDE - PROYEK NETKIDS

## 1. IDENTITAS & VISI PROYEK

* **Nama Proyek:** NetKids (Platform Utilitas Edukasi Anak)
* **Kompetisi:** M-One Telkomsel Coding Competition 2026
* **Kategori & Subtema:** Kategori Umum - Web Education for Kids (Fokus: Coding & Literasi Digital)
* **Visi:** Mengubah anak-anak dari sekadar "konsumen konten" menjadi pemecah masalah (*problem solver*) melalui penerapan **Computational Thinking (Berpikir Komputasional)** dalam keseharian, serta membekali mereka dengan literasi keamanan digital dasar.
* **Problem Statement:** Anak SD masa kini rentan terhadap bahaya siber dan kesulitan mengatur prioritas harian. Aplikasi yang ada terlalu fokus pada *gaming*. Di sisi lain, mengajarkan *coding syntax* (mengetik kode) kepada anak SD sering kali tidak efektif dan mematikan minat mereka.
* **Solusi Pokok:** Menciptakan *tools* produktivitas harian berbalut UI ramah anak. Platform ini mengajarkan **Pola Pikir Programmer (Zero Syntax Coding)**—seperti dekomposisi masalah dan logika bersyarat (If-Else)—tanpa mengharuskan anak mengetik satu baris kode pemrograman pun.

## 2. PERSONA PENGGUNA (USER PROFILES)

Sistem ini melayani dua jenis pengguna dengan antarmuka dan hak akses yang sangat berbeda:

1. **User A: Anak SD (Kelas 1-6)**
   * **Karakteristik:** Rentang perhatian pendek, butuh visual menarik, butuh instruksi singkat.
   * **Akses:** Halaman interaktif bergaya *gamified* (namun esensinya utilitas/pembelajaran).
   * **Goal:** Membuat jadwal harian berbasis logika, memahami konsep *password*, dan jejak digital.

2. **User B: Orang Tua / Guru**
   * **Karakteristik:** Fokus pada utilitas, pemantauan, dan pelaporan.
   * **Akses:** *Dashboard* analitik profesional.
   * **Goal:** Memantau tugas (*to-do list*) anak, melihat progres belajar, dan memvalidasi penyelesaian tugas.

## 3. TECH STACK & ENVIRONMENT

* **Frontend:** HTML5, Tailwind CSS (via CDN), Vanilla JavaScript.
* **Backend:** PHP Native (PHP 8.x) dengan pendekatan Modular-Procedural.
* **Database:** MySQL/MariaDB menggunakan PDO (PHP Data Objects).
* **Environment Lomba:** Web harus di-*deploy* ke *shared hosting* standar (tanpa Node.js server), sehingga penggunaan PHP Native adalah pilihan paling optimal.
* **Version Control:** Git & GitHub (Public).

## 4. ARSITEKTUR FOLDER (MODULAR PHP)

Struktur proyek wajib mematuhi pemisahan (*separation of concerns*) berikut untuk menghindari *spaghetti code*:

net-kids/
├── assets/                 # Folder Aset Statis
│   ├── css/
│   │   ├── style.css       # CSS Global (untuk Header, Footer, Landing Page)
│   │   └── pages/          # CSS Modular terpisah khusus tiap bagian
│   │       ├── anak/
│   │       ├── auth/       # cth: login_anak.css
│   │       ├── guru/
│   │       └── ortu/
│   ├── js/
│   │   └── pages/          # JS Modular terpisah khusus tiap bagian
│   │       ├── anak/
│   │       ├── auth/       # cth: login_anak.js
│   │       ├── guru/
│   │       └── ortu/
│   └── img/                # Gambar, SVG, icon, dan Animasi Lottie (security-animasi.json)
├── config/                 # Inti sistem
│   ├── database.php        # Koneksi PDO (Singleton/Procedural)
│   └── security.php        # Fungsi validasi input & CSRF generator
├── components/             # Bagian UI yang di-include (DRY principle)
│   ├── header.php          # <head>, Navigasi, pemanggilan CSS
│   ├── footer.php          # Penutup body, informasi hak cipta
│   └── alert.php           # Template flash message (Sukses/Error)
├── pages/                  # Lapisan Presentasi (UI/HTML)
│   ├── auth/               # login_anak.php, login_guru.php, register.php
│   ├── anak/               # jurnal.php, brankas.php, jejak.php
│   ├── guru/               # (Folder baru) Halaman pantauan & dashboard guru
│   └── ortu/               # dashboard.php, pantau_anak.php
├── actions/                # Lapisan Logika Bisnis (Backend PHP)
│   └── pages/              # Pemrosesan data yang dibuat modular
│       ├── anak/
│       ├── auth/           # cth: login_anak_process.php
│       ├── guru/
│       └── ortu/
├── AI_AGENT_DOCS.md        # Dokumen PRD ini (silakan di-update dengan struktur ini)
└── index.php               # Halaman Pendaratan (Landing Page)