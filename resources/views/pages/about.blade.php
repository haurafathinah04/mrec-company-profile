@extends('layouts.app')

@section('title', 'MREC - About Us')

@section('content')

<!-- ========================================= -->
<!-- 1. HERO SECTION ABOUT -->
<!-- ========================================= -->
<section class="bg-[#FBFBFC] relative overflow-hidden h-[680px]">
    <div class="w-full max-w-[1440px] mx-auto h-full relative">
        
        <!-- TULISAN "ABOUT US" -->
        <span class="absolute left-[72px] right-[596px] top-[180px] font-poppins font-semibold text-[16px] text-[#D21502] tracking-wider uppercase leading-none flex items-center">
            ABOUT US
        </span>

        <!-- TULISAN "MREC" -->
        <h1 class="absolute left-[72px] right-[596px] top-[215px] font-sora font-bold text-[64px] text-gray-900 leading-none flex items-center">
            MREC
        </h1>

        <!-- DESKRIPSI -->
        <p class="absolute left-[72px] right-[685px] top-[305px] font-hanken font-normal text-[16px] text-gray-600 leading-relaxed flex items-center">
            Metaverse Research and Experience Center (MREC) at Telkom University is a leading global hub dedicated to advancing innovation, research, and experiential learning in immersive technologies.
        </p>

        <!-- BUTTON "Explore Our Projects" -->
        <a href="{{ url('/projects') }}" 
           class="absolute left-[72px] top-[425px] w-[202px] h-[46px] inline-flex items-center justify-center bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-[14px] rounded-full shadow-sm transition-all duration-200">
            Explore Our Projects
        </a>

        <!-- GAMBAR HERO (HeroAbout.png) -->
        <div class="hidden lg:block absolute top-[100px] left-[696px] w-[512px] h-[485px] z-20">
            <div class="w-full h-full rounded-3xl overflow-hidden shadow-xl border border-gray-100">
                <img src="{{ asset('storage/images/HeroAbout.png') }}" 
                     alt="Metaverse Research & Experience Center" 
                     class="w-[512px] h-[485px] object-cover">
            </div>
        </div>

    </div>
</section>


<!-- 2. OUR VISION SECTION -->
<section class="pt-28 pb-44 bg-white">
    <div class="max-w-[800px] mx-auto px-6 text-center">
        
        <!-- Icon Eye (Kecilin Dikit: 64x42, Jarak ke Judul Dekat: mb-3) -->
        <div class="w-[64px] h-[42px] mx-auto mb-3 text-[#D21502] flex items-center justify-center">
            <svg class="w-[64px] h-[42px]" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 4.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5zM12 17c-2.76 0-5-2.24-5-5s2.24-5 5-5 5 2.24 5 5-2.24 5-5 5zm0-8c-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3-1.34-3-3-3z"/>
            </svg>
        </div>

        <!-- Judul -->
        <h2 class="font-poppins font-semibold text-[48px] text-gray-900 mb-6 leading-tight">
            Our Vision
        </h2>

        <!-- Deskripsi Visi -->
        <p class="font-hanken font-normal text-[20px] text-gray-600 leading-[1.6] italic">
            "To become a leading global hub for innovation, research, and experiential learning in the metaverse, driving the next generation of digital interactions, virtual realities, and immersive technologies."
        </p>

    </div>
</section>


<!-- ========================================= -->
<!-- 3. OUR MISSION SECTION (COMPACT 1 PAGE Layout) -->
<!-- ========================================= -->
<section class="py-12 bg-[#FBFBFC]">
    <div class="w-full px-6 sm:px-12 lg:px-16 max-w-[1440px] mx-auto">

        <!-- Header Mission (Sejajar sempurna dengan batas kiri kartu) -->
        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-4 mb-12">
            <div>
                <h2 class="font-poppins font-semibold text-[44px] sm:text-[52px] text-gray-900 leading-none">
                    Our Mission
                </h2>
            </div>
            <p class="font-hanken font-normal text-[15px] sm:text-[16px] text-gray-500 max-w-2xl lg:text-right leading-relaxed">
                We are committed to pushing the boundaries of spatial computing through six core pillars of excellence.
            </p>
        </div>

        <!-- Grid Kartu Kompak -->
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-5">

            <!-- Card 1 -->
            <div class="bg-white p-5 rounded-2xl border border-gray-300/80 shadow-sm">
                <div class="w-9 h-9 rounded-full bg-red-50 text-[#D21502] flex items-center justify-center mb-3 text-sm">
                    <i class="fa-solid fa-microscope"></i>
                </div>
                <h3 class="font-poppins font-semibold text-[17px] text-gray-900 mb-1.5">
                    Innovative Research
                </h3>
                <p class="font-hanken font-normal text-[13.5px] text-gray-500 leading-snug">
                    Conduct cutting-edge research to advance the development and understanding of metaverse technologies, including Virtual Reality (VR), Augmented Reality (AR), Mixed Reality (MR), and 3D Website.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-white p-5 rounded-2xl border border-gray-300/80 shadow-sm">
                <div class="w-9 h-9 rounded-full bg-red-50 text-[#D21502] flex items-center justify-center mb-3 text-sm">
                    <i class="fa-solid fa-graduation-cap"></i>
                </div>
                <h3 class="font-poppins font-semibold text-[17px] text-gray-900 mb-1.5">
                    Educational Excellence
                </h3>
                <p class="font-hanken font-normal text-[13.5px] text-gray-500 leading-snug">
                    Provide top-tier educational programs and workshops that equip students, researchers, and professionals with the skills and knowledge necessary to excel in the metaverse industry.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-5 rounded-2xl border border-gray-300/80 shadow-sm">
                <div class="w-9 h-9 rounded-full bg-red-50 text-[#D21502] flex items-center justify-center mb-3 text-sm">
                    <i class="fa-solid fa-diagram-project"></i>
                </div>
                <h3 class="font-poppins font-semibold text-[17px] text-gray-900 mb-1.5">
                    Collaborative Environment
                </h3>
                <p class="font-hanken font-normal text-[13.5px] text-gray-500 leading-snug">
                    Foster a collaborative environment that brings together academia, industry partners, and government bodies to explore, develop, and implement metaverse solutions.
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-white p-5 rounded-2xl border border-gray-300/80 shadow-sm">
                <div class="w-9 h-9 rounded-full bg-red-50 text-[#D21502] flex items-center justify-center mb-3 text-sm">
                    <i class="fa-solid fa-users"></i>
                </div>
                <h3 class="font-poppins font-semibold text-[17px] text-gray-900 mb-1.5">
                    Community Engagement
                </h3>
                <p class="font-hanken font-normal text-[13.5px] text-gray-500 leading-snug">
                    Engage with the wider community through outreach programs, public lectures, and immersive experiences that showcase the potential of the metaverse to transform various sectors.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-5 rounded-2xl border border-gray-300/80 shadow-sm">
                <div class="w-9 h-9 rounded-full bg-red-50 text-[#D21502] flex items-center justify-center mb-3 text-sm">
                    <i class="fa-solid fa-leaf"></i>
                </div>
                <h3 class="font-poppins font-semibold text-[17px] text-gray-900 mb-1.5">
                    Sustainable Development
                </h3>
                <p class="font-hanken font-normal text-[13.5px] text-gray-500 leading-snug">
                    Promote sustainable and ethical development within the metaverse, ensuring that advancements contribute positively to society and adhere to principles of inclusivity and digital well-being.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="bg-white p-5 rounded-2xl border border-gray-300/80 shadow-sm">
                <div class="w-9 h-9 rounded-full bg-red-50 text-[#D21502] flex items-center justify-center mb-3 text-sm">
                    <i class="fa-solid fa-rocket"></i>
                </div>
                <h3 class="font-poppins font-semibold text-[17px] text-gray-900 mb-1.5">
                    Innovative Applications
                </h3>
                <p class="font-hanken font-normal text-[13.5px] text-gray-500 leading-snug">
                    Explore and develop innovative applications of metaverse technologies across different industries, driving forward new business models and opportunities for economic growth.
                </p>
            </div>

        </div>

    </div>
</section>

<!-- ========================================= -->
<!-- CALL TO ACTION (CTA) -->
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
        <div class="w-full lg:w-[572px] lg:ml-[102.08px] pt-[60px] pb-[80px] z-30 flex flex-col items-start px-6 lg:px-0">
            <h2 class="font-poppins font-semibold text-[48px] leading-[1.1] tracking-tight mb-4 text-[#303B4F]">
                Have an Idea <br>
                <span class="text-[#D21502]">Worth Exploring?</span>
            </h2>

            <p class="font-hanken font-normal text-[16px] text-[#3F4A5A] leading-[1.65] max-w-[360px] mb-6">
                Let's research, experiment, and build the next experience together.
            </p>

            <a href="{{ url('/#contact') }}"
               class="w-[197px] h-[44px] inline-flex items-center justify-center gap-2 bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-[14px] rounded-lg transition-all duration-200 shadow-sm shrink-0">
                <span>Let's Collaborate</span>
                <span class="text-[15px]">→</span>
            </a>
        </div>

        <div class="hidden lg:block lg:absolute lg:left-[694.08px] lg:right-[102.08px] lg:top-[126.8px] lg:w-[483.84px] lg:h-[216.41px] z-20">
            <img src="{{ asset('storage/images/LogoMrecBig.png') }}"
                 alt="Logo MREC Big"
                 class="w-[483.84px] h-[216.41px] object-contain relative z-20">
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