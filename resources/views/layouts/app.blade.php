<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MREC - Metaverse Research and Experience Center</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hanken+Grotesk:ital,wght@0,100..900;1,100..900&family=Poppins:wght@300;400;500;600;700&family=Sora:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('css/page-wipe.css') }}">

    <!-- Config Font Custom CDN -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sora: ['Sora', 'sans-serif'],
                        hanken: ['"Hanken Grotesk"', 'sans-serif'],
                        poppins: ['Poppins', 'sans-serif'],
                    }
                }
            }
        }
    </script>

    <!-- CSS Custom Animasi Floating Card -->
    <style>
        @keyframes bounceSlow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-6px); }
        }
        .animate-bounce-slow {
            animation: bounceSlow 3s ease-in-out infinite;
        }
    </style>
</head>
<body class="bg-white text-gray-800 antialiased font-hanken overflow-x-hidden">
    <div id="pageWipe" aria-hidden="true">
        <div class="panel"></div>
        <div class="ring"></div>
        <div class="mark"></div>
    </div>

    @include('components.navbar')

    <main>
        @yield('content')
    </main>

    <!-- FLOATING CARD ID (Draggable dengan Gambar Cardflow) -->
    <div id="draggableCard" 
         class="fixed bottom-6 right-6 z-50 touch-none select-none cursor-grab active:cursor-grabbing">
        <div class="flex flex-col items-center bg-transparent p-0 border-0 shadow-none">
            
            <!-- Gambar Card Flow -->
            <div class="relative w-44 sm:w-52 h-auto mb-2.5 pointer-events-none">
                <img src="{{ asset('storage/images/cardflow.png') }}" 
                     alt="MREC Card Flow" 
                     class="w-full h-full object-contain animate-bounce-slow drop-shadow-xl">
            </div>

            <!-- Tombol Scan ID Card -->
            <a href="https://wa.me/628111434331?text=Halo%20MREC,%20saya%20ingin%20memverifikasi%20ID%20Card%20member" 
               target="_blank" 
               rel="noopener noreferrer" 
               class="w-full inline-flex items-center justify-center gap-2 px-4 py-2.5 bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-xs rounded-xl transition-all shadow-lg active:scale-95">
                <span>Scan ID Card Here</span>
                <i class="fa-solid fa-arrow-up-right-from-square text-[10px]"></i>
            </a>
        </div>
    </div>

    {{-- Tampilkan footer KECUALI jika di halaman /login --}}
    @unless (Request::is('login'))
        @include('components.footer')
    @endunless

    <script src="{{ asset('js/page-wipe.js') }}"></script>

    <!-- SCRIPT DRAGGABLE LOGIC DENGAN BOUNDARY CHECK -->
    <script>
        const card = document.getElementById('draggableCard');
        let isDragging = false;
        let currentX, currentY, initialX, initialY;
        let xOffset = 0, yOffset = 0;

        card.addEventListener('mousedown', dragStart);
        document.addEventListener('mouseup', dragEnd);
        document.addEventListener('mousemove', drag);

        card.addEventListener('touchstart', dragStart, { passive: true });
        document.addEventListener('touchend', dragEnd);
        document.addEventListener('touchmove', drag, { passive: false });

        function dragStart(e) {
            if (e.target.closest('a')) return;

            if (e.type === "touchstart") {
                initialX = e.touches[0].clientX - xOffset;
                initialY = e.touches[0].clientY - yOffset;
            } else {
                initialX = e.clientX - xOffset;
                initialY = e.clientY - yOffset;
            }

            isDragging = true;
        }

        function dragEnd() {
            initialX = currentX;
            initialY = currentY;
            isDragging = false;
        }

        function drag(e) {
            if (!isDragging) return;

            if (e.type === "touchmove") {
                e.preventDefault();
                currentX = e.touches[0].clientX - initialX;
                currentY = e.touches[0].clientY - initialY;
            } else {
                currentX = e.clientX - initialX;
                currentY = e.clientY - initialY;
            }

            // --- PEMBATAS / BOUNDARY CHECK ---
            const rect = card.getBoundingClientRect();
            const viewportWidth = window.innerWidth;
            const viewportHeight = window.innerHeight;

            let nextLeft = rect.left + (currentX - xOffset);
            let nextRight = rect.right + (currentX - xOffset);
            let nextTop = rect.top + (currentY - yOffset);
            let nextBottom = rect.bottom + (currentY - yOffset);

            if (nextLeft < 10) {
                currentX = currentX + (10 - nextLeft);
            } else if (nextRight > viewportWidth - 10) {
                currentX = currentX - (nextRight - (viewportWidth - 10));
            }

            if (nextTop < 10) {
                currentY = currentY + (10 - nextTop);
            } else if (nextBottom > viewportHeight - 10) {
                currentY = currentY - (nextBottom - (viewportHeight - 10));
            }

            xOffset = currentX;
            yOffset = currentY;

            setTranslate(currentX, currentY, card);
        }

        function setTranslate(xPos, yPos, el) {
            el.style.transform = `translate3d(${xPos}px, ${yPos}px, 0)`;
        }
    </script>
</body>
</html>