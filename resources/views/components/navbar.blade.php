<!-- NAVBAR FIXED (DIPAKSA PAKAI FONT SORA VIA INLINE STYLE) -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100" style="font-family: 'Sora', sans-serif;">
    <div class="w-full px-8 sm:px-12 lg:px-16 h-20 md:h-24 flex items-center justify-between">
        
        <!-- WRAPPER KIRI: LOGO + MENU NAVIGASI -->
        <div class="flex items-center gap-10 lg:gap-14">
            <!-- Logo MREC (Ukuran Diperkecil) -->
            <a href="#" class="flex items-center flex-shrink-0">
                <img src="{{ asset('storage/images/LogoMREC.PNG') }}" 
                     alt="Logo MREC" 
                     class="h-8 md:h-9 lg:h-10 w-auto object-contain">
            </a>

            <!-- Menu Navigasi (Ukuran Diperbesar) -->
            <div class="hidden md:flex items-center space-x-6 lg:space-x-8 text-base lg:text-lg font-bold text-gray-800">
                <a href="#" class="text-[#E32619] border-b-2 border-[#E32619] pb-1">Home</a>
                <a href="#" class="hover:text-[#E32619] transition-colors duration-200">About</a>
                <a href="#" class="hover:text-[#E32619] transition-colors duration-200">Services</a>
                <a href="#" class="hover:text-[#E32619] transition-colors duration-200">Projects</a>
                <a href="#" class="hover:text-[#E32619] transition-colors duration-200">Blog</a>
                <a href="#" class="hover:text-[#E32619] transition-colors duration-200">Our Members</a>
            </div>
        </div>

        <!-- WRAPPER KANAN: TOMBOL LET'S COLLABORATE -->
        <div class="flex-shrink-0">
            <a href="#" class="bg-[#2D3748] hover:bg-[#1A202C] text-white font-bold px-6 py-3 lg:px-8 lg:py-3.5 rounded-full text-sm lg:text-base shadow-sm hover:shadow-md transition-all duration-200">
                Let's Collaborate
            </a>
        </div>
        
    </div>
</nav>