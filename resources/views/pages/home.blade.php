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

    <!-- ELEMEN DEKORATIF LINGKARAN KECIL & TIPIS DI KANAN -->
    <div class="absolute inset-y-0 right-10 sm:right-20 lg:right-32 my-auto w-[180px] sm:w-[220px] lg:w-[260px] aspect-square pointer-events-none z-20 flex items-center justify-center">
        <div class="relative w-full h-full animate-[spin_18s_linear_infinite]">

            <!-- Lingkaran Luar -->
            <div class="absolute inset-0 border border-red-500/50 rounded-full"></div>

            <!-- Lingkaran Dalam -->
            <div class="absolute inset-5 border border-red-400/40 rounded-full"></div>

            <!-- Titik Merah -->
            <div class="absolute top-5 left-1/2 -translate-x-1/2 -translate-y-1/2 w-2.5 h-2.5 bg-[#E32619] rounded-full shadow-[0_0_8px_#E32619]"></div>

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

        <!-- DESKRIPSI (FONT HANKEN GROTESK) -->
        <p class="font-hanken text-gray-700 font-light text-sm sm:text-base md:text-[15px] mb-8 max-w-[720px] lg:max-w-[760px] leading-[24px] tracking-[0.01em] drop-shadow-[0_1px_2px_rgba(255,255,255,0.8)]">
            MREC (Metaverse Research and Experience Center) adalah Pusat Keunggulan (Center of Excellence) di Universitas Telkom yang berfokus pada penelitian dan pengembangan teknologi metaverse dan realitas virtual. MREC bertujuan untuk menjadi pionir dalam inovasi digital dengan mengintegrasikan berbagai disiplin ilmu untuk menciptakan solusi yang relevan dengan kebutuhan masa depan.
        </p>

        <br>

        <!-- TOMBOL ACTION (FONT POPPINS) -->
        <div class="flex flex-wrap items-center gap-4 font-poppins">

            <!-- Explore Our Projects -->
            <a href="#" class="bg-[#D21502] border border-[#D21502] hover:bg-red-700 hover:border-red-700 text-white font-semibold px-8 sm:px-10 py-3.5 sm:py-4 rounded-full text-sm sm:text-[15px] shadow-sm transition-all duration-200">
                Explore Our Projects
            </a>

            <!-- Collaborate With Us -->
            <a href="#" class="bg-transparent border border-gray-700 hover:bg-gray-900 hover:border-gray-900 text-gray-600 hover:text-white font-semibold px-8 sm:px-10 py-3.5 sm:py-4 rounded-full text-sm sm:text-[15px] transition-all duration-200">
                Collaborate With Us
            </a>

        </div>

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

<!-- 2. ABOUT SECTION (Where Research Meets Experience) -->
<section class="py-24 bg-white relative z-10" style="font-family: 'Sora', sans-serif;">

    <div class="w-full px-8 sm:px-12 lg:px-16 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center">

        <div class="lg:col-span-7 space-y-8 pr-8">

            <h2 class="text-5xl lg:text-6xl font-black text-[#D21502] leading-[1.1]">
                Where Research Meets<br>
                Experience.
            </h2>

            <p class="text-gray-600 text-sm md:text-base leading-relaxed max-w-3xl" style="font-family: 'Hanken Grotesk', sans-serif;">
                We bridge the gap between rigorous academic collaboration and high-end experiential technology. Our work focuses on the core missions of human-centric experiences, spatial computing, and immersive narratives to build the foundations of the next digital frontier.
            </p>

            <a href="#" class="inline-flex items-center gap-2 text-[#D21502] font-bold text-sm hover:underline pt-2">
                Learn More About MREC
                <span>→</span>
            </a>

        </div>

        <div class="lg:col-span-5">

            <div class="relative rounded-3xl overflow-hidden shadow-lg border border-gray-100">

                <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?auto=format&fit=crop&w=1000&q=80"
                     alt="MREC Lab"
                     class="w-full h-[420px] object-cover">

                <div class="absolute bottom-4 left-6 text-white text-sm font-medium drop-shadow-md">
                    Telkom University Affiliated Lab
                </div>

            </div>

        </div>

    </div>

</section>

<!-- 3. OUR SERVICES SECTION -->
<section class="py-28 bg-[#FBFBFC]" style="font-family: 'Sora', sans-serif;">

    <div class="w-full px-8 sm:px-12 lg:px-16">

        <!-- SERVICES HEADING -->
        <div class="text-center max-w-4xl mx-auto mb-20">

            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-semibold text-[#D21502] leading-tight mb-6">
                Our Services
            </h2>

            <p class="text-gray-500 text-base leading-relaxed max-w-2xl mx-auto" style="font-family: 'Hanken Grotesk', sans-serif;">
                Innovative solutions tailored for the future. We combine
                research, creativity, and technology to build impactful
                digital experiences for education, industry, and society.
            </p>

        </div>

        <!-- SERVICES CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">

            <!-- CARD 1 -->
            <div class="bg-white p-10 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">

                <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center text-[#D21502] text-xl mb-8">
                    <i class="fa-solid fa-vr-cardboard"></i>
                </div>

                <h3 class="text-xl font-bold mb-4">
                    VR/AR Development
                </h3>

                <p class="text-gray-500 leading-relaxed mb-8 text-sm" style="font-family: 'Hanken Grotesk', sans-serif;">
                    We develop immersive Virtual and Augmented Reality
                    solutions tailored for education, training, and
                    industry needs.
                </p>

                <a href="#" class="text-[#D21502] font-bold">
                    Learn More →
                </a>

            </div>

            <!-- CARD 2 -->
            <div class="bg-white p-10 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">

                <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center text-[#D21502] text-xl mb-8">
                    <i class="fa-solid fa-gamepad"></i>
                </div>

                <h3 class="text-xl font-bold mb-4">
                    Game Development
                </h3>

                <p class="text-gray-500 leading-relaxed mb-8 text-sm" style="font-family: 'Hanken Grotesk', sans-serif;">
                    We create engaging and innovative games for
                    entertainment, education, simulations, and
                    interactive learning experiences.
                </p>

                <a href="#" class="text-[#D21502] font-bold">
                    Learn More →
                </a>

            </div>

            <!-- CARD 3 -->
            <div class="bg-white p-10 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">

                <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center text-[#D21502] text-xl mb-8">
                    <i class="fa-solid fa-cube"></i>
                </div>

                <h3 class="text-xl font-bold mb-4">
                    3D Design
                </h3>

                <p class="text-gray-500 leading-relaxed mb-8 text-sm" style="font-family: 'Hanken Grotesk', sans-serif;">
                    Professional 3D modeling, animation, rendering,
                    digital assets, and immersive visual experiences.
                </p>

                <a href="#" class="text-[#E32619] font-bold">
                    Learn More →
                </a>

            </div>

            <!-- CARD 4 -->
            <div class="bg-white p-10 rounded-3xl border border-gray-100 shadow-sm hover:shadow-xl transition-all duration-300">

                <div class="w-14 h-14 rounded-2xl bg-red-50 flex items-center justify-center text-[#E32619] text-xl mb-8">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                </div>

                <h3 class="text-xl font-bold mb-4">
                    Web & Mobile Apps
                </h3>

                <p class="text-gray-500 leading-relaxed mb-8 text-sm" style="font-family: 'Hanken Grotesk', sans-serif;">
                    Modern web and mobile applications designed to
                    support digital transformation and business growth.
                </p>

                <a href="#" class="text-[#E32619] font-bold">
                    Learn More →
                </a>

            </div>

        </div>

    </div>

</section>

<!-- DECORATIVE HALF CIRCLE BETWEEN SERVICES & WHY -->
<div class="relative h-0 z-20 pointer-events-none">

    <div class="absolute -left-16 sm:-left-20 lg:-left-24 -top-24 w-[240px] sm:w-[260px] lg:w-[280px] aspect-square">

        <!-- ROTATING CIRCLE -->
        <div class="relative w-full h-full animate-[spin_20s_linear_infinite]">

            <!-- OUTER CIRCLE -->
            <div class="absolute inset-0 border border-[#E32619]/35 rounded-full"></div>

            <!-- INNER CIRCLE -->
            <div class="absolute inset-5 border-[1.5px] border-[#E32619]/45 rounded-full"></div>

            <!-- RED DOT -->
            <div class="absolute top-5 left-1/2 
                        -translate-x-1/2 -translate-y-1/2
                        w-2.5 h-2.5
                        bg-[#E32619]
                        rounded-full
                        shadow-[0_0_8px_#E32619]">
            </div>

        </div>

    </div>

</div>

<!-- 4. WHY WORK WITH US -->
<section class="py-24 bg-white relative overflow-hidden" style="font-family: 'Sora', sans-serif;">

    <div class="w-full px-8 sm:px-12 lg:px-16 grid grid-cols-1 lg:grid-cols-12 gap-16 items-center relative z-10">

        <!-- LEFT -->
        <div class="lg:col-span-5">

            <h2 class="text-5xl lg:text-6xl font-black text-[#E32619] leading-[1.1] mb-6">
                Why Work With Us
            </h2>

            <p class="text-gray-600 text-base leading-relaxed mb-8" style="font-family: 'Hanken Grotesk', sans-serif;">
                Our approach integrates multidisciplinary expertise with future-driven technology to deliver research-backed, end-to-end solutions.
            </p>

            <a href="#" class="inline-block bg-[#E32619] hover:bg-red-700 text-white font-semibold px-8 py-4 rounded-xl transition">
                Partner With Us
            </a>

        </div>

        <!-- RIGHT CARDS (WITH ICONS) -->
        <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-6">

            <!-- CARD 1 -->
            <div class="p-8 bg-[#FBFBFC] rounded-2xl border border-gray-100 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex-shrink-0 flex items-center justify-center text-[#E32619] text-lg">
                    <i class="fa-solid fa-users"></i>
                </div>
                <div>
                    <h4 class="font-bold text-base mb-2">
                        Expert multidisciplinary team
                    </h4>
                    <p class="text-gray-500 text-sm leading-relaxed" style="font-family: 'Hanken Grotesk', sans-serif;">
                        Skilled researchers, engineers, and creators specializing in XR, game development, and 3D design.
                    </p>
                </div>
            </div>

            <!-- CARD 2 -->
            <div class="p-8 bg-[#FBFBFC] rounded-2xl border border-gray-100 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex-shrink-0 flex items-center justify-center text-[#E32619] text-lg">
                    <i class="fa-solid fa-microchip"></i>
                </div>
                <div>
                    <h4 class="font-bold text-base mb-2">
                        Future-driven technology
                    </h4>
                    <p class="text-gray-500 text-sm leading-relaxed" style="font-family: 'Hanken Grotesk', sans-serif;">
                        Developing solutions using the latest XR, AI, and interactive media technologies.
                    </p>
                </div>
            </div>

            <!-- CARD 3 -->
            <div class="p-8 bg-[#FBFBFC] rounded-2xl border border-gray-100 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex-shrink-0 flex items-center justify-center text-[#E32619] text-lg">
                    <i class="fa-solid fa-microscope"></i>
                </div>
                <div>
                    <h4 class="font-bold text-base mb-2">
                        Research-Backed Approach
                    </h4>
                    <p class="text-gray-500 text-sm leading-relaxed" style="font-family: 'Hanken Grotesk', sans-serif;">
                        Grounded in research, user testing, and industry standards to ensure reliability.
                    </p>
                </div>
            </div>

            <!-- CARD 4 -->
            <div class="p-8 bg-[#FBFBFC] rounded-2xl border border-gray-100 flex items-start gap-4">
                <div class="w-12 h-12 rounded-xl bg-red-50 flex-shrink-0 flex items-center justify-center text-[#E32619] text-lg">
                    <i class="fa-solid fa-layer-group"></i>
                </div>
                <div>
                    <h4 class="font-bold text-base mb-2">
                        End-to-End Development
                    </h4>
                    <p class="text-gray-500 text-sm leading-relaxed" style="font-family: 'Hanken Grotesk', sans-serif;">
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
<section class="relative w-full bg-[#F8F9FA] overflow-hidden" style="font-family: 'Sora', sans-serif;">

    <!-- DECORATION : TOP RIGHT CIRCLE -->
    <div class="absolute
                -top-[90px]
                -right-[45px]
                sm:-top-[100px]
                sm:-right-[35px]
                lg:-top-[105px]
                lg:right-[60px]
                w-[220px]
                h-[220px]
                sm:w-[260px]
                sm:h-[260px]
                lg:w-[290px]
                lg:h-[290px]
                rounded-full
                border-[1.5px]
                border-[#E32619]/40
                pointer-events-none
                z-10">
    </div>

    <!-- DECORATION : BOTTOM RIGHT CIRCLE -->
    <div class="absolute
                -bottom-[105px]
                -right-[70px]
                sm:-bottom-[115px]
                sm:-right-[65px]
                lg:-bottom-[125px]
                lg:-right-[55px]
                w-[210px]
                h-[210px]
                sm:w-[240px]
                sm:h-[240px]
                lg:w-[270px]
                lg:h-[270px]
                rounded-full
                border-[1.5px]
                border-[#E32619]/40
                pointer-events-none
                z-20">
    </div>

    <!-- SMALL RHOMBUS DECORATION -->
    <div class="absolute
                left-[4%]
                top-[42px]
                w-[20px]
                h-[20px]
                rotate-45
                rounded-[2px]
                bg-[#E32619]/35
                pointer-events-none
                z-10">
    </div>

    <!-- SMALL TOP LINES -->
    <div class="absolute
                left-[11%]
                top-[45px]
                w-[32%]
                rotate-6
                origin-left
                pointer-events-none
                z-10">

        <div class="h-[1.5px]
                    w-full
                    bg-[#E32619]/35">
        </div>

        <div class="h-[1.5px]
                    w-[82%]
                    mt-[14px]
                    ml-[10%]
                    bg-[#E32619]/35">
        </div>

    </div>

    <!-- DOT PATTERN BOTTOM LEFT -->
    <div class="absolute
                left-[34%]
                bottom-[105px]
                pointer-events-none
                opacity-30
                z-10">

        <div class="grid grid-cols-3 gap-[7px]">
            <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
            <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
        </div>

    </div>

    <!-- MAIN CONTENT -->
    <div class="relative
                z-30
                w-full
                min-h-[410px]
                sm:min-h-[430px]
                lg:min-h-[450px]
                flex
                items-center
                px-8
                sm:px-12
                lg:px-20">

        <div class="w-full
                    flex
                    flex-col
                    md:flex-row
                    items-center
                    justify-between
                    gap-10
                    lg:gap-16">

            <!-- LEFT TEXT & BUTTON -->
            <div class="w-full
                        md:w-[50%]
                        lg:w-[48%]
                        max-w-[500px]
                        text-left
                        md:pl-[1.5cm]">

                <h2 class="text-[30px]
                           sm:text-[36px]
                           lg:text-[40px]
                           xl:text-[43px]
                           font-black
                           leading-[1.1]
                           tracking-tight
                           mb-4">

                    <span class="text-[#303B4F]">
                        Have an Idea
                    </span>
                    <span class="text-[#D92317] inline-block whitespace-nowrap">
                        Worth Exploring?
                    </span>

                </h2>

                <p class="text-[#3F4A5A]
                          text-[12px]
                          sm:text-[13px]
                          lg:text-[13.5px]
                          leading-[1.65]
                          max-w-[330px]
                          mb-6"
                   style="font-family: 'Hanken Grotesk', sans-serif;">
                    Let's research, experiment, and build the next
                    experience together.
                </p>

                <!-- BUTTON CTA -->
                <a href="#"
                   class="inline-flex
                          items-center
                          gap-2
                          bg-[#D92317]
                          hover:bg-[#bd1d13]
                          text-white
                          font-semibold
                          text-[12px]
                          sm:text-[13px]
                          px-6
                          py-3.5
                          rounded-[6px]
                          transition-all
                          duration-200">
                    <span>
                        Let's Collaborate
                    </span>
                    <span class="text-[15px]">
                        →
                    </span>
                </a>

            </div>

            <!-- RIGHT LOGO -->
            <div class="relative
                        w-full
                        md:w-[50%]
                        lg:w-[52%]
                        flex
                        justify-center
                        md:justify-end
                        items-center
                        z-20
                        -translate-y-[0.5cm]
                        md:-translate-y-[1cm]">

                <!-- 9 DOT PATTERN -->
                <div class="absolute
                            -left-4
                            sm:-left-6
                            md:left-4
                            lg:left-8
                            top-1/2
                            -translate-y-1/2
                            pointer-events-none
                            opacity-40
                            z-10">
                    <div class="grid grid-cols-3 gap-[7px]">
                        <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
                        <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
                        <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
                        <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
                        <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
                        <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
                        <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
                        <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
                        <span class="w-[3px] h-[3px] rounded-full bg-[#E32619]"></span>
                    </div>
                </div>

                <img src="{{ asset('storage/images/LogoMrecBig.PNG') }}"
                     alt="Logo MREC"
                     class="w-[300px]
                            sm:w-[350px]
                            md:w-[380px]
                            lg:w-[420px]
                            xl:w-[450px]
                            h-auto
                            object-contain
                            relative
                            z-20">

            </div>

        </div>

    </div>

    <!-- WAVE AREA -->
    <div class="absolute
                bottom-0
                left-0
                w-full
                h-[78px]
                sm:h-[88px]
                lg:h-[98px]
                pointer-events-none
                overflow-hidden
                z-40">

        <img src="{{ asset('storage/images/Gelombang.png') }}"
             alt="Gelombang"
             class="w-full
                    h-full
                    object-fill">

    </div>

    <!-- BOTTOM RED BASE -->
    <div class="absolute
                bottom-0
                left-0
                w-full
                h-[3px]
                bg-[#D92317]
                z-50">
    </div>

</section>

@endsection