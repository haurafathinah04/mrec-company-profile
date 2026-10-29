document.addEventListener("DOMContentLoaded", function () {
    const wipe = document.getElementById("pageWipe");
    if (!wipe) return;

    // 1. Saat halaman baru dibuka (Fade Out Wipe / Buka tirai)
    // Pastikan tirai tertutup dulu di awal, lalu buka perlahan
    wipe.classList.add("on");
    wipe.classList.remove("cover");
    wipe.classList.add("leave");

    setTimeout(() => {
        wipe.classList.remove("on", "leave");
    }, 750); // Sesuai durasi transisi CSS

    // 2. Saat link diklik (Fade In Wipe / Tutup tirai sebelum pindah)
    document.querySelectorAll("a").forEach(link => {
        link.addEventListener("click", function (e) {
            const targetUrl = this.getAttribute("href");

            // Abaikan link kosong, anchor (#), javascript, atau tab baru
            if (
                !targetUrl ||
                targetUrl.startsWith("#") ||
                targetUrl.startsWith("javascript") ||
                this.getAttribute("target") === "_blank" ||
                this.hasAttribute("download")
            ) {
                return;
            }

            // Jika link mengarah ke domain yang sama (internal)
            if (this.hostname === window.location.hostname) {
                e.preventDefault(); // Tahan dulu agar tidak langsung pindah

                // Aktifkan tirai penutup (tutup layar)
                wipe.classList.add("on");
                wipe.classList.remove("leave");
                wipe.classList.add("cover");

                // TUNGGU sampai animasi penutupan selesai (misal 700ms - 750ms),
                // BARU pindah ke halaman tujuan.
                setTimeout(() => {
                    window.location.href = targetUrl;
                }, 750); 
            }
        });
    });
});