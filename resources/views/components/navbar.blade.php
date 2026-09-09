<!-- NAVBAR FIXED -->
<nav class="fixed top-0 left-0 right-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 w-full">
    <!-- Container full-width mentok ke pinggir layar -->
    <div class="flex h-20 w-full max-w-full items-center justify-between px-6 sm:h-24 sm:px-10 lg:px-12">
        
        <!-- WRAPPER KIRI: LOGO + MENU NAVIGASI -->
        <div class="flex items-center gap-8 lg:gap-14">
            <!-- Logo MREC (w-24 h-16) -->
            <a href="{{ url('/login') }}" class="flex items-center flex-shrink-0">
                <img src="{{ asset('storage/images/LogoMrecBig.png') }}" 
                     alt="Logo MREC" 
                     class="w-24 h-16 object-contain">
            </a>

            <!-- Menu Navigasi (Poppins SemiBold 14px) -->
            <div class="hidden items-center space-x-6 font-poppins font-semibold text-[14px] text-gray-800 md:flex lg:space-x-8">
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

        @if(auth()->check())
            <!-- WRAPPER KANAN: TOMBOL LOGOUT (Poppins SemiBold 14px) -->
            <div class="flex-shrink-0">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" 
                            class="inline-block rounded-full bg-[#2D3748] px-6 py-2.5 font-poppins font-semibold text-[14px] text-white shadow-sm transition-all duration-200 hover:bg-[#1A202C] hover:shadow-md lg:px-7 lg:py-3">
                        Logout
                    </button>
                </form>
            </div>
        @else
            <!-- WRAPPER KANAN: TOMBOL LET'S COLLABORATE (Poppins SemiBold 14px) -->
            <div class="flex-shrink-0">
                <a href="{{ url('/contact') }}" 
                   class="inline-block rounded-full bg-[#2D3748] px-6 py-2.5 font-poppins font-semibold text-[14px] text-white shadow-sm transition-all duration-200 hover:bg-[#1A202C] hover:shadow-md lg:px-7 lg:py-3">
                    Let's Collaborate
                </a>
            </div>
        @endif
        
    </div>
</nav>