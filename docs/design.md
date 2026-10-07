# 🎨 MASTER DESIGN SYSTEM & UI GUIDELINES - PROYEK NETKIDS

## 1. IDENTITAS VISUAL & KONSEP UTAMA

* **Gaya Desain:** Soft UI / Modern Playful / Glassmorphism Ringan.
* **Karakteristik:** Elemen antarmuka melengkung ekstrem (*bubbly/rounded*), bayangan lembut (*soft drop shadows*), latar belakang pastel bergradasi, dan tata letak berbasis kartu (*card-based layout*).
* **Pendekatan:** *Mobile-first*. Antarmuka dirancang agar terasa seperti aplikasi *mobile* bawaan (*native app*), memaksimalkan ruang vertikal dan menggunakan navigasi bawah (*floating bottom navigation*).
* **Visi Visual:** Menciptakan lingkungan digital yang aman, ramah, dan tidak mengintimidasi bagi anak SD, tanpa kehilangan fungsionalitas utilitas (*tools*).

## 2. PALET WARNA (TAILWIND CSS)

Berdasarkan referensi visual, NetKids menggunakan komposisi warna yang cerah namun lembut pada mata:

* **Background Utama (Latar Belakang Layar):**
  * Gradien lembut ungu ke biru muda (mengurangi *eye-strain*).
  * *Tailwind:* `bg-gradient-to-br from-indigo-50 via-purple-50 to-blue-50`

* **Warna Primer (Teks Utama & Elemen Gelap):**
  * Navy pekat / Biru dongker (memberikan kontras tinggi agar teks mudah dibaca oleh anak).
  * *Tailwind:* `text-slate-900` atau `bg-slate-900`

* **Warna Aksen & Interaksi (Tombol Aksi & Highlight):**
  * Oranye / Peach (digunakan untuk tombol *Call-to-Action* seperti "Mulai", "Simpan", atau penanda menu aktif).
  * *Tailwind:* `bg-orange-400` atau `bg-orange-500`

* **Warna Kartu (Card Background):**
  * Putih bersih atau putih transparan (memberikan efek kaca/bersih).
  * *Tailwind:* `bg-white` atau `bg-white/80 backdrop-blur-md`

* **Warna Progres & Dekorasi:**
  * Ungu medium (untuk *progress bar*, ikon, dan elemen dekoratif sekunder).
  * *Tailwind:* `bg-purple-500` / `text-purple-600`

## 3. TIPOGRAFI

Pemilihan *font* ditujukan untuk tingkat keterbacaan (*readability*) maksimal bagi anak-anak yang baru lancar membaca.

* **Heading / Judul Utama:** `Quicksand` atau `Nunito` (Font *sans-serif* dengan ujung membulat yang terkesan ramah dan informal).
* **Body / Teks Deskripsi:** `Inter` atau `Nunito` (Bersih dan proporsional untuk teks instruksi).
* **Aturan Sizing:** Judul berukuran besar (`text-2xl` hingga `text-4xl`) dengan ketebalan ekstra (`font-extrabold`). Hindari penggunaan teks paragraf yang panjang.

## 4. KOMPONEN UI INTI (UI COMPONENTS)

### A. Tombol (Buttons)
Semua tombol *Call-to-Action* wajib berbentuk kapsul (bulat penuh di ujung) untuk kesan ramah anak.

* **Tombol Utama (Mulai/Simpan):** Latar oranye, teks putih, font tebal.
  * *Class:* `bg-orange-400 hover:bg-orange-500 text-white rounded-full px-6 py-3 font-bold shadow-md transition-transform hover:scale-105`
* **Tombol Sekunder (Kembali/Batal):** Latar navy gelap atau *ghost button* dengan teks putih.
  * *Class:* `bg-slate-900 text-white rounded-full px-6 py-3 font-bold`

### B. Kartu Konten (Cards)
Menggunakan sudut yang sangat melengkung untuk kesan empuk (*bubbly*).

* **Class Dasar:** `bg-white/90 rounded-[2rem] p-6 shadow-xl shadow-purple-200/50 border border-white`
* **Implementasi Spesifik:**
  * Kartu **Jurnal Algoritma** akan memiliki *header* ungu dan bar progres di dalamnya.
  * Kartu **Brankas Rahasia** akan menampilkan ikon gembok berukuran besar di tengah.

### C. Floating Bottom Navigation (Navigasi Bawah)
Khas aplikasi modern (khusus tampilan *mobile*), menu diletakkan melayang di bagian bawah layar.

* **Warna Latar:** Navy pekat (`bg-slate-900`).
* **Menu Aktif:** Diberi latar kapsul warna oranye (`bg-orange-400 rounded-full`).
* **Ikon:** Home (Beranda), Book (Jurnal), Shield (Brankas), List (Dekomposisi).

### D. Progress Bar (Bilah Kemajuan)
Digunakan di *Dashboard* Anak untuk visualisasi penyelesaian modul (Gamifikasi ringan).

* **Latar Belakang Bar:** Ungu sangat pudar (`bg-purple-100 rounded-full h-4`).
* **Isi Bar (Indikator):** Oranye atau ungu solid (`bg-orange-400 rounded-full h-4`).

## 5. PANDUAN IMPLEMENTASI HALAMAN

* **Halaman Depan (index.php):** Akan meniru layar pertama dari referensi (karakter ilustrasi menyambut, teks tebal "Let's Start Your Learning Adventure", dan tombol kapsul besar "Mulai Belajar").
* **Hub Anak (Dashboard Anak):** Akan meniru layar kedua referensi. Terdapat profil di kiri atas, kartu informasi "Level 1" atau sapaan di tengah, diikuti jejeran kartu vertikal/grid untuk memilih Jurnal Algoritma, Dekomposisi, atau Brankas Rahasia.
* **Sistem Interaksi & Copywriting:** Tidak ada teks penjelasan yang panjang atau rumit. Semua instruksi dibungkus dalam kalimat langsung yang bersahabat (misal: "Halo, Budi! Mau belajar apa hari ini?") atau balon kata (*speech bubble*).
