@extends('layouts.app')

@section('title', 'MREC - Our Services')

@section('content')

<!-- ========================================= -->
<!-- 1. HERO SECTION SERVICES (CENTERED) -->
<!-- ========================================= -->
<section class="bg-[#FBFBFC] relative overflow-hidden pt-28 pb-16 lg:pt-36 lg:pb-20 text-center">
    <div class="w-full max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">

        <!-- Icon 3 Gear Solid -->
        <div class="flex justify-center mb-4 text-[#334155]">
            <svg class="w-16 h-16" viewBox="0 0 100 100" fill="currentColor">
                <!-- Gear 1 (Kiri Atas) -->
                <g transform="translate(8, 5) scale(0.9)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="
                        M 25 5 L 30 5 L 30 11.27 A 19.8 19.8 0 0 1 36.17 13.83 L 40.6 9.4 L 44.14 12.94 L 39.7 17.37 A 19.8 19.8 0 0 1 42.27 23.54 L 48.54 23.54 L 48.54 28.54 L 42.27 28.54 A 19.8 19.8 0 0 1 39.7 34.71 L 44.14 39.14 L 40.6 42.68 L 36.17 38.25 A 19.8 19.8 0 0 1 30 40.81 L 30 47.08 L 25 47.08 L 25 40.81 A 19.8 19.8 0 0 1 18.83 38.25 L 14.4 42.68 L 10.86 39.14 L 15.3 34.71 A 19.8 19.8 0 0 1 12.73 28.54 L 6.46 28.54 L 6.46 23.54 L 12.73 23.54 A 19.8 19.8 0 0 1 15.3 17.37 L 10.86 12.94 L 14.4 9.4 L 18.83 13.83 A 19.8 19.8 0 0 1 25 11.27 Z
                        M 27.5 18.04 A 8 8 0 1 0 27.5 34.04 A 8 8 0 1 0 27.5 18.04 Z
                    " />
                </g>
                <!-- Gear 2 (Kanan Atas) -->
                <g transform="translate(46, 15) scale(0.9)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="
                        M 25 5 L 30 5 L 30 11.27 A 19.8 19.8 0 0 1 36.17 13.83 L 40.6 9.4 L 44.14 12.94 L 39.7 17.37 A 19.8 19.8 0 0 1 42.27 23.54 L 48.54 23.54 L 48.54 28.54 L 42.27 28.54 A 19.8 19.8 0 0 1 39.7 34.71 L 44.14 39.14 L 40.6 42.68 L 36.17 38.25 A 19.8 19.8 0 0 1 30 40.81 L 30 47.08 L 25 47.08 L 25 40.81 A 19.8 19.8 0 0 1 18.83 38.25 L 14.4 42.68 L 10.86 39.14 L 15.3 34.71 A 19.8 19.8 0 0 1 12.73 28.54 L 6.46 28.54 L 6.46 23.54 L 12.73 23.54 A 19.8 19.8 0 0 1 15.3 17.37 L 10.86 12.94 L 14.4 9.4 L 18.83 13.83 A 19.8 19.8 0 0 1 25 11.27 Z
                        M 27.5 18.04 A 8 8 0 1 0 27.5 34.04 A 8 8 0 1 0 27.5 18.04 Z
                    " />
                </g>
                <!-- Gear 3 (Bawah Tengah) -->
                <g transform="translate(27, 46) scale(0.9)">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="
                        M 25 5 L 30 5 L 30 11.27 A 19.8 19.8 0 0 1 36.17 13.83 L 40.6 9.4 L 44.14 12.94 L 39.7 17.37 A 19.8 19.8 0 0 1 42.27 23.54 L 48.54 23.54 L 48.54 28.54 L 42.27 28.54 A 19.8 19.8 0 0 1 39.7 34.71 L 44.14 39.14 L 40.6 42.68 L 36.17 38.25 A 19.8 19.8 0 0 1 30 40.81 L 30 47.08 L 25 47.08 L 25 40.81 A 19.8 19.8 0 0 1 18.83 38.25 L 14.4 42.68 L 10.86 39.14 L 15.3 34.71 A 19.8 19.8 0 0 1 12.73 28.54 L 6.46 28.54 L 6.46 23.54 L 12.73 23.54 A 19.8 19.8 0 0 1 15.3 17.37 L 10.86 12.94 L 14.4 9.4 L 18.83 13.83 A 19.8 19.8 0 0 1 25 11.27 Z
                        M 27.5 18.04 A 8 8 0 1 0 27.5 34.04 A 8 8 0 1 0 27.5 18.04 Z
                    " />
                </g>
            </svg>
        </div>

        <!-- Judul Utama -->
        <h1 class="font-sora font-bold text-[48px] sm:text-[64px] text-[#D21502] leading-tight mb-4">
            Our Services
        </h1>

        <!-- Subtitle -->
        <p class="font-hanken font-normal text-[15px] sm:text-[16px] text-gray-500 whitespace-nowrap overflow-hidden text-ellipsis max-w-full mx-auto leading-relaxed">
            (Garis Besar Layanan Yang Ditawarkan dan Keuntungannya Untuk Client)
        </p>

    </div>
</section>

<!-- ========================================= -->
<!-- 2. SERVICES LIST -->
<!-- ========================================= -->
<section class="py-16 sm:py-20 bg-[#F3F4F6]">
    <div class="w-full max-w-[1360px] mx-auto px-6 sm:px-10 flex flex-col gap-12 sm:gap-16">

        <!-- ITEM 1: VR/AR DEVELOPMENT -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <!-- Foto VR.png -->
            <div class="lg:col-span-5">
                <div class="w-full h-[280px] sm:h-[320px] rounded-2xl overflow-hidden bg-gray-100 shadow-md border border-gray-200/80">
                    <img src="{{ asset('storage/images/VR.png') }}" 
                         alt="VR/AR Development" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            <!-- Card Penjelasan -->
            <div class="lg:col-span-7 bg-white p-7 sm:p-10 rounded-3xl border border-gray-200/60 shadow-[0_20px_45px_rgba(0,0,0,0.12)] flex flex-col justify-center">
                <h2 class="font-poppins font-semibold text-[28px] sm:text-[36px] text-[#D21502] mb-3 uppercase leading-tight">
                    VR/AR DEVELOPMENT
                </h2>
                <p class="font-hanken font-normal text-[15px] sm:text-[16px] text-gray-600 leading-relaxed text-justify">
                    Kami mengembangkan solusi Virtual Reality (VR) dan Augmented Reality (AR) yang imersif untuk kebutuhan pendidikan, pelatihan, hiburan, maupun industri. Dengan menggabungkan teknologi terbaru dan pendekatan berbasis pengalaman, kami mampu menghadirkan simulasi interaktif yang mereplikasi situasi dunia nyata secara akurat. Setiap proyek VR/AR dirancang untuk meningkatkan efektivitas pembelajaran, memperkuat retensi materi, serta memberikan pengalaman digital yang lebih hidup dan mendalam.
                </p>
            </div>
        </div>

        <!-- ITEM 2: GAME DEVELOPMENT -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <!-- Card Penjelasan -->
            <div class="lg:col-span-7 order-2 lg:order-1 bg-white p-7 sm:p-10 rounded-3xl border border-gray-200/60 shadow-[0_20px_45px_rgba(0,0,0,0.12)] flex flex-col justify-center">
                <h2 class="font-poppins font-semibold text-[28px] sm:text-[36px] text-[#D21502] mb-3 uppercase leading-tight">
                    GAME DEVELOPMENT
                </h2>
                <p class="font-hanken font-normal text-[15px] sm:text-[16px] text-gray-600 leading-relaxed text-justify">
                    Tim kami merancang dan membangun game interaktif untuk keperluan hiburan, edukasi, simulasi, hingga gamifikasi proses bisnis. Kami menggabungkan konsep cerita yang kuat, mekanik permainan yang menarik, dan visual yang memukau untuk menciptakan pengalaman bermain yang berkesan. Dengan pendekatan end-to-end — mulai dari konsep, desain, pengembangan, hingga pengujian — kami memastikan setiap game memiliki kualitas tinggi dan mampu memenuhi tujuan pengguna maupun kebutuhan proyek.
                </p>
            </div>
            <!-- Foto Gamedev.png -->
            <div class="lg:col-span-5 order-1 lg:order-2">
                <div class="w-full h-[280px] sm:h-[320px] rounded-2xl overflow-hidden bg-gray-100 shadow-md border border-gray-200/80">
                    <img src="{{ asset('storage/images/Gamedev.png') }}" 
                         alt="Game Development" 
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- ITEM 3: 3D DESIGN -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <!-- Foto 3D.png -->
            <div class="lg:col-span-5">
                <div class="w-full h-[280px] sm:h-[320px] rounded-2xl overflow-hidden bg-gray-100 shadow-md border border-gray-200/80">
                    <img src="{{ asset('storage/images/3D.png') }}" 
                         alt="3D Design" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            <!-- Card Penjelasan -->
            <div class="lg:col-span-7 bg-white p-7 sm:p-10 rounded-3xl border border-gray-200/60 shadow-[0_20px_45px_rgba(0,0,0,0.12)] flex flex-col justify-center">
                <h2 class="font-poppins font-semibold text-[28px] sm:text-[36px] text-[#D21502] mb-3 uppercase leading-tight">
                    3D DESIGN
                </h2>
                <p class="font-hanken font-normal text-[15px] sm:text-[16px] text-gray-600 leading-relaxed text-justify">
                    Kami menyediakan layanan desain 3D profesional, mencakup pemodelan, animasi, hingga visualisasi realistis untuk berbagai bidang seperti arsitektur, penelitian, pemasaran, simulasi, dan pengembangan produk. Melalui detail yang presisi dan visual yang berkualitas tinggi, hasil desain 3D kami membantu klien mempresentasikan ide dengan jelas, mempercepat proses pengambilan keputusan, serta meningkatkan kualitas presentasi proyek.
                </p>
            </div>
        </div>

        <!-- ITEM 4: WEB/MOBILE APP DEVELOPMENT -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-center">
            <!-- Card Penjelasan -->
            <div class="lg:col-span-7 order-2 lg:order-1 bg-white p-7 sm:p-10 rounded-3xl border border-gray-200/60 shadow-[0_20px_45px_rgba(0,0,0,0.12)] flex flex-col justify-center">
                <h2 class="font-poppins font-semibold text-[28px] sm:text-[36px] text-[#D21502] mb-3 uppercase leading-tight">
                    WEB/MOBILE APP DEVELOPMENT
                </h2>
                <p class="font-hanken font-normal text-[15px] sm:text-[16px] text-gray-600 leading-relaxed text-justify">
                    Kami membangun aplikasi web dan mobile yang modern, responsif, dan mudah digunakan untuk mendukung kebutuhan digital organisasi maupun bisnis Anda. Setiap aplikasi dikembangkan dengan fokus pada performa, keamanan, skalabilitas, dan pengalaman pengguna. Mulai dari platform informasi, sistem manajemen, hingga aplikasi berbasis data, kami menyediakan solusi yang dapat diandalkan untuk mendorong transformasi digital Anda.
                </p>
            </div>
            <!-- Foto WebMobile.png -->
            <div class="lg:col-span-5 order-1 lg:order-2">
                <div class="w-full h-[280px] sm:h-[320px] rounded-2xl overflow-hidden bg-gray-100 shadow-md border border-gray-200/80">
                    <img src="{{ asset('storage/images/WebMobile.png') }}" 
                         alt="Web Mobile Development" 
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>

    </div>
</section>

<!-- ========================================= -->
<!-- 3. CALL TO ACTION (CTA) -->
<!-- ========================================= -->
<section class="relative w-full bg-[#F8F9FA] overflow-hidden min-h-[450px]">

    <div class="absolute -top-[105px] right-[60px] w-[290px] h-[290px] rounded-full border-[1.5px] border-[#D21502]/40 pointer-events-none z-10"></div>
    <div class="absolute -bottom-[125px] -right-[55px] w-[270px] h-[270px] rounded-full border-[1.5px] border-[#D21502]/40 pointer-events-none z-20"></div>
    <div class="absolute left-[4%] top-[42px] w-[20px] h-[20px] rotate-45 rounded-[2px] bg-[#D21502]/35 pointer-events-none z-10"></div>

    <div class="absolute left-[11%] top-[45px] w-[32%] rotate-6 origin-left pointer-events-none z-10">
        <div class="h-[1.5px] w-full bg-[#D21502]/35"></div>
        <div class="h-[1.5px] w-[82%] mt-[14px] ml-[10%] bg-[#D21502]/35"></div>
    </div>

    <div class="relative z-30 w-full min-h-[450px] flex items-center">
        <div class="w-full max-w-[1360px] mx-auto px-6 sm:px-10 flex flex-col lg:flex-row items-center justify-between gap-8 py-16">

            <div class="w-full lg:w-1/2 flex flex-col items-start z-30">
                <h2 class="font-poppins font-semibold text-[36px] sm:text-[48px] leading-[1.1] tracking-tight mb-4 text-[#303B4F]">
                    Have an Idea <br>
                    <span class="text-[#D21502]">Worth Exploring?</span>
                </h2>

                <p class="font-hanken font-normal text-[16px] text-[#3F4A5A] leading-[1.65] max-w-[360px] mb-6">
                    Let's research, experiment, and build the next experience together.
                </p>

                <a href="{{ url('/contact') }}"
                   class="px-6 h-[44px] inline-flex items-center justify-center gap-2 bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-[14px] rounded-lg transition-all duration-200 shadow-sm shrink-0">
                    <span>Let's Collaborate</span>
                    <span class="text-[15px]">→</span>
                </a>
            </div>

            <div class="hidden lg:flex lg:w-1/2 justify-end z-20">
                <img src="{{ asset('storage/images/LogoMrecBig.png') }}"
                     alt="Logo MREC Big"
                     class="w-[480px] h-auto object-contain">
            </div>

        </div>
    </div>

    <div class="absolute bottom-0 left-0 w-full h-[78px] sm:h-[88px] lg:h-[98px] pointer-events-none overflow-hidden z-40">
        <img src="{{ asset('storage/images/Gelombang.png') }}"
             alt="Gelombang"
             class="w-full h-full object-fill">
    </div>

    <div class="absolute bottom-0 left-0 w-full h-[3px] bg-[#D21502] z-50"></div>

</section>

@endsection