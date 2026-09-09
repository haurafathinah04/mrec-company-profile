@extends('layouts.app')

@section('title', 'MREC - Our Services')

@section('content')

<!-- ========================================= -->
<!-- 1. HERO SECTION SERVICES (CENTERED) -->
<!-- ========================================= -->
<section class="bg-[#FBFBFC] relative overflow-hidden pt-28 pb-16 lg:pt-36 lg:pb-20 text-center">
    <div class="w-full max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        
        <!-- Icon 3 Titik / Dekorasi Atas -->
        <div class="flex justify-center mb-4 text-[#D21502]">
            <i class="fa-solid fa-cubes text-2xl"></i>
        </div>

        <!-- Judul Utama -->
        <h1 class="font-sora font-bold text-[44px] sm:text-[56px] text-[#D21502] leading-tight mb-4">
            Our Services
        </h1>

        <!-- Subtitle / Garis Deskripsi -->
        <p class="font-hanken font-normal text-[15px] sm:text-[16px] text-gray-500 max-w-xl mx-auto leading-relaxed">
            (Garis Besar Layanan Yang Ditawarkan dan Keuntungannya Untuk Client)
        </p>

    </div>
</section>

<!-- ========================================= -->
<!-- 2. SERVICES LIST (ALTERNATING LAYOUT) -->
<!-- ========================================= -->
<section class="py-16 sm:py-20 bg-white">
    <div class="w-full max-w-[1280px] mx-auto px-6 sm:px-12 lg:px-16 flex flex-col gap-12 sm:gap-16">

        <!-- ITEM 1: VR/AR DEVELOPMENT (Gambar Kiri, Teks Kanan) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-center">
            <div class="lg:col-span-5">
                <div class="w-full h-[260px] sm:h-[300px] rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-gray-100">
                    <img src="{{ asset('storage/images/HeroAbout.png') }}" 
                         alt="VR/AR Development" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            <div class="lg:col-span-7 bg-[#FBFBFC] p-8 sm:p-10 rounded-2xl border border-gray-100 flex flex-col justify-center h-full">
                <h2 class="font-poppins font-bold text-[24px] sm:text-[28px] text-[#D21502] mb-4 uppercase">
                    VR/AR DEVELOPMENT
                </h2>
                <p class="font-hanken font-normal text-[15px] text-gray-600 leading-relaxed">
                    Kami mengembangkan solusi Virtual Reality (VR) dan Augmented Reality (AR) yang imersif untuk kebutuhan pendidikan, pelatihan, hiburan, maupun industri. Dengan menggabungkan teknologi terbaru dan pendekatan berbasis pengalaman, kami mampu menghadirkan simulasi interaktif yang mereplikasi situasi dunia nyata secara akurat. Setiap proyek VR/AR dirancang untuk meningkatkan efektivitas pembelajaran, memperkuat retensi materi, serta memberikan pengalaman digital yang lebih hidup dan mendalam.
                </p>
            </div>
        </div>

        <!-- ITEM 2: GAME DEVELOPMENT (Teks Kiri, Gambar Kanan) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-center">
            <div class="lg:col-span-7 order-2 lg:order-1 bg-[#FBFBFC] p-8 sm:p-10 rounded-2xl border border-gray-100 flex flex-col justify-center h-full">
                <h2 class="font-poppins font-bold text-[24px] sm:text-[28px] text-[#D21502] mb-4 uppercase">
                    GAME DEVELOPMENT
                </h2>
                <p class="font-hanken font-normal text-[15px] text-gray-600 leading-relaxed">
                    Tim kami merancang dan membangun game interaktif untuk keperluan hiburan, edukasi, simulasi, hingga gamifikasi proses bisnis. Kami menggabungkan konsep cerita yang kuat, mekanik permainan yang menarik, dan visual yang memukau untuk menciptakan pengalaman bermain yang berkesan. Dengan pendekatan end-to-end mulai dari konsep, desain, pengembangan, hingga pengujian, kami memastikan setiap game memiliki kualitas tinggi dan mampu memenuhi tujuan pengguna maupun kebutuhan proyek.
                </p>
            </div>
            <div class="lg:col-span-5 order-1 lg:order-2">
                <div class="w-full h-[260px] sm:h-[300px] rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-gray-100">
                    <img src="{{ asset('storage/images/HeroAbout.png') }}" 
                         alt="Game Development" 
                         class="w-full h-full object-cover">
                </div>
            </div>
        </div>

        <!-- ITEM 3: 3D DESIGN (Gambar Kiri, Teks Kanan) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-center">
            <div class="lg:col-span-5">
                <div class="w-full h-[260px] sm:h-[300px] rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-gray-100">
                    <img src="{{ asset('storage/images/HeroAbout.png') }}" 
                         alt="3D Design" 
                         class="w-full h-full object-cover">
                </div>
            </div>
            <div class="lg:col-span-7 bg-[#FBFBFC] p-8 sm:p-10 rounded-2xl border border-gray-100 flex flex-col justify-center h-full">
                <h2 class="font-poppins font-bold text-[24px] sm:text-[28px] text-[#D21502] mb-4 uppercase">
                    3D DESIGN
                </h2>
                <p class="font-hanken font-normal text-[15px] text-gray-600 leading-relaxed">
                    Kami menyediakan layanan desain 3D profesional, mencakup pemodelan, animasi, hingga visualisasi realistis untuk berbagai bidang seperti arsitektur, penelitian, pemasaran, edukasi, dan pengembangan produk. Melalui proses yang terukur dan visi yang berorientasi tinggi, hasil desain 3D kami membantu klien mempresentasikan ide dengan jelas, mempercepat proses pengambilan keputusan, serta meningkatkan kualitas presentasi proyek.
                </p>
            </div>
        </div>

        <!-- ITEM 4: WEB/MOBILE APP DEVELOPMENT (Teks Kiri, Gambar Kanan) -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 sm:gap-8 items-center">
            <div class="lg:col-span-7 order-2 lg:order-1 bg-[#FBFBFC] p-8 sm:p-10 rounded-2xl border border-gray-100 flex flex-col justify-center h-full">
                <h2 class="font-poppins font-bold text-[24px] sm:text-[28px] text-[#D21502] mb-4 uppercase">
                    WEB/MOBILE APP DEVELOPMENT
                </h2>
                <p class="font-hanken font-normal text-[15px] text-gray-600 leading-relaxed">
                    Kami membangun aplikasi web dan mobile yang modern, responsif, dan mudah digunakan untuk mendukung kebutuhan digital organisasi maupun bisnis Anda. Setiap aplikasi dikembangkan dengan fokus pada performa, keamanan, skalabilitas, dan pengalaman pengguna. Mulai dari platform informasi, sistem manajemen, hingga aplikasi berbasis data, kami menyediakan solusi yang dapat diandalkan untuk mendorong transformasi digital Anda.
                </p>
            </div>
            <div class="lg:col-span-5 order-1 lg:order-2">
                <div class="w-full h-[260px] sm:h-[300px] rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-gray-100">
                    <img src="{{ asset('storage/images/HeroAbout.png') }}" 
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
        <div class="w-full max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16 flex flex-col lg:flex-row items-center justify-between gap-8 py-16">
            
            <!-- Teks CTA -->
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

            <!-- Logo Big CTA -->
            <div class="hidden lg:flex lg:w-1/2 justify-end z-20">
                <img src="{{ asset('storage/images/LogoMrecBig.png') }}"
                     alt="Logo MREC Big"
                     class="w-[480px] h-auto object-contain">
            </div>

        </div>
    </div>

    <!-- Hiasan Gelombang -->
    <div class="absolute bottom-0 left-0 w-full h-[78px] sm:h-[88px] lg:h-[98px] pointer-events-none overflow-hidden z-40">
        <img src="{{ asset('storage/images/Gelombang.png') }}"
             alt="Gelombang"
             class="w-full h-full object-fill">
    </div>

    <div class="absolute bottom-0 left-0 w-full h-[3px] bg-[#D21502] z-50"></div>

</section>

@endsection