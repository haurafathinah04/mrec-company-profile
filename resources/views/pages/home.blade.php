@extends('layouts.app')

@section('content')

<!-- HERO UTAMA -->
<section class="relative flex min-h-[594px] h-screen max-h-[760px] w-full items-center overflow-hidden bg-white pt-16 font-sora">
    <img src="{{ asset('storage/images/HeroHome.jpg') }}"
         alt="Interior futuristik Metaverse Research and Experience Center"
         class="absolute inset-0 z-0 h-full w-full object-cover object-center">

    <div class="absolute inset-0 z-10 bg-white/55 pointer-events-none"></div>

    <div class="absolute right-[6.1%] top-[34%] z-20 hidden aspect-square w-[282px] pointer-events-none items-center justify-center md:flex" aria-hidden="true">
        <div class="relative h-full w-full animate-[spin_24s_linear_infinite]">
            <div class="absolute inset-0 rounded-full border border-red-500/10"></div>
            <div class="absolute inset-[13px] rounded-full border border-red-500/20"></div>
            <div class="absolute inset-[26px] rounded-full border border-red-500/30"></div>
            <div class="absolute left-1/2 top-[26px] h-3 w-3 -translate-x-1/2 -translate-y-1/2 rounded-full bg-[#B9160C] shadow-[0_0_7px_rgba(185,22,12,.35)]"></div>
        </div>
    </div>

    <div class="relative z-30 w-full px-6 pb-4 sm:px-10 lg:px-[62px]">
        <div class="max-w-[850px]">
            <h1 class="font-sora text-[42px] font-bold leading-[1.2] text-[#D81808] sm:text-[54px] lg:text-[65px]">
                <span class="block">Metaverse Research</span>
                <span class="block">and Experience Center</span>
            </h1>

            <p class="mt-8 max-w-[795px] font-hanken text-[16px] font-normal leading-[24px] text-[#344054] sm:mt-9">
                MREC (Metaverse Research and Experience Center) adalah Pusat Keunggulan (Center of Excellence)<br class="hidden lg:block">
                di Universitas Telkom yang berfokus pada penelitian dan pengembangan teknologi metaverse dan<br class="hidden lg:block">
                realitas virtual. MREC bertujuan untuk menjadi pionir dalam inovasi digital dengan mengintegrasikan<br class="hidden lg:block">
                berbagai disiplin ilmu untuk menciptakan solusi yang relevan dengan kebutuhan masa depan.
            </p>

            <div class="mt-11 flex flex-wrap items-center gap-4 font-poppins">
                <a href="{{ route('projects.index') }}" class="flex h-[46px] w-[202px] items-center justify-center rounded-full border border-[#D81808] bg-[#D81808] text-[14px] font-semibold text-white transition-colors duration-200 hover:border-[#B9160C] hover:bg-[#B9160C]">
                    Explore Our Projects
                </a>
                <a href="{{ route('contact.index') }}" class="flex h-[46px] w-[204px] items-center justify-center rounded-full border border-[#344054] bg-transparent text-[14px] font-semibold text-[#344054] transition-colors duration-200 hover:bg-[#344054] hover:text-white">
                    Collaborate With Us
                </a>
            </div>
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

            <img src="{{ asset('storage/images/HeroAbout.jpg') }}"
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
            <a href="{{ route('contact.index') }}" class="w-[170px] h-[44px] flex items-center justify-center bg-[#D21502] hover:bg-red-700 text-white font-poppins font-semibold text-[14px] rounded-lg transition-all duration-200 shadow-sm">
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

<!-- 5. MEMBER OF MREC -->
<section class="relative overflow-hidden bg-[#F5F7F9] py-16 sm:py-20 lg:py-24">
    <div class="pointer-events-none absolute inset-0 opacity-30" style="background-image:linear-gradient(#dfe3e8 1px,transparent 1px),linear-gradient(90deg,#dfe3e8 1px,transparent 1px);background-size:44px 44px"></div>
    <div class="relative mx-auto grid min-h-[330px] w-full max-w-[1440px] items-center gap-14 px-8 sm:px-12 lg:grid-cols-12 lg:px-16">
        <div class="lg:col-span-5">
            <h2 class="mb-4 font-poppins text-[36px] font-semibold leading-tight text-[#D21502] sm:text-[42px] lg:text-[48px]">Member of MREC?</h2>
            <p class="mb-7 font-hanken text-[16px] text-gray-600">Scan your ID card here ↓</p>
            <a href="{{ route('contact.index') }}" class="inline-flex h-[44px] w-[170px] items-center justify-center rounded-lg bg-[#D21502] font-poppins text-[14px] font-semibold text-white shadow-sm transition hover:bg-[#AD1203]">Go to website</a>
        </div>
        <div class="relative mx-auto h-[280px] w-full max-w-[590px] lg:col-span-7 lg:h-[330px]" aria-label="MREC membership cards">
            <div class="absolute left-1/2 top-1/2 h-[245px] w-[245px] -translate-x-1/2 -translate-y-1/2 rotate-45 rounded-[58px] border-[30px] border-[#8B8D90] opacity-90"></div>
            <div class="absolute left-1/2 top-1/2 h-[245px] w-[245px] -translate-x-1/2 -translate-y-1/2 -rotate-45 rounded-[58px] border-[30px] border-[#D21502]"></div>
            <article class="absolute left-[3%] top-[6%] z-20 h-[160px] w-[275px] -rotate-[8deg] overflow-hidden rounded-xl border border-gray-200 bg-white p-5 shadow-2xl sm:left-[9%] sm:h-[174px] sm:w-[300px]">
                <div class="flex items-center justify-between border-b border-gray-100 pb-3"><img src="{{ asset('storage/images/LogoMrecBig.png') }}" alt="MREC" class="h-7 w-auto object-contain"><span class="font-poppins text-[8px] font-semibold uppercase tracking-wider text-[#D21502]">Member Card</span></div>
                <p class="mt-5 font-poppins text-[10px] font-semibold uppercase text-gray-800">Rekan MREC</p><p class="mt-1 text-[7px] leading-3 text-gray-400">Metaverse Research and Experience Center</p>
                <div class="absolute bottom-5 left-5 right-5 flex items-center justify-between text-[7px] text-gray-500"><span><i class="fa-solid fa-envelope mr-1 text-[#D21502]"></i>mrec@telkomuniversity.ac.id</span><i class="fa-solid fa-qrcode text-xl text-gray-700"></i></div>
            </article>
            <article class="absolute bottom-[2%] right-[1%] z-30 h-[160px] w-[275px] rotate-[8deg] overflow-hidden rounded-xl border border-gray-200 bg-white p-5 shadow-2xl sm:right-[5%] sm:h-[174px] sm:w-[300px]">
                <div class="flex items-center justify-between border-b border-gray-100 pb-3"><span class="font-poppins text-[8px] font-semibold uppercase tracking-wider text-[#D21502]">MREC Telkom University</span><img src="{{ asset('storage/images/LogoMrecBig.png') }}" alt="MREC" class="h-8 w-auto object-contain"></div>
                <div class="mt-5 flex items-center gap-3"><span class="flex h-10 w-10 items-center justify-center rounded-full bg-gray-100 text-[#D21502]"><i class="fa-solid fa-user"></i></span><div><p class="font-poppins text-[10px] font-semibold uppercase text-gray-800">MREC Member</p><p class="mt-1 text-[7px] text-gray-400">Research • Innovation • Experience</p></div></div>
                <div class="absolute bottom-5 left-5 right-5 h-1 rounded-full bg-[#D21502]"></div>
            </article>
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
            <a href="{{ route('contact.index') }}"
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
            <img src="{{ asset('storage/images/LogoMrecBig.png') }}"
                 alt="Logo MREC Big"
                 class="w-[483.84px] h-[216.41px] object-contain relative z-20">
        </div>

    </div>

    <!-- WAVE AREA -->
    <div class="absolute bottom-0 left-0 w-full h-[78px] sm:h-[88px] lg:h-[98px] pointer-events-none overflow-hidden z-40">
        <div class="absolute -bottom-[74px] -left-[4%] h-[115px] w-[110%] -rotate-2 bg-red-300"></div>
        <div class="absolute -bottom-[82px] -left-[4%] h-[112px] w-[110%] rotate-2 bg-red-400"></div>
        <div class="absolute -bottom-[92px] -left-[4%] h-[108px] w-[110%] bg-[#D21502]"></div>
    </div>

    <!-- BOTTOM RED BASE -->
    <div class="absolute bottom-0 left-0 w-full h-[3px] bg-[#D21502] z-50"></div>

</section>

@endsection