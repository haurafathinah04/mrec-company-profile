(function () {
    const WIPE_DELAY_BEFORE_REDIRECT = 1200; // Waktu tunggu animasi menutup sempurna sebelum pindah (1.2 detik)
    const WIPE_HOLD_ON_NEW_PAGE = 2500;      // Waktu tahan animasi saat halaman baru terbuka (2.5 detik)

    document.addEventListener('DOMContentLoaded', () => {
        const pageWipe = document.getElementById('pageWipe');
        if (!pageWipe) return;

        // --- A. PEMBUKAAN HALAMAN BARU ---
        // Jika baru saja dilakukan transisi antar halaman
        if (sessionStorage.getItem('mrec_page_transition') === 'true') {
            sessionStorage.removeItem('mrec_page_transition');
            
            // Posisi awal: tirai menutup penuh + logo MREC menyala
            pageWipe.classList.add('on', 'cover');

            // Ditahan 2.5 detik agar user puas melihat animasi, batik, & logo MREC
            setTimeout(() => {
                pageWipe.classList.remove('cover');
                pageWipe.classList.add('leave');

                setTimeout(() => {
                    pageWipe.classList.remove('on', 'leave');
                }, 900);
            }, WIPE_HOLD_ON_NEW_PAGE);
        } else {
            // Jika halaman di-refresh biasa
            pageWipe.classList.remove('on', 'cover', 'leave');
        }
    });

    // --- B. MENANGKAP KLIK NAVIGASI DENGAN CAPTURING (PRIORITAS UTAMA) ---
    // Event delegation di level document dengan mode useCapture = true
    document.addEventListener('click', function (e) {
        const link = e.target.closest('a[href]');
        if (!link) return;

        const href = link.getAttribute('href');

        // Abaikan link eksternal, anchor (#), javascript, WA, atau target _blank
        if (
            !href ||
            href.startsWith('http') ||
            href.startsWith('#') ||
            href.startsWith('javascript') ||
            href.startsWith('mailto:') ||
            href.startsWith('tel:') ||
            link.getAttribute('target') === '_blank'
        ) {
            return;
        }

        // HENTIKAN NAVIGASI NATIVE BROWSER DENGAN KETAT
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();

        const pageWipe = document.getElementById('pageWipe');

        if (pageWipe) {
            // Set tanda bahwa kita sedang melakukan transisi
            sessionStorage.setItem('mrec_page_transition', 'true');

            // 1. Jalankan animasi penutup (tirai meluncur dari bawah ke tengah)
            pageWipe.classList.remove('leave');
            pageWipe.classList.add('on', 'cover');

            // 2. TUNGGU 1.2 DETIK HINGGA ANIMASI MENUTUP 100% PERFEK, BARU PINDAH URL
            setTimeout(() => {
                window.location.href = href;
            }, WIPE_DELAY_BEFORE_REDIRECT);
        } else {
            window.location.href = href;
        }
    }, true); // Parameter `true` memprioritaskan handler ini di atas handler lainnya
})();