@extends('layouts.app')

@section('title', 'MREC - Services')

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-12 bg-white text-center">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h1 class="text-4xl md:text-5xl font-bold text-[#D21502] mb-4">Our Services</h1>
        <p class="text-gray-500 max-w-2xl mx-auto text-sm md:text-base">
            Garis Besar Layanan Yang Ditawarkan dan Keuntungannya Untuk Client.
        </p>
    </div>
</section>

<!-- Services List Section -->
<section class="pb-24 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">

        <!-- Service 1 -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-gray-50/60 p-8 rounded-3xl border border-gray-100">
            <div class="lg:col-span-4 rounded-2xl overflow-hidden shadow-sm">
                <img src="{{ asset('storage/images/service-vr.jpg') }}" alt="VR/AR Development" class="w-full h-64 lg:h-80 object-cover">
            </div>
            <div class="lg:col-span-8">
                <h2 class="text-2xl md:text-3xl font-bold text-[#D21502] mb-4 uppercase tracking-wide">
                    VR/AR DEVELOPMENT
                </h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Kami mengembangkan solusi Virtual Reality (VR) dan Augmented Reality (AR) yang imersif untuk kebutuhan pendidikan, pelatihan, hiburan, maupun industri. Dengan menggabungkan teknologi terbaru dan pendekatan berbasis pengalaman, kami mampu menghadirkan simulasi interaktif yang mereplikasi situasi dunia nyata secara akurat.
                </p>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-gray-50/60 p-8 rounded-3xl border border-gray-100">
            <div class="lg:col-span-8 lg:order-1 order-2">
                <h2 class="text-2xl md:text-3xl font-bold text-[#D21502] mb-4 uppercase tracking-wide">
                    GAME DEVELOPMENT
                </h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Tim kami merancang dan membangun game interaktif untuk keperluan hiburan, edukasi, simulasi, hingga gamifikasi proses bisnis. Kami menggabungkan konsep cerita yang kuat, mekanik permainan yang menarik, dan visual yang memukau untuk menciptakan pengalaman bermain yang berkesan.
                </p>
            </div>
            <div class="lg:col-span-4 lg:order-2 order-1 rounded-2xl overflow-hidden shadow-sm">
                <img src="{{ asset('storage/images/service-game.jpg') }}" alt="Game Development" class="w-full h-64 lg:h-80 object-cover">
            </div>
        </div>

        <!-- Service 3 -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-gray-50/60 p-8 rounded-3xl border border-gray-100">
            <div class="lg:col-span-4 rounded-2xl overflow-hidden shadow-sm">
                <img src="{{ asset('storage/images/service-3d.jpg') }}" alt="3D Design" class="w-full h-64 lg:h-80 object-cover">
            </div>
            <div class="lg:col-span-8">
                <h2 class="text-2xl md:text-3xl font-bold text-[#D21502] mb-4 uppercase tracking-wide">
                    3D DESIGN
                </h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Kami menyediakan layanan desain 3D profesional, mencakup pemodelan, animasi, hingga visualisasi realistis untuk berbagai bidang seperti arsitektur, penelitian, pemasaran, simulasi, dan pengembangan produk.
                </p>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center bg-gray-50/60 p-8 rounded-3xl border border-gray-100">
            <div class="lg:col-span-8 lg:order-1 order-2">
                <h2 class="text-2xl md:text-3xl font-bold text-[#D21502] mb-4 uppercase tracking-wide">
                    WEB/MOBILE APP DEVELOPMENT
                </h2>
                <p class="text-gray-600 text-sm md:text-base leading-relaxed">
                    Kami membangun aplikasi web dan mobile yang modern, responsif, dan mudah digunakan untuk mendukung kebutuhan digital organisasi maupun bisnis Anda.
                </p>
            </div>
            <div class="lg:col-span-4 lg:order-2 order-1 rounded-2xl overflow-hidden shadow-sm">
                <img src="{{ asset('storage/images/service-web.jpg') }}" alt="Web & Mobile App Development" class="w-full h-64 lg:h-80 object-cover">
            </div>
        </div>

    </div>
</section>
@endsection