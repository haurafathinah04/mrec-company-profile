@extends('layouts.app')

@section('title', 'Contact Us - MREC Telkom University')

@section('content')
<!-- ========================================= -->
<!-- 1. HERO SECTION CONTACT (Rapat dengan Navbar Fixed) -->
<!-- ========================================= -->
<section class="relative w-full overflow-hidden pt-14 sm:pt-16 bg-[#FBFBFC]" style="padding-bottom: 24px;">
    <!-- Wrapper Foto LatarBelakang.png (Presisi persis W:1280px H:274px) -->
    <div class="relative w-full max-w-[1280px] h-[274px] mx-auto overflow-hidden flex items-center">
        <!-- Gambar Latar Belakang -->
        <img src="{{ asset('storage/images/LatarBelakang.png') }}" 
             alt="Latar Belakang Hero" 
             class="absolute inset-0 w-full h-full object-cover object-bottom pointer-events-none z-0">

        <!-- Teks & Judul Hero -->
        <div class="relative z-20 left-[24px] lg:left-[68px] text-left">
            <p class="font-poppins text-xs font-bold uppercase tracking-[0.28em] text-[#D21502] mb-1">
                GET IN TOUCH
            </p>
            <h1 class="font-sora font-bold text-[48px] sm:text-[64px] text-[#D21502] leading-none mb-2">
                Contact Us
            </h1>
            <p class="font-hanken font-normal text-[16px] text-gray-600 leading-relaxed max-w-[600px]">
                Feel free to reach out. We’re always open to consultation and collaboration.
            </p>
        </div>
    </div>
</section>

<!-- ========================================= -->
<!-- 2. MAIN CONTENT SECTION -->
<!-- ========================================= -->
<section class="bg-[#FBFBFC] py-12">
    <div class="w-full max-w-[1280px] mx-auto px-6 flex flex-col items-center">

        <!-- 3 Cards Informasi Kontak (W:352px H:200px + Border Tipis 1px) -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-[24px] mb-12 justify-center">
            
            <!-- Card 1: WhatsApp -->
            <a href="https://wa.me/628111434331" target="_blank" rel="noreferrer" 
               class="w-[352px] h-[200px] bg-white rounded-2xl border border-gray-300 p-6 flex flex-col items-center justify-center text-center shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-[32px] h-[32px] text-gray-800 text-[32px] flex items-center justify-center mb-3 group-hover:text-[#D21502] transition">
                    <i class="fa-brands fa-whatsapp"></i>
                </div>
                <h3 class="font-poppins font-semibold text-[20px] text-gray-900 mb-1">WhatsApp</h3>
                <p class="font-hanken font-normal text-[16px] text-gray-600">(+62) 811-1434-331</p>
            </a>

            <!-- Card 2: E-Mail -->
            <a href="mailto:mrec.telu@gmail.com" 
               class="w-[352px] h-[200px] bg-white rounded-2xl border border-gray-300 p-6 flex flex-col items-center justify-center text-center shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-[32px] h-[32px] text-gray-800 text-[32px] flex items-center justify-center mb-3 group-hover:text-[#D21502] transition">
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <h3 class="font-poppins font-semibold text-[20px] text-gray-900 mb-1">E-Mail</h3>
                <p class="font-hanken font-normal text-[16px] text-gray-600">mrec.telu@gmail.com</p>
            </a>

            <!-- Card 3: Instagram -->
            <a href="https://instagram.com/mrec.telu" target="_blank" rel="noreferrer" 
               class="w-[352px] h-[200px] bg-white rounded-2xl border border-gray-300 p-6 flex flex-col items-center justify-center text-center shadow-sm hover:shadow-xl hover:-translate-y-1.5 transition-all duration-300 group">
                <div class="w-[32px] h-[32px] text-gray-800 text-[32px] flex items-center justify-center mb-3 group-hover:text-[#D21502] transition">
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <h3 class="font-poppins font-semibold text-[20px] text-gray-900 mb-1">Instagram</h3>
                <p class="font-hanken font-normal text-[16px] text-gray-600">@mrec.telu</p>
            </a>

        </div>

        <!-- Grid Layout Bawah: Kiri (Map & Visit Us) | Kanan (Business Hours & Form) -->
        <div class="w-full max-w-[1120px] grid grid-cols-1 lg:grid-cols-2 gap-12 items-start justify-items-center">
            
            <!-- Kolom Kiri: Google Maps (512x512, Tanpa Line) & Visit Us -->
            <div class="flex flex-col space-y-6 w-[512px] max-w-full">
                <!-- Map Box Tanpa Border -->
                <div class="w-[512px] h-[512px] max-w-full bg-gray-200 rounded-2xl overflow-hidden border-0 shadow-sm shrink-0">
                    <iframe title="Lokasi MREC Telkom University" width="100%" height="100%" style="border:0;" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                        src="https://www.google.com/maps?q=GSG%20Telkom%20University%2C%20Jl.%20Telekomunikasi%20No.1%2C%20Bandung&output=embed">
                    </iframe>
                </div>

                <!-- Visit Us (Di bawah Maps) -->
                <div>
                    <h2 class="font-sora font-bold text-[24px] text-[#D21502] mb-2">Visit Us</h2>
                    <p class="font-hanken font-normal text-[15px] text-gray-600 leading-relaxed mb-4">
                        GSG, Jl. Telekomunikasi No.1 Lt. 2, Sukapura, Dayeuhkolot, Bandung Regency, West Java 40257, Indonesia
                    </p>
                    <a href="https://www.google.com/maps?q=GSG+Telkom+University,+Jl.+Telekomunikasi+No.1,+Bandung" 
                       target="_blank" rel="noopener" 
                       class="inline-flex items-center gap-2 bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-[13px] px-5 py-2.5 rounded-lg transition shadow-sm">
                        Lihat Peta &rarr;
                    </a>
                </div>
            </div>

            <!-- Kolom Kanan: Business Hours di atas Form Box (W:580px H:400px, Border Tipis 1px) -->
            <div class="flex flex-col space-y-6 w-[580px] max-w-full">
                
                <!-- Business Hours (Di atas Form) -->
                <div>
                    <h2 class="font-sora font-bold text-[22px] text-[#D21502] mb-1">Business Hours</h2>
                    <p class="font-hanken font-normal text-[15px] text-gray-600 leading-snug">
                        Monday - Friday<br>
                        10:00 AM - 17:00 PM
                    </p>
                </div>

                <!-- Form Box Card (W:580px H:400px dengan Border Tipis 1px) -->
                <div class="w-[580px] h-[400px] max-w-full bg-white rounded-2xl border border-gray-300 p-6 shadow-sm flex flex-col justify-between shrink-0">
                    <div>
                        <h3 class="font-sora font-bold text-[22px] text-[#D21502] mb-1">
                            Send Us a Message
                        </h3>
                        <p class="font-hanken font-normal text-[13px] text-gray-500 mb-4">
                            Fill out the form below and we'll get back to you as soon as possible.
                        </p>

                        @if (session('status'))
                            <div class="p-2.5 mb-3 text-xs text-green-800 bg-green-50 border border-green-200 rounded-lg">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                    <form method="POST" action="{{ route('contact.store') }}" class="space-y-3 flex-1 flex flex-col justify-between">
                        @csrf
                        
                        <!-- Row 1: Name & Email Sampingan -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                            <div>
                                <input type="text" name="name" value="{{ old('name') }}" placeholder="Your Name" required 
                                    class="w-full px-3.5 py-2 text-xs font-hanken bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-[#D21502] transition" />
                                @error('name') <p class="text-[10px] text-red-500 mt-0.5">{{ $message }}</p> @enderror
                            </div>

                            <div>
                                <input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail Address" required 
                                    class="w-full px-3.5 py-2 text-xs font-hanken bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-[#D21502] transition" />
                                @error('email') <p class="text-[10px] text-red-500 mt-0.5">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <!-- Subject -->
                        <div>
                            <input type="text" name="subject" value="{{ old('subject') }}" placeholder="Subject" required 
                                class="w-full px-3.5 py-2 text-xs font-hanken bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-[#D21502] transition" />
                            @error('subject') <p class="text-[10px] text-red-500 mt-0.5">{{ $message }}</p> @enderror
                        </div>

                        <!-- Message textarea -->
                        <div>
                            <textarea name="message" placeholder="Your Message" rows="3" required 
                                class="w-full px-3.5 py-2 text-xs font-hanken bg-white border border-gray-300 rounded-lg focus:outline-none focus:border-[#D21502] transition resize-none">{{ old('message') }}</textarea>
                            @error('message') <p class="text-[10px] text-red-500 mt-0.5">{{ $message }}</p> @enderror
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" 
                                class="px-5 py-2.5 bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-xs rounded-lg transition shadow-sm">
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</section>

<!-- ========================================= -->
<!-- 3. CALL TO ACTION (CTA) SECTION -->
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
        <div class="w-full max-w-[1280px] mx-auto px-6 sm:px-12 lg:px-16 flex flex-col lg:flex-row items-center justify-between gap-8 py-16">
            
            <!-- Teks CTA -->
            <div class="w-full lg:w-1/2 flex flex-col items-start z-30">
                <h2 class="font-poppins font-semibold text-[36px] sm:text-[48px] leading-[1.1] tracking-tight mb-4 text-[#303B4F]">
                    Have an Idea <br>
                    <span class="text-[#D21502]">Worth Exploring?</span>
                </h2>

                <p class="font-hanken font-normal text-[16px] text-[#3F4A5A] leading-[1.65] max-w-[360px] mb-6">
                    Let's research, experiment, and build the next experience together.
                </p>

                <a href="{{ route('contact.index') }}"
                   class="px-6 h-[44px] inline-flex items-center justify-center gap-2 bg-[#D21502] hover:bg-[#b01101] text-white font-poppins font-semibold text-[14px] rounded-lg transition-all duration-200 shadow-sm shrink-0">
                    <span>Let's Collaborate</span>
                    <span class="text-[15px]">&rarr;</span>
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