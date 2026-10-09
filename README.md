# 🚀 NetKids - Platform Utilitas Edukasi Anak

**M-One Telkomsel Coding Competition 2026**  
**Kategori:** Umum - Web Education for Kids  
**Tema:** Innovating Education Through Technology

---

## 🌐 Live Demo & Akses Aplikasi
Aplikasi ini telah di-deploy dan dapat diakses secara langsung melalui tautan berikut:
**👉 [MASUKKAN_LINK_DOMAIN_KAMU_DI_SINI]**

*(Catatan: Silakan gunakan link di atas untuk mencoba fitur aplikasi secara langsung tanpa perlu instalasi).*

---

## 📌 Tentang Proyek
**NetKids** adalah sebuah platform utilitas edukasi yang dirancang khusus untuk anak Sekolah Dasar (SD). Aplikasi ini bertujuan untuk mengubah anak-anak dari "konsumen pasif" menjadi pemecah masalah (*problem solver*) melalui penerapan **Computational Thinking (Zero Syntax Coding)** dan literasi keamanan digital dasar.

Alih-alih mengajarkan anak mengetik kode pemrograman yang rumit, NetKids melatih pola pikir (*mindset*) programmer dalam keseharian, seperti logika kondisional (*If-Else*) dan dekomposisi masalah, melalui *tools* produktivitas harian yang ramah anak.

## ✨ Fitur Utama
1. **Sistem Multi-Role:** Akses terpisah dan aman untuk `Anak` (Antarmuka Interaktif) dan `Orang Tua/Guru` (Dashboard Pemantauan).
2. **Jurnal Algoritma:** Fitur *To-Do List* berbasis logika kondisional untuk melatih pemikiran *Cause-and-Effect* (Contoh: `[JIKA] Hujan, [MAKA] Bawa Payung`).
3. **Problem Breaker (Dekomposisi):** Alat bantu untuk memecah tugas besar (misal: PR Sekolah) menjadi langkah-langkah kecil yang mudah diselesaikan.
4. **Brankas Rahasia:** Simulasi visual enkripsi kata sandi untuk edukasi keamanan siber dasar.

## 🛠️ Tech Stack & Keamanan
- **Frontend:** HTML5, Tailwind CSS (via CDN), Vanilla JavaScript. UI bergaya *Glassmorphism*.
- **Backend:** PHP Native (PHP 8.x) - Modular & Procedural.
- **Database:** MySQL / MariaDB.
- **Keamanan:** 
  - Koneksi database menggunakan **PDO Prepared Statements** (Anti SQL-Injection).
  - Validasi Input & **CSRF Token** protection.
  - Sanitasi Output menggunakan `htmlspecialchars()` (Anti XSS).

---

## 💻 Pengujian Kode Secara Lokal (Untuk Dewan Juri)
Bagi dewan juri pemeriksa kode (Code Reviewer) yang ingin menguji *source code* ini secara lokal melalui XAMPP/Laragon, silakan ikuti langkah berikut:

### 1. Clone Repository
Buka terminal atau command prompt, lalu jalankan perintah berikut:
```bash
git clone [https://github.com/Amat-JuniorWebDev/net-kids.git](https://github.com/Amat-JuniorWebDev/net-kids.git)

### 2. Konfigurasi Database
* Pastikan Apache dan MySQL sudah berjalan di XAMPP/Laragon Anda.
* Buka phpMyAdmin melalui browser di `http://localhost/phpmyadmin`.
* Buat database baru dengan nama `db_netkids`.
* Import file `db_netkids.sql` (tersedia di dalam folder utama proyek ini) ke dalam database yang baru dibuat.

### 3. Menjalankan Aplikasi
* Pastikan folder `net-kids` sudah berada di dalam direktori server lokal Anda (folder `htdocs` untuk XAMPP atau folder `www` untuk Laragon).
* Buka browser dan akses aplikasi melalui URL berikut: `http://localhost/net-kids`