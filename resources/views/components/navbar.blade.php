<!-- NAVBAR FIXED -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 w-full">
    <!-- Container full-width mentok ke pinggir layar -->
    <div class="flex h-14 w-full max-w-full items-center justify-between px-6 sm:h-16 sm:px-10 lg:px-12">
        
        <!-- WRAPPER KIRI: LOGO + MENU NAVIGASI -->
        <div class="flex items-center gap-6 lg:gap-10">
            <!-- Logo MREC (Sesuai ukuran presisi W:76px H:34px) -->
            <a href="{{ route('home') }}" class="flex items-center flex-shrink-0">
                <img src="{{ asset('storage/images/LogoMrecBig.png') }}" 
                     alt="Logo MREC" 
                     class="w-[76px] h-[34px] object-contain">
            </a>

            <!-- Menu Navigasi (Poppins SemiBold 13px) -->
            <div class="hidden items-center space-x-5 font-poppins font-semibold text-[13px] text-gray-800 md:flex lg:space-x-7">
                <a href="{{ route('home') }}" 
                   class="{{ Request::is('/') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-0.5' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Home
                </a>
                <a href="{{ route('about') }}" 
                   class="{{ Request::is('about') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-0.5' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    About
                </a>
                <a href="{{ route('services') }}" 
                   class="{{ Request::is('services') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-0.5' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Services
                </a>
                <a href="{{ route('projects.index') }}" 
                   class="{{ Request::is('projects*') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-0.5' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Projects
                </a>
                <a href="{{ route('blog') }}" 
                   class="{{ Request::is('blog*') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-0.5' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Blog
                </a>
                <a href="{{ route('our-members') }}" 
                   class="{{ Request::is('our-members') ? 'text-[#D21502] border-b-2 border-[#D21502] pb-0.5' : 'hover:text-[#D21502] transition-colors duration-200' }}">
                    Our Members
                </a>
            </div>
        </div>

        @if(auth()->check())
            <!-- WRAPPER KANAN: TOMBOL LOGOUT -->
            <div class="flex-shrink-0">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                            class="inline-block rounded-full bg-[#2D3748] px-5 py-1.5 font-poppins font-semibold text-[13px] text-white shadow-sm transition-all duration-200 hover:bg-[#1A202C] hover:shadow-md lg:px-6 lg:py-2">
                        Logout
                    </button>
                </form>
            </div>
        @else
            <!-- WRAPPER KANAN: TOMBOL LET'S COLLABORATE -->
            <div class="flex-shrink-0">
                <a href="{{ route('contact.index') }}" 
                   class="inline-block rounded-full bg-[#2D3748] px-5 py-1.5 font-poppins font-semibold text-[13px] text-white shadow-sm transition-all duration-200 hover:bg-[#1A202C] hover:shadow-md lg:px-6 lg:py-2">
                    Let's Collaborate
                </a>
            </div>
        @endif
        
    </div>
</nav>