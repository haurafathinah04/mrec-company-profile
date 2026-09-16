@extends('layouts.app')

@section('title', 'MREC - Blog')

@section('content')
<!-- ========================================= -->
<!-- 1. HERO SECTION BLOG -->
<!-- ========================================= -->
<section class="relative w-full overflow-hidden pt-20 bg-[#FBFBFC]" style="padding-bottom: 24px;">
    
    <!-- Wrapper Foto LatarBelakang.png (Presisi persis W:1280px H:274px) -->
    <div class="relative w-full max-w-[1280px] h-[274px] mx-auto overflow-hidden flex items-center">
        
        <!-- Gambar Latar Belakang -->
        <img src="{{ asset('storage/images/LatarBelakang.png') }}" 
             alt="Latar Belakang Hero" 
             class="absolute inset-0 w-full h-full object-cover object-bottom pointer-events-none z-0">

        <!-- Sisi Kiri: Teks & Judul -->
        <div class="relative z-20 left-[24px] lg:left-[68px] text-left">
            <p class="font-poppins text-xs font-bold uppercase tracking-[0.28em] text-[#D21502] mb-1">
                MREC blog
            </p>
            <h1 class="font-sora font-bold text-[40px] sm:text-[52px] lg:text-[64px] text-[#D21502] leading-none mb-2">
                BLOG
            </h1>
            <p class="font-hanken font-normal text-[15px] sm:text-[16px] text-gray-600 leading-relaxed max-w-[480px]">
                Read latest news, articles, and stories from MREC.
            </p>
        </div>

        <!-- Sisi Kanan: Foto HeroBlog.png (Seimbang di tengah atas dan bawah) -->
        <div class="hidden lg:block absolute z-30 pointer-events-none right-[80px] -translate-y-1/2" style="top: calc(50% + 0.5px);">
            <img src="{{ asset('storage/images/HeroBlog.png') }}" 
                 alt="Blog Hero" 
                 class="w-[396.92px] h-[240px] object-contain drop-shadow-xl block">
        </div>
        
    </div>
</section>

<!-- ========================================= -->
<!-- 2. LATEST STORIES (GRID BLOG) -->
<!-- ========================================= -->
<section class="bg-[#F7F9FB]" style="padding-top: 16px; padding-bottom: 64px;">
    <div class="w-full max-w-[1280px] mx-auto px-[48.34px]">
        
        <!-- Notifikasi Sukses -->
        @if (session('success'))
            <div class="mb-6 rounded-xl border border-green-200 bg-green-50 px-4 py-3 text-sm text-green-700 shadow-sm">
                {{ session('success') }}
            </div>
        @endif

        <!-- Judul "Latest Stories" di Tengah & Tombol Tambah Blog (Admin) -->
        <div class="mb-[44px] flex flex-col sm:flex-row items-center justify-center relative">
            <h2 class="font-poppins font-semibold text-[32px] text-[#2D3748] tracking-tight text-center">
                Latest Stories
            </h2>

            @auth
                <div class="mt-4 sm:mt-0 sm:absolute sm:right-0">
                    <a href="{{ route('blogs.create') }}"
                       class="inline-flex shrink-0 items-center gap-1.5 rounded-lg bg-[#D21502] px-3 py-1.5 text-[11px] font-semibold text-white shadow-sm shadow-[#D21502]/30 transition hover:bg-[#b71102]">
                        <i class="fa-solid fa-plus text-[10px]"></i>
                        Tambah blog
                    </a>
                </div>
            @endauth
        </div>

        <!-- Grid Blog -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center" style="grid-template-columns: repeat(3, 374px); column-gap: 30.67px; row-gap: 30px; justify-content: center;">

            @forelse($blogs as $blog)
            
            @auth
                <!-- ================= TAMPILAN CARD ADMIN (TANPA OVERLAY) ================= -->
                <article class="w-[374px] h-[354px] bg-white rounded-3xl border-2 border-gray-300 overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.12),0_4px_12px_rgba(0,0,0,0.08)] flex flex-col relative">
                    
                    <!-- Thumbnail dengan jarak bawah 17px -->
                    <div class="w-full h-[225px] bg-gray-100 overflow-hidden shrink-0 mb-[17px]">
                        <img src="{{ asset('storage/' . $blog->url) }}" alt="{{ $blog->judul }}" class="w-full h-full object-cover">
                    </div>

                    <!-- Kotak Teks Bawah Beserta Tombol Edit & Hapus -->
                    <div class="w-[372px] bg-white px-4 flex flex-col justify-between shrink-0 mx-auto pb-3">
                        <div>
                            <div class="flex items-center justify-between text-[12px] font-poppins font-semibold text-[#D21502] uppercase tracking-wider mb-1">
                                <span>BLOG</span>
                                <span>{{ $blog->created_at->format('d M Y') }}</span>
                            </div>
                            <h2 class="font-poppins font-semibold text-[18px] text-gray-900 leading-snug line-clamp-1">
                                {{ $blog->judul }}
                            </h2>
                        </div>

                        <div class="flex items-center justify-end gap-2 pt-2 border-t border-gray-100 mt-2">
                            <!-- Tombol Edit -->
                            <a href="{{ route('blogs.edit', $blog) }}" class="inline-flex items-center gap-1 bg-amber-500 hover:bg-amber-600 text-white text-[11px] font-semibold px-2.5 py-1 rounded-md transition">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>

                            <!-- Tombol Delete -->
                            <form action="{{ route('blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus blog ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center gap-1 bg-red-600 hover:bg-red-700 text-white text-[11px] font-semibold px-2.5 py-1 rounded-md transition">
                                    <i class="fa-solid fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </div>
                </article>

            @else
                <!-- ================= TAMPILAN CARD USER/GUEST (DENGAN HOVER OVERLAY) ================= -->
                <article class="w-[374px] h-[354px] bg-white rounded-3xl border-2 border-gray-300 overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.12),0_4px_12px_rgba(0,0,0,0.08)] hover:shadow-[0_25px_60px_rgba(0,0,0,0.18),0_6px_16px_rgba(0,0,0,0.1)] hover:-translate-y-1 transition-all duration-300 flex flex-col relative group">
                    
                    <!-- 1. FOTO UTAMA -->
                    <div class="absolute inset-0 w-full h-full bg-gray-100 overflow-hidden z-10">
                        <img src="{{ asset('storage/' . $blog->url) }}" alt="{{ $blog->judul }}" class="w-full h-full object-cover transition-transform duration-500 ease-out group-hover:scale-110">
                    </div>

                    <!-- 2. KOTAK TEKS PUTIH BAWAH (Bergeser ke bawah saat di-hover) -->
                    <div class="w-[372px] h-[112px] bg-white px-4 pt-3 flex flex-col justify-between shrink-0 mx-auto pb-3 mt-[242px] relative z-20 transition-transform duration-500 ease-out group-hover:translate-y-[112px]">
                        <div>
                            <div class="flex items-center justify-between text-[12px] font-poppins font-semibold text-[#D21502] uppercase tracking-wider mb-1">
                                <span>BLOG</span>
                                <span>{{ $blog->created_at->format('d M Y') }}</span>
                            </div>
                            <h2 class="font-poppins font-semibold text-[18px] text-gray-900 leading-snug line-clamp-1">
                                {{ $blog->judul }}
                            </h2>
                        </div>
                    </div>

                    <!-- 3. SLIDE TRANSPARAN OVERLAY -->
                    <div class="absolute inset-0 bg-[#384354]/75 translate-y-full group-hover:translate-y-0 transition-transform duration-300 ease-in-out p-6 flex flex-col justify-between z-30">
                        
                        <div class="transform -translate-y-4 group-hover:translate-y-0 transition-transform duration-300 ease-in-out">
                            <span class="font-poppins font-semibold text-[12px] text-[#D21502] tracking-wider uppercase block mb-1">
                                BLOG • {{ $blog->created_at->format('d M Y') }}
                            </span>
                            <h3 class="font-poppins font-bold text-[20px] text-white leading-snug mb-3 line-clamp-2">
                                {{ $blog->judul }}
                            </h3>
                            <p class="font-hanken text-gray-200 text-[14px] leading-relaxed line-clamp-3">
                                {{ $blog->deskripsi }}
                            </p>
                        </div>

                        <!-- Tombol Read More -->
                        <div class="flex justify-center">
                            <a href="{{ route('blogs.show', $blog->id) }}" target="_blank" class="w-[324px] h-[46px] rounded-full border-2 border-white text-white font-poppins font-semibold text-[14px] inline-flex items-center justify-center gap-2 transition-all duration-200 hover:bg-white hover:text-[#384354]">
                                Read more <i class="fa-solid fa-arrow-right text-[12px]"></i>
                            </a>
                        </div>
                    </div>
                </article>
            @endauth

            @empty
                <div class="col-span-full rounded-2xl border border-dashed border-gray-300 bg-white px-6 py-16 text-center shadow-sm">
                    <i class="fa-solid fa-newspaper text-2xl text-gray-300"></i>
                    <h2 class="mt-4 text-lg font-bold text-[#2D3748]">Belum ada blog</h2>
                    <p class="mt-2 text-sm text-gray-500">Artikel dan berita yang ditambahkan akan muncul di sini.</p>
                </div>
            @endforelse

        </div>

        <!-- Pagination -->
        @if ($blogs->hasPages())
            <nav class="mt-12 flex items-center justify-center gap-2" aria-label="Blogs pagination">
                @if ($blogs->onFirstPage())
                    <span class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-400">Previous</span>
                @else
                    <a href="{{ $blogs->previousPageUrl() }}" class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600 transition hover:bg-gray-200">Previous</a>
                @endif

                @for ($page = 1; $page <= $blogs->lastPage(); $page++)
                    @if ($page === $blogs->currentPage())
                        <span class="h-8 min-w-8 rounded-md bg-[#2D3748] px-2 py-2 text-center text-xs font-bold text-white" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $blogs->url($page) }}" class="h-8 min-w-8 rounded-md bg-gray-100 px-2 py-2 text-center text-xs font-bold text-gray-600 transition hover:bg-gray-200">{{ $page }}</a>
                    @endif
                @endfor

                @if ($blogs->hasMorePages())
                    <a href="{{ $blogs->nextPageUrl() }}" class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600 transition hover:bg-gray-200">Next</a>
                @else
                    <span class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-400">Next</span>
                @endif
            </nav>
        @endif

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