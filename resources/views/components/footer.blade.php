<footer class="bg-white text-gray-700 font-hanken pt-14 pb-8 border-t border-gray-200/60">
    <div class="w-full px-10 sm:px-16 lg:px-24 grid grid-cols-1 md:grid-cols-12 gap-10 pb-12 border-b border-gray-200/60">

        <!-- KOLOM 1: LOGO MREC BIG (W: 156px, H: 68px) & DESKRIPSI -->
        <div class="md:col-span-5 space-y-4">
            <div class="space-y-3 -mt-3">
                <a href="{{ url('/') }}" class="inline-block">
                    <img src="{{ asset('storage/images/LogoMrecBig.png') }}" 
                         alt="Logo MREC Big" 
                         class="w-[156px] h-[68px] object-contain">
                </a>
                
                <!-- GARIS DEKORATIF DI BAWAH LOGO (Dibuat Ekstra Panjang w-[280px] sm:w-[320px]) -->
                <div class="w-[280px] sm:w-[320px] h-[1.5px] bg-gradient-to-r from-[#D21502] via-[#D21502]/60 via-50% to-transparent rounded-full"></div>
            </div>

            <p class="text-sm sm:text-base leading-relaxed max-w-md text-gray-600">
                Metaverse Research and Experience Center (MREC) at Telkom University is a Center of Excellence dedicated to advancing innovation, research, and experiential learning in immersive technologies.
            </p>

            <!-- SOCIAL MEDIA -->
            <div class="flex gap-4 pt-2">
                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-800 hover:bg-[#D21502] hover:text-white transition shadow-sm"><i class="fa-brands fa-instagram text-base"></i></a>
                <a href="#" class="w-10 h-10 rounded-full bg-gray-100 flex items-center justify-center text-gray-800 hover:bg-[#D21502] hover:text-white transition shadow-sm"><i class="fa-brands fa-youtube text-base"></i></a>
            </div>
        </div>

        <!-- KOLOM 2: EXPLORE MENU -->
        <div class="md:col-span-3 space-y-4 pt-2">
            <div class="space-y-2">
                <h4 class="text-[#D21502] font-bold font-poppins text-base sm:text-lg">Explore</h4>
                <div class="w-16 h-[1.5px] bg-gradient-to-r from-[#D21502] to-transparent rounded-full"></div>
            </div>

            <ul class="space-y-3 text-sm sm:text-base font-medium pt-1">
                <li><a href="{{ url('/') }}" class="hover:text-[#D21502] transition">Home</a></li>
                <li><a href="{{ url('/about') }}" class="hover:text-[#D21502] transition">About</a></li>
                <li><a href="{{ url('/services') }}" class="hover:text-[#D21502] transition">Services</a></li>
                <li><a href="{{ url('/projects') }}" class="hover:text-[#D21502] transition">Projects</a></li>
                <li><a href="{{ url('/our-members') }}" class="hover:text-[#D21502] transition">Our Members</a></li>
            </ul>
        </div>

        <!-- KOLOM 3: CONTACT INFO -->
        <div class="md:col-span-4 space-y-4 pt-2" id="contact">
            <div class="space-y-2">
                <h4 class="text-[#D21502] font-bold font-poppins text-base sm:text-lg">Contact Info</h4>
                <div class="w-16 h-[1.5px] bg-gradient-to-r from-[#D21502] to-transparent rounded-full"></div>
            </div>

            <div class="space-y-3 text-sm sm:text-base font-medium pt-1">
                <p class="flex items-start gap-3">
                    <i class="fa-solid fa-location-dot text-[#D21502] text-lg mt-1 flex-shrink-0"></i>
                    <span>GSG, Jl. Telekomunikasi No.1, Sukapura, Dayeuhkolot, Bandung Regency, West Java 40257</span>
                </p>
                <p class="flex items-center gap-3">
                    <i class="fa-solid fa-envelope text-[#D21502] text-lg flex-shrink-0"></i>
                    <span>mrec.telu@gmail.com</span>
                </p>
                <p class="flex items-center gap-3">
                    <i class="fa-solid fa-globe text-[#D21502] text-lg flex-shrink-0"></i>
                    <span>mrec.center.telkomuniversity.ac.id</span>
                </p>
            </div>
        </div>

    </div>

    <!-- HAK CIPTA -->
    <div class="w-full px-10 sm:px-16 lg:px-24 pt-8 text-center text-xs sm:text-sm text-gray-500 font-medium">
        <p>&copy; {{ date('Y') }} Metaverse Research and Experience Center | Telkom University. All rights reserved.</p>
    </div>
</footer>