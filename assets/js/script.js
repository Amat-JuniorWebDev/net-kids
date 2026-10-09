// ==========================================
// FILE: assets/js/script.js
// FUNGSI: Animasi UI NetKids
// ==========================================

document.addEventListener('DOMContentLoaded', () => {
    const phrases = [
        "Belajar Pola Pikir Programmer",
        "Logika Berpikir Kreatif",
        "Problem Solving Seru",
        "Petualangan Koding Anak"
    ];
    
    const targetEl = document.getElementById('typed-target');
    // Mencegah error jika script dimuat di halaman lain (selain index)
    if (!targetEl) return; 

    let phraseIdx = 0;
    let charIdx = phrases[0].length;
    let isDeleting = true;
    const typeSpeed = 85;
    const backSpeed = 45;
    const holdDelay = 2200;

    function typeCycle() {
        const currentPhrase = phrases[phraseIdx];

        if (isDeleting) {
            targetEl.textContent = currentPhrase.substring(0, charIdx - 1);
            charIdx--;

            if (charIdx === 0) {
                isDeleting = false;
                phraseIdx = (phraseIdx + 1) % phrases.length;
                setTimeout(typeCycle, 350);
                return;
            }
            setTimeout(typeCycle, backSpeed);
        } else {
            targetEl.textContent = currentPhrase.substring(0, charIdx + 1);
            charIdx++;

            if (charIdx === currentPhrase.length) {
                isDeleting = true;
                setTimeout(typeCycle, holdDelay);
                return;
            }
            setTimeout(typeCycle, typeSpeed);
        }
    }

    // Memulai efek mengetik
    setTimeout(typeCycle, holdDelay);
});