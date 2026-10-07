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

```text
net-kids/
├── assets/                 # Gambar (.png/.svg), CSS custom, JS spesifik
├── config/                 # Inti sistem
│   ├── database.php        # Koneksi PDO (Singleton/Procedural)
│   └── security.php        # Fungsi validasi input & CSRF generator
├── components/             # Bagian UI yang di-include (DRY principle)
│   ├── header.php          # <head>, Tailwind CDN, Navigasi
│   ├── footer.php          # Penutup body, JS global
│   └── alert.php           # Template flash message (Sukses/Error)
├── pages/                  # Lapisan Presentasi (UI/HTML)
│   ├── auth/               # login.php, register.php, logout.php
│   ├── anak/               # jurnal.php, brankas.php, jejak.php
│   └── ortu/               # dashboard.php, pantau_anak.php
├── actions/                # Lapisan Logika Bisnis (Proses Form/CRUD, Tanpa HTML)
│   ├── auth_process.php    
│   └── task_process.php    
├── AI_AGENT_DOCS.md        # Dokumen PRD ini
└── index.php               # Halaman Pendaratan (Landing Page)