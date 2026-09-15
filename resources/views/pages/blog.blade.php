@extends('layouts.app')

@section('title', 'MREC - Blog')

@section('content')

<!-- ========================================= -->
<!-- 1. HERO SECTION BLOG -->
<!-- ========================================= -->
<section class="bg-[#FBFBFC] relative overflow-hidden min-h-[420px] pt-28 pb-16 lg:pt-36 lg:pb-20 flex items-center">
    <div class="w-full max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
            
            <!-- Teks Kiri -->
            <div class="lg:col-span-7 flex flex-col items-start">
                <h1 class="font-sora font-bold text-[48px] sm:text-[56px] text-[#D21502] leading-tight mb-2">
                    BLOG
                </h1>
                <p class="font-hanken font-normal text-[16px] text-gray-500">
                    Read latest news, articles, and stories from MREC.
                </p>
            </div>

            <!-- Kartu Gambar Kanan Dengan Frame Merah -->
            <div class="lg:col-span-5 flex justify-center lg:justify-end">
                <div class="relative w-full max-w-[420px] aspect-[16/10]">
                    <!-- Bingkai/Aksen Merah -->
                    <div class="absolute -top-3 -left-3 -bottom-3 -right-3 border-2 border-[#D21502] rounded-2xl pointer-events-none"></div>
                    
                    <!-- Container Gambar -->
                    <div class="w-full h-full rounded-xl overflow-hidden shadow-md relative z-10 bg-gray-200">
                        <img src="{{ asset('storage/images/HeroAbout.png') }}" 
                             alt="Blog Hero" 
                             class="w-full h-full object-cover">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================= -->
<!-- 2. LATEST STORIES (GRID BLOG) -->
<!-- ========================================= -->
<section class="py-20 bg-white">
    <div class="w-full max-w-[1440px] mx-auto px-6 sm:px-12 lg:px-16">
        
        <!-- Judul Bagian -->
        <div class="mb-12 flex flex-col gap-5 sm:flex-row sm:items-center sm:justify-between">
            <h2 class="font-poppins font-bold text-[32px] sm:text-[36px] text-[#2D3748]">
                Latest Stories
            </h2>

            @auth
                <a href="{{ route('blogs.create') }}"
                   class="inline-flex shrink-0 items-center gap-1.5 self-start rounded-lg bg-[#D21502] px-3 py-1.5 text-[11px] font-semibold text-white shadow-sm shadow-[#D21502]/30 transition hover:bg-[#b71102] sm:self-auto">
                    <i class="fa-solid fa-plus text-[10px]"></i>
                    Tambah blog
                </a>
            @endauth
        </div>

        <!-- Grid Blog -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            @foreach($blogs as $blog)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-md transition duration-300 overflow-hidden flex flex-col">
                <!-- Thumbnail -->
                <div class="w-full aspect-[16/10] bg-gray-100 overflow-hidden">
                    <img src="{{ asset('storage/' . $blog->url) }}"
                         alt="{{ $blog->judul }}"
                         class="w-full h-full object-cover hover:scale-105 transition duration-500">
                </div>

                <!-- Konten Kartu -->
                <div class="p-6 flex flex-col flex-grow justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-3 text-[13px] font-poppins font-semibold">
                            <span class="text-[#D21502] uppercase tracking-wider">BLOG</span>
                            <span class="text-[#D21502]">{{ $blog->created_at->format('d M Y') }}</span>
                        </div>
                        <h3 class="font-poppins font-semibold text-[18px] text-gray-900 leading-snug transition-colors hover:text-[#D21502]">
                            {{ $blog->judul }}
                        </h3>
                        <p class="mt-3 line-clamp-3 font-hanken text-sm leading-relaxed text-gray-500">
                            {{ $blog->deskripsi }}
                        </p>
                    </div>

                    @auth
                        <div class="mt-6 flex items-center justify-end gap-2 border-t border-gray-100 pt-3">
                            <a href="{{ route('blogs.edit', $blog) }}" class="inline-flex items-center gap-1 rounded-md bg-amber-500 px-2.5 py-1 text-[11px] font-semibold text-white transition hover:bg-amber-600">
                                <i class="fa-solid fa-pen-to-square"></i>
                                Edit
                            </a>
                            <form action="{{ route('blogs.destroy', $blog) }}" method="POST" onsubmit="return confirm('Hapus blog ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center gap-1 rounded-md bg-red-600 px-2.5 py-1 text-[11px] font-semibold text-white transition hover:bg-red-700">
                                    <i class="fa-solid fa-trash"></i>
                                    Hapus
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>
            </div>
            @endforeach

            @if ($blogs->isEmpty())
                <div class="col-span-full rounded-2xl border border-dashed border-gray-200 px-6 py-16 text-center">
                    <p class="font-poppins text-lg font-semibold text-[#2D3748]">Belum ada blog.</p>
                    <p class="mt-2 font-hanken text-gray-500">Artikel yang ditambahkan akan tampil di halaman ini.</p>
                </div>
            @endif

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