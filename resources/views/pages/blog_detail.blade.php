@extends('layouts.app')

@section('title', $blog->judul . ' - MREC Blog')

@section('content')
<!-- ========================================= -->
<!-- BLOG DETAIL SECTION -->
<!-- ========================================= -->
<section class="relative min-h-screen bg-[#F8F9FA] pt-32 pb-24 overflow-hidden">
    <div class="w-full max-w-[1000px] mx-auto px-6 sm:px-10">

        <!-- Tombol Kembali -->
        <div class="mb-8">
            <a href="{{ route('blog') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 transition hover:text-[#D21502]">
                <i class="fa-solid fa-arrow-left text-xs"></i>
                Kembali ke Daftar Blog
            </a>
        </div>

        <!-- Card Konten Utama -->
        <article class="bg-white rounded-3xl border border-gray-200/80 shadow-xl overflow-hidden p-8 sm:p-12">
            
            <!-- Metadata & Kategori -->
            <div class="flex items-center justify-between text-xs sm:text-sm font-poppins font-semibold text-[#D21502] uppercase tracking-wider mb-4">
                <span>BLOG MREC</span>
                <span class="text-gray-500 font-normal">{{ $blog->created_at->format('d M Y') }}</span>
            </div>

            <!-- Judul Blog -->
            <h1 class="font-sora font-bold text-3xl sm:text-4xl lg:text-5xl text-gray-900 leading-tight mb-6">
                {{ $blog->judul }}
            </h1>

            <!-- Highlight / Ringkasan -->
            @if($blog->highlight)
                <p class="font-hanken text-lg sm:text-xl text-gray-600 font-medium leading-relaxed mb-8 p-4 bg-gray-50 rounded-2xl border-l-4 border-[#D21502]">
                    {{ $blog->highlight }}
                </p>
            @endif

            <!-- Gambar Utama / Thumbnail -->
            @if($blog->url)
                <div class="w-full h-[350px] sm:h-[480px] rounded-2xl overflow-hidden bg-gray-100 shadow-md mb-10">
                    <img src="{{ asset('storage/' . $blog->url) }}" alt="{{ $blog->judul }}" class="w-full h-full object-cover">
                </div>
            @endif

            <!-- Isi / Konten Lengkap Blog -->
            <div class="prose max-w-none font-hanken text-gray-700 text-base sm:text-lg leading-relaxed space-y-6">
                {!! nl2br(e($blog->isi)) !!}
            </div>

            <!-- Tombol Aksi Eksternal (Opsional jika ada link tujuan luar) -->
            @if($blog->link)
                <div class="mt-12 pt-8 border-t border-gray-100 flex justify-start">
                    <a href="{{ $blog->link }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 px-6 py-3 bg-[#D21502] hover:bg-[#b71102] text-white font-poppins font-semibold text-sm rounded-xl transition shadow-md">
                        <span>Kunjungi Tautan Terkait</span>
                        <i class="fa-solid fa-arrow-up-right-from-square text-xs"></i>
                    </a>
                </div>
            @endif

        </article>

    </div>
</section>
@endsection