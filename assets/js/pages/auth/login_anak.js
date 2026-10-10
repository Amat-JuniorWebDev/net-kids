/* ==========================================
   FILE: assets/js/pages/auth/login_anak.js
   DESKRIPSI: Skrip Interaksi Halaman Login Anak (Auto-Tab PIN)
========================================== */

document.addEventListener('DOMContentLoaded', function() {
    const pinInputs = document.querySelectorAll('.pin-digit');
    
    pinInputs.forEach((input, index) => {
        input.addEventListener('input', function() {
            // Hanya izinkan input berupa angka
            this.value = this.value.replace(/[^0-9]/g, '');
            
            // Pindah fokus ke kotak selanjutnya jika kotak saat ini sudah terisi 1 angka
            if (this.value.length === 1 && index < pinInputs.length - 1) {
                pinInputs[index + 1].focus();
            }
        });

        input.addEventListener('keydown', function(e) {
            // Kembali ke kotak sebelumnya jika menekan tombol Backspace dan kotak saat ini kosong
            if (e.key === 'Backspace' && this.value === '' && index > 0) {
                pinInputs[index - 1].focus();
            }
        });
    });
});