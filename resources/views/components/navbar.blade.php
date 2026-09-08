<!-- NAVBAR FIXED -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100">
    <div class="w-full px-8 sm:px-12 lg:px-16 h-20 md:h-24 flex items-center justify-between">
        
        <!-- WRAPPER KIRI: LOGO + MENU NAVIGASI -->
        <div class="flex items-center gap-10 lg:gap-14">
            <!-- Logo MREC (Mengarahkan ke /login) -->
            <a href="{{ url('/login') }}" class="flex items-center flex-shrink-0">
                <img src="{{ asset('storage/images/LogoMrecBig.png') }}" 
                     alt="Logo MREC" 
                     class="h-8 md:h-9 lg:h-10 w-auto object-contain">
            </a>

            <!-- Menu Navigasi -->
            <div class="hidden md:flex items-center space-x-6 lg:space-x-8 text-base lg:text-lg font-poppins font-semibold text-gray-800">
                <a href="{{ url('/') }}" 
                   class="{{ Request::is('/') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-1' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Home
                </a>
                <a href="{{ url('/about') }}" 
                   class="{{ Request::is('about') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-1' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    About
                </a>
                <a href="{{ url('/services') }}" 
                   class="{{ Request::is('services') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-1' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Services
                </a>
                <a href="{{ url('/projects') }}" 
                   class="{{ Request::is('projects*') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-1' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Projects
                </a>
                <a href="{{ url('/blog') }}" 
                   class="{{ Request::is('blog*') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-1' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Blog
                </a>
                <a href="{{ url('/our-members') }}" 
                   class="{{ Request::is('our-members') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-1' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Our Members
                </a>
            </div>
        </div>

        <!-- WRAPPER KANAN: TOMBOL LET'S COLLABORATE (ROUNDED-FULL) -->
        <div class="flex-shrink-0">
            <a href="{{ url('/#contact') }}" 
               class="bg-[#2D3748] hover:bg-[#1A202C] text-white font-poppins font-semibold px-6 py-3 lg:px-8 lg:py-3.5 rounded-full text-sm lg:text-base shadow-sm hover:shadow-md transition-all duration-200 inline-block">
                Let's Collaborate
            </a>
        </div>
        
    </div>
</nav>