@extends('layouts.app')

@section('title', 'MREC - Projects')

@section('content')
<!-- Hero Section -->
<section class="relative w-full overflow-hidden pt-20 bg-[#FBFBFC]" style="padding-bottom: 24px;">
    
    <!-- Wrapper Foto LatarBelakang.png (Presisi persis W:1280px H:274px) -->
    <div class="relative w-full max-w-[1280px] h-[274px] mx-auto overflow-hidden">
        
        <!-- Gambar Latar Belakang -->
        <img src="{{ asset('storage/images/LatarBelakang.png') }}" 
             alt="Latar Belakang Hero" 
             class="absolute inset-0 w-full h-full object-cover object-bottom pointer-events-none z-0">

        <!-- Sisi Kiri: Teks & Judul -->
        <div class="absolute z-20 left-[24px] lg:left-[68px] top-[40px] lg:top-[80px] text-left">
            <p class="font-poppins text-xs font-bold uppercase tracking-[0.28em] text-[#D21502] mb-1">
                MREC portfolio
            </p>
            <h1 class="font-sora font-bold text-[40px] sm:text-[52px] lg:text-[64px] text-[#D21502] leading-none mb-2">
                Our Projects
            </h1>
            <p class="font-hanken font-normal text-[15px] sm:text-[16px] text-gray-600 leading-relaxed max-w-[480px]">
                Take a closer look at the ideas and solutions we've brought to life through our projects.
            </p>
        </div>

        <!-- Sisi Kanan: Foto ProjectHero.png -->
        <div class="hidden lg:block absolute z-30 pointer-events-none right-[55px] bottom-0">
            <img src="{{ asset('storage/images/ProjectHero.png') }}" 
                 alt="Project Hero (HP & Laptop)" 
                 class="w-[495px] h-[204.63px] object-contain object-bottom drop-shadow-xl block">
        </div>
        
    </div>

    <!-- Category Filters & Add Project Button -->
    <div class="w-full max-w-[1280px] mx-auto px-6 lg:px-[68px] mt-[44px] relative flex flex-col md:flex-row items-center justify-center">
        
        <!-- Kategori di Tengah -->
        <div class="w-[470px] h-[32px] inline-flex items-center justify-between bg-[#384354] px-1.5 rounded-full">
            <a href="{{ route('projects.index') }}"
                class="h-[24px] px-3.5 rounded-full flex items-center justify-center font-poppins font-semibold text-[14px] tracking-wide whitespace-nowrap transition-all duration-200 {{ $selectedCategory === null ? 'bg-white text-[#384354] shadow-sm' : 'text-white hover:bg-white hover:text-[#384354]' }}">
                ALL
            </a>
            @foreach ($categories as $category)
                <a href="{{ route('projects.index', ['category' => $category]) }}"
                    class="h-[24px] px-3.5 rounded-full flex items-center justify-center font-poppins font-semibold text-[14px] uppercase tracking-wide whitespace-nowrap transition-all duration-200 {{ $selectedCategory === $category ? 'bg-white text-[#384354] shadow-sm' : 'text-white hover:bg-white hover:text-[#384354]' }}">
                    {{ $category }}
                </a>
            @endforeach
        </div>

        <!-- Add Project (Tampil untuk Admin) -->
        @auth
            <div class="mt-4 md:mt-0 md:absolute md:right-[68px]">
                <a href="{{ route('projects.create') }}" class="inline-flex shrink-0 items-center gap-1.5 rounded-lg bg-[#D21502] px-3 py-1.5 text-[11px] font-semibold text-white shadow-sm shadow-[#D21502]/30 transition hover:bg-[#b71102]">
                    <i class="fa-solid fa-plus text-[10px]"></i>
                    Add project
                </a>
            </div>
        @endauth
    </div>
</section>

<!-- Projects Grid (Jarak atas 24px ke nav kategori, column-gap persis 30.67px, row-gap 30px) -->
<section class="bg-[#F7F9FB]" style="padding-top: 24px; padding-bottom: 64px;">
    <div class="w-full max-w-[1214px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 justify-items-center" style="grid-template-columns: repeat(3, 374px); column-gap: 30.67px; row-gap: 30px; justify-content: center;">

            @forelse ($projects as $project)
            <!-- Card Frame Utama: W: 374px, H: 354px -->
            <article class="w-[374px] h-[354px] bg-white rounded-3xl border-2 border-gray-300 overflow-hidden shadow-[0_20px_50px_rgba(0,0,0,0.12),0_4px_12px_rgba(0,0,0,0.08)] hover:shadow-[0_25px_60px_rgba(0,0,0,0.18),0_6px_16px_rgba(0,0,0,0.1)] hover:-translate-y-1 transition-all duration-300 flex flex-col relative">
                
                <!-- Foto Container: W: 374px (full), H: 242px -->
                <div class="w-full h-[242px] bg-gray-200 relative overflow-hidden shrink-0">
                    <img src="{{ asset('storage/' . $project->url_image_project) }}" alt="{{ $project->project_name }}" class="w-full h-full object-cover">
                </div>

                <!-- Kotak Putih Teks: W: 372px, H: 110px dengan jarak kategori ke nama project 12px -->
                <div class="w-[372px] h-[110px] bg-white px-4 pt-3 flex flex-col justify-between shrink-0 mx-auto pb-3">
                    <div>
                        <span class="font-poppins font-semibold text-[14px] text-[#D21502] tracking-wider uppercase mb-[12px] block">
                            {{ $project->category_project }}
                        </span>
                        <h2 class="font-poppins font-semibold text-[20px] text-gray-900 leading-snug line-clamp-1">
                            {{ $project->project_name }}
                        </h2>
                    </div>

                    <!-- Tombol Edit & Delete khusus Admin (Berada di dalam kotak putih H:110px) -->
                    @auth
                        <div class="flex items-center justify-end gap-2 pt-2 border-t border-gray-100">
                            <!-- Tombol Edit -->
                            <a href="{{ route('projects.edit', $project->id) }}" class="inline-flex items-center gap-1 bg-amber-500 hover:bg-amber-600 text-white text-[11px] font-semibold px-2.5 py-1 rounded-md transition">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>

                            <!-- Tombol Delete -->
                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus project ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="inline-flex items-center gap-1 bg-red-600 hover:bg-red-700 text-white text-[11px] font-semibold px-2.5 py-1 rounded-md transition">
                                    <i class="fa-solid fa-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    @endauth
                </div>
            </article>
            @empty
                <div class="col-span-full rounded-2xl border border-dashed border-gray-300 bg-white px-6 py-16 text-center shadow-sm">
                    <i class="fa-solid fa-cube text-2xl text-gray-300"></i>
                    <h2 class="mt-4 text-lg font-bold text-[#2D3748]">No projects yet</h2>
                    <p class="mt-2 text-sm text-gray-500">Project yang ditambahkan akan muncul di sini.</p>
                </div>
            @endforelse

        </div>

        @if ($projects->hasPages())
            <nav class="mt-12 flex items-center justify-center gap-2" aria-label="Projects pagination">
                @if ($projects->onFirstPage())
                    <span class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-400">Previous</span>
                @else
                    <a href="{{ $projects->previousPageUrl() }}" class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600 transition hover:bg-gray-200">Previous</a>
                @endif

                @for ($page = 1; $page <= $projects->lastPage(); $page++)
                    @if ($page === $projects->currentPage())
                        <span class="h-8 min-w-8 rounded-md bg-[#2D3748] px-2 py-2 text-center text-xs font-bold text-white" aria-current="page">{{ $page }}</span>
                    @else
                        <a href="{{ $projects->url($page) }}" class="h-8 min-w-8 rounded-md bg-gray-100 px-2 py-2 text-center text-xs font-bold text-gray-600 transition hover:bg-gray-200">{{ $page }}</a>
                    @endif
                @endfor

                @if ($projects->hasMorePages())
                    <a href="{{ $projects->nextPageUrl() }}" class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-600 transition hover:bg-gray-200">Next</a>
                @else
                    <span class="rounded-md bg-gray-100 px-3 py-2 text-xs font-semibold text-gray-400">Next</span>
                @endif
            </nav>
        @endif

    </div>
</section>
@endsection