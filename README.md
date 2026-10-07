# 🚀 NetKids - Platform Utilitas Edukasi Anak

**M-One Telkomsel Coding Competition 2026**  
**Kategori:** Umum - Web Education for Kids  
**Tema:** Innovating Education Through Technology

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

## 💻 Cara Instalasi & Menjalankan (Localhost / XAMPP)
Bagi dewan juri atau penguji yang ingin menjalankan proyek ini secara lokal, ikuti langkah berikut:

1. **Clone Repository:**
   
```bash
   git clone [https://github.com/Amat-JuniorWebDev/net-kids.git](https://github.com/Amat-JuniorWebDev/net-kids.git)