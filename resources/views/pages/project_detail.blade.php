@extends('layouts.app')

@section('title', $project->project_name . ' - MREC')

@section('content')
<section class="w-full bg-[#FBFBFC] pt-32 pb-20">
    <div class="w-full max-w-[1000px] mx-auto px-6">
        
        <!-- Tombol Kembali -->
        <a href="{{ route('projects.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-gray-600 hover:text-[#D21502] transition mb-6">
            <i class="fa-solid fa-arrow-left"></i> Back to Projects
        </a>

        <!-- Kategori & Nama Project -->
        <span class="font-poppins font-semibold text-[14px] text-[#D21502] tracking-wider uppercase block mb-2">
            {{ $project->category_project }}
        </span>
        <h1 class="font-sora font-bold text-[36px] sm:text-[44px] text-gray-900 leading-tight mb-8">
            {{ $project->project_name }}
        </h1>

        <!-- Gambar Utama Project (Diperkecil ukurannya) -->
        <div class="w-full max-w-[720px] h-[380px] bg-gray-200 rounded-3xl overflow-hidden shadow-md mb-10 mx-auto">
            <img src="{{ asset('storage/' . $project->url_image_project) }}" alt="{{ $project->project_name }}" class="w-full h-full object-cover">
        </div>

        <!-- Grid Layout Bawah: Deskripsi (Kiri) & Info Tahun/Team (Kanan) -->
        <div class="grid grid-cols-1 lg:grid-cols-[1fr_320px] gap-8 items-start">
            
            <!-- Sisi Kiri: Project Overview & Deskripsi -->
            <div class="bg-white rounded-3xl border border-gray-200 p-8 shadow-sm">
                <h3 class="font-poppins font-semibold text-[20px] sm:text-[22px] text-gray-900 mb-4">
                    Project Overview
                </h3>
                <p class="font-hanken font-normal text-[16px] text-gray-600 leading-relaxed whitespace-pre-line">
                    {{ $project->description ?? 'Tidak ada deskripsi detail untuk project ini.' }}
                </p>
            </div>

            <!-- Sisi Kanan: Tahun & Anggota Pembuat -->
            <div class="bg-white rounded-3xl border border-gray-200 p-6 shadow-sm space-y-6">
                <div>
                    <p class="font-poppins text-xs font-semibold uppercase tracking-[0.2em] text-gray-400 mb-1">Release Year</p>
                    <p class="font-poppins font-semibold text-[18px] text-gray-800">
                        {{ $project->year ?? 'N/A' }}
                    </p>
                </div>

                <div class="border-t border-gray-100 pt-4">
                    <p class="font-poppins text-xs font-semibold uppercase tracking-[0.2em] text-gray-400 mb-1">Team Members</p>
                    <p class="font-hanken font-normal text-[16px] text-gray-700 leading-relaxed">
                        {{ $project->team_members ?? 'Tidak ada informasi anggota.' }}
                    </p>
                </div>
            </div>

        </div>

    </div>
</section>
@endsection