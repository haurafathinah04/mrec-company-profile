<footer class="w-full bg-white border-t border-gray-100 pt-16 pb-8 text-sm" style="font-family: 'Sora', sans-serif;">
    <!-- Container Full Width dengan Padding Kiri-Kanan -->
    <div class="w-full px-8 sm:px-12 lg:px-16 grid grid-cols-1 md:grid-cols-12 gap-10 mb-12">
        
        <!-- Kolom 1: Logo Gambar & Deskripsi (Span 5) -->
        <div class="md:col-span-5 space-y-4 pr-0 md:pr-8">
            <!-- Logo Gambar MREC -->
            <a href="#" class="inline-block">
                <img src="{{ asset('storage/images/LogoMREC.PNG') }}" 
                     alt="Logo MREC" 
                     class="h-10 md:h-12 w-auto object-contain">
            </a>

            <p class="text-gray-600 leading-relaxed text-sm max-w-sm">
                MREC (Metaverse Research and Experience Center) is a Center of Excellence at Telkom University, focusing on research and the development of metaverse and virtual reality technologies.
            </p>
            <div class="flex space-x-3 pt-2">
                <a href="#" class="w-9 h-9 rounded-full bg-slate-800 flex items-center justify-center text-white text-sm hover:bg-[#E32619] transition-colors duration-200">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a href="#" class="w-9 h-9 rounded-full bg-slate-800 flex items-center justify-center text-white text-sm hover:bg-[#E32619] transition-colors duration-200">
                    <i class="fa-brands fa-youtube"></i>
                </a>
            </div>
        </div>

        <!-- Kolom 2: Explore (Span 3) -->
        <div class="md:col-span-3">
            <h4 class="font-bold text-gray-900 mb-5 text-base">Explore</h4>
            <ul class="space-y-3 text-gray-600 text-sm font-medium">
                <li><a href="#" class="hover:text-[#E32619] transition-colors duration-200">Home</a></li>
                <li><a href="#" class="hover:text-[#E32619] transition-colors duration-200">About</a></li>
                <li><a href="#" class="hover:text-[#E32619] transition-colors duration-200">Services</a></li>
                <li><a href="#" class="hover:text-[#E32619] transition-colors duration-200">Projects</a></li>
                <li><a href="#" class="hover:text-[#E32619] transition-colors duration-200">Blog</a></li>
                <li><a href="#" class="hover:text-[#E32619] transition-colors duration-200">Our Members</a></li>
            </ul>
        </div>

        <!-- Kolom 3: Contact Info (Span 4) -->
        <div class="md:col-span-4 space-y-4">
            <h4 class="font-bold text-gray-900 mb-5 text-base">Contact Info</h4>
            <div class="flex items-start gap-3 text-gray-600 text-sm">
                <i class="fa-solid fa-location-dot text-[#E32619] text-base mt-0.5 flex-shrink-0"></i>
                <span class="leading-snug">GSG, Jl. Telekomunikasi No.1 Lt. 2, Sukapura, Dayeuhkolot, Bandung Regency, West Java 40257</span>
            </div>
            <div class="flex items-center gap-3 text-gray-600 text-sm">
                <i class="fa-solid fa-phone text-[#E32619] text-base flex-shrink-0"></i>
                <a href="https://wa.me/628111434331" target="_blank" class="hover:text-[#E32619] transition-colors duration-200">+62 811-1434-331</a>
            </div>
            <div class="flex items-center gap-3 text-gray-600 text-sm">
                <i class="fa-solid fa-envelope text-[#E32619] text-base flex-shrink-0"></i>
                <a href="mailto:mrec.telu@gmail.com" class="hover:text-[#E32619] transition-colors duration-200">mrec.telu@gmail.com</a>
            </div>
            <div class="flex items-center gap-3 text-gray-600 text-sm">
                <i class="fa-solid fa-globe text-[#E32619] text-base flex-shrink-0"></i>
                <a href="https://mrec.center.telkomuniversity.ac.id" target="_blank" class="hover:text-[#E32619] transition-colors duration-200">mrec.center.telkomuniversity.ac.id</a>
            </div>
        </div>
    </div>

    <!-- Copyright Footer -->
    <div class="w-full px-8 sm:px-12 lg:px-16">
        <div class="border-t border-gray-100 pt-6 text-center text-xs font-medium text-gray-500">
            © 2026 - Metaverse Research and Experience Center | Telkom University. All rights reserved.
        </div>
    </div>
</footer>