@extends('layouts.app')

@section('content')

<!-- HERO FULLSCREEN -->
<section class="relative min-h-screen flex flex-col justify-between pt-28 pb-8 overflow-hidden bg-white w-full font-sora">

    <!-- GAMBAR BACKGROUND (FULLSCREEN MELEBAR) -->
    <img src="{{ asset('storage/images/LatarBelakang.PNG') }}" 
         alt="Latar Belakang MREC" 
         class="absolute inset-0 w-full h-full object-cover object-center z-0">

    <!-- OVERLAY GELAP CERAH TIPIS -->
    <div class="absolute inset-0 bg-black/5 backdrop-blur-[0.2px] z-10 pointer-events-none"></div>

    <!-- DEKORASI LINGKARAN -->
    <div class="absolute inset-y-0 right-8 sm:right-16 lg:right-28 my-auto w-[200px] sm:w-[240px] lg:w-[290px] aspect-square pointer-events-none z-20 flex items-center justify-center">
        <div class="relative w-full h-full animate-[spin_18s_linear_infinite]">
            <!-- Lingkaran 1 (Terluar - Paling Tipis / Opacity 15%) -->
            <div class="absolute inset-0 border border-red-500/15 rounded-full"></div>
            
            <!-- Lingkaran 2 (Tengah - Didekatkan sedikit ke luar) -->
            <div class="absolute inset-6 border border-red-500/35 rounded-full"></div>
            
            <!-- Lingkaran 3 (Terdalam - Dijauhin dikit dari lingkaran 2) -->
            <div class="absolute inset-10 border border-red-500/60 rounded-full"></div>
            
            <!-- Titik Merah Aksen (Nempel di Lingkaran 2) -->
            <div class="absolute top-6 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2.5 h-2.5 bg-[#E32619] rounded-full shadow-[0_0_8px_#E32619]"></div>
        </div>
    </div>

<!-- KONTEN UTAMA HERO -->
<div class="w-full px-8 sm:px-12 lg:px-16 pl-[calc(2rem+0.5cm)] sm:pl-[calc(3rem+0.5cm)] lg:pl-[calc(4rem+0.5cm)] my-auto relative z-30">

    <div class="w-full lg:max-w-5xl">

        <!-- JUDUL (FONT SORA - BARIS DIPISAH AGAR BISA DIBERI MARGIN PAS) -->
        <h1 class="font-sora text-5xl sm:text-6xl lg:text-[65px] font-bold text-[#D21502] mb-8 tracking-[-1.5px] !line-height-none">
            <span class="block mb-3 sm:mb-4 lg:mb-5">Metaverse Research</span>
            <span class="block">and Experience Center</span>
        </h1>

        <br>

        <!-- DESKRIPSI HERO -->
        <p class="font-hanken text-gray-800 font-normal text-[16px] mb-9 max-w-[800px] lg:max-w-[850px] leading-[25px] tracking-[0.01em] drop-shadow-[0_1px_2px_rgba(255,255,255,0.8)]">
            MREC (Metaverse Research and Experience Center) adalah Pusat Keunggulan (Center of Excellence)<br class="hidden sm:inline" />
            di Universitas Telkom yang berfokus pada penelitian dan pengembangan teknologi metaverse dan<br class="hidden sm:inline" />
            realitas virtual. MREC bertujuan untuk menjadi pionir dalam inovasi digital dengan mengintegrasikan<br class="hidden sm:inline" />
            berbagai disiplin ilmu untuk menciptakan solusi yang relevan dengan kebutuhan masa depan.
        </p>

        <br>

        <!-- TOMBOL ACTION (FONT POPPINS) -->
        <div class="flex flex-wrap items-center gap-4 font-poppins">

            <!-- Explore Our Projects -->
            <a href="#" class="w-[202px] h-[46px] flex items-center justify-center bg-[#D21502] border border-[#D21502] hover:bg-red-700 hover:border-red-700 text-white font-medium text-[14px] rounded-full shadow-sm transition-all duration-200">
                Explore Our Projects
            </a>

            <!-- Collaborate With Us -->
            <a href="#" class="w-[202px] h-[46px] flex items-center justify-center bg-transparent border border-gray-700 hover:bg-gray-900 hover:border-gray-900 text-gray-600 hover:text-white font-semibold text-[14px] rounded-full transition-all duration-200">
                Collaborate With Us
            </a>

        </div>

</div>

    <!-- SCROLL DOWN (FONT POPPINS) -->
    <div class="relative z-30 flex flex-col items-center justify-center cursor-pointer group font-poppins">

        <div class="flex flex-col items-center gap-1 text-gray-800 group-hover:text-[#D21502] transition-colors duration-200 animate-bounce">

            <span class="text-[11px] font-bold uppercase tracking-widest">
                Scroll
            </span>

            <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>

        </div>

    </div>

</section>

<!-- 2. ABOUT SECTION (Jarak Atas & Bawah Presisi 128px) -->
<section class="pt-[128px] pb-[128px] bg-white relative z-10 overflow-hidden">

    <div class="w-full px-8 sm:px-12 lg:px-0 flex flex-col lg:flex-row items-center relative">

        <!-- Kiri: Teks -->
        <div class="w-full lg:w-[580px] space-y-6 pl-8 sm:pl-12 lg:pl-16">

            <!-- Judul -->
            <h2 class="text-[48px] font-poppins font-semibold text-[#D21502] leading-[1.1]">
                Where Research Meets Experience.
            </h2>

            <!-- Deskripsi -->
            <p class="text-gray-600 font-hanken font-normal text-[16px] leading-relaxed">
                We bridge the gap between rigorous academic collaboration and high-end experiential technology. Our work focuses on the core missions of human-centric experiences, spatial computing, and immersive narratives to build the foundations of the next digital frontier.
            </p>

            <!-- Tautan "Learn More" -->
            <a href="/about" class="inline-flex items-center gap-2 text-[#D21502] font-poppins font-semibold text-[14px] hover:underline pt-2">
                Learn More About MREC
                <span>→</span>
            </a>

        </div>

        <!-- Kanan: Gambar (W: 574px, H: 400px | 664px dari kiri, 42px dari kanan) -->
        <div class="relative w-[574px] h-[400px] max-w-full lg:ml-[664px] lg:mr-[42px] lg:absolute rounded-3xl overflow-hidden shadow-lg border border-gray-100 shrink-0 mt-8 lg:mt-0">

            <img src="{{ Storage::url('images/AboutFoto.png') }}"
                 alt="About MREC Photo"
                 class="w-full h-full object-cover">

            <div class="absolute bottom-4 left-6 text-white font-poppins text-sm font-medium drop-shadow-md">
                Telkom University Affiliated Lab
            </div>

        </div>

    </div>

</section>

<!-- 3. OUR SERVICES SECTION -->
<section class="pt-20 pb-28 bg-[#F7F9FB]">

    <div class="w-full px-6 sm:px-10 lg:px-12 max-w-[1440px] mx-auto">

        <!-- SERVICES HEADING -->
        <div class="text-center max-w-4xl mx-auto mb-10">

            <h2 class="font-poppins font-semibold text-[48px] text-[#D21502] leading-tight mb-4">
                Our Services
            </h2>

            <!-- Deskripsi Utama (Pas 2 Baris Kepinggir) -->
            <p class="font-hanken font-normal text-[16px] text-gray-600 leading-[26px] max-w-[780px] mx-auto">
                Innovative solutions tailored for the future. We combine research, creativity, and technology<br class="hidden md:inline" />
                to build impactful digital experiences for education, industry, and society.
            </p>

        </div>

        <!-- SERVICES CARDS (Diatur Lebih Naik Ke Atas) -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

            <!-- CARD 1 -->
            <div class="bg-white p-8 rounded-3xl border border-gray-200/80 shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">

                <div>
                    <!-- Lingkaran Icon Abu-Abu Muda -->
                    <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center text-[#D21502] text-xl mb-6">
                        <i class="fa-solid fa-vr-cardboard"></i>
                    </div>

                    <h3 class="font-poppins font-semibold text-[20px] text-gray-900 mb-3">
                        VR/AR Development
                    </h3>

                    <p class="font-hanken font-normal text-[16px] text-gray-500 leading-relaxed mb-8">
                        We develop immersive Virtual and Augmented Reality solutions tailored for education, training, and industry needs.
                    </p>
                </div>

                <a href="/services" class="font-poppins font-semibold text-[14px] text-[#D21502] hover:underline inline-flex items-center gap-1">
                    Learn More →
                </a>

            </div>

            <!-- CARD 2 -->
            <div class="bg-white p-8 rounded-3xl border border-gray-200/80 shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">

                <div>
                    <!-- Lingkaran Icon Abu-Abu Muda -->
                    <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center text-[#D21502] text-xl mb-6">
                        <i class="fa-solid fa-gamepad"></i>
                    </div>

                    <h3 class="font-poppins font-semibold text-[20px] text-gray-900 mb-3">
                        Game Development
                    </h3>

                    <p class="font-hanken font-normal text-[16px] text-gray-500 leading-relaxed mb-8">
                        We create engaging and innovative games for entertainment, education, simulations, and interactive learning experiences.
                    </p>
                </div>

                <a href="/services" class="font-poppins font-semibold text-[14px] text-[#D21502] hover:underline inline-flex items-center gap-1">
                    Learn More →
                </a>

            </div>

            <!-- CARD 3 -->
            <div class="bg-white p-8 rounded-3xl border border-gray-200/80 shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">

                <div>
                    <!-- Lingkaran Icon Abu-Abu Muda -->
                    <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center text-[#D21502] text-xl mb-6">
                        <i class="fa-solid fa-cube"></i>
                    </div>

                    <h3 class="font-poppins font-semibold text-[20px] text-gray-900 mb-3">
                        3D Design
                    </h3>

                    <p class="font-hanken font-normal text-[16px] text-gray-500 leading-relaxed mb-8">
                        Professional 3D modeling, animation, rendering, digital assets, and immersive visual experiences.
                    </p>
                </div>

                <a href="/services" class="font-poppins font-semibold text-[14px] text-[#D21502] hover:underline inline-flex items-center gap-1">
                    Learn More →
                </a>

            </div>

            <!-- CARD 4 -->
            <div class="bg-white p-8 rounded-3xl border border-gray-200/80 shadow-md hover:shadow-2xl hover:-translate-y-1 transition-all duration-300 flex flex-col justify-between">

                <div>
                    <!-- Lingkaran Icon Abu-Abu Muda -->
                    <div class="w-14 h-14 rounded-full bg-gray-100 flex items-center justify-center text-[#D21502] text-xl mb-6">
                        <i class="fa-solid fa-mobile-screen-button"></i>
                    </div>

                    <h3 class="font-poppins font-semibold text-[20px] text-gray-900 mb-3">
                        Web & Mobile Apps
                    </h3>

                    <p class="font-hanken font-normal text-[16px] text-gray-500 leading-relaxed mb-8">
                        Modern web and mobile applications designed to support digital transformation and business growth.
                    </p>
                </div>

                <a href="/services" class="font-poppins font-semibold text-[14px] text-[#D21502] hover:underline inline-flex items-center gap-1">
                    Learn More →
                </a>

            </div>

        </div>

    </div>

</section>  

<!-- DECORATIVE HALF CIRCLE BETWEEN SERVICES & WHY -->
<div class="relative h-0 z-20 pointer-events-none">

    <div class="absolute -left-16 sm:-left-20 lg:-left-24 -top-28 w-[240px] sm:w-[260px] lg:w-[280px] aspect-square">

        <!-- ROTATING CIRCLE -->
        <div class="relative w-full h-full animate-[spin_20s_linear_infinite]">

            <!-- INNERMOST CIRCLE (Paling Dalam & Jelas) -->
            <div class="absolute inset-8 border border-[#D21502]/40 rounded-full"></div>

            <!-- MIDDLE CIRCLE (Didekatkan ke Lingkaran Dalam) -->
            <div class="absolute inset-5 border border-[#D21502]/25 rounded-full"></div>

            <!-- OUTERMOST CIRCLE (Paling Luar & Paling Transparan) -->
            <div class="absolute inset-0 border border-[#D21502]/15 rounded-full"></div>

            <!-- RED DOT (Titik Merah Pada Lingkaran Dalam) -->
            <div class="absolute top-8 left-1/2 
                        -translate-x-1/2 -translate-y-1/2
                        w-2.5 h-2.5
                        bg-[#D21502]
                        rounded-full
                        shadow-[0_0_8px_#D21502]">
            </div>

        </div>

    </div>

</div>

<!-- 4. WHY WORK WITH US -->
<section class="py-24 bg-white relative overflow-hidden">

    <div class="w-full px-8 sm:px-12 lg:px-16 grid grid-cols-1 lg:grid-cols-12 gap-12 items-center relative z-10 max-w-[1440px] mx-auto">

        <!-- LEFT -->
        <div class="lg:col-span-5">

            <!-- Judul Why Work With Us -->
            <h2 class="font-poppins font-semibold text-[48px] text-[#D21502] leading-[1.1] mb-6">
                Why Work With Us
            </h2>

            <!-- Deskripsi -->
            <p class="font-hanken font-normal text-[18px] text-gray-600 leading-relaxed mb-8">
                Our approach integrates multidisciplinary expertise with future-driven technology to deliver research-backed, end-to-end solutions.
            </p>

            <!-- Button Partner With Us (Bentuk Kotak rounded-lg) -->
            <a href="#" class="w-[170px] h-[44px] flex items-center justify-center bg-[#D21502] hover:bg-red-700 text-white font-poppins font-semibold text-[14px] rounded-lg transition-all duration-200 shadow-sm">
                Partner With Us
            </a>

        </div>

        <!-- RIGHT CARDS (W:344px, H:150.5px) -->
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">

            <!-- CARD 1 -->
            <div class="w-full sm:w-[344px] h-[150.5px] p-6 bg-[#F7F9FB] rounded-2xl border border-gray-200/80 flex items-start gap-4 shrink-0 shadow-sm">
                <div class="w-10 h-10 rounded-full bg-gray-200/70 flex-shrink-0 flex items-center justify-center text-[#D21502] text-base">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div class="flex-1 overflow-hidden">
                    <h4 class="font-poppins font-semibold text-[16px] text-gray-900 mb-1.5 leading-snug">
                        Expert multidisciplinary team
                    </h4>
                    <p class="font-hanken font-normal text-[14px] text-gray-500 leading-relaxed line-clamp-3">
                        Skilled researchers, engineers, and creators specializing in XR, game development, and 3D design.
                    </p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="w-full sm:w-[344px] h-[150.5px] p-6 bg-[#F7F9FB] rounded-2xl border border-gray-200/80 flex items-start gap-4 shrink-0 shadow-sm">
                <div class="w-10 h-10 rounded-full bg-gray-200/70 flex-shrink-0 flex items-center justify-center text-[#D21502] text-base">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <div class="flex-1 overflow-hidden">
                    <h4 class="font-poppins font-semibold text-[16px] text-gray-900 mb-1.5 leading-snug">
                        Future-driven technology
                    </h4>
                    <p class="font-hanken font-normal text-[14px] text-gray-500 leading-relaxed line-clamp-3">
                        Developing solutions using the latest XR, AI, and interactive media technologies.
                    </p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="w-full sm:w-[344px] h-[150.5px] p-6 bg-[#F7F9FB] rounded-2xl border border-gray-200/80 flex items-start gap-4 shrink-0 shadow-sm">
                <div class="w-10 h-10 rounded-full bg-gray-200/70 flex-shrink-0 flex items-center justify-center text-[#D21502] text-base">
                    <i class="fa-solid fa-microscope"></i>
                </div>
                <div class="flex-1 overflow-hidden">
                    <h4 class="font-poppins font-semibold text-[16px] text-gray-900 mb-1.5 leading-snug">
                        Research-Backed Approach
                    </h4>
                    <p class="font-hanken font-normal text-[14px] text-gray-500 leading-relaxed line-clamp-3">
                        Grounded in research, user testing, and industry standards to ensure reliability.
                    </p>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="w-full sm:w-[344px] h-[150.5px] p-6 bg-[#F7F9FB] rounded-2xl border border-gray-200/80 flex items-start gap-4 shrink-0 shadow-sm">
                <div class="w-10 h-10 rounded-full bg-gray-200/70 flex-shrink-0 flex items-center justify-center text-[#D21502] text-base">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div class="flex-1 overflow-hidden">
                    <h4 class="font-poppins font-semibold text-[16px] text-gray-900 mb-1.5 leading-snug">
                        End-to-End Development
                    </h4>
                    <p class="font-hanken font-normal text-[14px] text-gray-500 leading-relaxed line-clamp-3">
                        From concept design, prototyping, to deployment for seamless scalable solutions.
                    </p>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- ========================================= -->
<!-- CALL TO ACTION (CTA) -->
<!-- ========================================= -->
<section class="relative w-full bg-[#F8F9FA] overflow-hidden min-h-[450px]">

    <!-- DECORATION : TOP RIGHT CIRCLE -->
    <div class="absolute -top-[105px] right-[60px] w-[290px] h-[290px] rounded-full border-[1.5px] border-[#D21502]/40 pointer-events-none z-10"></div>

    <!-- DECORATION : BOTTOM RIGHT CIRCLE -->
    <div class="absolute -bottom-[125px] -right-[55px] w-[270px] h-[270px] rounded-full border-[1.5px] border-[#D21502]/40 pointer-events-none z-20"></div>

    <!-- SMALL RHOMBUS DECORATION -->
    <div class="absolute left-[4%] top-[42px] w-[20px] h-[20px] rotate-45 rounded-[2px] bg-[#D21502]/35 pointer-events-none z-10"></div>

    <!-- SMALL TOP LINES -->
    <div class="absolute left-[11%] top-[45px] w-[32%] rotate-6 origin-left pointer-events-none z-10">
        <div class="h-[1.5px] w-full bg-[#D21502]/35"></div>
        <div class="h-[1.5px] w-[82%] mt-[14px] ml-[10%] bg-[#D21502]/35"></div>
    </div>

    <!-- DOT PATTERN 2 (Top: 298px | Bottom: 128px | Left: 512px | Right: 724px) -->
    <div class="hidden lg:block absolute left-[512px] right-[724px] top-[298px] bottom-[128px] pointer-events-none opacity-40 z-10">
        <div class="grid grid-cols-3 gap-[7px]">
            <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
        </div>
    </div>

    <!-- MAIN CONTENT CONTAINER -->
    <div class="relative z-30 w-full min-h-[450px] flex items-center">

        <!-- LEFT AREA: TEXT & BUTTON (102.08px dari Kiri) -->
        <div class="w-full lg:w-[572px] lg:ml-[102.08px] pt-[60px] pb-[80px] z-30 flex flex-col items-start">

            <!-- Judul: Poppins SemiBold 48px -->
            <h2 class="font-poppins font-semibold text-[48px] leading-[1.1] tracking-tight mb-4 text-[#303B4F]">
                Have an Idea <br>
                <span class="text-[#D21502]">Worth Exploring?</span>
            </h2>

            <!-- Deskripsi: Hanken Grotesk Regular 12px -->
            <p class="font-hanken font-normal text-[16px] text-[#3F4A5A] leading-[1.65] max-w-[360px] mb-6">
                Let's research, experiment, and build the next experience together.
            </p>

            <!-- Button: W:197px, H:44px, Poppins SemiBold 14px, Kotak (rounded-lg) -->
            <a href="#"
               class="w-[197px] h-[44px] inline-flex items-center justify-center gap-2 bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-[14px] rounded-lg transition-all duration-200 shadow-sm shrink-0">
                <span>Let's Collaborate</span>
                <span class="text-[15px]">→</span>
            </a>

        </div>

        <!-- DOT PATTERN 1 (Top: 224px | Bottom: 202px | Left: 596px | Right: 640px) -->
        <div class="hidden lg:block absolute left-[596px] right-[640px] top-[224px] bottom-[202px] pointer-events-none opacity-40 z-10">
            <div class="grid grid-cols-3 gap-[7px]">
                <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
                <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
                <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
                <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
                <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
                <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
                <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
                <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
                <span class="w-[3px] h-[3px] rounded-full bg-[#D21502]"></span>
            </div>
        </div>

        <!-- RIGHT AREA: LOGO MREC BIG (W:483.84px, H:216.41px | 694.08px dari Kiri, 102.08px dari Kanan) -->
        <div class="hidden lg:block lg:absolute lg:left-[694.08px] lg:right-[102.08px] lg:top-[126.8px] lg:w-[483.84px] lg:h-[216.41px] z-20">
            <img src="{{ Storage::url('images/LogoMrecBig.PNG') }}"
                 alt="Logo MREC Big"
                 class="w-[483.84px] h-[216.41px] object-contain relative z-20">
        </div>

    </div>

    <!-- WAVE AREA -->
    <div class="absolute bottom-0 left-0 w-full h-[78px] sm:h-[88px] lg:h-[98px] pointer-events-none overflow-hidden z-40">
        <img src="{{ Storage::url('images/Gelombang.png') }}"
             alt="Gelombang"
             class="w-full h-full object-fill">
    </div>

    <!-- BOTTOM RED BASE -->
    <div class="absolute bottom-0 left-0 w-full h-[3px] bg-[#D21502] z-50"></div>

</section>

@endsection