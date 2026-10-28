@extends('layouts.app')

@section('title', 'MREC - Blog')

@section('content')
<!-- ========================================= -->
<!-- 1. HERO SECTION BLOG -->
<!-- ========================================= -->
<section class="mrec-blog-hero">
    <div class="mrec-blog-banner">
        <img src="{{ asset('images/blog/blog-background.jpg') }}" alt="" aria-hidden="true" class="mrec-blog-background">
        <div class="mrec-blog-copy">
            <p class="mrec-blog-eyebrow">MREC BLOG</p>
            <h1>BLOG</h1>
            <p class="mrec-blog-description">Read latest news, articles, and stories from MREC.</p>
        </div>
        <div class="mrec-blog-photo" role="group" aria-label="MREC blog and activities">
            <div class="mrec-blog-frame mrec-blog-frame--laptop">
                <img src="{{ asset('images/blog/blog-laptop.png') }}" alt="Laptop displaying a blog with someone typing" width="478" height="266" decoding="async">
            </div>
            <div class="mrec-blog-frame mrec-blog-frame--bicycle">
                <img src="{{ asset('images/blog/blog-bicycle-replacement.png') }}" alt="Tampilan pilihan agama dalam lingkungan virtual MREC" width="314" height="329" decoding="async">
            </div>
            <div class="mrec-blog-frame mrec-blog-frame--group">
                <img src="{{ asset('images/blog/blog-group.png') }}" alt="Telkom University team at an MREC event" width="446" height="252" fetchpriority="high" decoding="async">
            </div>
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
{{-- CTA and wave are rendered once by components.footer in layouts.app. --}}
@endsection